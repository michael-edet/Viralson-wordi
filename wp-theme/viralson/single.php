<?php
/**
 * Viral Son Single Post Template
 *
 * @package ViralSon
 */
get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 36px; max-width: 900px;">
        <?php
        while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-article-content'); ?>>
                <header class="entry-header" style="margin-bottom: 24px; text-align: center;">
                    <div class="post-meta-unboxed" style="justify-content: center; margin-bottom: 16px;">
                        <span class="category"><?php the_category(' · '); ?></span>
                        <span aria-hidden="true">·</span>
                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        <span aria-hidden="true">·</span>
                        <span><?php echo esc_html(viralson_estimated_reading_time()); ?></span>
                    </div>

                    <h1 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; line-height: 1.25; color: var(--text-dark); margin-bottom: 20px; text-wrap: balance;">
                        <?php the_title(); ?>
                    </h1>

                    <div class="author-byline" style="display: inline-flex; align-items: center; gap: 12px; font-size: 0.95rem; color: var(--text-light);">
                        <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('style' => 'border-radius: 50%;')); ?>
                        <span><?php esc_html_e('By', 'viralson'); ?> <strong><?php the_author_posts_link(); ?></strong></span>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-post-hero" style="border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 32px; box-shadow: var(--shadow-sm);">
                        <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; display: block;')); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content" style="font-size: 1.12rem; line-height: 1.8; color: var(--text-dark);">
                    <?php the_content(); ?>
                </div>

                <!-- Ad Unit Inside Article -->
                <?php get_template_part('template-parts/ad-banner'); ?>

                <!-- Post Footer Tags & Share -->
                <footer class="entry-footer" style="margin-top: 40px; padding-top: 20px; border-top: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 16px;">
                    <div class="post-tags" style="font-size: 0.9rem; color: var(--text-light);">
                        <?php the_tags('<span style="font-weight: 600; margin-right: 8px;">Tags:</span> ', ' · ', ''); ?>
                    </div>
                    <div class="share-buttons" style="display: flex; gap: 10px;">
                        <a href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_the_title()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="font-size: 0.85rem; padding: 6px 14px;">
                            <i class="fab fa-x-twitter"></i> <?php esc_html_e('Share', 'viralson'); ?>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-secondary" style="font-size: 0.85rem; padding: 6px 14px;">
                            <i class="fab fa-linkedin"></i> <?php esc_html_e('Share', 'viralson'); ?>
                        </a>
                    </div>
                </footer>

                <!-- Author Bio Box -->
                <div class="author-bio-card" style="margin-top: 36px; padding: 24px; background: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--radius-md); display: flex; gap: 20px; align-items: center;">
                    <div style="flex-shrink: 0;">
                        <?php echo get_avatar(get_the_author_meta('ID'), 72, '', '', array('style' => 'border-radius: 50%;')); ?>
                    </div>
                    <div>
                        <h4 style="font-size: 1.1rem; font-weight: 700; margin-bottom: 6px;"><?php the_author(); ?></h4>
                        <p style="font-size: 0.92rem; color: var(--text-light); line-height: 1.5;">
                            <?php echo esc_html(get_the_author_meta('description') ?: 'Journalist and contributing editor at Viral Son covering emerging trends, science, and digital culture.'); ?>
                        </p>
                    </div>
                </div>

                <!-- Post Navigation -->
                <nav class="post-navigation" style="margin-top: 36px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="padding: 16px; background: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--radius-sm);">
                        <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--text-light);"><?php esc_html_e('&larr; Previous Story', 'viralson'); ?></span>
                        <div style="font-weight: 700; font-size: 0.95rem; margin-top: 4px;"><?php previous_post_link('%link'); ?></div>
                    </div>
                    <div style="padding: 16px; background: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--radius-sm); text-align: right;">
                        <span style="font-size: 0.75rem; text-transform: uppercase; color: var(--text-light);"><?php esc_html_e('Next Story &rarr;', 'viralson'); ?></span>
                        <div style="font-weight: 700; font-size: 0.95rem; margin-top: 4px;"><?php next_post_link('%link'); ?></div>
                    </div>
                </nav>

                <!-- Comments Area -->
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
