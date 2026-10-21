<?php
/**
 * Viral Son Archive Template (Categories, Tags, Authors, Dates)
 *
 * @package ViralSon
 */
get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 36px;">
        <header class="archive-header" style="margin-bottom: 32px; border-bottom: 2px solid var(--border-color); padding-bottom: 20px;">
            <div style="font-size: 0.82rem; text-transform: uppercase; color: var(--primary-blue); font-weight: 700; letter-spacing: 1px; margin-bottom: 6px;">
                <?php esc_html_e('Category Archive Hub', 'viralson'); ?>
            </div>
            <h1 style="font-size: clamp(1.8rem, 3.5vw, 2.5rem); font-weight: 800; color: var(--text-dark); margin: 0 0 10px 0;">
                <?php the_archive_title(); ?>
            </h1>
            <?php if (get_the_archive_description()) : ?>
                <div style="font-size: 1.05rem; color: var(--text-light); max-width: 700px; line-height: 1.6;">
                    <?php the_archive_description(); ?>
                </div>
            <?php endif; ?>
        </header>

        <div class="article-grid">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    get_template_part('template-parts/content-card');
                endwhile;

                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('&larr; Previous', 'viralson'),
                    'next_text' => __('Next &rarr;', 'viralson'),
                ));
            else :
            ?>
                <p><?php esc_html_e('No articles found in this archive.', 'viralson'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
