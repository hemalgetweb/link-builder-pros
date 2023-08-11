<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
$col_class = is_active_sidebar('shop') ? 'col-xl-12 col-lg-12' : 'col-xl-12 col-lg-12';
?>
<div class="row justify-content-center">
	<?php if(is_active_sidebar('shop')) : ?>
		<div class="col-xl-3 col-lg-4 col-md-9">
			<?php
				/**
				 * Hook: woocommerce_sidebar.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>
		</div>
	<?php endif; ?>
	<div class="col-xl-9 col-lg-8">
		<div class="ayaa-fz-shop-page-items-wrapper-422">
			<?php
			if ( woocommerce_product_loop() ) {	

			/**
			 * Hook: woocommerce_before_shop_loop.
			 *
			 * @hooked woocommerce_output_all_notices - 10
			 * @hooked woocommerce_result_count - 20
			 * @hooked woocommerce_catalog_ordering - 30
			 */
			do_action( 'woocommerce_before_shop_loop' );?>
			<div class="ayaa-fz-shop-top-wrapper-422 pb-35">
				<div class="row align-items-center">
					<div class="col-xxl-6 col-xl-6 col-lg-5 col-md-6 mb-15 mb-md-0 text-center text-md-start">
						<?php woocommerce_result_count(); ?>
					</div>
					<div class="col-xxl-6 col-xl-6 col-lg-7 col-md-6">
						<?php woocommerce_catalog_ordering(); ?>
					</div>
				</div>
			</div>
			<?php woocommerce_product_loop_start(); ?>
			<div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
				<div class="row">
					<?php
						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();
								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action( 'woocommerce_shop_loop' );
								wc_get_template_part( 'content', 'product' );
							}
						}
					?>
				</div>
			</div>
			<div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
				<div class="ayaa-fz-product-list-wrap-422">
					<div class="<?php echo esc_attr($col_class); ?>">
						<?php
							if ( wc_get_loop_prop( 'total' ) ) {
								while ( have_posts() ) {
									the_post();
									/**
									 * Hook: woocommerce_shop_loop.
									 */
									do_action( 'woocommerce_shop_loop' );
									wc_get_template_part( 'content', 'product-list' );
								}
							}
						?>
					</div>
				</div>
			</div>
			<?php woocommerce_product_loop_end(); ?>
				<?php /**
				 * Hook: woocommerce_after_shop_loop.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			} else {
				/**
				 * Hook: woocommerce_no_products_found.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			} ?>
		</div>
	</div>
</div>
<?php 
/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

get_footer( 'shop' );
