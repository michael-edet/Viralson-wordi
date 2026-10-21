<?php
/**
 * Viral Son - Index / Home Page Template
 *
 * @package ViralSon
 */
get_header();
?>

<main>

        
<!-- Hero Section -->
<section class="hero">
    <div class="container hero-container">
        <div class="hero-content">
            <span class="post-category" style="margin-bottom: 1rem; font-size: 0.9rem;">Trending Right Now</span>
            <h1 class="hero-title">Discover What's Shaping Tomorrow</h1>
            <p class="hero-subtitle">Your premier digital destination for breaking stories, in-depth technology analyses, music releases, and thought-provoking lifestyle features.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#featured" class="btn">Explore Latest Stories</a>
                <a href="news/index.html" class="btn btn-outline">Browse News Hub</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1552664730-d307ca884978%3Fauto%3Dformat%26fit%3Dcrop%26w%3D1000%26q%3D80?_a=BBFAAAAA0" alt="Viral Son Blogging Studio" loading="lazy">
        </div>
    </div>
</section>

<!-- Breaking News Ticker -->
<section class="breaking-news">
    <div class="container breaking-container">
        <span class="breaking-label">HOT STORY</span>
        <div class="breaking-text">
            <a href="posts/global-climate-summit/index.html" style="color: #ffffff; text-decoration: none;">Global Climate Summit reaches historic agreement on carbon emissions - 195 countries commit to net-zero framework →</a>
        </div>
    </div>
</section>

<!-- Featured Posts Section -->
<section class="featured-posts" id="featured" style="padding: 4rem 0;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 1.5rem; flex-wrap: wrap; gap: 1rem;">
            <h2 class="section-title" style="margin-bottom: 0;">Featured Articles</h2>
            <a href="technology/index.html" style="color: var(--primary-blue); font-weight: 600;">View All Tech →</a>
        </div>

        <div class="posts-grid">
            <!-- Card 1 -->
            <article class="post-card">
                <div class="post-image">
                    <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1586227740560-8cf2732c1531%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Artificial Intelligence" loading="lazy">
                </div>
                <div class="post-content">
                    <span class="post-category tech">Technology</span>
                    <h3 class="post-title"><a href="posts/future-of-ai/index.html">The Future of AI in Everyday Life</a></h3>
                    <p class="post-excerpt">How artificial intelligence and agentic models are transforming our daily workflows, smart homes, and creative routines.</p>
                    <div class="post-meta">
                        <span>June 15, 2026</span>
                        <span>5 min read</span>
                    </div>
                </div>
            </article>

            <!-- Card 2 -->
            <article class="post-card">
                <div class="post-image">
                    <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1498837167922-ddd27525d352%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Productive Habits" loading="lazy">
                </div>
                <div class="post-content">
                    <span class="post-category life">Lifestyle</span>
                    <h3 class="post-title"><a href="posts/productive-habits/index.html">10 Habits of Highly Productive People</a></h3>
                    <p class="post-excerpt">Discover actionable morning rituals, deep work protocols, and cognitive strategies that top performers use daily.</p>
                    <div class="post-meta">
                        <span>June 12, 2026</span>
                        <span>4 min read</span>
                    </div>
                </div>
            </article>

            <!-- Card 3 -->
            <article class="post-card">
                <div class="post-image">
                    <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Sleep Science" loading="lazy">
                </div>
                <div class="post-content">
                    <span class="post-category life">Health &amp; Wellness</span>
                    <h3 class="post-title"><a href="posts/better-sleep-science/index.html">The Science Behind Better Sleep</a></h3>
                    <p class="post-excerpt">Understanding circadian rhythm biology, blue light mitigation, and clinical protocols for rejuvenating rest.</p>
                    <div class="post-meta">
                        <span>June 10, 2026</span>
                        <span>6 min read</span>
                    </div>
                </div>
            </article>

            <!-- Card 4: Google Ads In-Feed Sponsored Scene -->
            <div class="infeed-grid-item">
                
                
                
                
                
                
                

<!-- Google Ads Scene: In-Feed Native Card Unit -->
<div class="google-ad-wrapper infeed-ad-wrapper" data-ad-type="infeed">
    <div class="ad-infeed-card">
        <div class="ad-infeed-image">
            <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Sponsored Content" loading="lazy">
            <span class="ad-sponsored-flag">Sponsored Ad</span>
        </div>
        <div class="ad-infeed-content">
            <div class="ad-infeed-meta">
                <span class="ad-source-brand"><i class="fab fa-google"></i> Google Cloud AI</span>
                <span class="ad-infeed-bullet">•</span>
                <span class="ad-infeed-notice">Recommended for you</span>
            </div>
            <h3 class="ad-infeed-title">
                <a href="https://cloud.google.com/products/gemini" target="_blank" rel="noopener noreferrer">
                    Supercharge Full-Stack Development with Gemini 1.5 Pro
                </a>
            </h3>
            <p class="ad-infeed-desc">
                Build agentic reasoning pipelines, analyze 1M token contexts, and deploy production ML microservices in minutes.
            </p>
            <div class="ad-infeed-footer">
                <span class="ad-action-hint">Promoted Story</span>
                <a href="https://cloud.google.com/products/gemini" target="_blank" rel="noopener noreferrer" class="ad-infeed-btn">
                    Visit Website <i class="fas fa-angle-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>



            </div>
        </div>
    </div>
</section>

<!-- Latest News Section -->
<section class="news" style="padding: 4rem 0; background-color: var(--white);">
    <div class="container">
        <h2 class="section-title">Latest Global News</h2>
        <div class="news-container">
            <div class="news-main">
                <!-- Large Highlight Card -->
                <div class="news-card featured">
                    <div class="news-image">
                        <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1588681664899-f142ff2dc9b1%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Global Summit" loading="lazy">
                    </div>
                    <div class="news-content">
                        <span class="post-category news">Breaking News</span>
                        <h3 class="news-title"><a href="posts/global-climate-summit/index.html">Global Summit Addresses Climate Change Solutions</a></h3>
                        <p class="news-date">June 18, 2026 • 7 min read</p>
                        <p style="color: var(--text-light); margin-bottom: 1.2rem;">World leaders gather to formalize actionable timelines for emissions caps, renewable infrastructure investments, and biodiversity preservation.</p>
                        <a href="posts/global-climate-summit/index.html" class="btn">Read Full Story</a>
                    </div>
                </div>

                <!-- Secondary Cards Grid -->
                <div class="two-col-grid">
                    <div class="news-card">
                        <div class="news-image" style="height: 160px;">
                            <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1611224923853-80b023f02d71%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Smartphone tech" loading="lazy">
                        </div>
                        <div class="news-content" style="padding: 1.2rem;">
                            <span class="post-category tech">Gadgets</span>
                            <h4 style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="posts/revolutionary-foldable-phone/index.html">Revolutionary Foldable Phone Breaks New Ground</a></h4>
                            <p class="news-date">June 17, 2026</p>
                        </div>
                    </div>

                    <div class="news-card">
                        <div class="news-image" style="height: 160px;">
                            <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1551135049-8a33b5883817%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Market growth" loading="lazy">
                        </div>
                        <div class="news-content" style="padding: 1.2rem;">
                            <span class="post-category news">Markets</span>
                            <h4 style="font-size: 1.15rem; margin-bottom: 0.5rem;"><a href="news/index.html">Tech Sector Surges as Clean Energy Index Sets Records</a></h4>
                            <p class="news-date">June 16, 2026</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News Sidebar -->
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
                    <h3 class="sidebar-title">Trending Now</h3>
                    <ul class="trending-list">
                        <li class="trending-item">
                            <a href="posts/minimalism-lifestyle/index.html" class="trending-title">Minimalism: Simplifying Your Life for True Joy</a>
                            <div class="trending-meta"><span>Lifestyle</span> • <span>14.2K views</span></div>
                        </li>
                        <li class="trending-item">
                            <a href="posts/summer-music-festival/index.html" class="trending-title">Summer Music Festival 2026 Announces Lineup</a>
                            <div class="trending-meta"><span>Entertainment</span> • <span>18.5K views</span></div>
                        </li>
                        <li class="trending-item">
                            <a href="download/music/index.html" class="trending-title">Single Download: "Midnight Whispers" - Aurora</a>
                            <div class="trending-meta"><span>Music Release</span> • <span>9.8K downloads</span></div>
                        </li>
                        <li class="trending-item">
                            <a href="posts/midnight-dreams-track/index.html" class="trending-title">Audio Feature: "Midnight Dreams" by Alex Parker</a>
                            <div class="trending-meta"><span>Exclusive</span> • <span>7.1K views</span></div>
                        </li>
                    </ul>
                </div>

                <div class="sidebar-widget" style="background: var(--light-blue);">
                    <h3 class="sidebar-title" style="border-bottom-color: var(--primary-blue);">Join Our Community</h3>
                    <p style="font-size: 0.95rem; color: var(--text-dark); margin-bottom: 1.2rem;">Engage with over 30,000 passionate writers, creators, and readers in topic channels.</p>
                    <a href="community/index.html" class="btn btn-purple" style="width: 100%;">Enter Community Hub</a>
                </div>
            </aside>
        </div>
    </div>
</section>

<!-- Entertainment & Music Spotlights -->
<section class="entertainment" style="padding: 4rem 0;">
    <div class="container">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 1.8rem; flex-wrap: wrap; gap: 1rem;">
            <h2 class="section-title" style="margin-bottom: 0;">Entertainment &amp; Media</h2>
            <a href="entertainment/index.html" style="color: var(--primary-blue); font-weight: 600;">Browse All Entertainment →</a>
        </div>

        <div class="posts-grid">
            <article class="post-card">
                <div class="post-image">
                    <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1489599809505-7c8e1c8bfc26%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Music Festival" loading="lazy">
                </div>
                <div class="post-content">
                    <span class="post-category ent">Festival</span>
                    <h3 class="post-title"><a href="posts/summer-music-festival/index.html">Summer Music Festival Lineup Revealed</a></h3>
                    <p class="post-excerpt">Headliners, stage breakdowns, and acoustic highlights for this summer's most anticipated outdoor festival.</p>
                    <div class="post-meta">
                        <span>June 14, 2026</span>
                        <a href="posts/summer-music-festival/index.html" style="color: var(--primary-blue); font-weight: 600;">Read More →</a>
                    </div>
                </div>
            </article>

            <article class="post-card">
                <div class="post-image">
                    <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Midnight Whispers track" loading="lazy">
                </div>
                <div class="post-content">
                    <span class="post-category ent">Single Release</span>
                    <h3 class="post-title"><a href="download/music/index.html">"Midnight Whispers" by Aurora (Audio)</a></h3>
                    <p class="post-excerpt">Experience the mesmerizing vocal harmonies and electronic textures. Available for high-res lossless download.</p>
                    <div class="post-meta">
                        <span>Audio Single</span>
                        <a href="download/music/index.html" class="btn btn-green" style="padding: 4px 12px; font-size: 0.85rem;">Download</a>
                    </div>
                </div>
            </article>

            <article class="post-card">
                <div class="post-image">
                    <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1514525253161-7a46d19cd819%3Fauto%3Dformat%26fit%3Dcrop%26w%3D600%26q%3D80?_a=BBFAAAAA0" alt="Midnight Dreams track" loading="lazy">
                </div>
                <div class="post-content">
                    <span class="post-category ent">Track Premiere</span>
                    <h3 class="post-title"><a href="posts/midnight-dreams-track/index.html">"Midnight Dreams" by Alex Parker</a></h3>
                    <p class="post-excerpt">Interactive audio player, track stems, and behind-the-scenes recording diary of Parker's newest album preview.</p>
                    <div class="post-meta">
                        <span>June 9, 2026</span>
                        <a href="posts/midnight-dreams-track/index.html" style="color: var(--primary-blue); font-weight: 600;">Listen Now →</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Community Showcase Section -->
<section style="padding: 4rem 0; background: linear-gradient(135deg, var(--light-blue) 0%, var(--surface-bg) 100%); border-top: 1px solid var(--border-color);">
    <div class="container split-feature-layout">
        <div>
            <span class="post-category" style="background: rgba(63, 81, 181, 0.15); color: #3f51b5; margin-bottom: 1rem;">Collaborative Hub</span>
            <h2 style="font-size: clamp(1.8rem, 3.5vw, 2.4rem); color: var(--dark-blue); margin-bottom: 1.2rem;">Be Part of the Conversation</h2>
            <p style="font-size: 1.1rem; color: var(--text-dark); margin-bottom: 1.5rem;">Join a community of thought leaders, indie writers, and curious readers sharing perspectives on tomorrow's world.</p>
            <ul style="list-style: none; margin-bottom: 2rem;">
                <li style="margin-bottom: 0.8rem; display: flex; align-items: center; gap: 10px; font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: var(--green);"></i> Exclusive member articles &amp; early preview downloads</li>
                <li style="margin-bottom: 0.8rem; display: flex; align-items: center; gap: 10px; font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: var(--green);"></i> Submit guest editorials and articles for review</li>
                <li style="display: flex; align-items: center; gap: 10px; font-size: 1.05rem;"><i class="fas fa-check-circle" style="color: var(--green);"></i> Moderated discussion boards across all key topics</li>
            </ul>
            <a href="community/index.html" class="btn">Explore Community</a>
        </div>
        <div style="background: var(--card-bg); padding: 2.2rem; border-radius: var(--radius-md); box-shadow: var(--shadow-md); border: 1px solid var(--border-color);">
            <h3 style="font-size: 1.4rem; color: var(--dark-blue); margin-bottom: 0.5rem;">Send Us a Message</h3>
            <p style="font-size: 0.95rem; color: var(--text-light); margin-bottom: 1.5rem;">Have a story pitch, question, or feedback for the editors?</p>
            <form onsubmit="event.preventDefault(); alert('Message sent successfully! Our editorial desk will reply shortly.'); this.reset();">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Your Full Name" required="">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Your Email Address" required="">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" placeholder="How can we collaborate?" required="" style="min-height: 90px;"></textarea>
                </div>
                <button type="submit" class="btn" style="width: 100%;">Submit Inquiry</button>
            </form>
        </div>
    </div>
</section>

    
</main>

<?php get_footer(); ?>
