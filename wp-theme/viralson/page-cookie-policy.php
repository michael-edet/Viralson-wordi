<?php
/**
 * Template Name: Cookie Policy Page
 * Description: EU/GDPR Cookie Policy & Interactive Consent Preferences
 *
 * @package ViralSon
 */
get_header();
?>

<main>

<section class="page-header">
    <div class="container">
        <span class="post-category" style="background:#e8f4fc; color:#2980b9; margin-bottom: 0.8rem;">GDPR &amp; ePrivacy Notice</span>
        <h1>Cookie Policy</h1>
        <p>How Viral Son uses cookies and local browser storage to deliver Dark Mode, site features, and Google AdSense advertising—plus controls to manage your preferences.</p>
        <div class="last-updated">
            <i class="far fa-calendar-check"></i>
            <span>Last Updated: November 24, 2026</span>
        </div>
    </div>
</section>

<section class="intro-notice">
    <div class="container">
        <div class="notice-box">
            <i class="fas fa-cookie-bite"></i>
            <div>
                <h3>Transparency for European &amp; Global Visitors</h3>
                <p>In accordance with the EU ePrivacy Directive, GDPR, UK GDPR, and global privacy standards, this Cookie Policy explains every cookie and browser storage key used on Viral Son, why it exists, and how you can opt out at any time.</p>
            </div>
        </div>
    </div>
</section>

<section class="legal-section">
    <div class="container legal-container">
        <aside class="toc" aria-label="Table of Contents">
            <h3 class="toc-title"><i class="fas fa-list-ul"></i> On This Page</h3>
            <ul class="toc-list">
                <li><a href="#section-1" class="toc-link active">1. What Are Cookies?</a></li>
                <li><a href="#section-2" class="toc-link">2. Cookies We Use</a></li>
                <li><a href="#section-3" class="toc-link">3. Google AdSense Cookies</a></li>
                <li><a href="#section-4" class="toc-link">4. Manage Preferences</a></li>
                <li><a href="#section-5" class="toc-link">5. Browser Controls</a></li>
                <li><a href="#section-6" class="toc-link">6. Contact Us</a></li>
            </ul>
        </aside>

        <article class="legal-body">
            <section class="legal-block" id="section-1">
                <h2><span class="legal-number">1</span> What Are Cookies &amp; Local Storage?</h2>
                <p>Cookies are small text files stored on your device by websites you visit. Modern browsers also provide <code>localStorage</code> and <code>sessionStorage</code> to remember user interface preferences (such as Light/Dark theme) locally on your browser without sending unnecessary tracking requests.</p>
            </section>

            <section class="legal-block" id="section-2">
                <h2><span class="legal-number">2</span> Detailed Breakdown of Cookies &amp; Storage Used</h2>
                <div class="policy-table-wrapper">
                    <table class="policy-table">
                        <thead>
                            <tr>
                                <th>Name / Key</th>
                                <th>Provider</th>
                                <th>Category</th>
                                <th>Purpose</th>
                                <th>Retention</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>viralson_theme</code></td>
                                <td>Viral Son (First-Party)</td>
                                <td>Essential / Preference</td>
                                <td>Stores your Light or Dark Mode selection to prevent screen flicker.</td>
                                <td>Persistent (until cleared)</td>
                            </tr>
                            <tr>
                                <td><code>viralson_cookie_consent</code></td>
                                <td>Viral Son (First-Party)</td>
                                <td>Essential</td>
                                <td>Records your cookie consent choices made on this page.</td>
                                <td>12 months</td>
                            </tr>
                            <tr>
                                <td><code>viralson_newsletter_suppressed</code></td>
                                <td>Viral Son (First-Party)</td>
                                <td>Preference</td>
                                <td>Remembers if you dismissed or subscribed to the newsletter modal so we don’t re-prompt you.</td>
                                <td>14–60 days</td>
                            </tr>
                            <tr>
                                <td><code>viralson_anchor_dismissed</code></td>
                                <td>Viral Son (First-Party)</td>
                                <td>Preference</td>
                                <td>Remembers if you closed the bottom banner during your current browsing session.</td>
                                <td>Session</td>
                            </tr>
                            <tr>
                                <td><code>IDE</code>, <code>__gads</code>, <code>__gpi</code></td>
                                <td>Google AdSense / DoubleClick</td>
                                <td>Advertising</td>
                                <td>Delivers relevant advertisements, limits ad repetition, and prevents invalid ad-click fraud.</td>
                                <td>Up to 13 months</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="legal-block" id="section-3">
                <h2><span class="legal-number">3</span> Third-Party &amp; Google Advertising Cookies</h2>
                <p>Google, as a third-party vendor on Viral Son, uses advertising cookies to serve ads based on your prior visits to this website or other websites across the internet. Visitors in the EEA and UK may choose whether to allow personalized advertising cookies or receive non-personalized contextual ads.</p>
                <ul>
                    <li>Opt out of personalized Google ads at <a href="https://adssettings.google.com/" target="_blank" rel="noopener noreferrer" class="inline-link">Google Ads Settings</a>.</li>
                    <li>Manage industry-wide advertising opt-outs via <a href="https://www.youronlinechoices.eu/" target="_blank" rel="noopener noreferrer" class="inline-link">YourOnlineChoices (EU)</a> or <a href="https://www.aboutads.info/choices/" target="_blank" rel="noopener noreferrer" class="inline-link">AboutAds (US)</a>.</li>
                </ul>
            </section>

            <section class="legal-block" id="section-4">
                <h2><span class="legal-number">4</span> Manage Your Cookie Preferences</h2>
                <p>Use the interactive controls below to save your cookie consent settings for this browser:</p>
                <div class="cookie-pref-panel" id="cookiePrefPanel">
                    <div class="cookie-pref-row">
                        <div>
                            <strong>Strictly Necessary &amp; Theme Storage</strong>
                            <p style="margin:0; font-size:0.88rem; color:var(--text-light);">Required for site navigation, Dark Mode, and saving your consent decision.</p>
                        </div>
                        <span style="font-size:0.85rem; font-weight:700; color:var(--green);">Always Active</span>
                    </div>
                    <div class="cookie-pref-row">
                        <div>
                            <label for="prefAnalytics" style="font-weight:700; cursor:pointer;">Audience &amp; Performance Measurement</label>
                            <p style="margin:0; font-size:0.88rem; color:var(--text-light);">Helps our editors understand which articles and topics readers value most.</p>
                        </div>
                        <input type="checkbox" id="prefAnalytics" checked style="width:20px; height:20px; accent-color:var(--primary-blue); cursor:pointer;">
                    </div>
                    <div class="cookie-pref-row">
                        <div>
                            <label for="prefAds" style="font-weight:700; cursor:pointer;">Personalized Advertising (Google AdSense)</label>
                            <p style="margin:0; font-size:0.88rem; color:var(--text-light);">Allows Google AdSense to tailor ads; disabling defaults to contextual ads.</p>
                        </div>
                        <input type="checkbox" id="prefAds" checked style="width:20px; height:20px; accent-color:var(--primary-blue); cursor:pointer;">
                    </div>
                    <div style="display:flex; flex-wrap:wrap; gap:0.75rem; margin-top:1.25rem; align-items:center;">
                        <button type="button" class="btn btn-green" id="saveCookiePrefsBtn"><i class="fas fa-check"></i> Save Preferences</button>
                        <button type="button" class="btn btn-outline" id="rejectOptionalCookiesBtn">Essential Only</button>
                        <span id="cookiePrefsStatus" style="font-size:0.9rem; color:var(--green); font-weight:600; display:none;"></span>
                    </div>
                </div>
            </section>

            <section class="legal-block" id="section-5">
                <h2><span class="legal-number">5</span> Disabling Cookies in Your Browser</h2>
                <p>You can also block or delete cookies directly through your browser settings:</p>
                <ul>
                    <li><strong>Google Chrome:</strong> Settings &rarr; Privacy and security &rarr; Third-party cookies</li>
                    <li><strong>Mozilla Firefox:</strong> Settings &rarr; Privacy &amp; Security &rarr; Cookies and Site Data</li>
                    <li><strong>Apple Safari:</strong> Settings &rarr; Privacy &rarr; Manage Website Data</li>
                    <li><strong>Microsoft Edge:</strong> Settings &rarr; Cookies and site permissions</li>
                </ul>
            </section>

            <section class="legal-block" id="section-6">
                <h2><span class="legal-number">6</span> Questions About Cookies</h2>
                <p>If you have any questions regarding this Cookie Policy or our <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="inline-link">Privacy Policy</a>, contact us at <a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a>.</p>
            </section>
        </article>
    </div>
</section>
<script>
    (function() {
        const analyticsBox = document.getElementById('prefAnalytics');
        const adsBox = document.getElementById('prefAds');
        const saveBtn = document.getElementById('saveCookiePrefsBtn');
        const rejectBtn = document.getElementById('rejectOptionalCookiesBtn');
        const statusEl = document.getElementById('cookiePrefsStatus');

        try {
            const saved = localStorage.getItem('viralson_cookie_consent');
            if (saved) {
                const parsed = JSON.parse(saved);
                if (analyticsBox && typeof parsed.analytics === 'boolean') analyticsBox.checked = parsed.analytics;
                if (adsBox && typeof parsed.ads === 'boolean') adsBox.checked = parsed.ads;
            }
        } catch (e) {}

        function persistPrefs(analytics, ads, label) {
            const payload = { necessary: true, analytics: !!analytics, ads: !!ads, updatedAt: new Date().toISOString() };
            try {
                localStorage.setItem('viralson_cookie_consent', JSON.stringify(payload));
                document.cookie = 'viralson_cookie_consent=' + encodeURIComponent(JSON.stringify(payload)) + ';path=/;max-age=31536000;SameSite=Lax';
            } catch (e) {}
            if (statusEl) {
                statusEl.textContent = label;
                statusEl.style.display = 'inline';
                setTimeout(() => { statusEl.style.display = 'none'; }, 5000);
            }
        }

        if (saveBtn) {
            saveBtn.addEventListener('click', function() {
                persistPrefs(analyticsBox ? analyticsBox.checked : true, adsBox ? adsBox.checked : true, 'Preferences saved for this browser.');
            });
        }
        if (rejectBtn) {
            rejectBtn.addEventListener('click', function() {
                if (analyticsBox) analyticsBox.checked = false;
                if (adsBox) adsBox.checked = false;
                persistPrefs(false, false, 'Essential-only preferences saved.');
            });
        }
    })();
</script>

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
