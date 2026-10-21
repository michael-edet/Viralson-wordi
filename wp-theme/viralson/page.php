<?php
/**
 * Viral Son Standard Page Template
 *
 * @package ViralSon
 */
get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 36px; max-width: 900px;">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('static-page-card'); ?>>
                <header class="page-header" style="margin-bottom: 28px; border-bottom: 2px solid var(--border-color); padding-bottom: 16px;">
                    <h1 style="font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; color: var(--text-dark); margin: 0;">
                        <?php the_title(); ?>
                    </h1>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div style="margin-bottom: 28px; border-radius: var(--radius-md); overflow: hidden;">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; display: block;')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: var(--text-dark);">
                    <?php the_content(); ?>
                </div>

                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
