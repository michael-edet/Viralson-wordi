/**
 * Viral Son WordPress Theme Global Scripts
 *
 * Handles Dark Mode, Search Modal, AJAX Search, and Mobile Navigation.
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
                localStorage.setItem('viralson_theme', newTheme);
                updateThemeIcon(newTheme);
            });
        }

        // --- 2. Mobile Menu Toggle ---
        const mobileBtn = document.getElementById('mobileMenuBtn');
        const navWrapper = document.getElementById('navWrapper');
        const menuIcon = document.getElementById('menuIcon');

        if (mobileBtn && navWrapper) {
            mobileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                navWrapper.classList.toggle('active');
                if (navWrapper.classList.contains('active')) {
                    if (menuIcon) menuIcon.className = 'fas fa-times';
                } else {
                    if (menuIcon) menuIcon.className = 'fas fa-bars';
                }
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('#siteHeader')) {
                    navWrapper.classList.remove('active');
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

        function openSearch() {
            if (!searchModal) return;
            searchModal.style.display = 'flex';
            searchModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            if (searchInput) {
                setTimeout(() => searchInput.focus(), 80);
            }
        }

        function closeSearch() {
            if (!searchModal) return;
            searchModal.style.display = 'none';
            searchModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        if (searchOpenBtn) searchOpenBtn.addEventListener('click', openSearch);
        if (searchCloseBtn) searchCloseBtn.addEventListener('click', closeSearch);

        // Press / to open search, Esc to close
        document.addEventListener('keydown', function(e) {
            if (e.key === '/' && !['INPUT', 'TEXTAREA'].includes(document.activeElement.tagName)) {
                e.preventDefault();
                openSearch();
            } else if (e.key === 'Escape' && searchModal && searchModal.style.display === 'flex') {
                closeSearch();
            }
        });

        // Click outside modal card to close
        if (searchModal) {
            searchModal.addEventListener('click', function(e) {
                if (e.target === searchModal) {
                    closeSearch();
                }
            });
        }

        // Quick Tag Buttons
        const quickTags = document.querySelectorAll('.quick-tag-btn');
        quickTags.forEach(btn => {
            btn.addEventListener('click', function() {
                const query = this.getAttribute('data-query');
                if (searchInput) {
                    searchInput.value = query;
                    triggerLiveSearch(query);
                }
            });
        });

        // Debounced Search Input
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
                }, 280);
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
                resultsSummary.textContent = 'Searching archives for "' + query + '"...';
            }

            // If in WordPress environment with localized viralsonData
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
                    if (data.success && data.data) {
                        renderResults(data.data, query);
                    }
                })
                .catch(() => {
                    if (resultsSummary) resultsSummary.textContent = 'Search completed.';
                });
            }
        }

        function renderResults(items, query) {
            if (!resultsList || !resultsSummary) return;
            resultsList.innerHTML = '';

            if (items.length === 0) {
                resultsSummary.textContent = 'No records found for "' + query + '"';
                return;
            }

            resultsSummary.textContent = 'Found ' + items.length + ' matching dispatches:';
            items.forEach(item => {
                const li = document.createElement('li');
                li.className = 'search-result-item';
                li.innerHTML = `
                    <a href="${item.url}" style="display: block; padding: 12px; border-bottom: 1px solid var(--border-color); text-decoration: none;">
                        <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--primary-blue); font-weight: 700;">${item.category} · ${item.date}</span>
                        <h4 style="font-size: 1rem; font-weight: 700; color: var(--text-dark); margin: 4px 0;">${item.title}</h4>
                        <p style="font-size: 0.85rem; color: var(--text-light); margin: 0;">${item.excerpt}</p>
                    </a>
                `;
                resultsList.appendChild(li);
            });
        }
    });
})();
