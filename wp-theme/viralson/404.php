<?php
/**
 * Viral Son 404 Error Page Template
 *
 * @package ViralSon
 */
get_header();
?>

<main id="primary" class="site-main">
    <div class="container" style="padding: 80px 20px; max-width: 680px; text-align: center;">
        <div style="font-size: 5rem; font-weight: 900; color: var(--primary-blue); line-height: 1; margin-bottom: 12px; letter-spacing: -2px;">
            404
        </div>
        <h1 style="font-size: 2rem; font-weight: 800; color: var(--text-dark); margin-bottom: 16px;">
            <?php esc_html_e('Dispatch Not Found', 'viralson'); ?>
        </h1>
        <p style="font-size: 1.1rem; color: var(--text-light); line-height: 1.6; margin-bottom: 32px;">
            <?php esc_html_e('The story, audio release, or document you requested may have moved or no longer exists at this location.', 'viralson'); ?>
        </p>

        <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" style="display: flex; gap: 10px; max-width: 440px; margin: 0 auto 32px;">
            <input type="search" name="s" placeholder="<?php esc_attr_e('Search Viral Son archives...', 'viralson'); ?>" style="flex: 1; padding: 12px 16px; border: 1px solid var(--border-color); border-radius: var(--radius-sm); background: var(--input-bg); color: var(--text-dark); font-size: 0.95rem;">
            <button type="submit" class="btn">
                <i class="fas fa-search"></i>
            </button>
        </form>

        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> <?php esc_html_e('Return to Front Page', 'viralson'); ?>
        </a>
    </div>
</main>

<?php get_footer(); ?>
