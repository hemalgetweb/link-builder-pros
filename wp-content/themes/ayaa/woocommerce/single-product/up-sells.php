<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>

	<div class="rlated-product pt-110">
		<div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    $heading = apply_filters( 'woocommerce_product_upsells_products_heading', __( 'You may also like&hellip;', 'ayaa' ) );

                    if ( $heading ) :
                        ?>
                        <div class="heading text-center">
                            <h2><?php echo esc_html( $heading ); ?></h2>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="related-product-slider owl-carousel">
                    <?php foreach ( $upsells as $upsell ) :
                    $product = wc_get_product( get_the_ID() );    
                    ?>
                        <?php
                        $post_object = get_post( $upsell->get_id() );

                        setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found?>
                        <div class="single-product-card">
                            <div class="part-img">
                                <a href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php echo esc_attr__('Product', 'ayaa'); ?>"></a>
                                <div class="cart-option cart-option-bottom">
                                    <ul>
                                        <li>
                                            <?php
                                                woocommerce_template_loop_add_to_cart();
                                            ?>
                                        </li>
                                        <li>
                                            <div class="ayaa-action-wishlist-btn">
                                                <?php
                                                    if(function_exists('woosw_plugin_activate')) {
                                                        echo do_shortcode('[woosw id="'.get_the_ID().'"]');
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ayaa-action-compare-btn">
                                                <?php 
                                                    if(function_exists( 'woosc_init' )) {
                                                        echo do_shortcode('[woosc id="'.get_the_ID().'"]');
                                                    }
                                                ?>
                                            </div>
                                        </li>
                                        <li>
                                            <?php
                                            if(function_exists( 'woosq_init' )) {
                                                echo do_shortcode('[woosq id="'.get_the_ID().'"]');
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="part-txt">
                                <h4 class="product-name"><a href="<?php echo esc_url(get_the_permalink(get_the_ID())); ?>"><?php echo esc_html(wp_trim_words(get_the_title(), 4)); ?></a></h4>
                                <?php if ( $price_html = $product->get_price_html() ) : global $allowed;?>
                                    <span class="product-price"><?php echo wp_kses($price_html, $allowed); ?></span>
                                <?php endif; ?>
                                <?php woocommerce_template_loop_rating(); ?>
                                <button class="add-to-cart-btn"><?php echo esc_html__('Add to Cart', 'ayaa'); ?></button>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>

            </div>
	</div>

	<?php
endif;

wp_reset_postdata();
