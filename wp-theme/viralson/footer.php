<?php
/**
 * Viral Son Footer Template
 *
 * @package ViralSon
 */
?>
<footer class="site-footer">
    <div class="container">
        <!-- 4-Column Footer Widgets -->
        <div class="footer-grid">
            <div class="footer-col footer-brand-col">
                <div class="logo" style="margin-bottom: 16px;">
                    <div class="logo-icon">VS</div>
                    <div class="logo-text"><?php bloginfo('name'); ?></div>
                </div>
                <p style="font-size: 0.9rem; color: var(--text-light); line-height: 1.6; margin-bottom: 16px;">
                    <?php echo esc_html(get_bloginfo('description')); ?>
                </p>
                <div class="footer-social-links" style="display: flex; gap: 12px;">
                    <a href="#" aria-label="Twitter / X" style="color: var(--text-light); font-size: 1.1rem;"><i class="fab fa-x-twitter"></i></a>
                    <a href="#" aria-label="Instagram" style="color: var(--text-light); font-size: 1.1rem;"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="YouTube" style="color: var(--text-light); font-size: 1.1rem;"><i class="fab fa-youtube"></i></a>
                    <a href="#" aria-label="Spotify" style="color: var(--text-light); font-size: 1.1rem;"><i class="fab fa-spotify"></i></a>
                </div>
            </div>

            <?php if (is_active_sidebar('footer-1')) : ?>
                <?php dynamic_sidebar('footer-1'); ?>
            <?php else : ?>
                <div class="footer-col">
                    <h4><?php esc_html_e('Editorial Desks', 'viralson'); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/category/news/')); ?>"><?php esc_html_e('Global News', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/category/technology/')); ?>"><?php esc_html_e('Technology & AI', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/category/entertainment/')); ?>"><?php esc_html_e('Culture & Arts', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/category/sports/')); ?>"><?php esc_html_e('Sports & Athletics', 'viralson'); ?></a></li>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-2')) : ?>
                <?php dynamic_sidebar('footer-2'); ?>
            <?php else : ?>
                <div class="footer-col">
                    <h4><?php esc_html_e('Audio & Music', 'viralson'); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/audio/')); ?>"><?php esc_html_e('Audio Catalog', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/audio/')); ?>"><?php esc_html_e('Lossless FLAC Downloads', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/audio/')); ?>"><?php esc_html_e('Studio Stems & Bundles', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/audio/')); ?>"><?php esc_html_e('Producer Liner Notes', 'viralson'); ?></a></li>
                    </ul>
                </div>
            <?php endif; ?>

            <?php if (is_active_sidebar('footer-3')) : ?>
                <?php dynamic_sidebar('footer-3'); ?>
            <?php else : ?>
                <div class="footer-col">
                    <h4><?php esc_html_e('Company & Legal', 'viralson'); ?></h4>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/about/')); ?>"><?php esc_html_e('About Our Newsroom', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Contact & Story Tips', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/terms/')); ?>"><?php esc_html_e('Terms of Service', 'viralson'); ?></a></li>
                        <li><a href="<?php echo esc_url(home_url('/privacy/')); ?>"><?php esc_html_e('Privacy Policy', 'viralson'); ?></a></li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
            <div>
                &copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'viralson'); ?>
            </div>
            <div>
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-links-inline',
                        'depth'          => 1,
                    ));
                }
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
