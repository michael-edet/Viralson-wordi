

    <!-- Pre-Footer Billboard Google Ads Scene (On Every Page) -->
    
    <div class="container ad-billboard-container">
        
        

<!-- Google Ads Scene: Pre-Footer Large Billboard Banner (970x250 / Responsive) -->
<div class="google-ad-wrapper billboard-wrapper" data-ad-type="billboard">
    <div class="google-ad-header">
        <span class="ad-label">SPONSORED SHOWCASE</span>
        <a href="https://adssettings.google.com/" target="_blank" rel="noopener noreferrer" class="adchoices-link" title="Manage Google Ads">
            <i class="fab fa-google"></i> <span>Google Ad Services</span>
        </a>
    </div>

    <!-- Google AdSense Tag -->
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-9481237418920194" data-ad-slot="9182736450" data-ad-format="auto" data-full-width-responsive="true"></ins>

    <!-- Visual Ad Scene Display -->
    <div class="ad-creative-scene billboard-scene">
        <div class="billboard-scene-inner">
            <div class="billboard-text">
                <span class="billboard-kicker"><i class="fas fa-shield-alt"></i> Official Partner Feature</span>
                <h3 class="billboard-title">Next-Generation Privacy &amp; Threat Protection with NordVPN</h3>
                <p class="billboard-desc">Protect your browsing telemetry across public Wi-Fi networks with high-speed 10Gbps servers in 111 countries and built-in malware filtration.</p>
                <div class="billboard-features">
                    <span><i class="fas fa-check-circle"></i> Zero-logs audited</span>
                    <span><i class="fas fa-check-circle"></i> Threat Protection Pro</span>
                    <span><i class="fas fa-check-circle"></i> 30-day money-back guarantee</span>
                </div>
            </div>
            <div class="billboard-action">
                <a href="https://nordvpn.com/" target="_blank" rel="noopener noreferrer" class="billboard-cta-btn">
                    <span>Get 71% Off + 3 Months</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <span class="billboard-disclaimer">Special offer for Viral Son readers</span>
            </div>
        </div>
    </div>
</div>



    </div>
    

    <!-- Dynamic Footer -->
    <!-- Dynamic Footer Component -->
<footer>
    <div class="container">
        <div class="footer-container">
            <!-- Brand Column -->
            <div class="footer-col">
                <a href="index.html" class="logo" style="margin-bottom: 1.2rem; display: inline-flex;">
                    <div class="logo-icon" style="background: rgba(255,255,255,0.18);">VS</div>
                    <div class="logo-text" style="color: #ffffff;">Viral Son</div>
                </a>
                <p style="font-size: 0.95rem; opacity: 0.85; margin-bottom: 1.2rem;">
                    Your trusted destination for trending news, deep-dive technology insights, lifestyle guides, entertainment culture, and vibrant community discussions.
                </p>
                <div class="social-links">
                    <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li class="footer-link"><a href="index.html">Home</a></li>
                    <li class="footer-link"><a href="news/index.html">News</a></li>
                    <li class="footer-link"><a href="entertainment/index.html">Entertainment</a></li>
                    <li class="footer-link"><a href="technology/index.html">Technology</a></li>
                    <li class="footer-link"><a href="sports/index.html">Sports</a></li>
                    <li class="footer-link"><a href="lifestyle/index.html">Lifestyle</a></li>
                    <li class="footer-link"><a href="community/index.html">Community Hub</a></li>
                    <li class="footer-link"><a href="about/index.html">About Us</a></li>
                    <li class="footer-link"><a href="contact/index.html">Contact Us</a></li>
                    <li class="footer-link"><a href="terms/index.html">Terms &amp; Conditions</a></li>
                </ul>
            </div>

            <!-- Dynamic Category Column -->
            <div class="footer-col">
                
                    <h3>Top Sections</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="news/index.html">Latest News</a></li>
                        <li class="footer-link"><a href="technology/index.html">Tech Horizons</a></li>
                        <li class="footer-link"><a href="entertainment/index.html">Entertainment</a></li>
                        <li class="footer-link"><a href="lifestyle/index.html">Lifestyle &amp; Wellness</a></li>
                        <li class="footer-link"><a href="community/index.html">Community Voices</a></li>
                    </ul>
                
            </div>

            <!-- Contact & Newsletter Column -->
            <div class="footer-col">
                <h3>Contact &amp; Updates</h3>
                <p style="font-size: 0.95rem; margin-bottom: 0.4rem;">
                    <strong>Department:</strong> 
                    
                        info@viralson.com
                    
                </p>
                <p style="font-size: 0.85rem; opacity: 0.8; margin-bottom: 1rem;">
                    Get curated daily digests and viral stories delivered straight to your inbox.
                </p>
                <form class="footer-form" onsubmit="event.preventDefault(); const email = this.querySelector('input').value; alert('Thank you for subscribing with ' + email + '!'); this.reset();">
                    <div class="form-group" style="margin-bottom: 0.6rem;">
                        <input type="email" class="form-control" placeholder="Enter your email" required="" style="padding: 10px; font-size: 0.9rem; border-radius: 4px;">
                    </div>
                    <button type="submit" class="btn" style="width: 100%; padding: 10px; font-size: 0.9rem;">Subscribe Now</button>
                </form>
            </div>
        </div>

        <div class="copyright">
            <p>© <span id="footerCurrentYear">2026</span> Viral Son. All rights reserved. Built with 11ty for GitHub &amp; Netlify.</p>
        </div>
    </div>
</footer>

<!-- Auto-Update Yearly Date Script -->
<script>
    (function() {
        const yearEl = document.getElementById('footerCurrentYear');
        if (yearEl) {
            yearEl.textContent = new Date().getFullYear();
        }
    })();
</script>


    <!-- Sitewide Newsletter Popup Modal -->
    <!-- Triggered Newsletter Signup Modal with Blur Backdrop & Theme Matching -->
<div class="newsletter-modal-backdrop" id="newsletterModalBackdrop" role="dialog" aria-modal="true" aria-hidden="true" style="display: none;">
    <div class="newsletter-modal-card" id="newsletterModalCard">
        <!-- Prominent Close Button -->
        <button type="button" class="newsletter-close-btn" id="newsletterCloseBtn" aria-label="Close newsletter popup" title="Close (ESC)">
            <i class="fas fa-times"></i>
        </button>

        <!-- Badge -->
        <div class="newsletter-modal-badge">
            <i class="fas fa-bolt" style="margin-right: 5px; color: var(--primary-blue);"></i> Daily Viral Dispatch
        </div>

        <h3 class="newsletter-modal-title">Stay Ahead of the Curve</h3>
        <p class="newsletter-modal-desc">
            Get our editors' top investigative scoops, breaking tech &amp; sports reports, and cultural premieres delivered directly to your inbox every morning.
        </p>

        <!-- Newsletter Submission Form -->
        <form id="newsletterModalForm" class="newsletter-modal-form">
            <div class="newsletter-input-group">
                <input type="email" id="newsletterModalEmail" class="newsletter-modal-input" placeholder="Enter your email address" required="" autocomplete="email">
                <button type="submit" class="btn newsletter-modal-submit" id="newsletterModalSubmit">
                    <span>Subscribe Free</span>
                    <i class="fas fa-arrow-right" style="margin-left: 6px;"></i>
                </button>
            </div>
            <p class="newsletter-privacy-note">
                <i class="fas fa-shield-alt" style="color: var(--green); margin-right: 4px;"></i> Zero spam. One-click unsubscribe anytime.
            </p>
        </form>

        <!-- Success Confirmation State (shown post-submit) -->
        <div id="newsletterSuccessState" class="newsletter-success-state" style="display: none;">
            <i class="fas fa-check-circle" style="font-size: 2.5rem; color: var(--green); margin-bottom: 0.8rem;"></i>
            <h4 style="font-size: 1.3rem; margin-bottom: 0.4rem; color: var(--text-dark);">Welcome to Viral Son!</h4>
            <p style="font-size: 0.92rem; color: var(--text-light);">You're on the VIP list. We've queued your first morning briefing.</p>
        </div>
    </div>
</div>

<script>
    (function() {
        const COOKIE_NAME = 'viralson_newsletter_suppressed';
        const SUPPRESSION_DAYS = 14;

        // Check if on home/index page
        const path = window.location.pathname;
        const isIndexPage = path === '/' || path === '/index.html' || path === '';

        // Only trigger on the index page
        if (!isIndexPage) return;

        // Cookie & Storage Helpers
        function getCookie(name) {
            try {
                const match = document.cookie.match(new RegExp('(^|;\\s*)(' + name + ')=([^;]*)'));
                return match ? decodeURIComponent(match[3]) : null;
            } catch (e) {
                return null;
            }
        }

        function setCookie(name, value, days) {
            try {
                const d = new Date();
                d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
                document.cookie = name + '=' + encodeURIComponent(value) + ';expires=' + d.toUTCString() + ';path=/;SameSite=Lax';
                localStorage.setItem(name, 'true');
            } catch (e) {}
        }

        function isSuppressed() {
            try {
                if (getCookie(COOKIE_NAME) === 'true') return true;
                if (localStorage.getItem(COOKIE_NAME) === 'true') return true;
            } catch (e) {}
            return false;
        }

        if (isSuppressed()) return;

        const backdrop = document.getElementById('newsletterModalBackdrop');
        const card = document.getElementById('newsletterModalCard');
        const closeBtn = document.getElementById('newsletterCloseBtn');
        const form = document.getElementById('newsletterModalForm');
        const successState = document.getElementById('newsletterSuccessState');
        const emailInput = document.getElementById('newsletterModalEmail');

        if (!backdrop || !card) return;

        let modalShown = false;
        let timer = null;

        function showModal() {
            if (modalShown || isSuppressed()) return;
            modalShown = true;
            if (timer) clearTimeout(timer);
            window.removeEventListener('scroll', checkScroll);

            backdrop.style.display = 'flex';
            backdrop.setAttribute('aria-hidden', 'false');
            setTimeout(() => {
                backdrop.classList.add('visible');
                if (emailInput) emailInput.focus();
            }, 30);
        }

        function closeModal(suppressDays = SUPPRESSION_DAYS) {
            setCookie(COOKIE_NAME, 'true', suppressDays);
            backdrop.classList.remove('visible');
            backdrop.setAttribute('aria-hidden', 'true');
            setTimeout(() => {
                backdrop.style.display = 'none';
            }, 350);
        }

        // Trigger 1: 50% Scroll of page content
        function checkScroll() {
            if (modalShown) return;
            const scrollTotal = document.documentElement.scrollHeight - window.innerHeight;
            if (scrollTotal <= 0) return;
            const currentScroll = window.scrollY || window.pageYOffset;
            if ((currentScroll / scrollTotal) >= 0.50) {
                showModal();
            }
        }

        // Trigger 2: Exactly 30 seconds on index page
        timer = setTimeout(showModal, 30000);

        window.addEventListener('scroll', checkScroll, { passive: true });

        // Close Handlers
        if (closeBtn) {
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                closeModal(SUPPRESSION_DAYS);
            });
        }

        backdrop.addEventListener('click', function(e) {
            if (e.target === backdrop) {
                closeModal(SUPPRESSION_DAYS);
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && backdrop.classList.contains('visible')) {
                closeModal(SUPPRESSION_DAYS);
            }
        });

        // Form Submit Handler
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = emailInput.value.trim();
                if (!email) return;

                form.style.display = 'none';
                if (successState) successState.style.display = 'block';

                setCookie(COOKIE_NAME, 'true', 60);

                setTimeout(function() {
                    closeModal(60);
                }, 2600);
            });
        }
    })();
</script>


    <!-- Sticky Bottom Viewport Floating Google Ad Anchor -->
    
        
        

<!-- Google Ads Scene: Sticky Bottom Viewport Floating Anchor Ad -->
<div class="google-ad-anchor-container" id="googleAdAnchor">
    <div class="google-ad-anchor-bar">
        <div class="anchor-ad-content">
            <div class="anchor-ad-badge">
                <span class="ad-label">AD</span>
                <a href="https://adssettings.google.com/" target="_blank" rel="noopener noreferrer" class="anchor-adchoices" title="Ads by Google">
                    <svg viewBox="0 0 12 12" width="10" height="10"><path fill="currentColor" d="M1 1h10v10H1V1zm1 1v8h8V2H2zm2 2h4v1H4V4zm0 2h4v1H4V6zm0 2h2v1H4V8z"></path></svg>
                </a>
            </div>
            <div class="anchor-ad-text">
                <strong>Google Developers:</strong> Accelerate your full-stack roadmap with Firebase Data Connect and Studio tooling.
            </div>
            <a href="https://firebase.google.com/" target="_blank" rel="noopener noreferrer" class="anchor-ad-cta">
                Try Free →
            </a>
        </div>
        <button type="button" class="anchor-close-btn" onclick="dismissAnchorAd()" aria-label="Close Ad">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>


    

    <!-- Safe Google AdSense & Anchor Control Script -->
    <script>
        (function() {
            // Dismiss anchor ad
            window.dismissAnchorAd = function() {
                const anchor = document.getElementById('googleAdAnchor');
                if (anchor) {
                    anchor.classList.add('hidden');
                    sessionStorage.setItem('viralson_anchor_dismissed', 'true');
                }
            };

            // Check if dismissed in this session
            if (sessionStorage.getItem('viralson_anchor_dismissed') === 'true') {
                const anchor = document.getElementById('googleAdAnchor');
                if (anchor) anchor.classList.add('hidden');
            }

            // Safe push for Google AdSense slots without breaking if adblocker is present
            try {
                const adSlots = document.querySelectorAll('.adsbygoogle');
                if (adSlots.length > 0 && window.adsbygoogle) {
                    adSlots.forEach(() => {
                        try {
                            (window.adsbygoogle = window.adsbygoogle || []).push({});
                        } catch(e) {}
                    });
                }
            } catch(e) {}
        })();
    </script>


<?php wp_footer(); ?>
</body>
<!-- Mirrored from https://viralson.netlify.app/ by HTTrack Website Copier/3.x [XR&CO], Mon, 19 Oct 2026 07:08:58 GMT -->
</html>