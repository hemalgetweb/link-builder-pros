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
    <meta name="robots" content="noindex, nofollow">
    <meta charset="UTF-8">
    <title>Linkbuilderpros - Link Building Service Agency Website</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="misapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Required meta tags for responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon and touch icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon.svg">

    <!-- Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Website title -->
    <title>Home</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class('inner'); ?> data-bg-color="<?php echo esc_attr($body_background_color); ?>">
    <!-- Main Coding Start Here -->
    <?php wp_body_open(); ?>


<!-- header start -->
<?php do_action( 'ayaa_header_style' );?>



