<?php

/**
 * This file represents an example of the code that themes would use to register
 * the required plugins.
 *
 * It is expected that theme authors would copy and paste this code into their
 * functions.php file, and amend to suit.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme madison for publication on ThemeForest
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

add_action('tgmpa_register', 'ayaa_register_required_plugins');

function ayaa_register_required_plugins()
{
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = [
        [
            'name'     => esc_html__('Elementor Page Builder', 'ayaa'),
            'slug'     => 'elementor',
            'required' => true,
        ],
        array(
            'name'               => esc_html__('WooCommerce', 'ayaa'),
            'slug'               => 'woocommerce',
            'required'           => false,
        ),
        array(
            'name'         => 'CB Toolkit', // The plugin name.
            'slug'         => 'cb-toolkit', // The plugin slug (typically the folder name).
            'source'       => 'https://farzaawp.codebasket.net/wp-content/plugins/cb-toolkit.zip', // The plugin source.
            'required'     => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url' => 'https://farzaawp.codebasket.net/wp-content/plugins/cb-toolkit.zip', // If set, overrides default API URL and points to an external URL.
        ),
        array(
            'name'         => 'CB Core', // The plugin name.
            'slug'         => 'cb-core', // The plugin slug (typically the folder name).
            'source'       => 'https://farzaawp.codebasket.net/wp-content/plugins/cb-core.zip', // The plugin source.
            'required'     => true, // If false, the plugin is only 'recommended' instead of required.
            'external_url' => 'https://farzaawp.codebasket.net/wp-content/plugins/cb-core.zip', // If set, overrides default API URL and points to an external URL.
        ),
        [
            'name'     => esc_html__('Contact Form 7', 'ayaa'),
            'slug'     => 'contact-form-7',
            'required' => false,
        ],
        [
            'name'     => esc_html__('Breadcrumb NavXT', 'ayaa'),
            'slug'     => 'breadcrumb-navxt',
            'required' => true,
        ],
        [
            'name'     => esc_html__('CURCY – Multi Currency for WooCommerce', 'ayaa'),
            'slug'     => 'woo-multi-currency',
            'required' => true
        ],
        [
            'name'     => esc_html__('Gtranslate', 'ayaa'),
            'slug'     => 'gtranslate',
            'required' => true,
        ],
        [
            'name'     => esc_html__('Mailchimp For WP', 'ayaa'),
            'slug'     => 'mailchimp-for-wp',
            'required' => true,
        ],
        [
            'name'         => esc_html__('Advanced Custom Fields', 'ayaa'),
            'slug'         => 'advanced-custom-fields',
            'required'     => true,
        ],
        array(
            'name'     =>  esc_html__('Kirki Customizer Framework', 'ayaa'),
            'slug'     => 'kirki',
            'required' => false,
        ),
        array(
            'name'     =>  esc_html__('Mailchimp for WooCommerce', 'ayaa'),
            'slug'     => 'mailchimp-for-woocommerce',
            'required' => false
        ),
        array(
            'name'     =>  esc_html__('Woo Smart Wishlist', 'ayaa'),
            'slug'     => 'woo-smart-wishlist',
            'required' => false
        ),
        array(
            'name'     =>  esc_html__('WPC Smart Quick View for WooCommerce', 'ayaa'),
            'slug'     => 'woo-smart-quick-view',
            'required' => false
        ),
        [
            'name'     => esc_html__('One Click Demo Import', 'ayaa'),
            'slug'     => 'one-click-demo-import',
            'required' => false,
        ],
        [
            'name'     => esc_html__('ACF Photo Gallery', 'ayaa'),
            'slug'     => 'navz-photo-gallery',
            'required' => false,
        ],
        [
            'name'     => esc_html__('Woo Smart Compare', 'ayaa'),
            'slug'     => 'woo-smart-compare',
            'required' => false
        ],
        [
            'name'     => esc_html__('WPZOOM Social Feed Widget & Block', 'ayaa'),
            'slug'     => 'instagram-widget-by-wpzoom',
            'required' => false,
        ],
        [
            'name'     => esc_html__('MC4WP: Mailchimp for WordPress', 'ayaa'),
            'slug'     => 'mailchimp-for-wp',
            'required' => false,
        ],
        [
            'name'     => esc_html__('Classic Editor', 'ayaa'),
            'slug'     => 'classic-editor',
            'required' => false,
        ],
    ];
    $config = [
        'id'           => 'ayaa', // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '', // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true, // Show admin notices or not.
        'dismissable'  => true, // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '', // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false, // Automatically activate plugins after installation or not.
        'message'      => '', // Message to output right before the plugins table.

        'strings'      => [
            'page_title'                      => esc_html__('Install Required Plugins', 'ayaa'),
            'menu_title'                      => esc_html__('Install Plugins', 'ayaa'),
            'installing'                      => esc_html__('Installing Plugin: %s', 'ayaa'),
            'updating'                        => esc_html__('Updating Plugin: %s', 'ayaa'),
            'oops'                            => esc_html__('Something went wrong with the plugin API.', 'ayaa'),
            'notice_can_install_required'     => _n_noop(
                'This theme requires the following plugin: %1$s.',
                'This theme requires the following plugins: %1$s.',
                'ayaa'
            ),
            'notice_can_install_recommended'  => _n_noop(
                'This theme recommends the following plugin: %1$s.',
                'This theme recommends the following plugins: %1$s.',
                'ayaa'
            ),
            'notice_ask_to_update'            => _n_noop(
                'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
                'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
                'ayaa'
            ),
            'notice_ask_to_update_maybe'      => _n_noop(
                'There is an update available for: %1$s.',
                'There are updates available for the following plugins: %1$s.',
                'ayaa'
            ),
            'notice_can_activate_required'    => _n_noop(
                'The following required plugin is currently inactive: %1$s.',
                'The following required plugins are currently inactive: %1$s.',
                'ayaa'
            ),
            'notice_can_activate_recommended' => _n_noop(
                'The following recommended plugin is currently inactive: %1$s.',
                'The following recommended plugins are currently inactive: %1$s.',
                'ayaa'
            ),
            'install_link'                    => _n_noop(
                'Begin installing plugin',
                'Begin installing plugins',
                'ayaa'
            ),
            'update_link'                     => _n_noop(
                'Begin updating plugin',
                'Begin updating plugins',
                'ayaa'
            ),
            'activate_link'                   => _n_noop(
                'Begin activating plugin',
                'Begin activating plugins',
                'ayaa'
            ),
            'return'                          => esc_html__('Return to Required Plugins Installer', 'ayaa'),
            'plugin_activated'                => esc_html__('Plugin activated successfully.', 'ayaa'),
            'activated_successfully'          => esc_html__('The following plugin was activated successfully:', 'ayaa'),
            'plugin_already_active'           => esc_html__('No action taken. Plugin %1$s was already active.', 'ayaa'),
            'plugin_needs_higher_version'     => esc_html__('Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'ayaa'),
            'complete'                        => esc_html__('All plugins installed and activated successfully. %1$s', 'ayaa'),
            'dismiss'                         => esc_html__('Dismiss this notice', 'ayaa'),
            'notice_cannot_install_activate'  => esc_html__('There are one or more required or recommended plugins to install, update or activate.', 'ayaa'),
            'contact_admin'                   => esc_html__('Please contact the administrator of this site for help.', 'ayaa'),
            'nag_type'                        => '',
        ],
    ];
    tgmpa($plugins, $config);
}
