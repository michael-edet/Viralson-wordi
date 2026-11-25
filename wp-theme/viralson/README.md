# Viral Son — WordPress Theme (Production Ready)

Welcome to the **Viral Son** WordPress Theme, an independent editorial publishing and lossless music release theme built for news, technology, sports, lifestyle, and AdSense-ready publishing.

---

## Quick Installation Guide

### Method A: Install via WordPress Admin (Recommended)
1. Download `viralson-theme.zip` using the **"Download viralson-theme.zip"** button in the preview bar.
2. Log in to your WordPress Admin dashboard (`/wp-admin`).
3. Navigate to **Appearance > Themes > Add New Theme > Upload Theme**.
4. Upload `viralson-theme.zip`, click **Install Now**, and click **Activate**.

### Method B: Upload via FTP / cPanel File Manager
1. Extract `viralson-theme.zip`.
2. Upload the `viralson` folder to `/wp-content/themes/viralson/`.
3. Activate **Viral Son** under **Appearance > Themes**.

---

## Automatic Pages & AdSense Compliance Setup

Upon theme activation (`after_switch_theme`), Viral Son automatically provisions the following pages with dedicated page templates:
- **About Us** (`/about/`) — Editorial mission, ownership (Michael Edet), and newsroom desks
- **Contact Us** (`/contact/`) — Direct contact email (`iamoffixial@gmail.com`) and AJAX contact form
- **Privacy Policy** (`/privacy-policy/`) — Cookies, Google AdSense / DoubleClick disclosures, GDPR & CCPA rights
- **Cookie Policy** (`/cookie-policy/`) — Cookie inventory table and interactive consent preferences
- **Disclaimer** (`/disclaimer/`) — Informational content, third-party links, and ad disclosures
- **Terms and Conditions** (`/terms/`) — Site rules, intellectual property, and downloadable media licensing
- **DMCA & Copyright Policy** (`/dmca/`) — 17 U.S.C. § 512 takedown & counter-notice procedure
- **Editorial Policy** (`/editorial-policy/`) — Sourcing, fact-checking, corrections, and ad-editorial firewall
- **Advertise With Us** (`/advertise/`) — Sponsorship packages, media kit specs, and inquiry form
- **Affiliate Disclosure** (`/affiliate-disclosure/`) — Transparent FTC 16 CFR Part 255 disclosure

All footer links connect automatically via `home_url()` permalinks. Ensure **Settings > Permalinks** is set to **Post name** (`/%postname%/`) so clean URLs resolve immediately.

---

## Custom Post Type: Music & Audio Releases

The theme registers **Music & Audio** (`audio_release`) with genre taxonomy and metabox fields for Artist/Producer, Stream Preview URL, Track Duration, 320kbps MP3 download link, and 24-bit FLAC download link.

---

## Requirements
- WordPress 5.8 or higher
- PHP 7.4 or higher (tested on PHP 8.1, 8.2, and 8.3)
- MySQL 5.7+ or MariaDB 10.3+
