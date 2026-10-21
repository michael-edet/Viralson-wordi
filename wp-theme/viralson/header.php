<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Theme Initialization to prevent Flash of Unstyled Color Theme (FOUC) -->
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

<!-- Global Header -->
<header class="site-header" id="siteHeader">
    <div class="container header-container">
        <!-- Logo / Brand Zone -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" rel="home">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <div class="logo-icon">VS</div>
                <div class="logo-text"><?php bloginfo('name'); ?></div>
            <?php endif; ?>
        </a>

        <!-- Desktop Navigation Menu -->
        <nav class="nav-wrapper" id="navWrapper" aria-label="<?php esc_attr_e('Main Navigation', 'viralson'); ?>">
            <?php
            if (has_nav_menu('primary')) {
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                    'depth'          => 2,
                ));
            } else {
                echo '<ul class="nav-menu">';
                echo '<li><a href="' . esc_url(home_url('/')) . '" class="nav-link">' . esc_html__('Home', 'viralson') . '</a></li>';
                wp_list_categories(array('title_li' => '', 'depth' => 1, 'number' => 6));
                echo '</ul>';
            }
            ?>
        </nav>

        <!-- Header Actions: Search, Theme Toggle, Mobile Trigger -->
        <div class="header-actions">
            <!-- Search Button -->
            <button type="button" class="action-btn search-trigger" id="searchOpenBtn" aria-label="<?php esc_attr_e('Open search modal', 'viralson'); ?>" title="<?php esc_attr_e('Press / to search', 'viralson'); ?>">
                <i class="fas fa-search" aria-hidden="true"></i>
                <span class="search-hint"><?php esc_html_e('Search...', 'viralson'); ?></span>
            </button>

            <!-- Dark / Light Theme Toggle -->
            <button type="button" class="action-btn theme-toggle" id="themeToggleBtn" aria-label="<?php esc_attr_e('Toggle dark / light theme', 'viralson'); ?>" title="<?php esc_attr_e('Toggle dark mode', 'viralson'); ?>">
                <i class="fas fa-moon" id="themeIcon" aria-hidden="true"></i>
            </button>

            <!-- Mobile Menu Toggle Button -->
            <button type="button" class="action-btn mobile-menu-btn" id="mobileMenuBtn" aria-label="<?php esc_attr_e('Toggle mobile menu', 'viralson'); ?>">
                <i class="fas fa-bars" id="menuIcon" aria-hidden="true"></i>
            </button>
        </div>
    </div>
</header>

<!-- Site-Wide Search Modal Overlay -->
<?php get_template_part('template-parts/search-modal'); ?>
