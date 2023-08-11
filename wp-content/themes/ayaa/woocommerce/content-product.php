<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div <?php wc_product_class( 'col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-12 ', $product ); ?>>
	<?php
		echo '<div class="ayaa-woo-product-box-1 ayaa-fz-woo-product-box-422 mb-40">';
				/**
				 * Hook: woocommerce_before_shop_loop_item_title.
				 *
				 * @hooked ayaa_woo_product_thumbnail - 10
				 */
				do_action( 'woocommerce_before_shop_loop_item_title' );
				/**
				 * Hook: ayaa_woocommerce_shop_loop_product_content.
				 *
				 * @hooked ayaa_woocommerce_template_loop_product_content - 10
				 */
				do_action( 'ayaa_woocommerce_shop_loop_product_content' );
		echo '</div>';
	?>
</div>