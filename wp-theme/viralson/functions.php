<?php
/**
 * Viral Son Theme Functions & Definitions
 *
 * @package ViralSon
 * @version 1.1.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * 1. Theme Setup
 */
function viralson_theme_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 675, true);
    add_image_size('viralson-card', 600, 338, true);
    add_image_size('viralson-thumbnail', 120, 120, true);

    register_nav_menus(array(
        'primary' => __('Primary Header Menu', 'viralson'),
        'footer'  => __('Footer Quick Links', 'viralson'),
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    add_theme_support('custom-logo', array(
        'height'      => 48,
        'width'       => 180,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('editor-styles');
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'viralson_theme_setup');

/**
 * 2. Enqueue Scripts & Styles
 */
function viralson_enqueue_scripts() {
    wp_enqueue_style(
        'font-awesome-6',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css',
        array(),
        '6.4.0'
    );

    wp_enqueue_style(
        'viralson-style',
        get_stylesheet_uri(),
        array('font-awesome-6'),
        '1.1.0'
    );

    wp_enqueue_script(
        'viralson-main',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        '1.1.0',
        true
    );

    wp_localize_script('viralson-main', 'viralsonData', array(
        'ajaxUrl'      => admin_url('admin-ajax.php'),
        'siteUrl'      => home_url('/'),
        'themeUrl'     => get_template_directory_uri(),
        'searchNonce'  => wp_create_nonce('viralson_search_nonce'),
        'contactNonce' => wp_create_nonce('viralson_contact_nonce'),
    ));

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'viralson_enqueue_scripts');

/**
 * 3. Register Widget Areas
 */
function viralson_widgets_init() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'viralson'),
        'id'            => 'sidebar-main',
        'description'   => __('Widgets here appear in the article and archive sidebar.', 'viralson'),
        'before_widget' => '<div id="%1$s" class="widget-box %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Header Ad Banner', 'viralson'),
        'id'            => 'ad-header',
        'description'   => __('Ad banner slot below the main header.', 'viralson'),
        'before_widget' => '<div class="ad-slot ad-header">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 1', 'viralson'),
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'viralson'),
        'id'            => 'footer-2',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', 'viralson'),
        'id'            => 'footer-3',
        'before_widget' => '<div class="footer-col">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'viralson_widgets_init');

/**
 * 4. Custom Post Type: Audio Releases
 */
function viralson_register_audio_post_type() {
    $labels = array(
        'name'               => __('Audio Releases', 'viralson'),
        'singular_name'      => __('Audio Release', 'viralson'),
        'menu_name'          => __('Music & Audio', 'viralson'),
        'add_new'            => __('Add Track', 'viralson'),
        'add_new_item'       => __('Add New Audio Release', 'viralson'),
        'edit_item'          => __('Edit Audio Release', 'viralson'),
        'new_item'           => __('New Audio Release', 'viralson'),
        'view_item'          => __('View Audio Release', 'viralson'),
        'search_items'       => __('Search Audio Releases', 'viralson'),
        'not_found'          => __('No releases found', 'viralson'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'audio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-audio',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'show_in_rest'       => true,
    );

    register_post_type('audio_release', $args);

    register_taxonomy('audio_genre', array('audio_release'), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => __('Genres', 'viralson'),
            'singular_name' => __('Genre', 'viralson'),
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'genre'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'viralson_register_audio_post_type');

/**
 * 5. Audio Release Meta Box for Streaming & Lossless Downloads
 */
function viralson_add_audio_metaboxes() {
    add_meta_box(
        'viralson_audio_meta',
        __('Audio Stream & Download Settings', 'viralson'),
        'viralson_audio_metabox_callback',
        'audio_release',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'viralson_add_audio_metaboxes');

function viralson_audio_metabox_callback($post) {
    wp_nonce_field('viralson_audio_metabox_save', 'viralson_audio_nonce');

    $artist    = get_post_meta($post->ID, '_viralson_artist', true);
    $audio_url = get_post_meta($post->ID, '_viralson_audio_url', true);
    $mp3_url   = get_post_meta($post->ID, '_viralson_mp3_download', true);
    $flac_url  = get_post_meta($post->ID, '_viralson_flac_download', true);
    $duration  = get_post_meta($post->ID, '_viralson_duration', true);
    ?>
    <p>
        <label for="viralson_artist"><strong><?php esc_html_e('Artist / Producer Name:', 'viralson'); ?></strong></label><br>
        <input type="text" id="viralson_artist" name="viralson_artist" value="<?php echo esc_attr($artist); ?>" class="widefat" placeholder="e.g. Aurora">
    </p>
    <p>
        <label for="viralson_audio_url"><strong><?php esc_html_e('Audio Stream Preview URL (MP3/WAV):', 'viralson'); ?></strong></label><br>
        <input type="url" id="viralson_audio_url" name="viralson_audio_url" value="<?php echo esc_url($audio_url); ?>" class="widefat" placeholder="https://domain.com/sample.mp3">
    </p>
    <p>
        <label for="viralson_duration"><strong><?php esc_html_e('Track Duration:', 'viralson'); ?></strong></label><br>
        <input type="text" id="viralson_duration" name="viralson_duration" value="<?php echo esc_attr($duration); ?>" style="width: 120px;" placeholder="3:42">
    </p>
    <p>
        <label for="viralson_mp3_download"><strong><?php esc_html_e('320kbps MP3 Download Package Link:', 'viralson'); ?></strong></label><br>
        <input type="url" id="viralson_mp3_download" name="viralson_mp3_download" value="<?php echo esc_url($mp3_url); ?>" class="widefat">
    </p>
    <p>
        <label for="viralson_flac_download"><strong><?php esc_html_e('24-bit 96kHz Lossless FLAC Download Package Link:', 'viralson'); ?></strong></label><br>
        <input type="url" id="viralson_flac_download" name="viralson_flac_download" value="<?php echo esc_url($flac_url); ?>" class="widefat">
    </p>
    <?php
}

function viralson_save_audio_metabox($post_id) {
    if (!isset($_POST['viralson_audio_nonce']) || !wp_verify_nonce($_POST['viralson_audio_nonce'], 'viralson_audio_metabox_save')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['viralson_artist'])) {
        update_post_meta($post_id, '_viralson_artist', sanitize_text_field($_POST['viralson_artist']));
    }
    if (isset($_POST['viralson_audio_url'])) {
        update_post_meta($post_id, '_viralson_audio_url', esc_url_raw($_POST['viralson_audio_url']));
    }
    if (isset($_POST['viralson_duration'])) {
        update_post_meta($post_id, '_viralson_duration', sanitize_text_field($_POST['viralson_duration']));
    }
    if (isset($_POST['viralson_mp3_download'])) {
        update_post_meta($post_id, '_viralson_mp3_download', esc_url_raw($_POST['viralson_mp3_download']));
    }
    if (isset($_POST['viralson_flac_download'])) {
        update_post_meta($post_id, '_viralson_flac_download', esc_url_raw($_POST['viralson_flac_download']));
    }
}
add_action('save_post_audio_release', 'viralson_save_audio_metabox');

/**
 * 6. Helper: Estimated Reading Time
 */
function viralson_estimated_reading_time($post_id = null) {
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    return max(1, $reading_time) . ' ' . __('min read', 'viralson');
}

/**
 * 7. Live AJAX Search Handler
 */
function viralson_ajax_search() {
    check_ajax_referer('viralson_search_nonce', 'nonce');
    $term = isset($_POST['term']) ? sanitize_text_field(wp_unslash($_POST['term'])) : '';

    if (empty($term)) {
        wp_send_json_success(array());
    }

    $query = new WP_Query(array(
        's'              => $term,
        'posts_per_page' => 10,
        'post_type'      => array('post', 'page', 'audio_release'),
        'post_status'    => 'publish',
    ));

    $results = array();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $pt = get_post_type();
            $cat = 'Article';
            if ($pt === 'audio_release') {
                $cat = 'Music';
            } elseif ($pt === 'page') {
                $cat = 'Page';
            }
            $results[] = array(
                'title'   => get_the_title(),
                'url'     => get_permalink(),
                'category'=> $cat,
                'excerpt' => wp_trim_words(get_the_excerpt(), 18),
                'date'    => get_the_date(),
            );
        }
        wp_reset_postdata();
    }

    wp_send_json_success($results);
}
add_action('wp_ajax_viralson_search', 'viralson_ajax_search');
add_action('wp_ajax_nopriv_viralson_search', 'viralson_ajax_search');

/**
 * 8. Contact & Advertising Inquiry AJAX Handler
 */
function viralson_handle_contact_form() {
    check_ajax_referer('viralson_contact_nonce', 'nonce');

    $name    = isset($_POST['name']) ? sanitize_text_field(wp_unslash($_POST['name'])) : '';
    $email   = isset($_POST['email']) ? sanitize_email(wp_unslash($_POST['email'])) : '';
    $phone   = isset($_POST['phone']) ? sanitize_text_field(wp_unslash($_POST['phone'])) : '';
    $subject = isset($_POST['subject']) ? sanitize_text_field(wp_unslash($_POST['subject'])) : 'General Inquiry';
    $message = isset($_POST['message']) ? sanitize_textarea_field(wp_unslash($_POST['message'])) : '';

    if (empty($name) || empty($email) || !is_email($email) || empty($message)) {
        wp_send_json_error(array(
            'message' => __('Please provide a valid name, email address, and message.', 'viralson'),
        ), 400);
    }

    $to = get_option('admin_email');
    if (empty($to) || !is_email($to)) {
        $to = 'iamoffixial@gmail.com';
    }

    $mail_subject = sprintf('[Viral Son %s] Message from %s', strtoupper($subject), $name);
    $mail_body = sprintf(
        "New inquiry submitted on Viral Son:\n\nName: %s\nEmail: %s\nPhone: %s\nDepartment / Topic: %s\n\nMessage:\n%s\n",
        $name,
        $email,
        $phone ?: 'Not provided',
        $subject,
        $message
    );
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    wp_mail($to, $mail_subject, $mail_body, $headers);

    wp_send_json_success(array(
        'message' => sprintf(
            __('Thank you, %s! Your message has been sent to our %s desk. We typically respond within 24–48 business hours.', 'viralson'),
            esc_html($name),
            esc_html(strtoupper($subject))
        ),
    ));
}
add_action('wp_ajax_viralson_contact', 'viralson_handle_contact_form');
add_action('wp_ajax_nopriv_viralson_contact', 'viralson_handle_contact_form');

/**
 * 9. Auto-Create Essential & AdSense Compliance Pages on Theme Activation
 */
function viralson_create_default_pages() {
    $pages = array(
        'about' => array(
            'title'    => 'About Us',
            'template' => 'page-about.php',
        ),
        'contact' => array(
            'title'    => 'Contact Us',
            'template' => 'page-contact.php',
        ),
        'community' => array(
            'title'    => 'Community',
            'template' => 'page-community.php',
        ),
        'terms' => array(
            'title'    => 'Terms and Conditions',
            'template' => 'page-terms.php',
        ),
        'privacy-policy' => array(
            'title'    => 'Privacy Policy',
            'template' => 'page-privacy-policy.php',
        ),
        'disclaimer' => array(
            'title'    => 'Disclaimer',
            'template' => 'page-disclaimer.php',
        ),
        'cookie-policy' => array(
            'title'    => 'Cookie Policy',
            'template' => 'page-cookie-policy.php',
        ),
        'dmca' => array(
            'title'    => 'DMCA & Copyright Policy',
            'template' => 'page-dmca.php',
        ),
        'editorial-policy' => array(
            'title'    => 'Editorial Policy',
            'template' => 'page-editorial-policy.php',
        ),
        'advertise' => array(
            'title'    => 'Advertise With Us',
            'template' => 'page-advertise.php',
        ),
        'affiliate-disclosure' => array(
            'title'    => 'Affiliate Disclosure',
            'template' => 'page-affiliate-disclosure.php',
        ),
    );

    foreach ($pages as $slug => $data) {
        $existing = get_page_by_path($slug);
        if (!$existing) {
            $page_id = wp_insert_post(array(
                'post_title'   => $data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ));
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $data['template']);
            }
        }
    }
}
add_action('after_switch_theme', 'viralson_create_default_pages');
