<?php

/**
 * Review order table
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/review-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */
defined('ABSPATH') || exit;
global $woocommerce;
?>

<div class="ayaa-checkout-order-summery-box mb-40">
    <div class="ayaa-checkout-order-summery-box-wrap">
        <?php do_action('woocommerce_review_order_before_cart_contents'); ?>
        <div class="ayaa-fz-checkout-order-box-product-wrap-446">
            <div class="ayaa-fz-checkout-order-box-heading-wrap-446">
                <div class="row g-0">
                    <div class="col-6">
                        <h5 class="ayaa-fz-checkout-order-box-title-446"><?php echo esc_html__('Product', 'ayaa'); ?></h5>
                    </div>
                    <div class="col-6">
                        <h5 class="ayaa-fz-checkout-order-box-title-446 text-end"><?php echo esc_html__('Price', 'ayaa'); ?></h5>
                    </div>
                </div>
            </div>
            <div class="ayaa-fz-checkout-order-box-product-content-wrap-446 pt-30 pb-10">
                <?php foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) :
                    $_product = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
                    $_product_thumbnail_url = get_the_post_thumbnail_url($cart_item['product_id'], 'thumbnail');
                    $_product_thumbnail_alt = get_post_meta($cart_item['product_id'], '_wp_attachment_image_alt', TRUE);
                ?>
                    <?php
                    if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key)) :
                    ?>
                        <div class="ayaa-fz-checkout-order-box-product-item-single-446 <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
                            <div class="row">
                                <div class="col-8">
                                    <h6 class="title"><a href="<?php echo esc_url(get_the_permalink($cart_item['product_id'])); ?>"><?php echo wp_kses_post(wp_trim_words(apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key), 3)) . '&nbsp;'; ?></a> <?php echo apply_filters('woocommerce_checkout_cart_item_quantity', ' <span>x ' . sprintf('&nbsp;%s', $cart_item['quantity']) . '</span>', $cart_item, $cart_item_key); ?></h6>
                                </div>
                                <div class="col-4">
                                    <div class="price text-end"><?php echo apply_filters('woocommerce_cart_item_subtotal', wp_kses_post(WC()->cart->get_product_subtotal($_product, $cart_item['quantity'])), $cart_item, $cart_item_key); ?></div>
                                </div>
                            </div>
                        </div>
                        <!-- /. product single item -->
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div class="ayaa-fz-checkout-order-box-heading-wrap-446">
                <div class="row g-0">
                    <div class="col-6">
                        <h5 class="ayaa-fz-checkout-order-box-title-446"><?php echo esc_html__('Subtotal', 'ayaa'); ?></h5>
                    </div>
                    <div class="col-6">
                        <h5 class="ayaa-fz-checkout-order-box-title-446 text-end"><?php echo esc_html(get_woocommerce_currency_symbol()); echo esc_html($woocommerce->cart->get_subtotal()); ?></h5>
                    </div>
                </div>
            </div>
            <div class="ayaa-fz-checkout-order-box-heading-wrap-446">
                <div class="row g-0">
                    <div class="col-6">
                        <h5 class="ayaa-fz-checkout-order-box-title-446"><?php echo esc_html__('Total', 'ayaa'); ?></h5>
                    </div>
                    <div class="col-6">
                        <h5 class="ayaa-fz-checkout-order-box-title-446 text-end"><?php echo wp_kses_post($woocommerce->cart->get_total()); ?></h5>
                    </div>
                </div>
            </div>
        </div>
        <?php do_action('woocommerce_review_order_after_cart_contents'); ?>
    </div>
</div>
<?php echo wc_get_formatted_cart_item_data($cart_item); ?>