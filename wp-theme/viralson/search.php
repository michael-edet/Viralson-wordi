<?php
/**
 * Viral Son Search Results Template
 *
 * @package ViralSon
 */
get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 36px;">
        <header class="search-results-header" style="margin-bottom: 32px; border-bottom: 2px solid var(--border-color); padding-bottom: 20px;">
            <div style="font-size: 0.82rem; text-transform: uppercase; color: var(--primary-blue); font-weight: 700; letter-spacing: 1px; margin-bottom: 6px;">
                <?php esc_html_e('Search Results', 'viralson'); ?>
            </div>
            <h1 style="font-size: clamp(1.8rem, 3.5vw, 2.5rem); font-weight: 800; color: var(--text-dark); margin: 0 0 10px 0;">
                <?php printf(esc_html__('Query: "%s"', 'viralson'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
            <p style="font-size: 1rem; color: var(--text-light); margin: 0;">
                <?php
                global $wp_query;
                printf(
                    esc_html(_n('%d result discovered', '%d results discovered', $wp_query->found_posts, 'viralson')),
                    (int) $wp_query->found_posts
                );
                ?>
            </p>
        </header>

        <div class="article-grid">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    if (get_post_type() === 'audio_release') {
                        get_template_part('template-parts/content-audio');
                    } else {
                        get_template_part('template-parts/content-card');
                    }
                endwhile;

                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&larr; Previous', 'viralson'),
                    'next_text' => __('Next &rarr;', 'viralson'),
                ));
            else :
            ?>
                <div style="grid-column: 1 / -1; padding: 48px 24px; text-align: center; background: var(--card-bg); border-radius: var(--radius-md); border: 1px solid var(--border-color);">
                    <i class="fas fa-search" style="font-size: 2.5rem; color: var(--text-light); opacity: 0.4; margin-bottom: 16px;"></i>
                    <h3 style="font-size: 1.3rem; font-weight: 700; margin-bottom: 8px;"><?php esc_html_e('No matching records found', 'viralson'); ?></h3>
                    <p style="color: var(--text-light); max-width: 480px; margin: 0 auto 20px;">
                        <?php esc_html_e('Please try different keywords, browse the categories above, or use the quick topic tags.', 'viralson'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">
                        <?php esc_html_e('Back to Home Feed', 'viralson'); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
