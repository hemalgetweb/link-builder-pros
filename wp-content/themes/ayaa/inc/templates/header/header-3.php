<?php
/*
        cmt_section_header_3: start header 3
    */

$cbtoolkit_topbar_switch_3 = get_theme_mod('cbtoolkit_topbar_switch_3', false);
$cbtoolkit_header_top_welcome_text_3 = get_theme_mod('cbtoolkit_header_top_welcome_text_3', __('Register now and get an extra 10 off using the code Farzaa15', 'ayaa'));
$cbtoolkit_header_currency_switch_3 = get_theme_mod('cbtoolkit_header_currency_switch_3', true);
$cbtoolkit_header_lang_switch_3 = get_theme_mod('cbtoolkit_header_lang_switch_3', true);
$cbtoolkit_customar_service_switch_3 = get_theme_mod('cbtoolkit_customar_service_switch_3', true);
$cbtoolkit_header_top_customer_service_text_3 = get_theme_mod('cbtoolkit_header_top_customer_service_text_3', __('Customer Service', 'ayaa'));
$cbtoolkit_header_top_customer_service_link_3 = get_theme_mod('cbtoolkit_header_top_customer_service_link_3', __('#', 'ayaa'));
$cbtoolkit_header_top_find_store_text_3 = get_theme_mod('cbtoolkit_header_top_find_store_text_3', __('Find a Store', 'ayaa'));
$cbtoolkit_header_top_find_store_link_3 = get_theme_mod('cbtoolkit_header_top_find_store_link_3', __('#', 'ayaa'));
$cbtoolkit_header_main_right_switch_3 = get_theme_mod('cbtoolkit_header_main_right_switch_3', false);
$cbtoolkit_header_cart_switch_3 = get_theme_mod('cbtoolkit_header_cart_switch_3', true);
$cbtoolkit_header_search_switch_3 = get_theme_mod('cbtoolkit_header_search_switch_3', true);

$all_categories = array();
if (class_exists('WooCommerce')) {
    $taxonomy     = 'product_cat';
    $orderby      = 'name';
    $show_count   = 0;      // 1 for yes, 0 for no
    $pad_counts   = 0;      // 1 for yes, 0 for no
    $hierarchical = 1;      // 1 for yes, 0 for no  
    $title        = '';
    $empty        = 1;
    $args = array(
        'taxonomy'     => $taxonomy,
        'orderby'      => $orderby,
        'show_count'   => $show_count,
        'pad_counts'   => $pad_counts,
        'hierarchical' => $hierarchical,
        'hide_empty'   => $empty
    );
    $all_categories = get_categories($args);
}
?>
<?php ayaa_header_cart(); ?>
<!-- header area start -->
<header class="ayaa-header-3 ayaa-fz-header-menu-display">
    <?php if (!empty($cbtoolkit_topbar_switch_3)) : ?>
        <div class="ayaa-fz-header-top-3 pt-10 pb-10">
            <div class="container fz-header-container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-md-6">
                        <?php if (!empty($cbtoolkit_header_top_welcome_text_3)) : ?>
                            <div class="ayaa-fz-header-top-middle-3 text-center text-md-start">
                                <p class="ayaa-fz-header-top-text mb-0"><?php echo wp_kses_post($cbtoolkit_header_top_welcome_text_3) ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-6 col-md-6">
                        <div class="ayaa-fz-header-top-select-lists-3 text-center text-md-end">
                            <?php if (!empty($cbtoolkit_header_currency_switch_3)) : ?>
                                <?php currency_switcher_html(); ?>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_header_lang_switch_3) && class_exists('GTranslate')) : ?>
                                <div class="ayaa-fz-header-top-nice-select-rand">
                                    <?php echo do_shortcode('[gtranslate]'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="ayaa-fz-header-top-middle-3-link-text d-none d-sm-block">
                                <?php if (!empty($cbtoolkit_header_top_customer_service_text_3)) : ?>
                                    <a href="<?php echo esc_url($cbtoolkit_header_top_customer_service_link_3) ? esc_url($cbtoolkit_header_top_customer_service_link_3) : ''; ?>"><?php echo esc_html($cbtoolkit_header_top_customer_service_text_3); ?></a>
                                <?php endif; ?>
                                <?php if (!empty($cbtoolkit_header_top_find_store_text_3)) : ?>
                                    <a href="<?php echo esc_url($cbtoolkit_header_top_find_store_link_3) ? esc_url($cbtoolkit_header_top_find_store_link_3) : ''; ?>"><?php echo esc_html($cbtoolkit_header_top_find_store_text_3); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. header top end -->
    <?php endif; ?>
    <div class="ayaa-fz-header-middle-2 pt-30 pb-30">
        <div class="container fz-header-container">
            <div class="row g-0 align-items-center">
                <div class="col-xxl-5 col-xl-5 col-lg-3 col-md-6 col-6">
                    <div class="ayaa-fz-header-logo-category-wrapper d-flex align-items-center pr-20">
                        <div class="ayaa-fz-header-logo-3">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php ayaa_header_logo_3(); ?>
                            </a>
                        </div>
                        <?php if (!empty($cbtoolkit_header_search_switch_3)) : ?>
                            <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="d-none d-xl-block">
                                <div class="ayaa-fz-header-search-wrap-2 ml-65">
                                    <div class="ayaa-fz-header-search-2">
                                        <?php if (!empty($all_categories)) : ?>
                                            <select name="product_cat" id="product_cat" class="ayaa-fz-header-search-select-2 has_nice_select">
                                                <option><?php echo esc_html__('All Categories', 'ayaa'); ?></option>
                                                <?php foreach ($all_categories as $index => $cat) : ?>
                                                    <option value="<?php echo esc_attr($cat->term_id); ?>"><?php echo esc_html($cat->name); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                    <input type="hidden" name="post_type" value="product" />
                                    <div class="ayaa-fz-header-search-input">
                                        <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__('Search ...', 'ayaa'); ?>">
                                        <button type="submit"><i class="fa-thin fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-xxl-7 col-xl-7 col-lg-9 col-md-6 col-6">
                    <div class="ayaa-fz-header-right-menu-wrapper d-flex align-items-center justify-content-end">
                        <div class="ayaa-header-nav-list-2 ayaa-header-nav-list-3 text-end d-none d-lg-block">
                            <nav id="mobile-menu-updated">
                                <?php ayaa_header_menu_3(); ?>
                            </nav>
                        </div>
                        <?php if (!empty($cbtoolkit_header_main_right_switch_3) && class_exists('WooCommerce')) : ?>
                            <div class="ayaa-fz-header-right-action-wrap-3 ml-60">
                                <span class="ayaa-fz-header-right-navbar default-bar-open"><i class="fa-thin fa-bars-sort"></i></span>
                                <a href="<?php echo esc_url(home_url('/wishlist')); ?>" target="_blank"><i class="fa-thin fa-heart"></i></a>
                                <?php if (!empty($cbtoolkit_header_cart_switch_3)) : ?>
                                    <a href="#0" class="icon ayaa-rv-toggle-cart-sidebar">
                                        <i class="fa-thin fa-cart-shopping"></i>
                                        <span class="count"><span id="mini-cart-count-234"></span></span>
                                    </a>
                                <?php endif; ?>
                                <a href="<?php the_permalink(get_option('woocommerce_myaccount_page_id'));  ?>"><i class="fa-thin fa-user"></i></a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /. header middle end -->
</header>
<!-- header area end -->

<?php offcanvas_menu_fullwidth(); ?>