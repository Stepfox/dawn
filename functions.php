<?php
/**
 * Dawn Theme Functions
 * 
 * @package Dawn
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme setup function
 * Sets up theme defaults and registers support for various WordPress features
 */
function dawn_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain('dawn', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Add support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add support for custom backgrounds
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
    ));

    // Add support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for responsive embedded content
    add_theme_support('responsive-embeds');

    // Add support for block editor styles
    add_theme_support('wp-block-styles');

    // Add support for wide alignment
    add_theme_support('align-wide');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Enqueue editor styles
    add_editor_style('style.css');
}
add_action('after_setup_theme', 'dawn_theme_setup');

/**
 * Enqueue scripts and styles
 */
function dawn_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style(
        'dawn-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Enqueue threaded comment reply script
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'dawn_scripts');

/**
 * Add admin styles for the site editor interface
 */
function dawn_admin_styles() {
    // Only load on site editor pages
    if (!is_admin() || !current_user_can('edit_theme_options')) {
        return;
    }
    
    $screen = get_current_screen();
    if ($screen && strpos($screen->id, 'site-editor') !== false) {
        wp_enqueue_style(
            'dawn-admin-editor',
            get_template_directory_uri() . '/assets/css/admin-editor.css',
            array('wp-admin'),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('admin_enqueue_scripts', 'dawn_admin_styles');

/**
 * Include TGM Plugin Activation for plugin recommendations
 * This provides a professional interface for users to install companion plugins
 */
function dawn_load_tgmpa() {
    $tgmpa_file = get_template_directory() . '/inc/tgm-plugin-activation.php';
    if (file_exists($tgmpa_file)) {
        require_once $tgmpa_file;
    }
}
add_action('after_setup_theme', 'dawn_load_tgmpa');

/**
 * Register Group block style and enqueue its CSS
 */
function dawn_register_group_glow_style() {
    // Register CSS and attach via style_handle so WP loads it in editor/frontend when block is present
    wp_register_style(
        'dawn-group-glow',
        get_template_directory_uri() . '/assets/css/group-glow.css',
        array(),
        wp_get_theme()->get('Version')
    );
    // Register gradient border CSS
    wp_register_style(
        'dawn-group-gradient-border',
        get_template_directory_uri() . '/assets/css/group-gradient-border.css',
        array(),
        wp_get_theme()->get('Version')
    );

    if (function_exists('register_block_style')) {
        register_block_style(
            'core/group',
            array(
                'name'         => 'dawn-glow',
                'label'        => __('Dawn Glow', 'dawn'),
                'style_handle' => 'dawn-group-glow'
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'         => 'dawn-gradient-border',
                'label'        => __('Gradient Border', 'dawn'),
                'style_handle' => 'dawn-group-gradient-border'
            )
        );
    }
}
add_action('init', 'dawn_register_group_glow_style');

// Ensure CSS is present on both editor and frontend
function dawn_enqueue_group_styles() {
    // These were registered above; enqueue as a safety net
    if (wp_style_is('dawn-group-glow', 'registered')) {
        wp_enqueue_style('dawn-group-glow');
    } else {
        wp_enqueue_style(
            'dawn-group-glow',
            get_template_directory_uri() . '/assets/css/group-glow.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }

    if (wp_style_is('dawn-group-gradient-border', 'registered')) {
        wp_enqueue_style('dawn-group-gradient-border');
    } else {
        wp_enqueue_style(
            'dawn-group-gradient-border',
            get_template_directory_uri() . '/assets/css/group-gradient-border.css',
            array(),
            wp_get_theme()->get('Version')
        );
    }
}
add_action('enqueue_block_assets', 'dawn_enqueue_group_styles');
