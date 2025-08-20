<?php
/**
 * TGM Plugin Activation Configuration
 * 
 * This file contains the list of plugins (both required and recommended) to be used with the Buzzed theme.
 * 
 * @package Buzzed
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

// Include the TGM_Plugin_Activation class
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Register required and recommended plugins for Buzzed theme
 */
function buzzed_register_required_plugins() {
    
    /**
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        array(
            'name'               => 'Stepfox Looks',
            'slug'               => 'stepfox-looks',
            'source'             => get_template_directory() . '/plugins/stepfox-looks.zip',
            'required'           => false,
            'version'            => '1.0.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),
        array(
            'name'               => 'One Click Demo Import',
            'slug'               => 'one-click-demo-import',
            // From WordPress.org repo – no source needed
            'required'           => false,
            'force_activation'   => false,
            'force_deactivation' => false,
        ),
    );

    /**
     * Array of configuration settings for TGM Plugin Activation.
     */
    $config = array(
        'id'           => 'buzzed',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // If true, will automatically activate plugins after installation.
        'message'      => '',                      // Message to output right before the plugins table.

        'strings'      => array(
            'page_title'                      => __('Install Required Plugins', 'buzzed'),
            'menu_title'                      => __('Install Plugins', 'buzzed'),
            'installing'                      => __('Installing Plugin: %s', 'buzzed'),
            'updating'                        => __('Updating Plugin: %s', 'buzzed'),
            'oops'                            => __('Something went wrong with the plugin API.', 'buzzed'),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'buzzed'
            ),
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'buzzed'
            ),
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'buzzed'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'buzzed'
            ),
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'buzzed'
            ),
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'buzzed'
            ),
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'buzzed'
            ),
            'update_link'                     => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'buzzed'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'buzzed'
            ),
            'return'                          => __('Return to Required Plugins Installer', 'buzzed'),
            'plugin_activated'                => __('Plugin activated successfully.', 'buzzed'),
            'activated_successfully'          => __('The following plugin was activated successfully:', 'buzzed'),
            'plugin_already_active'           => __('No action taken. Plugin %1$s was already active.', 'buzzed'),
            'plugin_needs_higher_version'     => __('Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'buzzed'),
            'complete'                        => __('All plugins installed and activated successfully. %1$s', 'buzzed'),
            'dismiss'                         => __('Dismiss this notice', 'buzzed'),
            'notice_cannot_install_activate'  => __('There are one or more required or recommended plugins to install, update or activate.', 'buzzed'),
            'contact_admin'                   => __('Please contact the administrator of this site for help.', 'buzzed'),
        ),
    );

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'buzzed_register_required_plugins'); 