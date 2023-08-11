<?php
/*
    cmt_section_header_topbar_1: start section topbar 1
    */
$cbtoolkit_topbar_switch_1 = get_theme_mod('cbtoolkit_topbar_switch_1', false);
$cbtoolkit_header_top_welcome_text_switch_1 = get_theme_mod('cbtoolkit_header_top_welcome_text_switch_1', true);
global $ayaa_all_categories;
$cbtoolkit_header_top_welcome_text_1 = get_theme_mod('cbtoolkit_header_top_welcome_text_1', __('Shop events & save up to 65% off!', 'ayaa'));
$cbtoolkit_header_lang_switch_1 = get_theme_mod('cbtoolkit_header_lang_switch_1', true);
$cbtoolkit_header_currency_switch_1 = get_theme_mod('cbtoolkit_header_currency_switch_1', true);
$cbtoolkit_email_switch_1 = get_theme_mod('cbtoolkit_email_switch_1', true);
$cbtoolkit_header_top_email_text_1 = get_theme_mod('cbtoolkit_header_top_email_text_1', __('info@webmail.com', 'ayaa'));
$cbtoolkit_header_top_email_link_1 = get_theme_mod('cbtoolkit_header_top_email_link_1', __('info@webmail.com', 'ayaa'));
$cbtoolkit_side_support_label_title_1 = get_theme_mod('cbtoolkit_side_support_label_title_1',  __('Contact Info', 'ayaa'));
$cbtoolkit_booking_call_number = get_theme_mod('cbtoolkit_side_support_number_text_1',  __('+888 999 777 00', 'ayaa'));
$cbtoolkit_side_support_number_link_1 = get_theme_mod('cbtoolkit_side_support_number_link_1',  __('+88899977700', 'ayaa'));
$cbtoolkit_header_main_right_switch_1 = get_theme_mod('cbtoolkit_header_main_right_switch_1', false);
$cbtoolkit_header_category_switch_1 = get_theme_mod('cbtoolkit_header_category_switch_1', true);
$cbtoolkit_header_bottom_switch_1 = get_theme_mod('cbtoolkit_header_bottom_switch_1', false);
$cbtoolkit_header_cat_btn_text_1 = get_theme_mod('cbtoolkit_header_cat_btn_text_1', __('All Categories', 'ayaa'));
$cbtoolkit_header_search_switch_1 = get_theme_mod('cbtoolkit_header_search_switch_1', true);
$cbtoolkit_header_cart_switch_1 = get_theme_mod('cbtoolkit_header_cart_switch_1', true);
$cbtoolkit_header_cat_limit_1 = get_theme_mod('cbtoolkit_header_cat_limit_1', __('9', 'ayaa'));
$cbtoolkit_header_cat_coupon_url_1 = get_theme_mod('cbtoolkit_header_cat_coupon_url_1', __('#', 'ayaa'));
$cbtoolkit_header_cat_coupon_text_1 = get_theme_mod('cbtoolkit_header_cat_coupon_text_1', __('50%OFFERZ', 'ayaa'));
$cbtoolkit_header_cat_limit_1 = $cbtoolkit_header_cat_limit_1 ? $cbtoolkit_header_cat_limit_1 : 100;
$ayaa_center_class = $cbtoolkit_header_main_right_switch_1 ? esc_attr__('text-center', 'ayaa') : esc_attr__('text-end', 'ayaa');
$ayaa_col_class = $cbtoolkit_header_main_right_switch_1 ? esc_attr__('col-xxl-8 col-xl-8 col-lg-6 d-none d-lg-block', 'ayaa') : esc_attr__('col-xxl-10 col-xl-10 col-lg-9 d-none d-lg-block', 'ayaa');
$get_woo_product_cat_1 = get_theme_mod('get_woo_product_cat_1');
if ($get_woo_product_cat_1) {
    $ayaa_all_categories = $get_woo_product_cat_1;
}
$woo_currency_symbol = '';
if (class_exists('WooCommerce')) {
    $woo_currency_symbol = get_option('woocommerce_currency');
}

$args = array(
    'theme_location' => 'mega_menu',
    'container' => 'ul',
    'menu_class' => 'navbar-nav m-auto mb-2 mb-lg-0',
    'walker' => new Custom_Mega_Menu_Walker(),
);

$mobile_args = array(
    'theme_location' => 'mega_menu',
    'container' => 'ul',
    'menu_class' => 'navbar-nav m-auto mb-2 mb-lg-0',
    'walker' => new Custom_Mobile_Menu_Walker(),
);

$mobile_child_args = array(
    'theme_location' => 'mega_menu',
    'container' => 'ul',
    'menu_class' => 'navbar-nav m-auto mb-2 mb-lg-0',
    'walker' => new Custom_Mobile_Child_Menu_Walker(),
);
?>


<!-- header -->
<header class="header-topbar position-absolute top-0 start-0 end-0" style="z-index: 9999;">
    <nav class="navbar navbar-expand-xl">
        <div class="container-fluid">
            <a class="navbar-brand d-none d-xl-block" href="<?php echo esc_url(home_url('/')); ?>">
            <?php ayaa_header_logo_1(); ?>
            </a>
            <a class="navbar-brand d-none d-md-block d-xl-none" href="<?php echo esc_url(home_url('/')); ?>">
            <?php ayaa_header_logo_1(); ?>
            </a>
            <a class="navbar-brand d-block d-md-none" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                } else {
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/img/mobile-logo.svg') . '" alt="logo" class="img-fluid">';
                }
                ?>
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php echo wp_nav_menu($args); ?>
                <div class="header-btn d-flex flex-wrap gap-3">
                    <a class="common-btn common-btn-border text-decoration-none fs-6 fw-bold text-clr-primary" href="<?php echo esc_url(home_url('/')); ?>">
                        Login
                    </a>
                    <a class="common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white" href="<?php echo 'tel:'.$cbtoolkit_booking_call_number;?>">
                        <span class="d-flex align-items-center gap-3">
                            <span class="ni ni-call-alt"></span>
                            Book a Call
                        </span>
                    </a>
                </div>

            </div>

            <div class="offcanvas-menu-icon-wrap d-block d-xl-none">
                <a class="navbar-brand d-block d-xl-none" href="#offcanvasExample" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/offcanvase-icon.svg');?>" alt="logo" class="img-fluid">
                </a>
            </div>
        </div>
    </nav>
</header>
<!-- header /-end -->

<!-- Offcanvase -/Start -->
<div class="offcanvas-wrap">
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> -->
            <div class="mobile-logo-wrap">
                <a href="index.html">
                    <img src="./assets/img/mobile-logo.svg" alt="Mobile logo" class="img-fluid">
                </a>
            </div>
            <a href="#" class=" text-decoration-none text-clr-dark1">
                <span class="fs-3 ni ni-cross" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </a>
        </div>
        <div class="offcanvas-body d-flex flex-column justify-content-between">
            <div class="offcanvas-mobile-men">
                <?php echo wp_nav_menu($mobile_args); ?>
            </div>

            <div class="offcanvas-login-book">
                <div class="header-btn d-flex gap-3">
                    <a class="common-btn common-btn-border text-decoration-none fs-6 fw-bold text-clr-primary d-flex justify-content-center flex-shrink-1 w-100" href="login.html">
                        Login
                    </a>
                    <a class=" common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white d-flex justify-content-center flex-shrink-1 w-100" href="<?php echo 'tel:'.$cbtoolkit_booking_call_number;?>">
                        <span class="d-flex align-items-center gap-2">
                            <span class="ni ni-call-alt"></span>
                            Book a Call
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offcanvase -/End -->

<!-- Offcanvase services menu item - 2 -/Start -->
<div class="offcanvas-wrap">
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <div class="mobile-logo-wrap">
                <a class="text-decoration-none fs-14 text-clr-dark2 fw-bold d-flex align-items-center gap-2" href="#offcanvasExample" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="ni ni-arrow-left fs-6"></span>
                    <span>
                        Main Menu
                    </span>
                </a>
            </div>
            <a href="#" class=" text-decoration-none text-clr-dark1">
                <span class="fs-3 ni ni-cross" data-bs-dismiss="offcanvas" aria-label="Close"></span>
            </a>
        </div>
        <div class="offcanvas-body">
            <div class="m-menu-widgets">
                <?php echo wp_nav_menu($mobile_child_args); ?>
            </div>
        </div>
    </div>
</div>
<!-- Offcanvase services menu item - 2 -/End -->