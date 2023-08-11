<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;
$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$product_gallery_image_ids = $product->get_gallery_image_ids();
$single_wrap_class = $product_gallery_image_ids ? array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $post_thumbnail_id ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) :array('img-box');
$wrapper_classes   = apply_filters(
	'woocommerce_single_product_image_gallery_classes', $single_wrap_class
);
?>
<div class="<?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>">

	<?php if(!empty($product_gallery_image_ids)) :
		$product_id = $product_gallery_image_ids[0];
		$image_alt = get_post_meta($product_id, '_wp_attachment_image_alt', TRUE);	
	?>
		<div class="img-box" id="bigPreview">
			<img src="<?php echo esc_url(wp_get_attachment_image_url($product_id, 'full')); ?>" alt="<?php echo esc_attr($image_alt); ?>">
			<button class="quick-view"><i class="fa-thin fa-arrows-maximize"></i></button>
		</div>
	<?php else: 
		$image_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', TRUE);	
		?>
		<div id="bigPreview">
			<?php $image_url = wp_get_attachment_image_url($post_thumbnail_id, 'full'); ?>
			<img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
			<button class="quick-view"><i class="fa-thin fa-arrows-maximize"></i></button>
		</div>
	<?php endif; ?>
	<figure class="woocommerce-product-gallery__wrapper">
		<?php
		do_action( 'woocommerce_product_thumbnails' );
		?>
	</figure>
</div>
<div class="product-quick-view-panel-2">
	<?php 
	$image_alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', TRUE);
	?>
	<div class="panel-content">
		<div class="img"><img class="quick-view-image" src="<?php echo esc_url(wp_get_attachment_image_url($post_thumbnail_id, 'full')); ?>" alt="<?php echo esc_attr($image_alt); ?>"></div>
	</div>
	<div class="notification">
		<p><span><i class="fa-light fa-triangle-exclamation"></i></span> <?php echo esc_attr__('You are at the end', 'ayaa'); ?></p>
	</div>
	<div class="panel-arrow"><button id="prevImg"><i class="fa-light fa-caret-left"></i></button> <button id="nextImg"><i class="fa-light fa-caret-right"></i></button></div>
</div>