<?php
/**
 * Template Name: News Category Hub
 * Description: Global News Archive Hub
 *
 * @package ViralSon
 */
get_header();
?>

<main>
        
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <span class="post-category news" style="margin-bottom: 0.8rem;">World Coverage</span>
        <h1>Latest Global News</h1>
        <p>Stay updated with verified reporting, breaking developments, and insightful geopolitical analysis from around the globe.</p>
    </div>
</section>

<div class="container">
    <!-- Category Filter Pills with Auto-Selection Tags -->
    <div class="filter-pills" id="newsFilterPills">
        <span class="filter-pill active" data-tag="all">All News</span>
        <span class="filter-pill" data-tag="world">World &amp; Politics</span>
        <span class="filter-pill" data-tag="climate">Climate &amp; Nature</span>
        <span class="filter-pill" data-tag="business">Business &amp; Markets</span>
        <span class="filter-pill" data-tag="science">Science &amp; Health</span>
    </div>

    <div class="news-container">
        <!-- Main News Column -->
        <div class="news-main">
            <!-- Lead Article -->
            <article class="news-card featured" data-tags="climate nature environment policy news">
                <div class="news-image">
                    <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1%3Fauto%3Dformat%26fit%3Dcrop%26w%3D800%26q%3D80?_a=BBFAAAAA0" alt="Climate Summit" loading="lazy">
                </div>
                <div class="news-content">
                    <span class="post-category news">Environment &amp; Climate</span>
                    <h2 class="news-title"><a href="../posts/global-climate-summit/index.html">Global Summit Addresses Climate Change Solutions</a></h2>
                    <p class="news-date">June 18, 2026 • By Michael Chen • 7 min read</p>
                    <p style="color: var(--text-light); margin-bottom: 1.2rem;">World leaders gather to formalize actionable plans for reducing carbon emissions, establishing a $100B adaptation fund, and protecting biodiversity.</p>
                    <a href="../posts/global-climate-summit/index.html" class="btn">Read Full Story</a>
                </div>
            </article>

            <!-- News Grid -->
            <div class="two-col-grid">
                <article class="news-card" data-tags="business markets economy finance green">
                    <div class="news-image" style="height: 190px;">
                        <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1551135049-8a33b5883817%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Global Financial Market" loading="lazy">
                    </div>
                    <div class="news-content" style="padding: 1.4rem;">
                        <span class="post-category" style="background: rgba(22, 160, 133, 0.15); color:#16a085;">Economy</span>
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;"><a href="../posts/global-climate-summit/index.html">Green Bonds Hit Record Volume in Q2</a></h3>
                        <p class="news-date">June 17, 2026 • 4 min read</p>
                        <p style="font-size: 0.92rem; color: var(--text-light);">Sustainable finance gains traction as international institutional investors allocate record funds to renewable grid projects.</p>
                    </div>
                </article>

                <article class="news-card" data-tags="world politics diplomacy trade alliances">
                    <div class="news-image" style="height: 190px;">
                        <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1507679799987-c73779587ccf%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Diplomacy summit" loading="lazy">
                    </div>
                    <div class="news-content" style="padding: 1.4rem;">
                        <span class="post-category news">Diplomacy</span>
                        <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem;"><a href="../posts/global-climate-summit/index.html">Trade Alliances Form New Digital Shipping Standards</a></h3>
                        <p class="news-date">June 15, 2026 • 5 min read</p>
                        <p style="font-size: 0.92rem; color: var(--text-light);">Global port authorities sign cross-border smart customs accord to eliminate friction in international supply chains.</p>
                    </div>
                </article>
            </div>

            <!-- In-Feed Google Ads Scene -->
            <div style="margin: 2rem 0;">
                
                
                
                
                
                
                

<!-- Google Ads Scene: In-Feed Native Card Unit -->
<div class="google-ad-wrapper infeed-ad-wrapper" data-ad-type="infeed">
    <div class="ad-infeed-card">
        <div class="ad-infeed-image">
            <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1585829365295-ab7cd400c167%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Sponsored Content" loading="lazy">
            <span class="ad-sponsored-flag">Sponsored Ad</span>
        </div>
        <div class="ad-infeed-content">
            <div class="ad-infeed-meta">
                <span class="ad-source-brand"><i class="fab fa-google"></i> Google News Initiative</span>
                <span class="ad-infeed-bullet">•</span>
                <span class="ad-infeed-notice">Recommended for you</span>
            </div>
            <h3 class="ad-infeed-title">
                <a href="https://newsinitiative.withgoogle.com/" target="_blank" rel="noopener noreferrer">
                    Empowering Independent Digital Journalism Worldwide
                </a>
            </h3>
            <p class="ad-infeed-desc">
                Discover cutting-edge newsroom tools, data journalism suites, and audience analytics engineered to elevate verified reporting.
            </p>
            <div class="ad-infeed-footer">
                <span class="ad-action-hint">Promoted Story</span>
                <a href="https://newsinitiative.withgoogle.com/" target="_blank" rel="noopener noreferrer" class="ad-infeed-btn">
                    Visit Website <i class="fas fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>



            </div>

            <!-- Additional News List Items -->
            <article class="news-card mini-news-card" data-tags="science health technology semiconductors">
                <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1504384308090-c894fdcc538d%3Fauto%3Dformat%26fit%3Dcrop%26w%3D400%26q%3D80?_a=BBFAAAAA0" alt="Tech News" class="mini-news-img" loading="lazy">
                <div class="mini-news-body">
                    <span class="post-category tech">Science &amp; Tech</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.4rem;"><a href="../posts/future-of-ai/index.html">Semiconductor Innovations Power Next-Gen Renewable Grids</a></h3>
                    <p class="news-date">June 14, 2026 • 3 min read</p>
                    <p style="font-size: 0.9rem; color: var(--text-light);">Ultra-efficient microchips allow microgrids to optimize battery distribution in real time.</p>
                </div>
            </article>

            <article class="news-card mini-news-card" data-tags="world politics elections democracy">
                <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1540910419892-4a36d2c3266c%3Fauto%3Dformat%26fit%3Dcrop%26w%3D400%26q%3D80?_a=BBFAAAAA0" alt="World Politics" class="mini-news-img" loading="lazy">
                <div class="mini-news-body">
                    <span class="post-category news">World &amp; Politics</span>
                    <h3 style="font-size: 1.2rem; margin-bottom: 0.4rem;"><a href="../posts/simple-post/index.html">Global Voter Participation Trends in 2026</a></h3>
                    <p class="news-date">June 13, 2026 • 5 min read</p>
                    <p style="font-size: 0.9rem; color: var(--text-light);">How digital voting transparency and mobile registration drives are boosting civic engagement globally.</p>
                </div>
            </article>
        </div>

        <!-- Sidebar -->
        <aside class="news-sidebar">
            <!-- Sidebar Google Ads Display Unit -->
            
            

<!-- Google Ads Scene: Sidebar Display Unit (300x250 / 300x600 Half-Page) -->
<div class="google-ad-wrapper sidebar-ad-wrapper" data-ad-type="sidebar">
    <div class="google-ad-header">
        <span class="ad-label">SPONSORED</span>
        <a href="https://adssettings.google.com/" target="_blank" rel="noopener noreferrer" class="adchoices-link" title="Ads by Google">
            <i class="fab fa-google" style="font-size: 0.7rem; margin-right: 2px;"></i> Ad
        </a>
    </div>

    <!-- Google AdSense Tag -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9481237418920194" data-ad-slot="4920192831" data-ad-format="rectangle" data-full-width-responsive="true"></ins>

    <!-- Visual Ad Scene Display -->
    <div class="ad-creative-scene sidebar-scene">
        <div class="ad-scene-media">
            <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1511707171634-5f897ff02aa9%3Fauto%3Dformat%26fit%3Dcrop%26w%3D400%26q%3D80?_a=BBFAAAAA0" alt="Google Hardware Showcase" loading="lazy">
            <span class="ad-sponsored-pill">Featured Hardware</span>
        </div>
        <div class="ad-scene-content">
            <h4 class="ad-scene-title">Google Pixel 9 Pro Fold</h4>
            <p class="ad-scene-desc">The thinnest foldable with Super Actua Flex displays and generative Gemini intelligence built right in.</p>
            <div class="ad-scene-footer">
                <span class="ad-price-tag">From $1,799</span>
                <a href="https://store.google.com/" target="_blank" rel="noopener noreferrer" class="ad-cta-btn small">Learn More</a>
            </div>
        </div>
    </div>
</div>




            <div class="sidebar-widget">
                <h3 class="sidebar-title">Trending in News</h3>
                <ul class="trending-list">
                    <li class="trending-item">
                        <a href="../posts/global-climate-summit/index.html" class="trending-title">195 Nations Ratify Clean Transition Pledge</a>
                        <div class="trending-meta"><span>Climate</span> • <span>24.5K reads</span></div>
                    </li>
                    <li class="trending-item">
                        <a href="../posts/future-of-ai/index.html" class="trending-title">AI Regulations Discussed at G7 Summit</a>
                        <div class="trending-meta"><span>Tech/Policy</span> • <span>19.1K reads</span></div>
                    </li>
                    <li class="trending-item">
                        <a href="../posts/revolutionary-foldable-phone/index.html" class="trending-title">Tech Supply Chains Diversify Across SE Asia</a>
                        <div class="trending-meta"><span>Economy</span> • <span>14.3K reads</span></div>
                    </li>
                </ul>
            </div>

            <div class="sidebar-widget">
                <h3 class="sidebar-title">Filter by Topic</h3>
                <div style="display: flex; flex-direction: column; gap: 0.6rem;">
                    <a href="index9e8c.html?tag=climate" class="quick-tag-btn" style="text-align: left; padding: 8px 12px;">🌿 Climate &amp; Nature (14)</a>
                    <a href="index0030.html?tag=world" class="quick-tag-btn" style="text-align: left; padding: 8px 12px;">🏛️ World Politics (18)</a>
                    <a href="index4ecc.html?tag=business" class="quick-tag-btn" style="text-align: left; padding: 8px 12px;">📈 Business &amp; Markets (12)</a>
                    <a href="index8ac2.html?tag=science" class="quick-tag-btn" style="text-align: left; padding: 8px 12px;">🧬 Science &amp; Health (9)</a>
                </div>
            </div>
        </aside>
    </div>
</div>

<!-- Category Tabs & Dynamic Tag Filter Script -->
<script>
    (function() {
        function initCategoryFilter() {
            const filterContainer = document.querySelector('.filter-pills');
            if (!filterContainer) return;

            const pills = filterContainer.querySelectorAll('.filter-pill');
            if (!pills.length) return;

            // Find all filterable article items
            const filterableCards = document.querySelectorAll('[data-tags]');
            if (!filterableCards.length) return;

            // Empty state container element
            let emptyState = document.getElementById('categoryFilterEmptyState');
            if (!emptyState) {
                emptyState = document.createElement('div');
                emptyState.id = 'categoryFilterEmptyState';
                emptyState.className = 'category-filter-empty';
                emptyState.style.display = 'none';
                emptyState.innerHTML = `
                    <div style="text-align: center; padding: 3rem 1.5rem; background: var(--card-bg); border-radius: var(--radius-md); border: 1px dashed var(--border-color); margin: 2rem 0;">
                        <i class="fas fa-filter" style="font-size: 2.2rem; color: var(--primary-blue); opacity: 0.6; margin-bottom: 0.8rem;"></i>
                        <h4 style="font-size: 1.25rem; color: var(--text-dark); margin-bottom: 0.4rem;">No articles found under this tag</h4>
                        <p style="color: var(--text-light); font-size: 0.92rem; margin-bottom: 1.2rem;">Try selecting a different topic or return to all stories.</p>
                        <button type="button" class="btn btn-outline" id="resetCategoryFilterBtn">Show All Stories</button>
                    </div>
                `;
                
                // Append after grid or container
                const grid = document.querySelector('.posts-grid') || document.querySelector('.news-container');
                if (grid && grid.parentNode) {
                    grid.parentNode.insertBefore(emptyState, grid.nextSibling);
                }
            }

            const resetBtn = document.getElementById('resetCategoryFilterBtn');
            if (resetBtn) {
                resetBtn.addEventListener('click', () => applyFilter('all'));
            }

            function applyFilter(selectedTag) {
                const normalizedFilter = (selectedTag || 'all').toLowerCase().trim();

                // Update active class on pills
                pills.forEach(pill => {
                    const pillTag = (pill.getAttribute('data-tag') || pill.textContent || '').toLowerCase().trim();
                    const isAll = (normalizedFilter === 'all' && (pillTag.includes('all') || pillTag === 'all'));
                    const isMatch = pillTag.includes(normalizedFilter) || normalizedFilter.includes(pillTag) || (pill.getAttribute('data-tag') === normalizedFilter);

                    if (isAll || isMatch) {
                        pill.classList.add('active');
                    } else {
                        pill.classList.remove('active');
                    }
                });

                // Filter cards
                let matchCount = 0;
                filterableCards.forEach(card => {
                    const cardTags = (card.getAttribute('data-tags') || '').toLowerCase();
                    const cardCategory = (card.querySelector('.post-category')?.textContent || '').toLowerCase();
                    const cardTitle = (card.querySelector('h2, h3, h4')?.textContent || '').toLowerCase();

                    const matches = normalizedFilter === 'all' || 
                                    cardTags.includes(normalizedFilter) || 
                                    cardCategory.includes(normalizedFilter) ||
                                    cardTitle.includes(normalizedFilter);

                    if (matches) {
                        card.style.display = '';
                        card.classList.remove('filter-hidden');
                        card.classList.add('filter-visible');
                        matchCount++;
                    } else {
                        card.style.display = 'none';
                        card.classList.add('filter-hidden');
                        card.classList.remove('filter-visible');
                    }
                });

                // Handle empty state
                if (matchCount === 0) {
                    emptyState.style.display = 'block';
                } else {
                    emptyState.style.display = 'none';
                }

                // Update query parameter without page reload
                try {
                    const url = new URL(window.location.href);
                    if (normalizedFilter === 'all') {
                        url.searchParams.delete('tag');
                    } else {
                        url.searchParams.set('tag', normalizedFilter);
                    }
                    window.history.replaceState({}, '', url.toString());
                } catch (e) {}
            }

            // Click event listeners for filter pills
            pills.forEach(pill => {
                pill.style.cursor = 'pointer';
                pill.addEventListener('click', function(e) {
                    e.preventDefault();
                    const tag = this.getAttribute('data-tag') || this.textContent.trim();
                    applyFilter(tag);
                });
            });

            // Auto-selection on page load from URL (?tag=... or #...)
            const urlParams = new URLSearchParams(window.location.search);
            const tagFromUrl = urlParams.get('tag') || (window.location.hash ? window.location.hash.replace('#', '') : null);
            if (tagFromUrl) {
                applyFilter(tagFromUrl);
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initCategoryFilter);
        } else {
            initCategoryFilter();
        }
    })();
</script>


    </main>

<?php get_footer(); ?>
