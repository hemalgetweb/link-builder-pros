<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<div class="ayaa-fz-shop-filter-grid-btn-wrap-422 text-center text-md-end">
    <div class="ayaa-fz-shop-filter-grid-btn-wrap-422 text-center text-md-end d-flex justify-content-center justify-content-md-end">
        <nav>
            <div class="nav" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="fa-sharp fa-solid fa-grid-2"></i></button>
                <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="fa-light fa-list"></i></button>
            </div>
        </nav>
        <div class="product-shorting-inner d-inline-block">
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby select has_nice_select" aria-label="<?php esc_attr_e( 'Shop order', 'ayaa' ); ?>">
                    <?php foreach ( $catalog_orderby_options as $id => $name ) : ?>
                        <option value="<?php echo esc_attr( $id ); ?>" <?php selected( $orderby, $id ); ?>><?php echo esc_html( $name ); ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="paged" value="1" />
                <?php wc_query_string_form_fields( null, array( 'orderby', 'submit', 'paged', 'product-page' ) ); ?>
            </form>
        </div>
        <?php echo get_option( 'orderby' ); ?>
    </div>
    
</div>
