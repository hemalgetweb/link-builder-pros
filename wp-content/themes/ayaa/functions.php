<?php

/**
 * ayaa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ayaa
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}


function ayaa_setup()
{
	load_theme_textdomain('ayaa', get_template_directory() . '/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('editor-styles');
	add_theme_support("wp-block-styles");
	add_theme_support("responsive-embeds");
	add_theme_support("align-wide");
	add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	$args = array(
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support('custom-header', $args);
	add_theme_support('custom-background');
	add_theme_support('custom-logo', $defaults);
	if (function_exists('register_block_style')) {
		register_block_style(
			'core/quote',
			array(
				'name'         => 'blue-quote',
				'label'        => __('Blue Quote', 'ayaa'),
				'is_default'   => true,
				'inline_style' => '.wp-block-quote.is-style-blue-quote { color: blue; }',
			)
		);
	}
	register_block_pattern(
		'ayaa-pattern',
		array(
			'title'       => __('Ayaa Pattern', 'ayaa'),
			'description' => __('Ayaa Pattern', 'ayaa'),
			'content'     => __('Ayaa Pattern Content', 'ayaa')
		)
	);
	register_nav_menus(
		array(
			'main-menu' => esc_html__('Main Menu', 'ayaa'),
			'copyright_menu' => esc_html__('Copyright Menu', 'ayaa'),
		),
	);
	register_nav_menus(
		array(
			'footer-menu' => esc_html__('Footer Menu', 'ayaa'),
		),
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-background',
		apply_filters(
			'ayaa_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);
	add_theme_support('post-formats', [
		'image',
		'audio',
		'video',
		'gallery',
		'quote',
	]);
	add_theme_support('customize-selective-refresh-widgets');
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 30,
			'width'       => 130,
			'flex-width'  => true,
			'flex-height' => true,
			'unlink-homepage-logo' => true,
		)
	);
	if (class_exists('WooCommerce')) {
		add_theme_support('woocommerce', array(
			'thumbnail_image_width' => 500,
			'gallery_thumbnail_image_width' => 100,
			'single_image_width' => 500,
		));
	}
}
add_action('after_setup_theme', 'ayaa_setup');



function ayaa_content_width()
{
	$GLOBALS['content_width'] = apply_filters('ayaa_content_width', 640);
}
add_action('after_setup_theme', 'ayaa_content_width', 0);

/*
 * Register widget area.
 */
function ayaa_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Blog Sidebar', 'ayaa'),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__('Add Blog Sidebar.', 'ayaa'),
			'before_widget' => '<section id="%1$s" class="ayaa-blog-sidebar cb-toolkit-blog-sidebar mb-40 %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="ayaa-sidebar-title">',
			'after_title'   => '</h5>',
		)
	);
	// footer default
	for ($num = 1; $num <= 4; $num++) {
		$widget_class = '';
		$parent_class = '';
		switch ($num) {
			case 1:
				$widget_class = 'has-ayaa-rv-space-right-first';
				break;
			case 2:
				$parent_class = 'pl-30 ayaa-rv-footer-space-left-30';
				break;
			case 3:
				$parent_class = 'pl-30 ayaa-rv-footer-space-left-30';
			case 4:
				$parent_class = 'custom-fott-cls';
		}
		register_sidebar([
			'name'          => sprintf(esc_html__('Footer %1$s', 'ayaa'), $num),
			'id'            => 'footer-' . $num,
			'description'   => sprintf(esc_html__('Footer %1$s', 'ayaa'), $num),
			'before_widget' => '<div class="' . esc_attr($parent_class) . '"><div id="%1$s" class="ayaa-rv-footer-widget mb-40 footer-col-' . esc_attr($num) . ' ' . esc_attr($widget_class) . ' %2$s ">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h6 class="ayaa-rv-footer-widget-title">',
			'after_title'   => '</h6>',
		]);
	}
	// footer 2
	for ($num = 1; $num <= 5; $num++) {
		register_sidebar([
			'name'          => sprintf(esc_html__('Footer 2:%1$s', 'ayaa'), $num),
			'id'            => 'footer2-' . $num,
			'description'   => sprintf(esc_html__('Footer 2:%1$s', 'ayaa'), $num),
			'before_widget' => '<div id="%1$s" class="ayaa-fz-footer-widget-2 footer-col-' . esc_attr($num) . ' %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="ayaa-fz-footer-widget-title-2 mb-35">',
			'after_title'   => '</h5>',
		]);
	}
	// footer 3
	for ($num = 1; $num <= 5; $num++) {
		$parent_class = '';
		switch ($num) {
			case 1:
				$parent_class = 'pr-40 mb-40';
				break;
			case 2:
				$parent_class = 'pl-40 mb-40 ayaa-fz-footer-widget-3-link-list';
				break;
			case 3:
				$parent_class = 'pl-20 mb-40 ayaa-fz-footer-widget-3-link-list';
				break;
			case 4:
				$parent_class = 'mb-40 ayaa-fz-footer-widget-3-link-list';
				break;
			case 5:
				$parent_class = 'mb-40';
				break;
		}
		register_sidebar([
			'name'          => sprintf(esc_html__('Footer 3:%1$s', 'ayaa'), $num),
			'id'            => 'footer3-' . $num,
			'description'   => sprintf(esc_html__('Footer %1$s', 'ayaa'), $num),
			'before_widget' => '<div id="%1$s" class="ayaa-fz-footer-widget-3 ' . esc_attr($parent_class) . ' footer-col-' . esc_attr($num) . ' %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="ayaa-fz-footer-widget-3-title mb-30">',
			'after_title'   => '</h4>',
		]);
	}
	// footer 4
	for ($num = 1; $num <= 5; $num++) {
		$parent_class = '';
		switch ($num) {
			case 1:
				$parent_class = ' pr-70';
				break;
			case 2:
				$parent_class = 'pl-25';
				break;
			case 3:
				$parent_class = ' pl-25';
				break;
			case 4:
				$parent_class = 'pl-30';
				break;
			case 5:
				$parent_class = 'pl-30';
				break;
		}
		register_sidebar([
			'name'          => sprintf(esc_html__('Footer 4:%1$s', 'ayaa'), $num),
			'id'            => 'footer4-' . $num,
			'description'   => sprintf(esc_html__('Footer %1$s', 'ayaa'), $num),
			'before_widget' => '<div id="%1$s" class="ayaa-fz-footer-widget-4 ' . esc_attr($parent_class) . ' footer-col-' . esc_attr($num) . ' %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="ayaa-fz-footer-widget-title-4">',
			'after_title'   => '</h5>',
		]);
	}
	// footer 5
	for ($num = 1; $num <= 4; $num++) {
		$parent_class = '';
		switch ($num) {
			case 1:
				$parent_class = '';
				break;
			case 2:
				$parent_class = 'ml-90 ayaa-fz-footer5-list';
				break;
			case 3:
				$parent_class = 'ml-80 ayaa-fz-footer5-list';
				break;
			case 4:
				$parent_class = 'ml-90';
				break;
		}
		register_sidebar([
			'name'          => sprintf(esc_html__('Footer 5:%1$s', 'ayaa'), $num),
			'id'            => 'footer5-' . $num,
			'description'   => sprintf(esc_html__('Footer %1$s', 'ayaa'), $num),
			'before_widget' => '<div id="%1$s" class="ayaa-fz-footer5-widget mb-50 ' . esc_attr($parent_class) . ' footer-col-' . esc_attr($num) . ' %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="ayaa-fz-footer5-title">',
			'after_title'   => '</h4>',
		]);
	}
	// footer 6
	for ($num = 1; $num <= 4; $num++) {
		register_sidebar([
			'name'          => sprintf(esc_html__('Footer 6:%1$s', 'ayaa'), $num),
			'id'            => 'footer6-' . $num,
			'description'   => sprintf(esc_html__('Footer %1$s', 'ayaa'), $num),
			'before_widget' => '<div id="%1$s" class="ayaa-fz-footer-widget widget-' . esc_attr($num) . ' %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="ayaa-fz-footer-section-title-6">',
			'after_title'   => '</h4>',
		]);
	}
	// shop sidebar
	if (class_exists('WooCommerce')) {
		register_sidebar(
			array(
				'name'          => esc_html__('Shop Sidebar', 'ayaa'),
				'id'            => 'shop',
				'description'   => esc_html__('Add Shop Sidebar.', 'ayaa'),
				'before_widget' => '<section id="%1$s" class="sidebar-box mb-40 %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h3 class="ayaa-fz-woo-sidebar-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}
add_action('widgets_init', 'ayaa_widgets_init');


define('AYAA_THEME_DIR', get_template_directory());
define('AYAA_THEME_URI', get_template_directory_uri());
define('AYAA_THEME_CSS_DIR', AYAA_THEME_URI . '/assets/css/');
define('AYAA_THEME_LIB_NIOICON_DIR', AYAA_THEME_URI . '/assets/lib/nioicon/');
define('AYAA_THEME_LIB_ANIMATE_DIR', AYAA_THEME_URI . '/assets/lib/animate/');
define('AYAA_THEME_JS_DIR', AYAA_THEME_URI . '/assets/js/');
define('AYAA_THEME_LIB_JQUERY_DIR', AYAA_THEME_URI . '/assets/lib/jquery/');
define('AYAA_THEME_INC', AYAA_THEME_DIR . '/inc/');
define('AYAA_THEME_HOOK', AYAA_THEME_INC . 'hooks/');
define('AYAA_THEME_CLASS', AYAA_THEME_INC . 'classes/');

require AYAA_THEME_INC . 'template-helper.php';
require AYAA_THEME_INC . 'custom-header.php';
require AYAA_THEME_INC . 'template-tags.php';
require AYAA_THEME_INC . 'template-functions.php';
include_once AYAA_THEME_INC . '/style/php/customizer-style.php';
include_once AYAA_THEME_INC . 'class-wp-bootstrap-navwalker.php';
require_once AYAA_THEME_INC . 'class-tgm-plugin-activation.php';
require_once AYAA_THEME_INC . 'classes/class-ayaa-comment.php';
if (class_exists('WooCommerce')) {
	require_once AYAA_THEME_INC . 'hooks/woocommerce-hooks.php';
	require_once AYAA_THEME_INC . 'functions/woo-functions.php';
}
if (defined('JETPACK__VERSION')) {
	require AYAA_THEME_INC . 'jetpack.php';
}
/***
 * WooCommerce Support
 */
add_theme_support('woocommerce');
if (class_exists('TGM_Plugin_Activation')) {
	require_once AYAA_THEME_INC . 'add_plugin.php';
}


function ayaa_admin_custom_scripts()
{
	wp_enqueue_media();
	wp_enqueue_style('customizer-style', get_template_directory_uri() . '/inc/style/css/customizer-style.css', array());
	wp_register_script('ayaa-admin-custom', get_template_directory_uri() . '/inc/js/admin_custom.js', ['jquery'], '', true);
	wp_enqueue_script('ayaa-admin-custom');
}
add_action('admin_enqueue_scripts', 'ayaa_admin_custom_scripts');
/**
 * Registers an editor stylesheet for the theme.
 */
function ayaa_theme_add_editor_styles()
{
	add_editor_style('assets/css/custom-editor-style.css');
}
add_action('admin_init', 'ayaa_theme_add_editor_styles');



function ayaa_scripts()
{
	// all CSS
	wp_enqueue_style('nioicon', AYAA_THEME_LIB_NIOICON_DIR . 'nioicon.css',null, time());
	wp_enqueue_style('animate', AYAA_THEME_LIB_ANIMATE_DIR . 'animate.css',null, time());
	wp_enqueue_style('swiper-bundle', AYAA_THEME_CSS_DIR . 'swiper-bundle.min.css',null, time());
	wp_enqueue_style('bootstrap', AYAA_THEME_CSS_DIR . 'bootstrap.min.css',null, time());
	wp_enqueue_style('style', AYAA_THEME_CSS_DIR . 'style.css',null, time());

	// all js
	wp_enqueue_script('jquery-updated', AYAA_THEME_JS_DIR.'jquery-updated.min.js', ['jquery'], '', true);
	wp_enqueue_script('wow', AYAA_THEME_LIB_ANIMATE_DIR . 'wow.min.js', ['jquery'], '', true);
	wp_enqueue_script('swiper-bundle', AYAA_THEME_JS_DIR . 'swiper-bundle.min.js', ['jquery'], false, true);
	wp_enqueue_script('bootstrap-bundle', AYAA_THEME_JS_DIR . 'bootstrap.bundle.min.js', ['jquery'], '5.0.0', true);
	wp_enqueue_script('script', AYAA_THEME_JS_DIR . 'script.js', ['jquery'], time(), true);


}
add_action('wp_enqueue_scripts', 'ayaa_scripts');


function ayaa_fonts_url()
{
	$font_url = '';
	/*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
	if ('off' !== _x('on', 'Google font: on or off', 'ayaa')) {
		$font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=Poppins:wght@400;500;600;700&family=Playfair+Display:wght@400;700&family=Roboto:wght@400;500;700&family=Kanit:wght@300;400;500;600;700;900&display=swap');
	}
	return $font_url;
}


// custom mega menu
require_once get_template_directory() . '/custom-mega-menu-walker.php';
require_once get_template_directory() . '/custom-mobile-menu-walker.php';
require_once get_template_directory() . '/custom-mobile-child-menu-walker.php';

function custom_theme_setup() {
    register_nav_menu('mega_menu', 'Mega Menu');
}
add_action('after_setup_theme', 'custom_theme_setup');

function custom_excerpt_length($length) {
    return 120; // Change this number to the desired excerpt length (in words)
}
add_filter('excerpt_length', 'custom_excerpt_length');

