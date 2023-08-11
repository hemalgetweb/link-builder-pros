<?php
    $cbtoolkit_header_wishlist_switch_7 = get_theme_mod('cbtoolkit_header_wishlist_switch_7', true);
?>
<div class="ayaa-fz-header-cart-6-wrap">
    <?php ayaa_header_cart();  ?>
</div>
<!-- header area start -->
<header class="header-area ayaa-fz-header-area-6" data-bgcolor="#F8FFFA">
     <div class="container-fluid pl-80 pr-80">
        <div class="row align-items-center">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-6">
                <div class="ayaa-fz-header-logo-6">
                    <a href="<?php echo esc_url(home_url()); ?>">
                        <?php ayaa_header_logo_7(); ?>
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 d-none d-lg-block">
                <div class="ayaa-fz-header-nav-6 text-center">
                    <nav id="mobile-menu-updated">
                        <?php ayaa_header_menu_7(); ?>
                    </nav>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-6">
                <div class="text-end">
                    <div class="ayaa-fz-header-action-6">
                        <?php if(!empty($cbtoolkit_header_wishlist_switch_7)) : ?>
                        <a href="<?php echo esc_url(home_url('/wishlist')); ?>" class="ayaa-fz-header-wishlist-count-btn-6"><i class="fal fa-heart"></i> <span class="label"><?php echo esc_html__('Wishlist', 'ayaa'); ?></span></a>
                        <?php endif; ?>
                        <button class="ayaa-fz-header-cart-count-btn-6 ml-25 ayaa-rv-toggle-cart-sidebar"><i class="fal fa-shopping-basket"></i> <span class="count">
                            <?php if(class_exists('WooCommerce') && WC()->cart->get_cart_contents_count()) : ?>
                                <span id="mini-cart-count-23415"></span>
                            <?php else: ?>
                                <span><?php echo esc_html__('0', 'ayaa'); ?></span>
                            <?php endif; ?>
                        </span></button>
                        <button class="ayaa-fz-header-bar-6 default-bar-open">
                            <i class="fa-light fa-bars-sort"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
     </div>
</header>
<!-- header area end -->
<?php offcanvas_menu_fullwidth(); ?>