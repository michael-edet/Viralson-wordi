<?php
/**
 * Template Name: Affiliate Disclosure Page
 * Description: Honest & Transparent FTC Affiliate Disclosure
 *
 * @package ViralSon
 */
get_header();
?>

<main>

<section class="page-header">
    <div class="container">
        <span class="post-category" style="background:#e8f4fc; color:#2980b9; margin-bottom: 0.8rem;">FTC Transparency</span>
        <h1>Affiliate Disclosure</h1>
        <p>Honest, straightforward transparency about how affiliate links work on Viral Son and why they never compromise our reviews.</p>
        <div class="last-updated">
            <i class="far fa-calendar-check"></i>
            <span>Last Updated: November 24, 2026</span>
        </div>
    </div>
</section>

<section class="intro-notice">
    <div class="container">
        <div class="notice-box">
            <i class="fas fa-tag"></i>
            <div>
                <h3>Plain-English Summary</h3>
                <p>Some articles, hardware roundups, and partner features on Viral Son include affiliate links. If you click one of those links and make a purchase or sign up for a service, Viral Son may earn a small referral commission—at <strong>zero additional cost to you</strong>.</p>
            </div>
        </div>
    </div>
</section>

<section class="legal-section">
    <div class="container legal-container">
        <aside class="toc" aria-label="Table of Contents">
            <h3 class="toc-title"><i class="fas fa-list-ul"></i> On This Page</h3>
            <ul class="toc-list">
                <li><a href="#section-1" class="toc-link active">1. Why We Disclose</a></li>
                <li><a href="#section-2" class="toc-link">2. How Affiliate Links Work</a></li>
                <li><a href="#section-3" class="toc-link">3. Editorial Independence</a></li>
                <li><a href="#section-4" class="toc-link">4. Sponsored vs. Affiliate</a></li>
                <li><a href="#section-5" class="toc-link">5. Questions</a></li>
            </ul>
        </aside>

        <article class="legal-body">
            <section class="legal-block" id="section-1">
                <h2><span class="legal-number">1</span> Our Commitment to Honesty</h2>
                <p>In compliance with the U.S. Federal Trade Commission (FTC) Guides Concerning the Use of Endorsements and Testimonials in Advertising (16 CFR Part 255) and international consumer-protection laws, Viral Son maintains clear, prominent disclosure whenever content contains commercial referral links.</p>
            </section>

            <section class="legal-block" id="section-2">
                <h2><span class="legal-number">2</span> How Affiliate Links Work</h2>
                <ul>
                    <li>When we review smartphones, software tools, audio gear, VPNs, or productivity accessories, we may link to authorized retailers or official brand stores using an affiliate tracking tag.</li>
                    <li>If you purchase a product through that link, the retailer pays Viral Son a modest percentage of the sale.</li>
                    <li><strong>Zero Extra Cost:</strong> You never pay a higher price because of an affiliate link—and in some cases, partner promotions provide reader discounts.</li>
                </ul>
            </section>

            <section class="legal-block" id="section-3">
                <h2><span class="legal-number">3</span> Editorial Independence &amp; Honest Reviews</h2>
                <p>Affiliate commissions help fund our server hosting, investigative reporting, and free access to Viral Son without paywalls. However:</p>
                <div class="callout success">
                    <i class="fas fa-check-circle"></i>
                    <p><strong>Our Promise:</strong> We never accept payment to inflate a review score, hide product flaws, or recommend software we would not use ourselves. Our editorial conclusions are formed independently under our <a href="<?php echo esc_url(home_url('/editorial-policy/')); ?>" class="inline-link">Editorial Policy</a> before any affiliate link is attached.</p>
                </div>
            </section>

            <section class="legal-block" id="section-4">
                <h2><span class="legal-number">4</span> Difference Between Affiliate Links &amp; Sponsored Posts</h2>
                <ul>
                    <li><strong>Affiliate Links:</strong> Earned only if a reader chooses to buy a product after reading an independent review or guide.</li>
                    <li><strong>Sponsored Content &amp; Display Ads:</strong> Direct placements paid by a brand or served via Google AdSense, clearly labeled "Sponsored" or "Advertisement". Visit <a href="<?php echo esc_url(home_url('/advertise/')); ?>" class="inline-link">Advertise With Us</a> to learn more.</li>
                </ul>
            </section>

            <section class="legal-block" id="section-5">
                <h2><span class="legal-number">5</span> Questions About Our Disclosures</h2>
                <p>If you have questions about any product link, partnership, or disclosure on Viral Son, email us anytime at <a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a>.</p>
            </section>
        </article>
    </div>
</section>

<!-- Back to Top Button -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>

<script>
    (function() {
        const tocLinks = document.querySelectorAll('.toc-link');
        tocLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const target = document.querySelector(targetId);
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                    tocLinks.forEach(l => l.classList.remove('active'));
                    this.classList.add('active');
                }
            });
        });

        const legalBlocks = document.querySelectorAll('.legal-block');
        function updateActiveToc() {
            let current = '';
            const scrollPos = window.scrollY + 160;
            legalBlocks.forEach(block => {
                if (scrollPos >= block.offsetTop) {
                    current = block.getAttribute('id');
                }
            });
            if (current) {
                tocLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            }
        }

        const backToTop = document.getElementById('backToTop');
        function handleScroll() {
            if (backToTop) {
                if (window.scrollY > 450) backToTop.classList.add('show');
                else backToTop.classList.remove('show');
            }
            updateActiveToc();
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        if (backToTop) {
            backToTop.addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        }
        updateActiveToc();
    })();
</script>
</main>

<?php get_footer(); ?>
