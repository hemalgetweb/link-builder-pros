<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

defined('ABSPATH') || exit;


/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
global $product;

?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class('ayaa-shop-details', $product); ?>>
    <div class="ayaa-shop-details mb-50 product-view-area pb-0">
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                <div class="part-img">
                    <?php woocommerce_show_product_images(); ?>
                </div>
            </div>
            <div class="col-xl-7 col-xl-7 col-lg-7 col-md-6">
                <div class="part-txt pr-105 pl-40 pt-27">
                    <?php
                    woocommerce_template_single_title();
                    ?>
                    <div class="ayaa-fz-product-details-price-wrapper-443">
                        <?php
                            woocommerce_template_single_price();
                            woocommerce_template_single_rating();
                        ?>
                    </div>
                    <?php woocommerce_template_single_meta(); ?>
                    <p class="dscr">
                        <?php echo wp_kses_post(get_the_excerpt()); ?>
                    </p>
                    <?php echo '<div class="ayaa-shop-details-content-bottom-wrap">';
                    woocommerce_template_single_add_to_cart();
                    echo '</div>';
                    ?>
                </div>
            </div>
        </div>
    </div>


    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_product_data_tabs - 10
     * @hooked woocommerce_upsell_display - 15
     * @hooked woocommerce_output_related_products - 20
     */
    do_action('woocommerce_after_single_product_summary');
    ?>
</div>

<?php do_action('woocommerce_after_single_product'); ?>