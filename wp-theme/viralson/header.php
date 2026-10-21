<!DOCTYPE html><html lang="en">
<!-- Mirrored from https://viralson.netlify.app/ by HTTrack Website Copier/3.x [XR&CO], Mon, 19 Oct 2026 07:08:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
<!-- This site is hosted on Netlify. Anyone can build and deploy a site
     like this one for free: https://netlify.new/?utm_campaign=loops&utm_source=ai-legible&utm_medium=owned&utm_content=comment&utm_id=08327584-10e6-45a5-8545-f9db7f804f25
     Netlify hosting facts for this site: static/SSR served via Netlify Edge. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viral Son | Modern Blogging Platform</title>
    <meta name="description" content="Viral Son is a modern blogging platform for trending news, entertainment, technology, lifestyle, and community discussions.">
    
    <!-- OpenGraph Metadata -->
    <meta property="og:title" content="Viral Son | Modern Blogging Platform">
    <meta property="og:description" content="Viral Son is a modern blogging platform for trending news, entertainment, technology, lifestyle, and community discussions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://viralson.com/">
    

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Master Stylesheet -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Assets/CD/CSS/index.css">

    <!-- Google AdSense Official Script -->
    <script async="" src="../pagead2.googlesyndication.com/pagead/js/fb1a6.txt?client=ca-pub-9481237418920194" crossorigin="anonymous"></script>

    <!-- Theme Initialization to prevent FOUC -->
    <script>
        (function() {
            try {
                const savedTheme = localStorage.getItem('viralson_theme');
                if (savedTheme) {
                    document.documentElement.setAttribute('data-theme', savedTheme);
                } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.setAttribute('data-theme', 'dark');
                }
            } catch (e) {}
        })();
    </script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- Global Reusable Page Loader -->
    <!-- Reusable Page Loader Component -->
<div class="page-loader" id="pageLoader">
    <div class="vs-logo">VS</div>
    <div class="loading-lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>

<script>
    // Smooth loader disappearance on page ready
    document.addEventListener('DOMContentLoaded', function() {
        const loader = document.getElementById('pageLoader');
        if (loader) {
            window.addEventListener('load', function() {
                setTimeout(function() {
                    loader.classList.add('hidden');
                }, 300);
            });
            setTimeout(function() {
                loader.classList.add('hidden');
            }, 2500);
        }
    });
</script>


    <!-- Dynamic Header -->
    <!-- Header Component with Search, Dark Mode & Navigation -->
<header>
    <div class="container header-container">
        <a href="<?php echo esc_url(home_url("/")); ?>" class="logo">
            <div class="logo-icon">VS</div>
            <div class="logo-text">Viral Son</div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-wrapper">
            <ul class="nav-menu" id="navMenu">
                <li><a href="<?php echo esc_url(home_url("/")); ?>" class="nav-link active">Home</a></li>
                <li><a href="news/index.html" class="nav-link ">News</a></li>
                <li><a href="entertainment/index.html" class="nav-link ">Entertainment</a></li>
                <li><a href="technology/index.html" class="nav-link ">Technology</a></li>
                <li><a href="sports/index.html" class="nav-link ">Sports</a></li>
                <li><a href="lifestyle/index.html" class="nav-link ">Lifestyle</a></li>
                <li><a href="community/index.html" class="nav-link ">Community</a></li>
                <li><a href="about/index.html" class="nav-link ">About</a></li>
                <li><a href="contact/index.html" class="nav-link ">Contact</a></li>
            </ul>
        </nav>

        <!-- Header Actions: Search, Dark Mode, Mobile Toggle -->
        <div class="header-actions">
            <!-- Search Button -->
            <button class="action-btn search-trigger" id="searchOpenBtn" aria-label="Open search dialog" title="Search site (Press /)">
                <i class="fas fa-search"></i>
                <span class="search-hint">Search...</span>
            </button>

            <!-- Dark Mode Toggle Button -->
            <button class="action-btn theme-toggle" id="themeToggleBtn" aria-label="Toggle dark mode" title="Toggle dark/light mode">
                <i class="fas fa-moon" id="themeIcon"></i>
            </button>

            <!-- Mobile Menu Toggle Button -->
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle mobile menu">
                <i class="fas fa-bars" id="menuIcon"></i>
            </button>
        </div>
    </div>
</header>

<!-- Site-Wide Search Modal Overlay -->
<div class="search-modal-backdrop" id="searchModal" role="dialog" aria-modal="true" aria-hidden="true">
    <div class="search-modal-card">
        <div class="search-input-wrapper">
            <i class="fas fa-search search-input-icon"></i>
            <input type="text" id="searchInput" class="search-input" placeholder="Search news, tech, music, guides, topics..." autocomplete="off">
            <button type="button" id="searchClearBtn" class="search-clear-btn" aria-label="Clear search input" style="display: none;">
                <i class="fas fa-times"></i>
            </button>
            <button type="button" id="searchCloseBtn" class="search-close-btn" aria-label="Close search">
                <span class="esc-badge">ESC</span>
            </button>
        </div>

        <div class="search-results-container">
            <div id="searchResultsSummary" class="search-summary" style="display: none;"></div>
            <ul id="searchResultsList" class="search-results-list"></ul>
            <div id="searchEmptyState" class="search-empty-state">
                <i class="fas fa-search" style="font-size: 2rem; color: var(--primary-blue); margin-bottom: 0.8rem; opacity: 0.6;"></i>
                <p>Type keywords to search across articles, audio downloads, and topic hubs.</p>
                <div class="search-quick-tags">
                    <span>Popular:</span>
                    <button type="button" class="quick-tag-btn" onclick="quickSearch('Climate')">Climate</button>
                    <button type="button" class="quick-tag-btn" onclick="quickSearch('AI')">AI</button>
                    <button type="button" class="quick-tag-btn" onclick="quickSearch('Phone')">Phone</button>
                    <button type="button" class="quick-tag-btn" onclick="quickSearch('Music')">Music</button>
                    <button type="button" class="quick-tag-btn" onclick="quickSearch('Productivity')">Productivity</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Header Navigation, Search, and Dark Mode Logic
    (function() {
        // --- 1. Dark Mode Functionality ---
        const themeBtn = document.getElementById('themeToggleBtn');
        const themeIcon = document.getElementById('themeIcon');
        
        function updateThemeIcon(theme) {
            if (theme === 'dark') {
                themeIcon.className = 'fas fa-sun';
                themeBtn.setAttribute('title', 'Switch to light mode');
            } else {
                themeIcon.className = 'fas fa-moon';
                themeBtn.setAttribute('title', 'Switch to dark mode');
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
        const navMenu = document.getElementById('navMenu');
        const menuIcon = document.getElementById('menuIcon');

        if (mobileBtn && navMenu) {
            mobileBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                navMenu.classList.toggle('active');
                if (navMenu.classList.contains('active')) {
                    menuIcon.className = 'fas fa-times';
                } else {
                    menuIcon.className = 'fas fa-bars';
                }
            });

            document.addEventListener('click', function(e) {
                if (!e.target.closest('header')) {
                    navMenu.classList.remove('active');
                    if (menuIcon) menuIcon.className = 'fas fa-bars';
                }
            });
        }

        // --- 3. Site-Wide Search Functionality ---
        const searchModal = document.getElementById('searchModal');
        const searchOpenBtn = document.getElementById('searchOpenBtn');
        const searchCloseBtn = document.getElementById('searchCloseBtn');
        const searchInput = document.getElementById('searchInput');
        const searchClearBtn = document.getElementById('searchClearBtn');
        const resultsList = document.getElementById('searchResultsList');
        const resultsSummary = document.getElementById('searchResultsSummary');
        const emptyState = document.getElementById('searchEmptyState');

        let searchData = [];
        let dataFetched = false;

        async function fetchSearchIndex() {
            if (dataFetched) return;
            try {
                const res = await fetch('search-index.json');
                if (res.ok) {
                    searchData = await res.json();
                    dataFetched = true;
                }
            } catch (err) {
                console.warn('Could not load search index:', err);
            }
        }

        function openSearch() {
            fetchSearchIndex();
            searchModal.classList.add('open');
            searchModal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            setTimeout(() => searchInput.focus(), 50);
        }

        function closeSearch() {
            searchModal.classList.remove('open');
            searchModal.setAttribute('aria-hidden', 'true');
            document.body.style.overflow = '';
        }

        if (searchOpenBtn) searchOpenBtn.addEventListener('click', openSearch);
        if (searchCloseBtn) searchCloseBtn.addEventListener('click', closeSearch);

        // Click outside modal card to close
        searchModal.addEventListener('click', function(e) {
            if (e.target === searchModal) {
                closeSearch();
            }
        });

        // Keyboard shortcuts: '/' or 'Cmd/Ctrl+K' to open, ESC to close
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && searchModal.classList.contains('open')) {
                closeSearch();
            } else if ((e.key === '/' || (e.ctrlKey && e.key === 'k') || (e.metaKey && e.key === 'k')) && !['INPUT', 'TEXTAREA'].includes(document.activeElement.tagName)) {
                e.preventDefault();
                openSearch();
            }
        });

        if (searchClearBtn) {
            searchClearBtn.addEventListener('click', function() {
                searchInput.value = '';
                searchClearBtn.style.display = 'none';
                executeSearch('');
                searchInput.focus();
            });
        }

        window.quickSearch = function(term) {
            searchInput.value = term;
            searchClearBtn.style.display = 'block';
            executeSearch(term);
        };

        if (searchInput) {
            searchInput.addEventListener('input', function(e) {
                const query = e.target.value.trim();
                searchClearBtn.style.display = query.length > 0 ? 'block' : 'none';
                executeSearch(query);
            });
        }

        function executeSearch(query) {
            if (!query || query.length < 2) {
                resultsList.innerHTML = '';
                resultsSummary.style.display = 'none';
                emptyState.style.display = 'block';
                return;
            }

            const qLower = query.toLowerCase();
            const matches = searchData.filter(item => {
                const inTitle = item.title.toLowerCase().includes(qLower);
                const inExcerpt = (item.excerpt || '').toLowerCase().includes(qLower);
                const inCategory = (item.category || '').toLowerCase().includes(qLower);
                const inTags = (item.tags || []).some(t => t.toLowerCase().includes(qLower));
                return inTitle || inExcerpt || inCategory || inTags;
            });

            emptyState.style.display = 'none';
            resultsSummary.style.display = 'block';
            resultsSummary.innerHTML = `Found <strong>${matches.length}</strong> result${matches.length === 1 ? '' : 's'} for "<strong>${escapeHtml(query)}</strong>"`;

            if (matches.length === 0) {
                resultsList.innerHTML = `
                    <li class="search-no-results">
                        <i class="far fa-frown" style="font-size: 1.8rem; margin-bottom: 0.5rem; color: var(--text-light);"></i>
                        <p>No matches found. Try searching for "climate", "foldable", "music", or "AI".</p>
                    </li>
                `;
                return;
            }

            resultsList.innerHTML = matches.map(item => `
                <li class="search-result-item">
                    <a href="${item.url}" class="search-result-link">
                        <div class="search-result-meta">
                            <span class="search-category-pill">${item.category}</span>
                            <span class="search-result-date">${item.date || ''}</span>
                        </div>
                        <h4 class="search-result-title">${highlightMatch(item.title, query)}</h4>
                        <p class="search-result-excerpt">${highlightMatch(item.excerpt || '', query)}</p>
                    </a>
                </li>
            `).join('');
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }

        function highlightMatch(text, query) {
            if (!text || !query) return escapeHtml(text || '');
            const escaped = escapeHtml(text);
            const regex = new RegExp(`(${query.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')})`, 'gi');
            return escaped.replace(regex, '<mark class="search-highlight">$1</mark>');
        }
    })();
</script>


    <!-- Top Leaderboard Google Ads Scene (On Every Page) -->
    
    <div class="container ad-leaderboard-container">
        
        

<!-- Google Ads Scene: Top Leaderboard Banner (728x90 / 970x90 / 320x50 Responsive) -->
<div class="google-ad-wrapper leaderboard-wrapper" data-ad-type="leaderboard">
    <div class="google-ad-header">
        <span class="ad-label">ADVERTISEMENT</span>
        <a href="https://adssettings.google.com/" target="_blank" rel="noopener noreferrer" class="adchoices-link" title="Ads by Google / AdChoices">
            <span>AdChoices</span>
            <svg class="adchoices-icon" viewBox="0 0 12 12" width="12" height="12">
                <path fill="currentColor" d="M1 1h10v10H1V1zm1 1v8h8V2H2zm2 2h4v1H4V4zm0 2h4v1H4V6zm0 2h2v1H4V8z"></path>
            </svg>
        </a>
    </div>
    
    <!-- Google AdSense Tag -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9481237418920194" data-ad-slot="8947291032" data-ad-format="horizontal" data-full-width-responsive="true"></ins>

    <!-- Visual Ad Scene Display -->
    <div class="ad-creative-scene leaderboard-scene">
        <div class="ad-scene-brand">
            <span class="ad-badge-google"><i class="fab fa-google"></i> Google Cloud</span>
            <h4 class="ad-scene-title">Build Intelligence Faster with Vertex AI on Google Cloud</h4>
            <p class="ad-scene-desc">Access state-of-the-art multimodal Gemini models, enterprise embeddings, and serverless vector search. Start with $300 free credits.</p>
        </div>
        <div class="ad-scene-cta">
            <a href="https://cloud.google.com/vertex-ai" target="_blank" rel="noopener noreferrer" class="ad-cta-btn">
                <span>Start Free</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>



    </div>
    

    <!-- Main Content Area -->
    