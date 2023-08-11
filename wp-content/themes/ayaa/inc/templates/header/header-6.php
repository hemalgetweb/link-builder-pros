<?php
$cbtoolkit_topbar_switch_6 = get_theme_mod('cbtoolkit_topbar_switch_6', false);
$cbtoolkit_header_top_welcome_text_switch_6 = get_theme_mod('cbtoolkit_header_top_welcome_text_switch_6', true);
$cbtoolkit_header_top_welcome_text_6 = get_theme_mod('cbtoolkit_header_top_welcome_text_6', __(' Free Express Shipping on orders $200!', 'ayaa'));
$cbtoolkit_header_currency_switch_6 = get_theme_mod('cbtoolkit_header_currency_switch_6', true);
$cbtoolkit_header_lang_switch_6 = get_theme_mod('cbtoolkit_header_lang_switch_6', true);
$cbtoolkit_header_main_right_switch_6 = get_theme_mod('cbtoolkit_header_main_right_switch_6', false);
$cbtoolkit_header_search_switch_6 = get_theme_mod('cbtoolkit_header_search_switch_6', true);
$cbtoolkit_header_top_email_text_6 = get_theme_mod('cbtoolkit_header_top_email_text_6', __('info@webmail.com', 'ayaa'));
$cbtoolkit_header_top_email_link_6 = get_theme_mod('cbtoolkit_header_top_email_link_6', __('info@webmail.com', 'ayaa'));
$cbtoolkit_side_support_label_6 = get_theme_mod('cbtoolkit_side_support_label_6',  __('24/7 Hour Support', 'ayaa'));
$cbtoolkit_side_support_number_text_6 = get_theme_mod('cbtoolkit_side_support_number_text_6',  __('+1 555 555-1234.', 'ayaa'));
$cbtoolkit_side_support_number_link_6 = get_theme_mod('cbtoolkit_side_support_number_link_6',  __('+1555555-1234', 'ayaa'));
$cbtoolkit_header_cat_limit_6 = get_theme_mod('cbtoolkit_header_cat_limit_6', __('9', 'ayaa'));
$cbtoolkit_side_account_label_text_6 = get_theme_mod('cbtoolkit_side_account_label_text_6',  __('Sign In', 'ayaa'));
$cbtoolkit_side_account_text_text_6 = get_theme_mod('cbtoolkit_side_account_text_text_6',  __('Account', 'ayaa'));
$cbtoolkit_side_account_text_link_6 = get_theme_mod('cbtoolkit_side_account_text_link_6',  __('#', 'ayaa'));
$cbtoolkit_header_category_switch_6 = get_theme_mod('cbtoolkit_header_category_switch_6', true);
$cbtoolkit_header_cat_btn_text_6 = get_theme_mod('cbtoolkit_header_cat_btn_text_6', __('Category', 'ayaa'));
$cbtoolkit_header_cat_coupon_url_6 = get_theme_mod('cbtoolkit_header_cat_coupon_url_6', __('#', 'ayaa'));
$cbtoolkit_header_cat_coupon_text_6 = get_theme_mod('cbtoolkit_header_cat_coupon_text_6', __('50%OFFERZ', 'ayaa'));
$cbtoolkit_header_best_sell_text_6 = get_theme_mod('cbtoolkit_header_best_sell_text_6', __('Best Sell', 'ayaa'));
$cbtoolkit_header_best_sell_link_6 = get_theme_mod('cbtoolkit_header_best_sell_link_6', __('#', 'ayaa'));
$cbtoolkit_header_free_shipping_text_6 = get_theme_mod('cbtoolkit_header_free_shipping_text_6', __('Free Shipping at $50+', 'ayaa'));
$cbtoolkit_header_bottom_switch_6 = get_theme_mod('cbtoolkit_header_bottom_switch_6', false);
$get_woo_product_cat_6 = get_theme_mod('get_woo_product_cat_6');
if ($get_woo_product_cat_6) {
    $ayaa_all_categories = $get_woo_product_cat_6;
}
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
<?php ayaa_sidebar_mobile_menu_1(); ?>
<!-- header area start -->
<header class="ayaa-header-2">
    <?php if (!empty($cbtoolkit_topbar_switch_6)) : ?>
        <div class="ayaa-fz-header-top-2 d-none d-md-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <?php if (!empty($cbtoolkit_header_top_email_text_6)) : ?>
                            <div class="ayaa-fz-header-top-left-2">
                                <div class="ayaa-fz-header-top-links-2">
                                    <a href="<?php echo esc_url($cbtoolkit_header_top_email_link_6) ? esc_url('mailto:' . $cbtoolkit_header_top_email_link_6) : ''; ?>"><i class="fa-thin fa-envelope-open"></i> <?php echo esc_html($cbtoolkit_header_top_email_text_6); ?></a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <?php if (!empty($cbtoolkit_header_top_welcome_text_6)) : ?>
                            <div class="ayaa-fz-header-top-middle-2 text-center">
                                <p><?php echo esc_html($cbtoolkit_header_top_welcome_text_6); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <div class="ayaa-fz-header-top-select-lists-2 text-end">
                            <?php if (!empty($cbtoolkit_header_currency_switch_6)) : ?>
                                <?php currency_switcher_html(); ?>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_header_lang_switch_6) && class_exists('GTranslate')) : ?>
                                <?php echo do_shortcode('[gtranslate]'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. header top end -->
    <?php endif; ?>
    <div class="ayaa-fz-header-middle-2 pt-30 pb-30">
        <div class="container">
            <div class="row g-xxl-0 align-items-center justify-content-between">
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-6">
                    <div class="ayaa-fz-header-logo-2">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <?php ayaa_header_logo_6(); ?>
                        </a>
                    </div>
                </div>
                <?php if (!empty($cbtoolkit_header_search_switch_6)) : ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-5 d-none d-lg-block">
                        <form method="get" action="<?php echo esc_url(home_url('/')); ?>">
                            <div class="ayaa-fz-header-search-wrap-2">
                                <div class="ayaa-fz-header-search-2">
                                    <?php if (!empty($all_categories)) : ?>
                                        <select name="product_cat" id="product_cat" class="ayaa-fz-header-search-select-2 has_nice_select">
                                            <?php foreach ($all_categories as $index => $cat) : ?>
                                                <option value="<?php echo esc_attr($cat->term_id); ?>"><?php echo esc_html($cat->name); ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    <?php endif; ?>
                                </div>
                                <input type="hidden" name="post_type" value="product" />
                                <div class="ayaa-fz-header-search-input">
                                    <input type="search" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr__('Search Product', 'ayaa'); ?>">
                                    <button type="submit"><i class="fa-thin fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif; ?>
                <?php if (!empty($cbtoolkit_header_search_switch_6)) : ?>
                    <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-5 col-5 d-none d-lg-block">
                        <div class="text-end pr-8 ayaa-fz-menu-right-space-2">
                            <div class="ayaa-fz-header-right-contact-list-wrap-2">
                                <?php if (!empty($cbtoolkit_side_support_number_text_6)) : ?>
                                    <div class="d-inline-block">
                                        <div class="ayaa-fz-header-right-contact-list-item-2">
                                            <div class="icon">
                                                <i class="fa-thin fa-headphones"></i>
                                            </div>
                                            <div class="content">
                                                <?php if (!empty($cbtoolkit_side_support_label_6)) : ?>
                                                    <span class="label"><?php echo esc_html($cbtoolkit_side_support_label_6); ?></span>
                                                <?php endif; ?>
                                                <a href="<?php echo esc_url($cbtoolkit_side_support_number_link_6) ? esc_url('tel:' . $cbtoolkit_side_support_number_link_6) : ''; ?>" class="value"><?php echo esc_html($cbtoolkit_side_support_number_text_6); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($cbtoolkit_side_account_text_text_6) && class_exists('WooCommerce')) : ?>
                                    <div class="d-inline-block pl-25 ayaa-fz-header-space-left-2">
                                        <div class="ayaa-fz-header-right-contact-list-item-2">
                                            <a href="<?php the_permalink(get_option('woocommerce_myaccount_page_id'));  ?>" class="icon">
                                                <i class="fa-thin fa-user"></i>
                                            </a>
                                            <div class="content">
                                                <?php if (!empty($cbtoolkit_side_account_label_text_6)) : ?>
                                                    <span class="label"><?php echo esc_html($cbtoolkit_side_account_label_text_6); ?></span>
                                                <?php endif; ?>
                                                <a href="<?php the_permalink(get_option('woocommerce_myaccount_page_id')); ?>" class="value"><?php echo esc_html($cbtoolkit_side_account_text_text_6); ?></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php if (class_exists('WooCommerce')) : ?>
                                <div class="ayaa-fz-header-right-action-wrap-2 pl-30">
                                    <div class="ayaa-fz-header-right-action-item-2">
                                        <a href="<?php echo esc_url(home_url('/wishlist')); ?>" class="icon">
                                            <i class="fa-light fa-heart"></i>
                                        </a>
                                        <a href="#0" class="icon">
                                            <i class="fa-thin fa-cart-shopping ayaa-rv-toggle-cart-sidebar"></i>
                                            <span class="count"><span id="mini-cart-count-234"></span></span>
                                        </a>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-6 d-lg-none text-end">
                    <div class="ayaa-fz-header-right-action-wrap-2">
                        <div class="ayaa-fz-header-right-action-item-2">
                            <a href="#0" class="icon ayaa-fz-tollgle-mobile-sidebar-2">
                                <i class="fa-light fa-bars"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. header middle end -->
    <?php if (!empty($cbtoolkit_header_bottom_switch_6)) : ?>
        <div class="ayaa-header-bottom-2 ayaa-has-bottom-border d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <?php if (!empty($ayaa_all_categories) && !empty($cbtoolkit_header_category_switch_6)) : ?>
                        <div class="col-xxl-3 col-xl-3 col-lg-4">
                            <div class="ayaa-header-bottom-left-2 ayaa-header-categories">
                                <?php if (!empty($cbtoolkit_header_cat_btn_text_6)) : ?>
                                    <a href="#0" class="ayaa-header-bottom-category-btn-2">
                                        <div class="left">
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/update/icon/bar.svg" alt="<?php esc_attr__('icon', 'ayaa'); ?>">
                                            </div>
                                            <div class="content">
                                                <span class="text"><?php echo esc_html($cbtoolkit_header_cat_btn_text_6); ?></span>
                                                <span class="text"><?php echo esc_html($cbtoolkit_header_cat_btn_text_6); ?></span>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="icon-arrow">
                                                <i class="fa-solid fa-angle-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                <?php endif; ?>
                                <div class="ayaa-header-categories-menu-list">
                                    <div class="ayaa-header-categories-menu-list-inner">
                                        <nav id="ayaa-rv-categories-menu">
                                            <ul>
                                                <?php
                                                $ayaa_woo_cat_index_count = 0;
                                                foreach ($ayaa_all_categories as $category) :
                                                    if ($get_woo_product_cat_6) {
                                                        $cat_id = $category;
                                                        $product_cat_name = get_cat_name($cat_id);
                                                        $product_cat_name = '';
                                                        $product_cat_url = get_category_link($cat_id);
                                                        if ($term = get_term_by('id', $cat_id, 'product_cat')) {
                                                            $product_cat_name = $term->name;
                                                        }
                                                    } else {
                                                        $parent_cat_id = $category->term_id;
                                                        $parent_cat_id_6 = get_term_meta($parent_cat_id, 'thumbnail_id', true);
                                                        $cat_image = wp_get_attachment_url($parent_cat_id_6);
                                                        if (!empty($get_woo_product_cat)) {
                                                            if (!in_array($parent_cat_id, $get_woo_product_cat)) {
                                                                continue;
                                                            }
                                                        }
                                                    }

                                                ?>
                                                    <?php if (empty($get_woo_product_cat_6)) : ?>
                                                        <?php if ($category->category_parent == 0) :
                                                            $ayaa_woo_cat_index_count += 1;
                                                            $ayaa_pro_cat_icon = isset(get_option('taxonomy_' . $parent_cat_id)['ayaa_cat_icon']) ? get_option('taxonomy_' . $parent_cat_id)['ayaa_cat_icon'] : '';
                                                        ?>
                                                            <?php if ($ayaa_woo_cat_index_count <= $cbtoolkit_header_cat_limit_6) : ?>
                                                                <li><a href="<?php echo esc_url(get_category_link($parent_cat_id)); ?>"><?php echo esc_html($category->name); ?> <i class="fa-light fa-<?php echo esc_attr($ayaa_pro_cat_icon); ?>"></i></a></li>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php else :
                                                        $ayaa_pro_cat_icon = isset(get_option('taxonomy_' . $cat_id)['ayaa_cat_icon']) ? get_option('taxonomy_' . $cat_id)['ayaa_cat_icon'] : '';
                                                    ?>
                                                        <li><a href="<?php echo esc_url($product_cat_url) ? esc_url($product_cat_url) : ''; ?>"><?php echo esc_html($product_cat_name); ?> <i class="fa-light fa-<?php echo esc_attr($ayaa_pro_cat_icon); ?>"></i></a></li>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </ul>
                                        </nav>
                                    </div>
                                    <?php if (!empty($cbtoolkit_header_cat_coupon_text_6)) : ?>
                                        <a target="_blank" href="<?php echo esc_url($cbtoolkit_header_cat_coupon_url_6) ? esc_url($cbtoolkit_header_cat_coupon_url_6) : ''; ?>" class="ayaa-header-categories-coupon-btn theme-bg-2"><span><?php echo esc_html__('Coupon:', 'ayaa') ?></span> <?php echo esc_html($cbtoolkit_header_cat_coupon_text_6); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-8">
                        <div class="ayaa-header-nav-list-2">
                            <nav id="mobile-menu">
                                <?php ayaa_header_menu_6(); ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 d-none d-xl-block">
                        <div class="ayaa-header-right-wrapper-2">
                            <ul>
                                <?php if (!empty($cbtoolkit_header_best_sell_text_6)) : ?>
                                    <li><a href="<?php echo esc_url($cbtoolkit_header_best_sell_link_6) ? esc_url($cbtoolkit_header_best_sell_link_6) : ''; ?>"><?php echo esc_html($cbtoolkit_header_best_sell_text_6); ?></a></li>
                                <?php endif; ?>
                                <?php if (!empty($cbtoolkit_header_free_shipping_text_6)) : ?>
                                    <li><span><?php echo esc_html($cbtoolkit_header_free_shipping_text_6); ?></span></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</header>
<!-- header area end -->