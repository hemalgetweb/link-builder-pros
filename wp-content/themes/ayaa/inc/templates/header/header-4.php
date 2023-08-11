<?php
$cbtoolkit_topbar_switch_4 = get_theme_mod('cbtoolkit_topbar_switch_4', false);
$cbtoolkit_header_welcome_text_4 = get_theme_mod('cbtoolkit_header_welcome_text_4', __('Register now and get an extra 10 off using the code Farzaa15', 'ayaa'));
$cbtoolkit_header_top_account_text_4 = get_theme_mod('cbtoolkit_header_top_account_text_4', __('Sign In', 'ayaa'));
$cbtoolkit_header_top_account_link_4 = get_theme_mod('cbtoolkit_header_top_account_link_4', __('#', 'ayaa'));
$cbtoolkit_header_top_email_text_4 = get_theme_mod('cbtoolkit_header_top_email_text_4', __('info@webmail.com', 'ayaa'));
$cbtoolkit_header_top_email_link_4 = get_theme_mod('cbtoolkit_header_top_email_link_4', __('info@webmail.com', 'ayaa'));
$cbtoolkit_header_lang_switch_4 = get_theme_mod('cbtoolkit_header_lang_switch_4', true);
$cbtoolkit_header_main_right_switch_4 = get_theme_mod('cbtoolkit_header_main_right_switch_4', false);
$cbtoolkit_header_currency_switch_4 = get_theme_mod('cbtoolkit_header_currency_switch_4', true);
$cbtoolkit_header_search_switch_4 = get_theme_mod('cbtoolkit_header_search_switch_4', true);
$cbtoolkit_header_cart_switch_4 = get_theme_mod('cbtoolkit_header_cart_switch_4', true);

?>
<?php ayaa_header_cart(); ?>
<!-- header area start -->
<header class="header-area ayaa-fz-header-4">
    <?php if (!empty($cbtoolkit_topbar_switch_4)) : ?>
        <div class="ayaa-fz-header-topbar-4 text-center text-md-start py-4 py-md-2">
            <div class="container container-2">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 d-none d-lg-block">
                        <?php if (!empty($cbtoolkit_header_top_email_text_4)) : ?>
                            <div class="ayaa-fz-topbar-left-4">
                                <a href="mailto:<?php echo esc_url($cbtoolkit_header_top_email_link_4) ? esc_url($cbtoolkit_header_top_email_link_4) : ''; ?>"><i class="fa-thin fa-envelope-open"></i> <?php echo esc_html($cbtoolkit_header_top_email_text_4); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6">
                        <?php if (!empty($cbtoolkit_header_welcome_text_4)) : ?>
                            <div class="ayaa-fz-topbar-center-text-4 text-center py-2 py-md-0">
                                <p><?php echo esc_html($cbtoolkit_header_welcome_text_4); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-12 d-none d-lg-block">
                        <div class="ayaa-fz-topbar-right-4 text-center text-md-end">
                            <?php if (!empty($cbtoolkit_header_top_account_text_4)) : ?>
                                <a href="<?php echo esc_url($cbtoolkit_header_top_account_link_4) ? esc_url($cbtoolkit_header_top_account_link_4) : ''; ?>"><i class="fa-thin fa-user"></i> <?php echo esc_html($cbtoolkit_header_top_account_text_4); ?></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_header_currency_switch_4)) : ?>
                                <?php currency_switcher_html(); ?>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_header_lang_switch_4) && class_exists('GTranslate')) : ?>
                                <?php echo do_shortcode('[gtranslate]'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /. topbar end -->
    <?php endif; ?>
    <div class="ayaa-fz-header-nav-4-main">
        <div class="container container-2">
            <div class="row align-items-center">
                <div class="col-xxl-4 col-xl-3 col-lg-3 col-md-4 col-6">
                    <div class="ayaa-fz-header-left-4">
                        <button class="ayaa-fz-header-bar-4 d-none d-md-inline-block default-bar-open">
                            <i class="fa-regular fa-bars-sort"></i>
                        </button>
                        <div class="ayaa-fz-header-logo-4">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <?php ayaa_header_logo_4(); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-9 col-lg-9 col-md-8 col-6">
                    <div class="ayaa-fz-header-right-4 ayaa-fz-header-menu-display text-end d-none d-md-block">
                        <div class="d-inline-block d-none d-lg-inline-block">
                            <nav class="ayaa-fz-header-nav-4" id="mobile-menu-updated">
                                <?php ayaa_header_menu_4(); ?>
                            </nav>
                        </div>
                        <?php if (!empty($cbtoolkit_header_main_right_switch_4) && class_exists('WooCommerce')) : ?>
                            <div class="d-inline-block">
                                <div class="ayaa-fz-header-right-action-4 has-left-bar-4 fz-responsive">
                                    <?php if (!empty($cbtoolkit_header_search_switch_4)) : ?>
                                        <button class="cb_search_switch"><i class="fa-light fa-search"></i></button>
                                    <?php endif; ?>
                                    <a href="<?php echo esc_url(home_url('/wishlist')); ?>"><i class="fa-light fa-heart"></i></a>
                                    <a href="<?php the_permalink(get_option('woocommerce_myaccount_page_id'));  ?>"><i class="fa-light fa-user"></i></a>
                                    <?php if (!empty($cbtoolkit_header_cart_switch_4)) : ?>
                                        <button class="ayaa-fz-header-cart-btn-4 ayaa-rv-toggle-cart-sidebar"><i class="fa-light fa-bag-shopping"></i> <span class="count"><span id="mini-cart-count-234"></span></span></button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="text-end d-md-none">
                        <button class="ayaa-fz-header-bar-4 default-bar-open me-0">
                            <i class="fa-regular fa-bars-sort"></i>
                        </button>
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