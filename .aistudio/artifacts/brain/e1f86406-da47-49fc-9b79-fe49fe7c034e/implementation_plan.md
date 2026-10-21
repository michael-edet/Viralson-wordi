# Viral Son WordPress Theme Engine & Live Preview Studio

A production-grade, classic PHP WordPress theme (`viralson-theme`) designed for real-world hosting deployment (shared hosting, cPanel, Apache, Nginx, or managed WordPress), paired with an in-browser live preview workspace, interactive WordPress file inspector, and one-click `.zip` theme exporter.

### User Review & Critical Decisions

> [!IMPORTANT]
> The architectural direction and feature scope have been confirmed based on your preferences:

- **Confirmed Architecture**: Classic PHP WordPress theme conforming to the official WordPress Theme Developer Handbook (`style.css`, `index.php`, `header.php`, `footer.php`, `functions.php`, `single.php`, `archive.php`, `search.php`, `404.php`, template-parts, and custom post meta).
- **Confirmed Workspace Mode**: Dual-mode environment featuring an interactive live site preview alongside an integrated theme file inspector and instant one-click `viralson-theme.zip` download for immediate upload into any WordPress `wp-admin > Appearance > Themes`.
- **Confirmed Feature Scope**: Complete Viral Son feature set—lossless audio player & download bundles (MP3/FLAC), instant client-side search, dark/light mode toggle with cookie persistence, dynamic comment stream, newsletter modal, and standard Google AdSense ad slots.

---

### 1. Overview & Core Concept

- **What It Does**: Transforms the static Viral Son publication into a dual-purpose system:
  1. A turnkey, production-ready WordPress theme (`viralson-theme`) with clean PHP templates, custom post types for audio releases, theme customizer settings, and widgetized sidebars.
  2. A modern interactive preview and export studio where users can explore the site live, inspect the generated WordPress PHP template code in real-time, test theme settings (dark mode, layout density, ad slots), and download a ready-to-install `viralson-theme.zip` archive.
- **Target Audience / Persona**: Content creators, digital publishers, podcast/audio artists, and WordPress site developers looking for a high-performance modern editorial and audio blogging theme that installs out-of-the-box on standard WordPress hosts without third-party page builder bloat.
- **Key Value**: Delivers both immediate real-world WordPress deployment (clean, secure, standard PHP code) and zero-friction client previewing directly in the AI Studio environment.

---

### 2. User Experience & Visual Design

- **Top Workspace Control & Studio Bar**:
  - Pinned non-intrusive studio utility ribbon with three active modes:
    - **Live Preview**: Explores the rendered Viral Son portal with functioning navigation, search, audio stream, and dark mode.
    - **WordPress Code Inspector**: Interactive tree and code viewer exploring `functions.php`, `header.php`, `single.php`, `style.css`, `audio-player.php`, etc., with syntax highlighting and copy-to-clipboard.
    - **One-Click Theme Download**: Instant client-side or server-side generation of `viralson-theme.zip` containing all PHP templates, CSS, JS, and `screenshot.png` ready for `wp-admin` upload.
- **Visual Identity & Theme**:
  - *Aesthetic Direction*: Curatorial editorial newsroom meets modern digital audio showcase. High legibility, crisp structural lines, and zero pill-badge clutter.
  - *Color Palette & Tokens*:
    - Light: Background `#f8f9fa`, Card `#ffffff`, Primary `#3498db`, Dark Blue `#2c3e50`, Emerald `#2ecc71`, Accent Teal `#1abc9c`, Muted `#6c757d`.
    - Dark: Background `#121519`, Card `#1e232b`, Primary `#4da3ff`, Border `#262c36`, Text Light `#f0f3f6`.
  - *Typography*: System UI display and reading stack (Segoe UI, -apple-system, BlinkMacSystemFont, Tahoma) with balanced heading hierarchy, 65–75ch comfortable reading measure, and tabular numerals.
  - *Zero-Pill Discipline*: Categories and publication dates rendered as clean unboxed typographic lockups (`News · June 18, 2026 · 4 min read`) without bulky pill tags.
- **Interactive Feedback & Motion**:
  - Live audio visualizer bar and waveform player on single release pages.
  - Keyboard-accessible site-wide search modal (trigger with `/` or search button, dismiss with `Esc`).
  - Fluid dark/light theme transition with zero flash of unstyled content (FOUC).

---

### 3. Key Product Decisions & Trade-Offs

- **Decision 1: Dual Architecture (Native Express Preview + Full WordPress PHP Theme)**
  - *Chosen Approach*: Maintain an Express server for the live preview and ZIP bundler on port 3000, while generating a complete, modular, compliant WordPress theme directory (`/wp-content/themes/viralson-theme/`).
  - *Why*: AI Studio runs a Node.js container (cannot run Apache+PHP+MySQL natively), while the user specifically needs a real-world WordPress template to install on their hosting right away. The dual architecture provides 100% fidelity in both the live preview and the exported ZIP.
  - *Alternatives Considered*: Providing only static HTML (fails the user's WordPress requirement) or trying to emulate PHP with WebAssembly (fragile and slow).
- **Decision 2: Standard WordPress Template Hierarchy & Security Standards**
  - *Chosen Approach*: Write clean, modern, native PHP following WordPress Core coding standards (`esc_html`, `esc_url`, `wp_nonce_field`, `sanitize_text_field`, `add_theme_support('post-thumbnails')`, `register_sidebar`, `wp_nav_menu`).
  - *Why*: Ensures the theme installs cleanly on any host without plugin dependencies or fatal errors.
- **Decision 3: Built-In Audio Release Custom Post Type & Lossless Downloads**
  - *Chosen Approach*: Register an `audio_release` custom post type with audio streaming widgets and download package metaboxes in `functions.php`.
  - *Why*: Directly powers the music premiere, visualizer, and lossless FLAC/MP3 download features seen in Viral Son.

---

### 4. Technical Architecture & Data Strategy

```
┌────────────────────────────────────────────────────────────────────────┐
│                        AI STUDIO WORKSPACE                             │
│                                                                        │
│  ┌──────────────────────────────────────────────────────────────────┐  │
│  │                    STUDIO WORKSPACE BAR                          │  │
│  │  [Live Preview]   [WP Code Inspector]   [Download viralson.zip]  │  │
│  └─────────────────────────────────┬────────────────────────────────┘  │
│                                    │                                   │
│            ┌───────────────────────┴───────────────────────┐           │
│            ▼                                               ▼           │
│  ┌─────────────────────────┐                   ┌────────────────────┐  │
│  │    LIVE SITE PREVIEW    │                   │   WP FILE VIEWER   │  │
│  │  • News / Tech / Music  │                   │  • functions.php   │  │
│  │  • Audio Player Widget  │                   │  • style.css       │  │
│  │  • Dark Mode & Search   │                   │  • header.php      │  │
│  │  • Ad Slots & Layout    │                   │  • template-parts/ │  │
│  └─────────────────────────┘                   └────────────────────┘  │
│                                                                        │
│  ┌──────────────────────────────────────────────────────────────────┐  │
│  │               WORDPRESS THEME PACKAGE (/wp-theme/)               │  │
│  │  • style.css (theme declaration header)                          │  │
│  │  • functions.php (custom post types, sidebars, enqueues)         │  │
│  │  • index.php, header.php, footer.php, single.php, archive.php    │  │
│  │  • template-parts/content-audio.php, template-parts/ad-slot.php  │  │
│  │  • assets/css/index.css, assets/js/main.js                       │  │
│  │  • screenshot.png, README.md with installation guide             │  │
│  └─────────────────────────────────┬────────────────────────────────┘  │
│                                    │                                   │
│                                    ▼                                   │
│                      [GET /api/export-theme.zip]                       │
│              Generates standard WordPress installable ZIP              │
└────────────────────────────────────────────────────────────────────────┘
```

- **WordPress File Layout (`/wp-theme/viralson/`)**:
  - `style.css`: Theme metadata, author, version, license, and global CSS.
  - `functions.php`: Enqueuing scripts, theme supports (thumbnails, title-tag, HTML5), navigation menus, widget areas, and audio metaboxes.
  - `header.php` & `footer.php`: Global markup with `wp_head()`, `wp_footer()`, dark-mode script, and mobile menu.
  - `index.php`: Main loop, hero grid, and sidebar layout.
  - `single.php`: Single post layout with byline, reading time, share actions, and related articles.
  - `single-audio_release.php`: Dedicated layout for music tracks with interactive player, waveform, and lossless download tier cards.
  - `archive.php`, `search.php`, `404.php`: Category hubs, search results, and error pages.
  - `template-parts/`: Modular components (`content-card.php`, `ad-banner.php`, `search-modal.php`).
- **Export & Bundling**:
  - Express endpoint `/api/export-theme` dynamically bundles the `/wp-theme/viralson/` directory into a standard `viralson-theme.zip` using `archiver`, allowing the user to download it and upload it directly into WordPress.
