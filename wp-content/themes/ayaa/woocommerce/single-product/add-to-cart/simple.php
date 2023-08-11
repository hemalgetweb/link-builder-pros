<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>
	<form class="cart ayaa-shop-details-content-cart-action-wrap" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php echo '<div class="ba-item-cart-shop-details-wrap mb-35">'; ?>
			<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
			<div class="ayaa-fz-prdouct-details-list-item-443">
				<?php
				do_action( 'woocommerce_before_add_to_cart_quantity' );
				echo '<div class="ayaa-shop-details-content-quantity-box mb-20 mb-sm-0 ayaa-product-type-simple">';
					woocommerce_quantity_input(
						array(
							'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
							'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
							'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
						)
					);
				echo '</div>';
				do_action( 'woocommerce_after_add_to_cart_quantity' );
			?>
		</div>
		<div class="ayaa-fz-prdouct-details-list-item-443">
			<div class="ba-item-cart-shop-details-cart-btn">
				<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>
			</div>
		</div>
		<div class="ayaa-fz-prdouct-details-list-item-443">
			<?php if(function_exists( 'woosw_init' )): ?>
                <?php 
                        echo do_shortcode('[woosw id="'.get_the_ID().'"]');
                ?>
            <?php endif; ?>
		</div>
		<?php echo '</div>'; ?>
		<div class="ayaa-fz-shop-details-payment-image-443">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/update/banner/support-payment.png" alt="<?php echo esc_attr__('Payment', 'ayaa'); ?>">
			<p><?php echo esc_html__('Guaranteed safe & secure checkout', 'ayaa'); ?></p>
		</div>
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
