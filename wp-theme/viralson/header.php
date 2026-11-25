<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $vs_desc = is_singular() && has_excerpt()
        ? wp_strip_all_tags(get_the_excerpt())
        : (get_bloginfo('description') ?: 'Viral Son is an independent digital media publication delivering news, technology reviews, music releases, lifestyle guides, and community discussions.');
    ?>
    <meta name="description" content="<?php echo esc_attr($vs_desc); ?>">

    <!-- OpenGraph Metadata -->
    <meta property="og:title" content="<?php echo esc_attr(wp_get_document_title()); ?>">
    <meta property="og:description" content="<?php echo esc_attr($vs_desc); ?>">
    <meta property="og:type" content="<?php echo is_single() ? 'article' : 'website'; ?>">
    <meta property="og:url" content="<?php echo esc_url(is_singular() ? get_permalink() : home_url('/')); ?>">

    <!-- Google AdSense Official Script -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9481237418920194" crossorigin="anonymous"></script>

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

<!-- Header Component with Search, Dark Mode & Navigation -->
<header id="siteHeader">
    <div class="container header-container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <div class="logo-icon">VS</div>
            <div class="logo-text"><?php bloginfo('name'); ?></div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="nav-wrapper" id="navWrapper" aria-label="<?php esc_attr_e('Primary Menu', 'viralson'); ?>">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'navMenu',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'depth'          => 1,
                ));
            } else {
            ?>
            <ul class="nav-menu" id="navMenu">
                <li><a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Home</a></li>
                <li><a href="<?php echo esc_url(home_url('/news/')); ?>" class="nav-link <?php echo (is_category('news') || is_page('news')) ? 'active' : ''; ?>">News</a></li>
                <li><a href="<?php echo esc_url(home_url('/entertainment/')); ?>" class="nav-link <?php echo (is_category('entertainment') || is_page('entertainment')) ? 'active' : ''; ?>">Entertainment</a></li>
                <li><a href="<?php echo esc_url(home_url('/technology/')); ?>" class="nav-link <?php echo (is_category('technology') || is_page('technology')) ? 'active' : ''; ?>">Technology</a></li>
                <li><a href="<?php echo esc_url(home_url('/sports/')); ?>" class="nav-link <?php echo (is_category('sports') || is_page('sports')) ? 'active' : ''; ?>">Sports</a></li>
                <li><a href="<?php echo esc_url(home_url('/lifestyle/')); ?>" class="nav-link <?php echo (is_category('lifestyle') || is_page('lifestyle')) ? 'active' : ''; ?>">Lifestyle</a></li>
                <li><a href="<?php echo esc_url(home_url('/community/')); ?>" class="nav-link <?php echo is_page('community') ? 'active' : ''; ?>">Community</a></li>
                <li><a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link <?php echo is_page('about') ? 'active' : ''; ?>">About</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link <?php echo is_page('contact') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
            <?php } ?>
        </nav>

        <!-- Header Actions: Search, Dark Mode, Mobile Toggle -->
        <div class="header-actions">
            <button class="action-btn search-trigger" id="searchOpenBtn" aria-label="Open search dialog" title="Search site (Press /)">
                <i class="fas fa-search"></i>
                <span class="search-hint">Search...</span>
            </button>

            <button class="action-btn theme-toggle" id="themeToggleBtn" aria-label="Toggle dark mode" title="Toggle dark/light mode">
                <i class="fas fa-moon" id="themeIcon"></i>
            </button>

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

<!-- Top Leaderboard Google Ads Scene (On Every Page) -->
<div class="container ad-leaderboard-container">
    <?php if (is_active_sidebar('ad-header')) : ?>
        <?php dynamic_sidebar('ad-header'); ?>
    <?php else : ?>
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

        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9481237418920194" data-ad-slot="8947291032" data-ad-format="horizontal" data-full-width-responsive="true"></ins>

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
    <?php endif; ?>
</div>