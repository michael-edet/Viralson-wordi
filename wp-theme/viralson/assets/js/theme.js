/**
 * Viral Son WordPress Theme Global Scripts
 *
 * Handles Dark Mode, Search Modal, AJAX Search (+ JSON fallback), and Mobile Navigation.
 */
(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        // --- 1. Dark Mode Functionality ---
        const themeBtn = document.getElementById('themeToggleBtn');
        const themeIcon = document.getElementById('themeIcon');

        function updateThemeIcon(theme) {
            if (!themeIcon) return;
            if (theme === 'dark') {
                themeIcon.className = 'fas fa-sun';
                if (themeBtn) themeBtn.setAttribute('title', 'Switch to light mode');
            } else {
                themeIcon.className = 'fas fa-moon';
                if (themeBtn) themeBtn.setAttribute('title', 'Switch to dark mode');
            }
        }

        const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
        updateThemeIcon(currentTheme);

        if (themeBtn) {
            themeBtn.addEventListener('click', function() {
                const isDark = document.documentElement.getAttribute('data-theme') === 'dark';
                const newTheme = isDark ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', newTheme);
                try { localStorage.setItem('viralson_theme', newTheme); } catch (e) {}
                updateThemeIcon(newTheme);
            });
        }

        // --- 2. Mobile Menu Toggle ---
        const mobileBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');
        const menuIcon = document.getElementById('menuIcon');

        if (mobileBtn && navMenu) {
            mobileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                navMenu.classList.toggle('active');
                if (menuIcon) {
                    menuIcon.className = navMenu.classList.contains('active') ? 'fas fa-times' : 'fas fa-bars';
                }
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('header')) {
                    navMenu.classList.remove('active');
                    if (menuIcon) menuIcon.className = 'fas fa-bars';
                }
            });
        }

        // --- 3. Search Modal & Live AJAX Search ---
        const searchModal = document.getElementById('searchModal');
        const searchOpenBtn = document.getElementById('searchOpenBtn');
        const searchCloseBtn = document.getElementById('searchCloseBtn');
        const searchInput = document.getElementById('searchInput');
        const searchClearBtn = document.getElementById('searchClearBtn');
        const resultsList = document.getElementById('searchResultsList');
        const resultsSummary = document.getElementById('searchResultsSummary');
        const emptyState = document.getElementById('searchEmptyState');

        let fallbackIndex = null;

        function openSearch() {
            if (!searchModal) return;
            searchModal.classList.add('open');
            searchModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 60);
            }
        }

        function closeSearch() {
            if (!searchModal) return;
            searchModal.classList.remove('open');
            searchModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        if (searchOpenBtn) searchOpenBtn.addEventListener('click', openSearch);
        if (searchCloseBtn) searchCloseBtn.addEventListener('click', closeSearch);

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchModal && searchModal.classList.contains('open')) {
                closeSearch();
            } else if ((e.key === '/' || ((e.ctrlKey || e.metaKey) && e.key === 'k')) && !['INPUT', 'TEXTAREA'].includes(document.activeElement.tagName)) {
                e.preventDefault();
                openSearch();
            }
        });

        if (searchModal) {
            searchModal.addEventListener('click', function(e) {
                if (e.target === searchModal) {
                    closeSearch();
                }
            });
        }

        window.quickSearch = function(term) {
            if (searchInput) {
                searchInput.value = term;
                if (searchClearBtn) searchClearBtn.style.display = 'block';
                triggerLiveSearch(term);
            }
        };

        let debounceTimer;
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const query = this.value.trim();
                if (searchClearBtn) {
                    searchClearBtn.style.display = query.length > 0 ? 'block' : 'none';
                }
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(() => {
                    triggerLiveSearch(query);
                }, 220);
            });
        }

        if (searchClearBtn && searchInput) {
            searchClearBtn.addEventListener('click', function() {
                searchInput.value = '';
                searchClearBtn.style.display = 'none';
                triggerLiveSearch('');
                searchInput.focus();
            });
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text || '';
            return div.innerHTML;
        }

        function triggerLiveSearch(query) {
            if (!query || query.length < 2) {
                if (resultsList) resultsList.innerHTML = '';
                if (resultsSummary) resultsSummary.style.display = 'none';
                if (emptyState) emptyState.style.display = 'block';
                return;
            }

            if (emptyState) emptyState.style.display = 'none';
            if (resultsSummary) {
                resultsSummary.style.display = 'block';
                resultsSummary.innerHTML = 'Searching for "<strong>' + escapeHtml(query) + '</strong>"...';
            }

            if (typeof viralsonData !== 'undefined' && viralsonData.ajaxUrl) {
                const formData = new FormData();
                formData.append('action', 'viralson_search');
                formData.append('nonce', viralsonData.searchNonce);
                formData.append('term', query);

                fetch(viralsonData.ajaxUrl, {
                    method: 'POST',
                    body: formData,
                })
                .then(res => res.json())
                .then(data => {
                    if (data.success && Array.isArray(data.data) && data.data.length > 0) {
                        renderResults(data.data, query);
                    } else {
                        searchStaticFallback(query);
                    }
                })
                .catch(() => searchStaticFallback(query));
            } else {
                searchStaticFallback(query);
            }
        }

        async function searchStaticFallback(query) {
            try {
                if (!fallbackIndex && typeof viralsonData !== 'undefined' && viralsonData.themeUrl) {
                    const res = await fetch(viralsonData.themeUrl + '/search-index.json');
                    if (res.ok) fallbackIndex = await res.json();
                }
                const list = Array.isArray(fallbackIndex) ? fallbackIndex : [];
                const qLower = query.toLowerCase();
                const matches = list.filter(item =>
                    (item.title || '').toLowerCase().includes(qLower) ||
                    (item.excerpt || '').toLowerCase().includes(qLower) ||
                    (item.category || '').toLowerCase().includes(qLower)
                ).map(item => ({
                    ...item,
                    url: (typeof viralsonData !== 'undefined' && viralsonData.siteUrl)
                        ? viralsonData.siteUrl.replace(/\/$/, '') + item.url
                        : item.url
                }));
                renderResults(matches, query);
            } catch (e) {
                renderResults([], query);
            }
        }

        function renderResults(items, query) {
            if (!resultsList || !resultsSummary) return;
            resultsList.innerHTML = '';

            if (!items || items.length === 0) {
                resultsSummary.innerHTML = 'Found <strong>0</strong> results for "<strong>' + escapeHtml(query) + '</strong>"';
                resultsList.innerHTML = '<li class="search-no-results"><i class="far fa-frown" style="font-size: 1.8rem; margin-bottom: 0.5rem; color: var(--text-light);"></i><p>No matches found. Try searching for "climate", "foldable", "music", or "AI".</p></li>';
                return;
            }

            resultsSummary.innerHTML = 'Found <strong>' + items.length + '</strong> result' + (items.length === 1 ? '' : 's') + ' for "<strong>' + escapeHtml(query) + '</strong>"';
            items.forEach(item => {
                const li = document.createElement('li');
                li.className = 'search-result-item';
                li.innerHTML = `
                    <a href="${escapeHtml(item.url)}" class="search-result-link">
                        <div class="search-result-meta">
                            <span class="search-category-pill">${escapeHtml(item.category)}</span>
                            <span class="search-result-date">${escapeHtml(item.date || '')}</span>
                        </div>
                        <h4 class="search-result-title">${escapeHtml(item.title)}</h4>
                        <p class="search-result-excerpt">${escapeHtml(item.excerpt || '')}</p>
                    </a>
                `;
                resultsList.appendChild(li);
            });
        }
    });
})();
