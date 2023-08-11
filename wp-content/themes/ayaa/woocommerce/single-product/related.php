<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) :
	global  $woocommerce;
	$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Related products', 'ayaa' ) );
?>
	<div class="rlated-product pt-25 pb-0">
		<div class="row">
			<?php if ( $heading ) : ?>
			<div class="col-12">
				<div class="ayaa-fz-heading-wrapper-443 mb-30">
					<h2 class="ayaa-fz-heading-443"><?php echo esc_html( $heading ); ?></h2>
				</div>
			</div>
			<?php endif; ?>
			<div class="col-12">
				<div class="related-product-slider owl-carousel">
					<?php foreach ( $related_products as $related_product ) :
					$product = wc_get_product( get_the_ID() );
					?>
						<?php
							$post_object = get_post( $related_product->get_id() );
							setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found ?>
							<?php
								echo '<div class="ayaa-woo-product-box-1 ayaa-fz-woo-product-box-422 mb-40">';
										do_action( 'woocommerce_before_shop_loop_item_title' );
										do_action( 'ayaa_woocommerce_shop_loop_product_content' );
								echo '</div>';
							?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
	<?php
endif;

wp_reset_postdata();
