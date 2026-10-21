<?php
/**
 * Template part for displaying posts in a grid
 *
 * @package ViralSon
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    <div class="post-card-thumb">
        <a href="<?php the_permalink(); ?>" aria-label="<?php the_title_attribute(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('viralson-card'); ?>
            <?php else : ?>
                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, var(--light-blue), var(--surface-bg));">
                    <span style="font-weight: 800; font-size: 2rem; color: var(--primary-blue); opacity: 0.3;">VS</span>
                </div>
            <?php endif; ?>
        </a>
    </div>

    <div class="post-card-body">
        <div class="post-meta-unboxed">
            <span class="category"><?php the_category(', '); ?></span>
            <span aria-hidden="true">·</span>
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
            <span aria-hidden="true">·</span>
            <span><?php echo esc_html(viralson_estimated_reading_time()); ?></span>
        </div>

        <h2 class="post-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <p class="post-card-excerpt">
            <?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?>
        </p>

        <a href="<?php the_permalink(); ?>" class="btn-read-more" style="color: var(--primary-blue); font-weight: 600; font-size: 0.88rem; display: inline-flex; align-items: center; gap: 6px;">
            <?php esc_html_e('Read Full Story', 'viralson'); ?> <i class="fas fa-arrow-right" aria-hidden="true" style="font-size: 0.75rem;"></i>
        </a>
    </div>
</article>
