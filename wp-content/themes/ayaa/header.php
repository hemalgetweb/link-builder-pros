<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ayaa
 */
$cbtoolkit_preloader = get_theme_mod('cbtoolkit_preloader', false);
$body_background_color = function_exists('get_field') ? get_field('body_background_color') : '';
$parallex_page = function_exists('get_field') ? get_field('parallex_page') : '';
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class('inner'); ?> data-bg-color="<?php echo esc_attr($body_background_color); ?>">
    <!-- Main Coding Start Here -->
    <?php wp_body_open(); ?>


<!-- header start -->
<?php do_action( 'ayaa_header_style' );?>



