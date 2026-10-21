<?php
/**
 * Template part for responsive ad banners
 *
 * @package ViralSon
 */
?>
<div class="ad-container" style="margin: 32px 0; padding: 12px; background: var(--card-bg); border: 1px dashed var(--border-color); border-radius: var(--radius-md); text-align: center;">
    <div style="font-size: 0.68rem; text-transform: uppercase; color: var(--text-light); letter-spacing: 1px; margin-bottom: 6px;">
        <?php esc_html_e('Advertisement', 'viralson'); ?>
    </div>
    <div class="ad-slot-placeholder" style="min-height: 90px; display: flex; align-items: center; justify-content: center; background: var(--light-gray); border-radius: 4px; padding: 12px;">
        <!-- Insert Google AdSense Unit Here -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-9481237418920194"
             data-ad-slot="1234567890"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <div style="font-size: 0.85rem; color: var(--text-light);">
            <strong><?php esc_html_e('Google AdSense Responsive Leaderboard Unit', 'viralson'); ?></strong>
            <p style="font-size: 0.75rem; margin-top: 4px;"><?php esc_html_e('Connect client ID in Theme Customizer or widget area.', 'viralson'); ?></p>
        </div>
    </div>
</div>
