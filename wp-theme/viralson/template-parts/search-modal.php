<?php
/**
 * Template part for site-wide search modal
 *
 * @package ViralSon
 */
?>
<div class="search-modal-backdrop" id="searchModal" role="dialog" aria-modal="true" aria-hidden="true" style="display: none;">
    <div class="search-modal-card">
        <form role="search" method="get" class="search-input-wrapper" action="<?php echo esc_url(home_url('/')); ?>">
            <i class="fas fa-search search-input-icon" aria-hidden="true"></i>
            <input type="search" id="searchInput" class="search-input" name="s" placeholder="<?php esc_attr_e('Search news, tech, music, audio downloads...', 'viralson'); ?>" autocomplete="off" value="<?php echo get_search_query(); ?>">
            <button type="button" id="searchClearBtn" class="search-clear-btn" aria-label="<?php esc_attr_e('Clear search', 'viralson'); ?>" style="display: none;">
                <i class="fas fa-times" aria-hidden="true"></i>
            </button>
            <button type="button" id="searchCloseBtn" class="search-close-btn" aria-label="<?php esc_attr_e('Close search', 'viralson'); ?>">
                <span class="esc-badge">ESC</span>
            </button>
        </form>

        <div class="search-results-container">
            <div id="searchResultsSummary" class="search-summary" style="display: none;"></div>
            <ul id="searchResultsList" class="search-results-list"></ul>
            <div id="searchEmptyState" class="search-empty-state">
                <i class="fas fa-search" style="font-size: 2rem; color: var(--primary-blue); margin-bottom: 0.8rem; opacity: 0.6;" aria-hidden="true"></i>
                <p><?php esc_html_e('Type keywords to search across articles, audio downloads, and topic hubs.', 'viralson'); ?></p>
                <div class="search-quick-tags">
                    <span><?php esc_html_e('Popular:', 'viralson'); ?></span>
                    <button type="button" class="quick-tag-btn" data-query="Climate"><?php esc_html_e('Climate', 'viralson'); ?></button>
                    <button type="button" class="quick-tag-btn" data-query="AI"><?php esc_html_e('AI', 'viralson'); ?></button>
                    <button type="button" class="quick-tag-btn" data-query="Phone"><?php esc_html_e('Phone', 'viralson'); ?></button>
                    <button type="button" class="quick-tag-btn" data-query="Music"><?php esc_html_e('Music', 'viralson'); ?></button>
                    <button type="button" class="quick-tag-btn" data-query="Sleep"><?php esc_html_e('Sleep', 'viralson'); ?></button>
                </div>
            </div>
        </div>
    </div>
</div>
