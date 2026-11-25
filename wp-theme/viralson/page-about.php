<?php
/**
 * Template Name: About Us Page
 * Description: About Viral Son — Mission, Publisher Ownership & Editorial Team
 *
 * @package ViralSon
 */
get_header();
?>

<main>

<section class="page-header">
    <div class="container">
        <span class="post-category" style="margin-bottom: 0.8rem;">Our Purpose &amp; Ownership</span>
        <h1>About Viral Son</h1>
        <p>An independent digital media and music discovery publication delivering verified news, consumer technology analysis, lifestyle guides, and original audio culture.</p>
    </div>
</section>

<div class="container">
    <div class="about-hero-grid" style="margin-bottom: 4rem;">
        <div>
            <h2 class="section-title">What Viral Son Does</h2>
            <p style="font-size: 1.08rem; line-height: 1.8; color: var(--text-dark); margin-bottom: 1.25rem;">
                Founded and published by <strong>Michael Edet</strong>, <strong>Viral Son</strong> exists to give modern readers clear, well-sourced journalism and cultural coverage without clickbait noise or paywalls.
            </p>
            <p style="font-size: 1.02rem; line-height: 1.8; color: var(--text-light); margin-bottom: 1.5rem;">
                Every week we publish original reporting and curated guides across five core beats: <strong>Global News</strong>, <strong>Consumer Technology &amp; AI</strong>, <strong>Sports Match Analysis</strong>, <strong>Health &amp; Mindful Lifestyle</strong>, and <strong>Entertainment &amp; Independent Music Releases</strong>.
            </p>
            <div class="stats-counter-row">
                <div>
                    <h3 style="font-size: 2rem; color: var(--primary-blue); font-weight: 800;">5 Core Beats</h3>
                    <p style="color: var(--text-light); font-size: 0.92rem;">News, Tech, Sports, Culture &amp; Lifestyle</p>
                </div>
                <div>
                    <h3 style="font-size: 2rem; color: var(--primary-blue); font-weight: 800;">100% Free</h3>
                    <p style="color: var(--text-light); font-size: 0.92rem;">Open access with zero paywalls</p>
                </div>
                <div>
                    <h3 style="font-size: 2rem; color: var(--primary-blue); font-weight: 800;">24–48h</h3>
                    <p style="color: var(--text-light); font-size: 0.92rem;">Verified editorial &amp; reader response SLA</p>
                </div>
            </div>
        </div>
        <div>
            <img src="https://res.cloudinary.com/Michael/image/fetch/f_auto,q_auto/https://images.unsplash.com/photo-1522071820081-009f0129c71c%3Fauto%3Dformat%26fit%3Dcrop%26w%3D800%26q%3D80?_a=BBFAAAAA0" alt="Viral Son Editorial Collaboration" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-lg); width: 100%;" loading="lazy">
        </div>
    </div>

    <!-- Who Runs Viral Son -->
    <div style="margin-bottom: 4rem;">
        <h2 class="section-title center">Who Runs Viral Son</h2>
        <p style="text-align:center; max-width:680px; margin:0 auto; color:var(--text-light);">
            Accountable human ownership and dedicated editorial desks keep our reporting accurate, responsive, and transparent.
        </p>

        <div class="team-grid">
            <div class="team-card">
                <div class="team-avatar">ME</div>
                <span class="team-role">Founder &amp; Editor-in-Chief</span>
                <h3 style="font-size:1.25rem; color:var(--dark-blue); margin-bottom:0.5rem;">Michael Edet</h3>
                <p style="color:var(--text-light); font-size:0.94rem; margin-bottom:0.8rem;">Leads editorial direction, platform engineering, final fact-checking sign-off, and advertiser/artist partnerships at Viral Son.</p>
                <a href="mailto:iamoffixial@gmail.com" class="inline-link" style="font-size:0.9rem;"><i class="fas fa-envelope"></i> iamoffixial@gmail.com</a>
            </div>

            <div class="team-card">
                <div class="team-avatar" style="background:linear-gradient(135deg, #2ecc71, #27ae60);">NT</div>
                <span class="team-role">News &amp; Technology Desk</span>
                <h3 style="font-size:1.25rem; color:var(--dark-blue); margin-bottom:0.5rem;">Reporting &amp; Reviews</h3>
                <p style="color:var(--text-light); font-size:0.94rem;">Covers international climate policy, mobile hardware teardowns, AI workflows, and real-world productivity software.</p>
            </div>

            <div class="team-card">
                <div class="team-avatar" style="background:linear-gradient(135deg, #9b59b6, #8e44ad);">MA</div>
                <span class="team-role">Entertainment &amp; Audio Desk</span>
                <h3 style="font-size:1.25rem; color:var(--dark-blue); margin-bottom:0.5rem;">Music &amp; Culture Curation</h3>
                <p style="color:var(--text-light); font-size:0.94rem;">Curates festival coverage, independent artist spotlights, and lossless preview releases with full metadata attribution.</p>
            </div>
        </div>
    </div>

    <!-- Editorial Pillars -->
    <div style="margin-bottom: 4rem;">
        <h2 class="section-title center">Our Editorial Standards</h2>
        <div class="posts-grid" style="margin-top: 2.5rem;">
            <div class="post-card" style="padding: 2rem;">
                <div style="font-size: 2.2rem; color: var(--primary-blue); margin-bottom: 1rem;"><i class="fas fa-bullseye"></i></div>
                <h3 style="font-size: 1.3rem; margin-bottom: 0.8rem; color: var(--dark-blue);">Primary-Source Verification</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Claims, statistics, and technical benchmarks are verified against primary documentation before publication. Read our <a href="<?php echo esc_url(home_url('/editorial-policy/')); ?>" class="inline-link">Editorial Policy</a>.</p>
            </div>

            <div class="post-card" style="padding: 2rem;">
                <div style="font-size: 2.2rem; color: var(--green); margin-bottom: 1rem;"><i class="fas fa-hand-holding-usd"></i></div>
                <h3 style="font-size: 1.3rem; margin-bottom: 0.8rem; color: var(--dark-blue);">Funding Transparency</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">Viral Son is funded via Google AdSense display advertising, clearly labeled sponsored features, and disclosed affiliate links—never paid editorial manipulation.</p>
            </div>

            <div class="post-card" style="padding: 2rem;">
                <div style="font-size: 2.2rem; color: var(--purple); margin-bottom: 1rem;"><i class="fas fa-shield-alt"></i></div>
                <h3 style="font-size: 1.3rem; margin-bottom: 0.8rem; color: var(--dark-blue);">Reader Privacy &amp; Trust</h3>
                <p style="color: var(--text-light); font-size: 0.95rem;">We publish clear <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="inline-link">Privacy</a>, <a href="<?php echo esc_url(home_url('/cookie-policy/')); ?>" class="inline-link">Cookie</a>, <a href="<?php echo esc_url(home_url('/disclaimer/')); ?>" class="inline-link">Disclaimer</a>, and <a href="<?php echo esc_url(home_url('/dmca/')); ?>" class="inline-link">DMCA</a> policies to protect readers and creators alike.</p>
            </div>
        </div>
    </div>

    <!-- Real Direct Contact Box -->
    <div style="background: var(--card-bg); padding: clamp(1.5rem, 4vw, 3rem); border-radius: var(--radius-md); box-shadow: var(--shadow-sm); border: 1px solid var(--border-color); max-width: 820px; margin: 0 auto 3rem;">
        <h2 style="font-size: clamp(1.5rem, 3vw, 1.8rem); color: var(--dark-blue); margin-bottom: 0.5rem; text-align: center;">Reach the Publisher &amp; Newsroom</h2>
        <p style="text-align: center; color: var(--text-light); margin-bottom: 2rem;">Have a news tip, correction request, copyright notice, or sponsorship proposal? Reach us directly.</p>
        <div class="contact-cards-grid">
            <div style="background: var(--light-blue); padding: 1.5rem; border-radius: var(--radius-sm);">
                <i class="fas fa-envelope" style="font-size: 1.6rem; color: var(--primary-blue); margin-bottom: 0.5rem;"></i>
                <h4 style="color: var(--dark-blue); margin-bottom:0.35rem;">Direct Editorial &amp; General Email</h4>
                <p style="font-size: 0.95rem; margin-bottom:0.5rem;"><a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a></p>
                <span style="font-size:0.84rem; color:var(--text-light);">Answered within 24–48 business hours</span>
            </div>
            <div style="background: var(--light-blue); padding: 1.5rem; border-radius: var(--radius-sm);">
                <i class="fas fa-paper-plane" style="font-size: 1.6rem; color: var(--primary-blue); margin-bottom: 0.5rem;"></i>
                <h4 style="color: var(--dark-blue); margin-bottom:0.35rem;">Newsroom Contact &amp; Media Kit</h4>
                <p style="font-size: 0.95rem; margin-bottom:0.5rem;"><a href="<?php echo esc_url(home_url('/contact/')); ?>" class="inline-link">Open Contact Form &rarr;</a></p>
                <span style="font-size:0.84rem; color:var(--text-light);">Or explore <a href="<?php echo esc_url(home_url('/advertise/')); ?>" class="inline-link">Advertise With Us</a></span>
            </div>
        </div>
    </div>
</div>
</main>

<?php get_footer(); ?>
