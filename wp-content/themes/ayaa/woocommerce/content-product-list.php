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
<?php
echo "<div class='row'>";
    echo "<div class='col-12 col-md-12'>";
        echo '<div class="ayaa-fz-product-list-item-422 mb-40">';
            echo '<div class="row align-items-xl-center">';
                echo '<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6">';
                    echo '<div class="ayaa-woo-product-box-image-1">';
                        ayaa_woo_product_thumbnail_list();
                    echo '</div>';
                echo '</div>';
                echo '<div class="col-xxl-6 col-xl-7 col-lg-7 col-md-6">';
                    do_action( 'ayaa_woocommerce_shop_loop_product_content_list' );
                echo '</div>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
echo "</div>";

?>