<?php
/*
    cmt_section_header_topbar_1: start section topbar 1
    */
$cbtoolkit_topbar_switch_2 = get_theme_mod('cbtoolkit_topbar_switch_2', false);
$cbtoolkit_header_top_welcome_text_switch_2 = get_theme_mod('cbtoolkit_header_top_welcome_text_switch_2', true);
global $ayaa_all_categories;
$cbtoolkit_header_top_welcome_text_2 = get_theme_mod('cbtoolkit_header_top_welcome_text_2', __('Shop events & save up to 65% off!', 'ayaa'));
$cbtoolkit_header_lang_switch_2 = get_theme_mod('cbtoolkit_header_lang_switch_2', true);
$cbtoolkit_header_currency_switch_2 = get_theme_mod('cbtoolkit_header_currency_switch_2', true);
$cbtoolkit_email_switch_2 = get_theme_mod('cbtoolkit_email_switch_2', true);
$cbtoolkit_header_top_email_text_2 = get_theme_mod('cbtoolkit_header_top_email_text_2', __('info@webmail.com', 'ayaa'));
$cbtoolkit_header_top_email_link_2 = get_theme_mod('cbtoolkit_header_top_email_link_2', __('info@webmail.com', 'ayaa'));
$cbtoolkit_side_support_label_title_2 = get_theme_mod('cbtoolkit_side_support_label_title_2',  __('Contact Info', 'ayaa'));
$cbtoolkit_side_support_number_text_2 = get_theme_mod('cbtoolkit_side_support_number_text_2',  __('+888 999 777 00', 'ayaa'));
$cbtoolkit_side_support_number_link_2 = get_theme_mod('cbtoolkit_side_support_number_link_2',  __('+88899977700', 'ayaa'));
$cbtoolkit_header_main_right_switch_2 = get_theme_mod('cbtoolkit_header_main_right_switch_2', false);
$cbtoolkit_header_category_switch_2 = get_theme_mod('cbtoolkit_header_category_switch_2', true);
$cbtoolkit_header_bottom_switch_2 = get_theme_mod('cbtoolkit_header_bottom_switch_2', false);
$cbtoolkit_header_cat_btn_text_2 = get_theme_mod('cbtoolkit_header_cat_btn_text_2', __('All Categories', 'ayaa'));
$cbtoolkit_header_search_switch_2 = get_theme_mod('cbtoolkit_header_search_switch_2', true);
$cbtoolkit_header_cart_switch_2 = get_theme_mod('cbtoolkit_header_cart_switch_2', true);
$cbtoolkit_header_cat_limit_2 = get_theme_mod('cbtoolkit_header_cat_limit_2', __('9', 'ayaa'));
$cbtoolkit_header_cat_coupon_url_2 = get_theme_mod('cbtoolkit_header_cat_coupon_url_2', __('#', 'ayaa'));
$cbtoolkit_header_cat_coupon_text_2 = get_theme_mod('cbtoolkit_header_cat_coupon_text_2', __('50%OFFERZ', 'ayaa'));
$cbtoolkit_header_cat_limit_2 = $cbtoolkit_header_cat_limit_2 ? $cbtoolkit_header_cat_limit_2 : 100;
$ayaa_center_class = $cbtoolkit_header_main_right_switch_2 ? esc_attr__('text-center', 'ayaa') : esc_attr__('text-end', 'ayaa');
$ayaa_col_class = $cbtoolkit_header_main_right_switch_2 ? esc_attr__('col-xxl-8 col-xl-8 col-lg-6 d-none d-lg-block', 'ayaa') : esc_attr__('col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block', 'ayaa');
$get_woo_product_cat_2 = get_theme_mod('get_woo_product_cat_2');
if ($get_woo_product_cat_2) {
    $ayaa_all_categories = $get_woo_product_cat_2;
}
$woo_currency_symbol = '';
if (class_exists('WooCommerce')) {
    $woo_currency_symbol = get_option('woocommerce_currency');
}
?>
<!-- header area start -->
<?php ayaa_header_cart(); ?>
<?php ayaa_sidebar_mobile_menu_1(); ?>
<header class="header-area">
    <div class="ayaa-header-inner">
        <?php if (!empty($cbtoolkit_topbar_switch_2)) : ?>
            <div class="ayaa-header-topbar pt-10 pb-10 ayaa-bg-primary">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-3 d-none d-md-block">
                            <?php if (!empty($cbtoolkit_email_switch_2)) : ?>
                                <div class="ayaa-topbar-left">
                                    <?php if (!empty($cbtoolkit_header_top_email_text_2)) : ?>
                                        <a href="<?php echo esc_url($cbtoolkit_header_top_email_link_2) ? esc_url('mailto:' . $cbtoolkit_header_top_email_link_2) : ''; ?>" class="ayaa-topbar-link"><i class="fa-thin fa-envelope-open"></i> <?php echo esc_html($cbtoolkit_header_top_email_text_2); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($cbtoolkit_header_top_welcome_text_switch_2) && !empty($cbtoolkit_header_top_welcome_text_2)) : ?>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5">
                                <div class="ayaa-topbar-welcome-text text-center">
                                    <p><?php echo esc_html($cbtoolkit_header_top_welcome_text_2); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="ayaa-topbar-right-links text-center text-md-end">
                                <div class="ayaa-topbar-right-item">
                                    <a href="<?php the_permalink(get_option('woocommerce_myaccount_page_id'));  ?>"><i class="fa-thin fa-user"></i> <?php echo esc_html__('Sign In', 'ayaa'); ?></a>
                                </div>
                                <?php if (!empty($cbtoolkit_header_currency_switch_2)) : ?>
                                    <div class="ayaa-topbar-right-item">
                                        <?php currency_switcher_html(); ?>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($cbtoolkit_header_lang_switch_2) && class_exists('GTranslate')) : ?>
                                    <div class="ayaa-topbar-right-item">
                                        <?php echo do_shortcode('[gtranslate]'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. topbar end -->
        <?php endif; ?>
        <div class="ayaa-header-nav">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 col-6">
                        <div class="ayaa-header-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php ayaa_header_logo_2(); ?>
                            </a>
                        </div>
                    </div>
                    <div class="<?php echo esc_attr($ayaa_col_class); ?>">
                        <nav class="ayaa-header-navigation <?php echo esc_attr($ayaa_center_class); ?>" id="mobile-menu">
                            <?php ayaa_header_menu_1(); ?>
                        </nav>
                    </div>
                    <?php if (!empty($cbtoolkit_header_main_right_switch_2)) :  ?>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-6 d-none d-lg-block">
                            <div class="ayaa-navigation-right-contact">
                                <div class="content text-end">
                                    <?php if (!empty($cbtoolkit_side_support_label_title_2)) : ?>
                                        <span class="label"><?php echo esc_html($cbtoolkit_side_support_label_title_2); ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($cbtoolkit_side_support_number_text_2)) : ?>
                                        <a href="<?php echo esc_url($cbtoolkit_side_support_number_link_2) ? esc_url('tel:' . $cbtoolkit_side_support_number_link_2) : ''; ?>" class="link"><?php echo esc_html($cbtoolkit_side_support_number_text_2); ?></a>
                                    <?php endif; ?>
                                </div>
                                <?php if (!empty($cbtoolkit_side_support_number_text_2)) : ?>
                                    <div class="icon">
                                        <i class="fa-light fa-phone-plus"></i>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="col-6 d-lg-none">
                        <div class="text-end">
                            <button class="ayaa-switch-sidebar"><i class="fa-light fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!empty($cbtoolkit_header_bottom_switch_2)) : ?>
            <!-- /. header nav end -->
            <div class="ayaa-header-bottom gray-bg d-none d-sm-block">
                <div class="container">
                    <div class="ayaa-header-bottom-wrap">
                        <?php if (!empty($ayaa_all_categories) && !empty($cbtoolkit_header_category_switch_2)) : ?>
                            <div class="ayaa-header-categories d-none d-lg-block">
                                <button class="ayaa-header-categories-btn">
                                    <?php if (!empty($cbtoolkit_header_cat_btn_text_2)) : ?>
                                        <span class="left">
                                            <i class="fa-duotone fa-list"></i> <span class="text-wrap"><span><?php echo esc_html($cbtoolkit_header_cat_btn_text_2); ?></span><span><?php echo esc_html($cbtoolkit_header_cat_btn_text_2); ?></span></span>
                                        </span>
                                    <?php endif; ?>
                                    <span class="right">
                                        <i class="fa-light fa-arrow-down-long down-arr"></i>
                                    </span>
                                </button>
                                <div class="ayaa-header-categories-menu-list">
                                    <div class="ayaa-header-categories-menu-list-inner">
                                        <nav id="ayaa-rv-categories-menu">
                                            <ul>
                                                <?php
                                                $ayaa_woo_cat_index_count = 0;
                                                foreach ($ayaa_all_categories as $category) :
                                                    if ($get_woo_product_cat_2) {
                                                        $cat_id = $category;
                                                        $product_cat_name = get_cat_name($cat_id);
                                                        $product_cat_name = '';
                                                        $product_cat_url = get_category_link($cat_id);
                                                        if ($term = get_term_by('id', $cat_id, 'product_cat')) {
                                                            $product_cat_name = $term->name;
                                                        }
                                                    } else {
                                                        $parent_cat_id = $category->term_id;
                                                        $parent_cat_id_2 = get_term_meta($parent_cat_id, 'thumbnail_id', true);
                                                        $cat_image = wp_get_attachment_url($parent_cat_id_2);
                                                        if (!empty($get_woo_product_cat)) {
                                                            if (!in_array($parent_cat_id, $get_woo_product_cat)) {
                                                                continue;
                                                            }
                                                        }
                                                    }

                                                ?>
                                                    <?php if (empty($get_woo_product_cat_2)) : ?>
                                                        <?php if ($category->category_parent == 0) :
                                                            $ayaa_woo_cat_index_count += 1;
                                                            $ayaa_pro_cat_icon = isset(get_option('taxonomy_' . $parent_cat_id)['ayaa_cat_icon']) ? get_option('taxonomy_' . $parent_cat_id)['ayaa_cat_icon'] : '';
                                                        ?>
                                                            <?php if ($ayaa_woo_cat_index_count <= $cbtoolkit_header_cat_limit_2) : ?>
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
                                    <?php if (!empty($cbtoolkit_header_cat_coupon_text_2)) : ?>
                                        <a href="<?php echo esc_url($cbtoolkit_header_cat_coupon_url_2) ? esc_url_raw($cbtoolkit_header_cat_coupon_url_2) : '#'; ?>" class="ayaa-header-categories-coupon-btn"><span><?php echo esc_html__('Coupon:', 'ayaa'); ?></span> <?php echo esc_html($cbtoolkit_header_cat_coupon_text_2); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($cbtoolkit_header_search_switch_2)) : ?>
                            <div class="ayaa-header-wide-search">
                                <div class="ayaa-header-wide-search-inner">
                                    <form action="<?php echo esc_url(home_url('/')); ?>" method="GET" name="myform">
                                        <input type="hidden" value="product" name="post_type">
                                        <button type="submit"><i class="fa-thin fa-magnifying-glass"></i></button>
                                        <input value="<?php echo get_search_query(); ?>" type="search" name="s" placeholder="<?php echo esc_attr__('Search product', 'ayaa'); ?>">
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="ayaa-header-cart-count-wrap">
                            <?php if (!empty($cbtoolkit_header_cart_switch_2)) : ?>
                                <button class="ayaa-header-cart-count-btn ayaa-rv-toggle-cart-sidebar">
                                    <span class="left">
                                        <i class="fa-solid fa-basket-shopping"></i>
                                        <span class="price"><?php echo get_woocommerce_currency_symbol(); ?><span id="mini-cart-subtotal-price-2342"></span></span>
                                    </span>
                                    <span class="right">
                                        <span class="count"><span id="mini-cart-count-234"></span></span>
                                    </span>
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. bottom header end -->
        <?php endif; ?>
    </div>
</header>
<!-- header area end -->