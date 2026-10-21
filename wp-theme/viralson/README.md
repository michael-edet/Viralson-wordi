# Viral Son — WordPress Theme (Production Ready)

Welcome to the **Viral Son** WordPress Theme, an editorial publishing and lossless music download theme built for high-performance magazines, tech publications, and music soundrooms.

---

## 🚀 Quick Installation Guide (1-Minute Setup)

### Method A: Install via WordPress Admin (Recommended)
1. In the AI Studio preview bar, click **"📦 Download viralson-theme.zip"** (or use the generated `viralson-theme.zip`).
2. Log in to your WordPress Admin dashboard (`/wp-admin`).
3. Navigate to **Appearance > Themes**.
4. Click **Add New Theme > Upload Theme**.
5. Choose `viralson-theme.zip` from your computer and click **Install Now**.
6. Click **Activate**.

### Method B: Upload via FTP / cPanel File Manager
1. Extract the `viralson-theme.zip` folder.
2. Upload the `viralson` directory to your server at `/wp-content/themes/viralson/`.
3. In your WordPress dashboard, go to **Appearance > Themes** and click **Activate**.

---

## 🎵 Custom Post Type: Music & Audio Releases

The theme registers a dedicated post type: **Audio Releases** (`/audio/`).

### How to Publish an Audio Release with Download Tiers:
1. Go to **Music & Audio > Add Track** in your WordPress dashboard.
2. Enter the track title, liner notes, and set the **Featured Image** (album artwork).
3. In the **Audio Stream & Download Settings** box:
   - **Artist / Producer**: Name of artist (e.g. *Aurora* or *Alex Parker*).
   - **Audio Stream Preview URL**: URL to a `.mp3` or `.wav` sample file for the web audio player.
   - **Track Duration**: e.g., `3:45`.
   - **320kbps MP3 Download Link**: Direct link to your MP3 download package.
   - **24-bit 96kHz Lossless FLAC Download Link**: Direct link to your studio master FLAC package.
4. Click **Publish**. The post will automatically render with the interactive audio player and download tier cards!

---

## 🎨 Theme Features & Customization

- **Native Dark / Light Mode**: Automatically detects visitor's OS preference (`prefers-color-scheme`) with instant client switch button and cookie persistence.
- **Instant Search Overlay**: Built-in AJAX search modal accessible via `/` hotkey or search button.
- **Widgetized Ad Slots**:
  - `Header Ad Banner`
  - `Main Sidebar`
  - `Footer Columns 1, 2, 3`
  - Place your Google AdSense code or banner HTML directly into **Appearance > Widgets**.
- **Reading Time**: Automatically calculates estimated reading minutes on articles.
- **Zero Plugin Dependencies**: Runs natively on WordPress Core without requiring heavy visual builders.

---

## ⚙️ Requirements
- WordPress 5.8 or higher
- PHP 7.4 or higher (fully tested on PHP 8.1, 8.2, and 8.3)
- MySQL 5.7+ or MariaDB 10.3+
