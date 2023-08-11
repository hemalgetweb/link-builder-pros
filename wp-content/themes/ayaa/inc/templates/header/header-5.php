<?php
$cbtoolkit_header_main_right_switch_5 = get_theme_mod('cbtoolkit_header_main_right_switch_5', false);
$cbtoolkit_header_search_switch_5 = get_theme_mod('cbtoolkit_header_search_switch_5', true);
$cbtoolkit_header_cart_switch_5 = get_theme_mod('cbtoolkit_header_cart_switch_5', true);
?>
<?php ayaa_header_cart(); ?>
<!-- header area start -->
<header class="header-area revel-black-bg">
    <div class="ayaa-fz-header-nav-4-main ayaa-fz-header-nav-5-main">
        <div class="container container-2">
            <div class="row align-items-center">
                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-6">
                    <div class="ayaa-fz-header-left-5">
                        <div class="ayaa-fz-header-logo-5">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php ayaa_header_logo_5(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 d-none d-lg-block">
                    <div class="ayaa-fz-header-right-4 ayaa-fz-header-menu-display text-center">
                        <div class="d-inline-block">
                            <nav class="ayaa-fz-header-nav-4" id="mobile-menu-updated">
                                <?php ayaa_header_menu_5(); ?>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 text-end">
                    <div class="d-inline-block">
                        <div class="ayaa-fz-header-right-action-5 fz-responsive">
                            <?php if (!empty($cbtoolkit_header_main_right_switch_5) && class_exists('WooCommerce')) : ?>
                                <?php if (!empty($cbtoolkit_header_search_switch_5)) : ?>
                                    <button class="cb_search_switch"><i class="fa-light fa-search"></i></button>
                                <?php endif; ?>
                                <a href="<?php echo esc_url(home_url('/wishlist')); ?>"><i class="fa-light fa-heart"></i></a>
                                <?php if (!empty($cbtoolkit_header_cart_switch_5)) : ?>
                                    <button class="ayaa-fz-header-cart-btn-5 ayaa-rv-toggle-cart-sidebar"><i class="fa-light fa-bag-shopping"></i> <span class="count"><span id="mini-cart-count-234"></span></span></button>
                                <?php endif; ?>
                            <?php endif; ?>
                            <button class="has-left-bar-5 default-bar-open"><i class="fa-light fa-grid"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /. nav end -->
</header>
<!-- header area end -->

<?php offcanvas_menu_fullwidth(); ?>
<?php header_search_fullwidth(); ?>