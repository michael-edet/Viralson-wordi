<?php
/**
 * Viral Son Single Audio Release Template
 *
 * Dedicated layout for music tracks, lossless audio downloads, and visualizers.
 *
 * @package ViralSon
 */
get_header();

$artist   = get_post_meta(get_the_ID(), '_viralson_artist', true) ?: 'Aurora';
$audio_url= get_post_meta(get_the_ID(), '_viralson_audio_url', true) ?: 'https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3';
$mp3_url  = get_post_meta(get_the_ID(), '_viralson_mp3_download', true) ?: '#';
$flac_url = get_post_meta(get_the_ID(), '_viralson_flac_download', true) ?: '#';
$duration = get_post_meta(get_the_ID(), '_viralson_duration', true) ?: '3:45';
?>

<main id="primary" class="site-main">
    <div class="container" style="padding-top: 36px; max-width: 960px;">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-audio-release'); ?>>
                <!-- Header / Artist Showcase -->
                <header style="text-align: center; margin-bottom: 30px;">
                    <div class="post-meta-unboxed" style="justify-content: center; margin-bottom: 12px;">
                        <span class="category" style="color: var(--teal);"><?php esc_html_e('Official Premiere & Audio Release', 'viralson'); ?></span>
                        <span aria-hidden="true">·</span>
                        <span><?php echo esc_html($artist); ?></span>
                        <span aria-hidden="true">·</span>
                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                    </div>

                    <h1 style="font-size: clamp(2.2rem, 4.5vw, 3.2rem); font-weight: 800; line-height: 1.2; color: var(--text-dark); margin-bottom: 16px;">
                        <?php the_title(); ?>
                    </h1>

                    <p style="font-size: 1.15rem; color: var(--text-light); max-width: 680px; margin: 0 auto;">
                        <?php esc_html_e('Interactive audio stream, high-fidelity stems, and lossless master downloads direct from the Viral Son soundroom.', 'viralson'); ?>
                    </p>
                </header>

                <!-- Featured Artwork & Audio Player Card -->
                <div class="audio-player-card" style="background: var(--card-bg); border: 1px solid var(--border-color); border-radius: var(--radius-lg); padding: 32px; box-shadow: var(--shadow-md);">
                    <div style="display: grid; grid-template-columns: 240px 1fr; gap: 28px; align-items: center;" class="audio-grid-layout">
                        <div style="border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm); aspect-ratio: 1; background: var(--medium-gray);">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                            <?php else : ?>
                                <div style="display: flex; align-items: center; justify-content: center; height: 100%; background: linear-gradient(135deg, #2c3e50, #3498db);">
                                    <i class="fas fa-compact-disc fa-spin" style="font-size: 4rem; color: #fff; --fa-animation-duration: 8s;"></i>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div>
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 12px;">
                                <div>
                                    <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--text-dark); margin-bottom: 4px;"><?php the_title(); ?></h3>
                                    <span style="font-size: 1rem; color: var(--primary-blue); font-weight: 600;"><?php echo esc_html($artist); ?></span>
                                </div>
                                <span style="background: var(--light-blue); color: var(--primary-blue); padding: 4px 10px; border-radius: 4px; font-size: 0.78rem; font-weight: 700;">
                                    <?php esc_html_e('24-BIT / 96kHz MASTER', 'viralson'); ?>
                                </span>
                            </div>

                            <!-- Native HTML5 & Custom Audio Element -->
                            <audio id="wpAudioPlayer" preload="metadata" src="<?php echo esc_url($audio_url); ?>" style="display: none;"></audio>

                            <!-- Scrubber & Time -->
                            <div style="margin: 20px 0;">
                                <div class="audio-progress-bar" id="audioProgressBar" style="height: 8px; background: var(--border-color); border-radius: 4px; position: relative; cursor: pointer;">
                                    <div class="audio-progress-fill" id="audioProgressFill" style="width: 0%; height: 100%; background: var(--primary-blue); border-radius: 4px; transition: width 0.1s linear;"></div>
                                </div>
                                <div style="display: flex; justify-content: space-between; font-size: 0.8rem; color: var(--text-light); margin-top: 8px; font-variant-numeric: tabular-nums;">
                                    <span id="audioCurrentTime">0:00</span>
                                    <span id="audioDuration"><?php echo esc_html($duration); ?></span>
                                </div>
                            </div>

                            <!-- Player Buttons -->
                            <div style="display: flex; align-items: center; gap: 20px;">
                                <button type="button" class="play-btn" id="audioPlayToggle" aria-label="<?php esc_attr_e('Play Audio', 'viralson'); ?>">
                                    <i class="fas fa-play" id="audioPlayIcon"></i>
                                </button>
                                <div style="font-size: 0.9rem; color: var(--text-dark); font-weight: 600;">
                                    <span id="audioStatusText"><?php esc_html_e('Click to Stream Preview', 'viralson'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lossless Download Tier Cards -->
                <section style="margin: 40px 0;">
                    <div style="text-align: center; margin-bottom: 24px;">
                        <h2 style="font-size: 1.6rem; font-weight: 800; color: var(--text-dark);">
                            <?php esc_html_e('Direct Download Packages', 'viralson'); ?>
                        </h2>
                        <p style="font-size: 0.95rem; color: var(--text-light);">
                            <?php esc_html_e('Verified high-fidelity audio assets with full ID3 metadata and album cover art embedded.', 'viralson'); ?>
                        </p>
                    </div>

                    <div class="download-tiers-grid">
                        <!-- MP3 Tier -->
                        <div class="download-tier-card">
                            <div>
                                <span class="tier-badge"><?php esc_html_e('Standard Broadcast', 'viralson'); ?></span>
                                <h3 class="tier-title"><?php esc_html_e('320kbps MP3 Single', 'viralson'); ?></h3>
                                <p class="tier-specs"><?php esc_html_e('File Size: ~9.2 MB · Joint Stereo · Universal Compatibility', 'viralson'); ?></p>
                            </div>
                            <a href="<?php echo esc_url($mp3_url); ?>" download class="btn" style="width: 100%;">
                                <i class="fas fa-download"></i> <?php esc_html_e('Download MP3', 'viralson'); ?>
                            </a>
                        </div>

                        <!-- FLAC Tier -->
                        <div class="download-tier-card" style="border: 2px solid var(--primary-blue);">
                            <div>
                                <span class="tier-badge" style="color: var(--green);"><?php esc_html_e('Studio Audiophile', 'viralson'); ?></span>
                                <h3 class="tier-title"><?php esc_html_e('Lossless 24-Bit FLAC', 'viralson'); ?></h3>
                                <p class="tier-specs"><?php esc_html_e('File Size: ~54 MB · 96kHz / 24-bit Master · Maximum Dynamic Range', 'viralson'); ?></p>
                            </div>
                            <a href="<?php echo esc_url($flac_url); ?>" download class="btn btn-green" style="width: 100%; background: var(--green);">
                                <i class="fas fa-cloud-download-alt"></i> <?php esc_html_e('Download FLAC', 'viralson'); ?>
                            </a>
                        </div>

                        <!-- Stems Tier -->
                        <div class="download-tier-card">
                            <div>
                                <span class="tier-badge" style="color: var(--purple);"><?php esc_html_e('Remix & Production', 'viralson'); ?></span>
                                <h3 class="tier-title"><?php esc_html_e('Deluxe Stems Pack', 'viralson'); ?></h3>
                                <p class="tier-specs"><?php esc_html_e('File Size: ~180 MB · Isolated Vocals, Synth Stems, Drum Loops & MIDI', 'viralson'); ?></p>
                            </div>
                            <a href="<?php echo esc_url($flac_url); ?>" download class="btn btn-purple" style="width: 100%; background: var(--purple);">
                                <i class="fas fa-layer-group"></i> <?php esc_html_e('Download Stems', 'viralson'); ?>
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Post Narrative / Liner Notes -->
                <div class="entry-content" style="font-size: 1.12rem; line-height: 1.8; color: var(--text-dark); margin: 40px 0;">
                    <h3 style="font-size: 1.4rem; font-weight: 800; margin-bottom: 16px;"><?php esc_html_e('Production Liner Notes & Story', 'viralson'); ?></h3>
                    <?php the_content(); ?>
                </div>

                <!-- Ad Banner -->
                <?php get_template_part('template-parts/ad-banner'); ?>

                <!-- Comments -->
                <?php
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;
                ?>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<script>
// Interactive Client Audio Stream Logic
document.addEventListener('DOMContentLoaded', function() {
    const audio = document.getElementById('wpAudioPlayer');
    const playBtn = document.getElementById('audioPlayToggle');
    const playIcon = document.getElementById('audioPlayIcon');
    const progressBar = document.getElementById('audioProgressBar');
    const progressFill = document.getElementById('audioProgressFill');
    const currentTimeEl = document.getElementById('audioCurrentTime');
    const statusText = document.getElementById('audioStatusText');

    if (!audio || !playBtn) return;

    function formatTime(sec) {
        const m = Math.floor(sec / 60) || 0;
        const s = Math.floor(sec % 60) || 0;
        return m + ':' + (s < 10 ? '0' : '') + s;
    }

    playBtn.addEventListener('click', function() {
        if (audio.paused) {
            audio.play().then(() => {
                playIcon.className = 'fas fa-pause';
                if (statusText) statusText.textContent = 'Streaming Master Preview...';
            }).catch(e => {
                console.warn('Playback error or blocked:', e);
            });
        } else {
            audio.pause();
            playIcon.className = 'fas fa-play';
            if (statusText) statusText.textContent = 'Paused';
        }
    });

    audio.addEventListener('timeupdate', function() {
        if (!audio.duration) return;
        const percent = (audio.currentTime / audio.duration) * 100;
        if (progressFill) progressFill.style.width = percent + '%';
        if (currentTimeEl) currentTimeEl.textContent = formatTime(audio.currentTime);
    });

    audio.addEventListener('ended', function() {
        playIcon.className = 'fas fa-play';
        if (progressFill) progressFill.style.width = '0%';
        if (statusText) statusText.textContent = 'Preview Completed';
    });

    if (progressBar) {
        progressBar.addEventListener('click', function(e) {
            if (!audio.duration) return;
            const rect = progressBar.getBoundingClientRect();
            const clickPos = (e.clientX - rect.left) / rect.width;
            audio.currentTime = clickPos * audio.duration;
        });
    }
});
</script>

<?php get_footer(); ?>
