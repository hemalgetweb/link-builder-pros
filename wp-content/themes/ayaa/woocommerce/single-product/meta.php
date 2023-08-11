<?php

/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

global $product;
$avibility_status = '';
if ($product->get_stock_quantity() > 0) {
    $avibility_status = esc_html($product->get_stock_quantity());
} else {
    $avibility_status = __('Out Of Stock', 'ayaa');
}
?>
<div class="product_meta">
    <?php do_action('woocommerce_product_meta_start'); ?>
    <ul class="short-details">
        <?php if (wc_product_sku_enabled() && ($product->get_sku() || $product->is_type('variable'))) : ?>
            <li><span class="label"><?php echo esc_html__('SKU :', 'ayaa'); ?></span> <span class="value"><?php echo esc_html($product->get_sku()) ? esc_html($product->get_sku()) : esc_html__('N/A', 'ayaa'); ?></span></li>
        <?php endif; ?>
        <li><span class="label"><?php echo esc_html__('Availability: ', 'ayaa'); ?></span><span class="value"><?php echo esc_html($avibility_status); ?></span></li>
    </ul>
    <?php do_action('woocommerce_product_meta_end'); ?>
</div>