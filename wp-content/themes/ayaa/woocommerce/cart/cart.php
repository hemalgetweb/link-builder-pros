<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>
    <div class="ayaa-fz-product-cart-area-445">
        <div class="row justify-content-center">
            <div class="col-xxl-8 col-xl-8 mb-30 mb-xl-0">
                <div class="ayaa-fz-cart-table-overflow-area-445">
                    <table class="ayaa-fz-cart-table-445 table">
                        <thead>
                            <tr>
                                <th><?php echo esc_html__('Product', 'ayaa'); ?></th>
                                <th><?php echo esc_html__('Price', 'ayaa'); ?></th>
                                <th><?php echo esc_html__('Quantity', 'ayaa'); ?></th>
                                <th><?php echo esc_html__('Subtotal', 'ayaa'); ?></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php do_action( 'woocommerce_before_cart_contents' ); ?>
                            <?php
                            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                    $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                    ?>
                                    <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                                        <!-- start here -->
                                        <td class="ayaa-fz-cart-thumbnail-name-wrapper-445">
                                            <div class="ayaa-fz-cart-product-img-445">
                                                <?php
                                                $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                                if ( ! $product_permalink ) {
                                                    echo esc_url($thumbnail); // PHPCS: XSS ok.
                                                } else {
                                                    printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                                }
                                                ?>
                                            </div>
                                            <h5 class="ayaa-fz-cart-table-product-name-445">
                                                <?php
                                                    if ( ! $product_permalink ) {
                                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                                    } else {
                                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="product-name">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                                    }

                                                    do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                                    // Meta data.
                                                    echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                                    // Backorder notification.
                                                    if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                                        echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'ayaa' ) . '</p>', $product_id ) );
                                                    }
                                                    ?>
                                            </h5>
                                        </td>
                                        <td class="ayaa-fz-cart-table-product-price-wrap-445" data-title="<?php esc_attr_e( 'Price', 'ayaa' ); ?>">
                                            <span class="ayaa-fz-cart-table-product-price-number-445">
                                                <?php
                                                    echo apply_filters( 'woocommerce_cart_item_price', wp_kses_post(WC()->cart->get_product_price( $_product )), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                                ?>
                                            </span>
                                        </td>
                                        <td class="ayaa-fz-cart-table-product-quantity-wrap-445" data-title="<?php esc_attr_e( 'Quantity', 'ayaa' ); ?>">
                                            <?php
                                            if ( $_product->is_sold_individually() ) {
                                                $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                            } else {
                                                $product_quantity = woocommerce_quantity_input(
                                                    array(
                                                        'input_name'   => "cart[{$cart_item_key}][qty]",
                                                        'input_value'  => $cart_item['quantity'],
                                                        'max_value'    => $_product->get_max_purchase_quantity(),
                                                        'min_value'    => '0',
                                                        'product_name' => $_product->get_name(),
                                                    ),
                                                    $_product,
                                                    false
                                                );
                                            }

                                            echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                            ?>
                                        </td>
                                        <td class="ayaa-fz-cart-table-product-subtotal-wrap-445" data-title="<?php esc_attr_e( 'Subtotal', 'ayaa' ); ?>">
                                            <span class="ayaa-fz-cart-table-product-subtotal-number-445">
                                                <?php
                                                    echo apply_filters( 'woocommerce_cart_item_subtotal', wp_kses_post(WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] )), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                                ?>
                                            </span>
                                        </td>
                                        <td class="ayaa-fz-cart-table-product-remove-wrap-445">
                                            <?php
                                                echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                                                    'woocommerce_cart_item_remove_link',
                                                    sprintf(
                                                        '<a href="%s" class="remove cart-delete" aria-label="%s" data-product_id="%s" data-product_sku="%s"><i class="fa-light fa-times"></i></a>',
                                                        esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                                        esc_html__( 'Remove this item', 'ayaa' ),
                                                        esc_attr( $product_id ),
                                                        esc_attr( $_product->get_sku() )
                                                    ),
                                                    $cart_item_key
                                                );
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>

                            <?php do_action( 'woocommerce_cart_contents' ); ?>

                            <tr>
                                <td colspan="12">
                                    <div class="row">
                                        <div class="col-8">
                                            <?php if ( wc_coupons_enabled() ) { ?>
                                                <div class="coupon">
                                                    <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'ayaa' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'ayaa' ); ?>"><?php esc_attr_e( 'Apply coupon', 'ayaa' ); ?></button>
                                                    <?php do_action( 'woocommerce_cart_coupon' ); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-4">
                                            <div class="text-end">
                                                <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'ayaa' ); ?>"><?php esc_html_e( 'Update cart', 'ayaa' ); ?></button>
                                                <?php do_action( 'woocommerce_cart_actions' ); ?>
                                                <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4">
                <div class="cart-collaterals ayaa-fz-cart-total-box-445">
                    <?php
                        /**
                         * Cart collaterals hook.
                         *
                         * @hooked woocommerce_cross_sell_display
                         * @hooked woocommerce_cart_totals - 10
                         */
                        do_action( 'woocommerce_cart_collaterals' );
                    ?>
                </div>
            </div>
        </div>
    </div>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
</form>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>



<?php do_action( 'woocommerce_after_cart' ); ?>
