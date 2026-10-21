<?php
/**
 * Template part for displaying audio releases
 *
 * @package ViralSon
 */
$artist = get_post_meta(get_the_ID(), '_viralson_artist', true) ?: 'Viral Son Artist';
$duration = get_post_meta(get_the_ID(), '_viralson_duration', true) ?: '3:45';
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-card audio-release-card'); ?>>
    <div class="post-card-thumb">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('viralson-card'); ?>
            <?php else : ?>
                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #1a2736, #132235);">
                    <i class="fas fa-headphones" style="font-size: 3rem; color: var(--primary-blue); opacity: 0.6;"></i>
                </div>
            <?php endif; ?>
        </a>
        <div style="position: absolute; bottom: 10px; right: 10px; background: rgba(0,0,0,0.75); color: #fff; padding: 3px 8px; border-radius: 4px; font-size: 0.75rem; font-variant-numeric: tabular-nums;">
            <i class="fas fa-clock" style="margin-right: 4px;"></i><?php echo esc_html($duration); ?>
        </div>
    </div>

    <div class="post-card-body">
        <div class="post-meta-unboxed">
            <span class="category" style="color: var(--teal);"><?php esc_html_e('Audio Release', 'viralson'); ?></span>
            <span aria-hidden="true">·</span>
            <span><?php echo esc_html($artist); ?></span>
            <span aria-hidden="true">·</span>
            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
        </div>

        <h2 class="post-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <p class="post-card-excerpt">
            <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?>
        </p>

        <div style="display: flex; gap: 10px; margin-top: auto; padding-top: 12px;">
            <a href="<?php the_permalink(); ?>" class="btn" style="flex: 1; font-size: 0.85rem; padding: 8px 14px;">
                <i class="fas fa-play"></i> <?php esc_html_e('Stream & Download', 'viralson'); ?>
            </a>
        </div>
    </div>
</article>
