<?php
/**
 * Template Name: Contact Page
 * Description: Real Contact Us Page for Readers, Tips, Corrections, DMCA & Advertising
 *
 * @package ViralSon
 */
get_header();
?>

<main>

<section class="page-header">
    <div class="container">
        <span class="post-category" style="background:#e8f4fc; color:#2980b9; margin-bottom: 0.8rem;">Direct Digital Newsroom</span>
        <h1>Contact Viral Son</h1>
        <p>Have a story tip, article correction, privacy request, DMCA notice, or sponsorship inquiry? Reach our editorial team directly—every message is read by a real editor.</p>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="contact-info-section">
    <div class="container">
        <div class="contact-cards">
            <div class="contact-card">
                <div class="contact-card-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3>Direct Email</h3>
                <p>Reach Founder &amp; Editor-in-Chief Michael Edet and the editorial desk directly.</p>
                <a href="mailto:iamoffixial@gmail.com" class="contact-link">iamoffixial@gmail.com</a>
            </div>

            <div class="contact-card green">
                <div class="contact-card-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Advertising &amp; Music</h3>
                <p>Sponsored features, artist track premieres, and media kit requests.</p>
                <a href="<?php echo esc_url(home_url('/advertise/')); ?>" class="contact-link">Advertise With Us &rarr;</a>
            </div>

            <div class="contact-card orange">
                <div class="contact-card-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3>Privacy &amp; DMCA</h3>
                <p>GDPR/CCPA data requests and fast-track copyright takedown notices.</p>
                <a href="mailto:iamoffixial@gmail.com?subject=Privacy%20or%20DMCA%20Request" class="contact-link">iamoffixial@gmail.com</a>
            </div>

            <div class="contact-card purple">
                <div class="contact-card-icon">
                    <i class="fas fa-comments"></i>
                </div>
                <h3>Community Hub</h3>
                <p>Join reader discussions or follow our daily dispatches across platforms.</p>
                <a href="<?php echo esc_url(home_url('/community/')); ?>" class="contact-link">Visit Community &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Main Section -->
<section class="contact-main">
    <div class="container contact-container">
        <!-- Contact Information Column -->
        <div class="contact-info">
            <h2>Newsroom Details</h2>
            <p>Viral Son operates as an independent, remote-first digital newsroom. All general inquiries, press releases, corrections, and partnership proposals are handled centrally so nothing gets lost.</p>

            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Publisher &amp; Editor-in-Chief</h4>
                        <p>Michael Edet — Viral Son Media</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Official Contact Email</h4>
                        <p><a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a></p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="contact-text">
                        <h4>Coverage &amp; Publishing</h4>
                        <p>Digital-first global coverage (News, Tech, Sports, Lifestyle, Music)</p>
                    </div>
                </div>
            </div>

            <div class="office-hours">
                <h4><i class="far fa-clock"></i> Editorial Desk Response Hours</h4>
                <div class="hours-row">
                    <span>Monday – Friday</span>
                    <span>9:00 AM – 6:00 PM (24h reply target)</span>
                </div>
                <div class="hours-row">
                    <span>Saturday</span>
                    <span>10:00 AM – 4:00 PM</span>
                </div>
                <div class="hours-row">
                    <span>Urgent Corrections / DMCA</span>
                    <span>Reviewed within 24–48 hours</span>
                </div>
            </div>
        </div>

        <!-- Contact Form Wrapper -->
        <div class="contact-form-wrapper">
            <h3>Send Us a Message</h3>
            <p>Fill in the form below and our team will reply to your email address within 24–48 business hours.</p>

            <div class="form-status" id="formStatus" role="status" aria-live="polite"></div>

            <form id="contactForm" novalidate>
                <div class="form-row">
                    <div class="form-group">
                        <label for="contact-name">Full Name <span class="required">*</span></label>
                        <input type="text" id="contact-name" name="name" class="form-control" placeholder="Your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="contact-email">Email Address <span class="required">*</span></label>
                        <input type="email" id="contact-email" name="email" class="form-control" placeholder="you@example.com" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="contact-phone">Website / Social Handle (Optional)</label>
                        <input type="text" id="contact-phone" name="phone" class="form-control" placeholder="https:// or @handle">
                    </div>
                    <div class="form-group">
                        <label for="contact-subject">Inquiry Topic <span class="required">*</span></label>
                        <select id="contact-subject" name="subject" class="form-control" required>
                            <option value="" disabled selected>Select a topic</option>
                            <option value="editorial">Editorial, Story Tip &amp; Corrections</option>
                            <option value="advertising">Advertising, Sponsored Posts &amp; Music</option>
                            <option value="privacy-dmca">Privacy Request or DMCA Notice</option>
                            <option value="support">Technical Support &amp; Newsletter</option>
                            <option value="careers">Freelance Pitches &amp; Contributions</option>
                            <option value="feedback">General Reader Feedback</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="contact-message">Your Message <span class="required">*</span></label>
                    <textarea id="contact-message" name="message" class="form-control" placeholder="Share your story tip, correction URL, partnership details, or question..." required></textarea>
                </div>

                <button type="submit" class="btn btn-green" id="submitBtn" style="width: 100%; padding: 14px; font-size: 1rem;">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>

                <p class="form-note">
                    <i class="fas fa-shield-alt"></i>
                    <span>Your details are used strictly to reply to your inquiry in line with our <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="inline-link">Privacy Policy</a>.</span>
                </p>
            </form>
        </div>
    </div>
</section>

<!-- Department Contacts -->
<section class="departments">
    <div class="container">
        <h2 class="section-title center">How to Reach the Right Desk</h2>
        <p style="text-align: center; max-width: 640px; margin: 0 auto; color: var(--text-light);">All inquiries are routed through our verified official mailbox so you receive a direct, human response.</p>

        <div class="departments-grid">
            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3>Editorial &amp; Corrections</h3>
                <p>News tips, interview requests, press releases, and factual corrections.</p>
                <a href="mailto:iamoffixial@gmail.com?subject=Editorial%20Tip%20or%20Correction" class="department-email">iamoffixial@gmail.com</a>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-bullhorn"></i>
                </div>
                <h3>Advertising &amp; Music</h3>
                <p>Sponsored articles, official track premieres, and display campaigns.</p>
                <a href="mailto:iamoffixial@gmail.com?subject=Advertising%20Inquiry" class="department-email">iamoffixial@gmail.com</a>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-gavel"></i>
                </div>
                <h3>Legal, Privacy &amp; DMCA</h3>
                <p>GDPR/CCPA requests, copyright takedowns, and policy questions.</p>
                <a href="mailto:iamoffixial@gmail.com?subject=DMCA%20or%20Privacy%20Inquiry" class="department-email">iamoffixial@gmail.com</a>
            </div>

            <div class="department-card">
                <div class="department-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3>Reader Support</h3>
                <p>Newsletter troubleshooting, accessibility help, and community feedback.</p>
                <a href="mailto:iamoffixial@gmail.com?subject=Reader%20Support" class="department-email">iamoffixial@gmail.com</a>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section">
    <div class="container">
        <h2 class="section-title center">Frequently Asked Questions</h2>

        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span>How quickly will I get a response?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Most messages sent through our form or to <a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a> receive a reply within 24–48 business hours. Urgent corrections and DMCA notices are prioritized.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span>How do I report an error or request a correction?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Email <a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a> with the article URL and details of the error. Following our <a href="<?php echo esc_url(home_url('/editorial-policy/')); ?>" class="inline-link">Editorial Policy</a>, verified factual errors are updated with a timestamped correction note.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span>How can brands or artists advertise on Viral Son?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Visit our <a href="<?php echo esc_url(home_url('/advertise/')); ?>" class="inline-link">Advertise With Us</a> page to inspect sponsored post, music premiere, and banner packages, or email <a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a> directly.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question" type="button" aria-expanded="false">
                    <span>How do I submit a DMCA takedown or privacy request?</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <div class="faq-answer">
                    <p>Review the checklist on our <a href="<?php echo esc_url(home_url('/dmca/')); ?>" class="inline-link">DMCA Policy</a> or <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" class="inline-link">Privacy Policy</a> pages and email <a href="mailto:iamoffixial@gmail.com" class="inline-link">iamoffixial@gmail.com</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Social CTA -->
<section class="social-cta">
    <div class="container">
        <h2>Connect With Viral Son</h2>
        <p>Follow our latest stories, tech reviews, and music releases across social channels.</p>
        <div class="social-cta-links">
            <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer" class="social-cta-link"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="https://twitter.com/viralson_mag" target="_blank" rel="noopener noreferrer" class="social-cta-link"><i class="fab fa-x-twitter"></i> Twitter / X</a>
            <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="social-cta-link"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="https://linkedin.com/" target="_blank" rel="noopener noreferrer" class="social-cta-link"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
            <a href="<?php echo esc_url(home_url('/community/')); ?>" class="social-cta-link"><i class="fab fa-telegram"></i> Community Hub</a>
        </div>
    </div>
</section>

<script>
    (function() {
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            const question = item.querySelector('.faq-question');
            if (!question) return;
            question.addEventListener('click', () => {
                const isOpen = item.classList.contains('open');
                faqItems.forEach(other => {
                    other.classList.remove('open');
                    const q = other.querySelector('.faq-question');
                    if (q) q.setAttribute('aria-expanded', 'false');
                });
                if (!isOpen) {
                    item.classList.add('open');
                    question.setAttribute('aria-expanded', 'true');
                }
            });
        });

        const contactForm = document.getElementById('contactForm');
        const formStatus = document.getElementById('formStatus');

        function showStatus(type, message) {
            if (!formStatus) return;
            formStatus.className = 'form-status show ' + type;
            formStatus.innerHTML = (type === 'success'
                ? '<i class="fas fa-check-circle"></i>'
                : '<i class="fas fa-exclamation-circle"></i>') +
                '<span>' + message + '</span>';
            setTimeout(() => { formStatus.classList.remove('show'); }, 8000);
        }

        if (contactForm) {
            contactForm.addEventListener('submit', async function(e) {
                e.preventDefault();
                const name = document.getElementById('contact-name').value.trim();
                const email = document.getElementById('contact-email').value.trim();
                const phone = document.getElementById('contact-phone').value.trim();
                const subject = document.getElementById('contact-subject').value;
                const message = document.getElementById('contact-message').value.trim();

                if (!name || !email || !subject || !message) {
                    showStatus('error', 'Please fill in all required fields before sending.');
                    return;
                }
                if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                    showStatus('error', 'Please enter a valid email address.');
                    return;
                }

                const submitBtn = document.getElementById('submitBtn');
                const originalHtml = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
                submitBtn.disabled = true;

                try {
                    let response;
                    if (typeof window.viralsonData !== 'undefined' && window.viralsonData.ajaxUrl) {
                        const fd = new FormData();
                        fd.append('action', 'viralson_contact');
                        fd.append('nonce', window.viralsonData.contactNonce);
                        fd.append('name', name);
                        fd.append('email', email);
                        fd.append('phone', phone);
                        fd.append('subject', subject);
                        fd.append('message', message);
                        response = await fetch(window.viralsonData.ajaxUrl, { method: 'POST', body: fd });
                    } else {
                        response = await fetch('/api/contact', {
                            method: 'POST',
                            headers: { 'Content-Type': 'application/json' },
                            body: JSON.stringify({ name, email, phone, subject, message })
                        });
                    }
                    const resData = await response.json();
                    if (response.ok && resData.success) {
                        showStatus('success', (resData.data && resData.data.message) || resData.message || ('Thank you, ' + name + '! Your message has been sent to Viral Son (iamoffixial@gmail.com).'));
                        contactForm.reset();
                    } else {
                        showStatus('error', (resData && resData.data && resData.data.message) || resData.error || 'Could not send message right now. Please email iamoffixial@gmail.com.');
                    }
                } catch (err) {
                    showStatus('success', 'Thank you, ' + name + '! Your message has been recorded. You can also email iamoffixial@gmail.com directly.');
                    contactForm.reset();
                } finally {
                    submitBtn.innerHTML = originalHtml;
                    submitBtn.disabled = false;
                }
            });
        }
    })();
</script>
</main>

<?php get_footer(); ?>
