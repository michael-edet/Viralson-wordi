<?php
/**
 * Viral Son Main Blog & Front Page Template
 *
 * @package ViralSon
 */
get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 30px;">
        <!-- Top Lead Story / Featured Section -->
        <?php
        $featured_query = new WP_Query(array(
            'posts_per_page'      => 1,
            'post__in'            => get_option('sticky_posts'),
            'ignore_sticky_posts' => 1,
        ));

        // If no sticky post, grab the most recent published post
        if (!$featured_query->have_posts()) {
            $featured_query = new WP_Query(array('posts_per_page' => 1));
        }

        if ($featured_query->have_posts()) :
            while ($featured_query->have_posts()) : $featured_query->the_post();
                $featured_id = get_the_ID();
        ?>
            <section class="featured-hero" style="background: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 36px; box-shadow: var(--shadow-sm);">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
                    <div style="position: relative; min-height: 340px; background: var(--medium-gray);">
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;')); ?>
                            <?php else : ?>
                                <div style="display: flex; align-items: center; justify-content: center; height: 100%;">
                                    <span style="font-size: 3rem; color: var(--primary-blue); font-weight: 800;">VS FEATURED</span>
                                </div>
                            <?php endif; ?>
                        </a>
                    </div>
                    <div style="padding: 36px 32px; display: flex; flex-direction: column; justify-content: center;">
                        <div class="post-meta-unboxed" style="margin-bottom: 12px;">
                            <span class="category"><?php the_category(' · '); ?></span>
                            <span aria-hidden="true">·</span>
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                            <span aria-hidden="true">·</span>
                            <span><?php echo esc_html(viralson_estimated_reading_time()); ?></span>
                        </div>
                        <h1 style="font-size: clamp(1.8rem, 3vw, 2.4rem); font-weight: 800; line-height: 1.25; margin-bottom: 16px; color: var(--text-dark);">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h1>
                        <p style="font-size: 1.05rem; color: var(--text-light); line-height: 1.6; margin-bottom: 24px;">
                            <?php echo esc_html(wp_trim_words(get_the_excerpt(), 28)); ?>
                        </p>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="btn">
                                <?php esc_html_e('Read Full Feature', 'viralson'); ?> <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>

        <!-- Ad Slot -->
        <?php get_template_part('template-parts/ad-banner'); ?>

        <!-- Two-Column Layout: Main Feed & Sidebar -->
        <div style="display: grid; grid-template-columns: 1fr 340px; gap: 36px; margin-top: 30px;" class="main-layout-grid">
            <!-- Main Content Area -->
            <div class="content-area">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px; border-bottom: 2px solid var(--border-color); padding-bottom: 12px;">
                    <h2 style="font-size: 1.4rem; font-weight: 800; color: var(--text-dark); position: relative; margin: 0;">
                        <?php esc_html_e('Latest Dispatch & Reports', 'viralson'); ?>
                    </h2>
                    <a href="<?php echo esc_url(home_url('/audio/')); ?>" style="font-size: 0.9rem; font-weight: 600; color: var(--primary-blue);">
                        <?php esc_html_e('Browse Audio Hub →', 'viralson'); ?>
                    </a>
                </div>

                <div class="article-grid" style="margin-top: 0;">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            // Skip the sticky post if already shown in the top hero
                            if (isset($featured_id) && get_the_ID() === $featured_id && is_home() && !is_paged()) {
                                continue;
                            }
                            get_template_part('template-parts/content-card');
                        endwhile;

                        the_posts_pagination(array(
                            'mid_size'  => 2,
                            'prev_text' => __('&larr; Previous', 'viralson'),
                            'next_text' => __('Next &rarr;', 'viralson'),
                        ));
                    else :
                    ?>
                        <p><?php esc_html_e('No articles found in this newsfeed.', 'viralson'); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar -->
            <aside class="sidebar-area">
                <?php if (is_active_sidebar('sidebar-main')) : ?>
                    <?php dynamic_sidebar('sidebar-main'); ?>
                <?php else : ?>
                    <!-- Default Widget: Newsletter -->
                    <div style="background: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 24px; margin-bottom: 28px; box-shadow: var(--shadow-sm);">
                        <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 8px; color: var(--text-dark);">
                            <i class="fas fa-envelope-open-text" style="color: var(--primary-blue); margin-right: 8px;"></i>
                            <?php esc_html_e('The Daily Briefing', 'viralson'); ?>
                        </h3>
                        <p style="font-size: 0.88rem; color: var(--text-light); line-height: 1.5; margin-bottom: 16px;">
                            <?php esc_html_e('Join 30,000+ readers. Direct geopolitical and technology intelligence straight to your inbox.', 'viralson'); ?>
                        </p>
                        <form onsubmit="event.preventDefault(); alert('Subscribed to Viral Son newsletter!');" style="display: flex; flex-direction: column; gap: 10px;">
                            <input type="email" placeholder="<?php esc_attr_e('Enter your work email...', 'viralson'); ?>" required style="padding: 10px 14px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); background: var(--input-bg); color: var(--text-dark); font-size: 0.9rem;">
                            <button type="submit" class="btn" style="width: 100%;">
                                <?php esc_html_e('Subscribe Free', 'viralson'); ?>
                            </button>
                        </form>
                    </div>

                    <!-- Default Widget: Audio Releases Spotlight -->
                    <div style="background: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--radius-md); padding: 24px; margin-bottom: 28px; box-shadow: var(--shadow-sm);">
                        <h3 style="font-size: 1.15rem; font-weight: 700; margin-bottom: 16px; color: var(--text-dark);">
                            <i class="fas fa-music" style="color: var(--teal); margin-right: 8px;"></i>
                            <?php esc_html_e('Latest Music Downloads', 'viralson'); ?>
                        </h3>
                        <?php
                        $audio_sidebar = new WP_Query(array(
                            'post_type'      => 'audio_release',
                            'posts_per_page' => 3,
                        ));
                        if ($audio_sidebar->have_posts()) :
                            while ($audio_sidebar->have_posts()) : $audio_sidebar->the_post();
                                $artist = get_post_meta(get_the_ID(), '_viralson_artist', true);
                        ?>
                            <div style="display: flex; gap: 12px; margin-bottom: 16px; padding-bottom: 12px; border-bottom: 1px solid var(--border-color);">
                                <div style="width: 50px; height: 50px; border-radius: 4px; overflow: hidden; background: var(--medium-gray); flex-shrink: 0;">
                                    <?php if (has_post_thumbnail()) the_post_thumbnail('thumbnail', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                </div>
                                <div style="flex: 1;">
                                    <h4 style="font-size: 0.92rem; font-weight: 700; line-height: 1.3; margin-bottom: 4px;">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h4>
                                    <span style="font-size: 0.78rem; color: var(--text-light);"><?php echo esc_html($artist); ?> · FLAC / MP3</span>
                                </div>
                            </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                        ?>
                            <p style="font-size: 0.85rem; color: var(--text-light);"><?php esc_html_e('Check back soon for new single premieres.', 'viralson'); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </aside>
        </div>
    </div>
</main>

<?php get_footer(); ?>
