<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ayaa
 */

/** 
 *
 * ayaa header
 */

function ayaa_check_header()
{
    $ayaa_header_style = function_exists('get_field') ? get_field('header_style') : NULL;
    $ayaa_default_header_style = get_theme_mod('choose_default_header', 'header-style-1');

    if ($ayaa_header_style == 'header-style-1' && empty($_GET['s'])) {
        ayaa_header_style_1();
    } elseif ($ayaa_header_style == 'header-style-2' && empty($_GET['s'])) {
        ayaa_header_style_2();
    } elseif ($ayaa_header_style == 'header-style-3' && empty($_GET['s'])) {
        ayaa_header_style_3();
    } elseif ($ayaa_header_style == 'header-style-4' && empty($_GET['s'])) {
        ayaa_header_style_4();
    } elseif ($ayaa_header_style == 'header-style-5' && empty($_GET['s'])) {
        ayaa_header_style_5();
    } elseif ($ayaa_header_style == 'header-style-6' && empty($_GET['s'])) {
        ayaa_header_style_6();
    } elseif ($ayaa_header_style == 'header-style-7' && empty($_GET['s'])) {
        ayaa_header_style_7();
    } else {
        /** default header style **/
        if ($ayaa_default_header_style == 'header-style-2') {
            ayaa_header_style_2();
        } else if ($ayaa_default_header_style == 'header-style-3') {
            ayaa_header_style_3();
        } else if ($ayaa_default_header_style == 'header-style-4') {
            ayaa_header_style_4();
        } else if ($ayaa_default_header_style == 'header-style-5') {
            ayaa_header_style_5();
        } else if ($ayaa_default_header_style == 'header-style-6') {
            ayaa_header_style_6();
        } else if ($ayaa_default_header_style == 'header-style-7') {
            ayaa_header_style_7();
        } else {
            ayaa_header_style_1();
        }
    }
}
add_action('ayaa_header_style', 'ayaa_check_header', 10);


// Header deafult
function ayaa_header_style_1()
{
    get_template_part('/inc/templates/header/header', '1'); ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->
<?php
}


/**
 * header style 2
 */
function ayaa_header_style_2()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '2');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * header style 3
 */
function ayaa_header_style_3()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '3');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * header style 4
 */
function ayaa_header_style_4()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '4');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * header style 5
 */
function ayaa_header_style_5()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '5');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->
<?php } ?>
<?php
/**
 * header style 6
 */
function ayaa_header_style_6()
{ ?>

    <?php get_template_part('/inc/templates/header/header', '6');  ?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->

<?php
}
/**
 * Header style 7
 */
function ayaa_header_style_7() {
    get_template_part('/inc/templates/header/header', '7');?>
    <!-- side info end -->
    <div class="overlay"></div>
    <!-- sidebar area end -->
<?php }

/*
header_logo
*/
function ayaa_header_logo()
{
?>
    <?php
    $logo_image = get_theme_mod('logo_image', get_template_directory_uri() . '/assets/images/logo/logo.png');
    $logo_text = get_theme_mod('logo_text', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset = get_theme_mod('cbtoolkit_header_main_logoset', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset == 'image') {
            if (!empty($logo_image)) : ?>
                <img src="<?php echo esc_url($logo_image) ?>" alt="<?php echo esc_attr__('Image', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text)) : ?>
                <span><?php echo esc_html($logo_text); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function ayaa_header2_logo()
{
?>
    <?php
    $logo_image2 = get_theme_mod('logo_image2', get_template_directory_uri() . '/assets/images/logo.png');
    $logo_text2 = get_theme_mod('logo_text2', __('ayaa', 'ayaa'));
    $cbtoolkit_header2_main_logoset = get_theme_mod('cbtoolkit_header2_main_logoset', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header2_main_logoset == 'image') {
            if (!empty($logo_image2)) : ?>
                <img src="<?php echo esc_url($logo_image2) ?>" alt="<?php echo esc_attr__('Logo', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text2)) : ?>
                <span><?php echo esc_html($logo_text2); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function ayaa_header_logo_1()
{
?>
    <?php
    $logo_image1 = get_theme_mod('logo_image1', get_template_directory_uri() . '/assets/images/logo.svg');
    $logo_text1 = get_theme_mod('logo_text1', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_3 = get_theme_mod('cbtoolkit_header_main_logoset_3', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_3 == 'image') {
            if (!empty($logo_image1)) : ?>
                <img src="<?php echo esc_url($logo_image1) ?>" alt="<?php echo esc_attr__('ayaa', 'ayaa'); ?>" class="img-fluid">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text1)) : ?>
                <span><?php echo esc_html($logo_text1); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}

function custom_header_logo()
{
?>
    <?php
    $logo_image1 = get_theme_mod('logo_image1', get_template_directory_uri() . '/assets/img/logo.png');
    $logo_text1 = get_theme_mod('logo_text1', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_3 = get_theme_mod('cbtoolkit_header_main_logoset_3', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    }
    ?>
<?php
}


function ayaa_header_logo_2()
{
?>
    <?php
    $logo_image2 = get_theme_mod('logo_image2', get_template_directory_uri() . '/assets/images/update/logo.png');
    $logo_text2 = get_theme_mod('logo_text2', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_3 = get_theme_mod('cbtoolkit_header_main_logoset_3', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_3 == 'image') {
            if (!empty($logo_image2)) : ?>
                <img src="<?php echo esc_url($logo_image2) ?>" alt="<?php echo esc_attr__('ayaa', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text2)) : ?>
                <span><?php echo esc_html($logo_text2); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function ayaa_header_logo_3()
{
?>
    <?php
    $logo_image3 = get_theme_mod('logo_image3', get_template_directory_uri() . '/assets/images/update/logo-3.png');
    $logo_text3 = get_theme_mod('logo_text3', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_3 = get_theme_mod('cbtoolkit_header_main_logoset_3', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_3 == 'image') {
            if (!empty($logo_image3)) : ?>
                <img src="<?php echo esc_url($logo_image3) ?>" alt="<?php echo esc_attr__('ayaa', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text3)) : ?>
                <span><?php echo esc_html($logo_text3); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function ayaa_header_logo_4()
{
?>
    <?php
    $logo_image4 = get_theme_mod('logo_image4', get_template_directory_uri() . '/assets/images/update/logo-4.png');
    $logo_text4 = get_theme_mod('logo_text4', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_4 = get_theme_mod('cbtoolkit_header_main_logoset_4', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_4 == 'image') {
            if (!empty($logo_image4)) : ?>
                <img src="<?php echo esc_url($logo_image4) ?>" alt="<?php echo esc_attr__('ayaa', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text4)) : ?>
                <span><?php echo esc_html($logo_text4); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function ayaa_header_logo_5()
{
?>
    <?php
    $logo_image5 = get_theme_mod('logo_image5', get_template_directory_uri() . '/assets/images/update/logo-5.png');
    $logo_text5 = get_theme_mod('logo_text5', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_5 = get_theme_mod('cbtoolkit_header_main_logoset_5', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_5 == 'image') {
            if (!empty($logo_image5)) : ?>
                <img src="<?php echo esc_url($logo_image5) ?>" alt="<?php echo esc_attr__('ayaa', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text5)) : ?>
                <span><?php echo esc_html($logo_text5); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function ayaa_header_logo_6()
{
?>
    <?php
    $logo_image6 = get_theme_mod('logo_image6', get_template_directory_uri() . '/assets/images/update/logo-2.png');
    $logo_text6 = get_theme_mod('logo_text6', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_6 = get_theme_mod('cbtoolkit_header_main_logoset_6', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_6 == 'image') {
            if (!empty($logo_image6)) : ?>
                <img src="<?php echo esc_url($logo_image6) ?>" alt="<?php echo esc_attr__('ayaa', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text6)) : ?>
                <span><?php echo esc_html($logo_text6); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}
function ayaa_header_logo_7()
{
?>
    <?php
    $logo_image7 = get_theme_mod('logo_image7', get_template_directory_uri() . '/assets/images/update/logo-6.png');
    $logo_text7 = get_theme_mod('logo_text7', __('ayaa', 'ayaa'));
    $cbtoolkit_header_main_logoset_7 = get_theme_mod('cbtoolkit_header_main_logoset_7', __('image', 'ayaa'));
    ?>

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        if ($cbtoolkit_header_main_logoset_7 == 'image') {
            if (!empty($logo_image7)) : ?>
                <img src="<?php echo esc_url($logo_image7) ?>" alt="<?php echo esc_attr__('ayaa', 'ayaa'); ?>">
            <?php endif;
        } else { ?>
            <?php if (!empty($logo_text7)) : ?>
                <span><?php echo esc_html($logo_text7); ?></span>
            <?php endif; ?>
    <?php
        }
    }
    ?>
<?php
}

// header logo
function ayaa_header_sticky_logo()
{ ?>
    <?php
    $ayaa_logo_black = get_template_directory_uri() . '/assets/img/logo/logo-black.png';
    $ayaa_secondary_logo = get_theme_mod('seconday_logo', $ayaa_logo_black);
    ?>
    <a class="sticky-logo" href="<?php print esc_url(home_url('/')); ?>">
        <img src="<?php print esc_url($ayaa_secondary_logo); ?>" alt="<?php print esc_attr__('logo', 'ayaa'); ?>" />
    </a>
<?php
}

function ayaa_mobile_logo()
{
    // side info
    $ayaa_mobile_logo_hide = get_theme_mod('ayaa_mobile_logo_hide', false);

    $ayaa_site_logo = get_theme_mod('logo', get_template_directory_uri() . '/assets/img/logo/logo.png');

?>

    <?php if (!empty($ayaa_mobile_logo_hide)) : ?>
        <div class="side__logo mb-25">
            <a class="sideinfo-logo" href="<?php print esc_url(home_url('/')); ?>">
                <img src="<?php print esc_url($ayaa_site_logo); ?>" alt="<?php print esc_attr__('logo', 'ayaa'); ?>" />
            </a>
        </div>
    <?php endif; ?>



<?php }

//offcanvas menu
function offcanvas_menu_fullwidth()
{
    $cbtoolkit_side2_cart_switcher = get_theme_mod('cbtoolkit_side2_cart_switcher', true);
    $cbtoolkit_side2_wishlist_switcher = get_theme_mod('cbtoolkit_side2_wishlist_switcher', true);
    $cbtoolkit_side2_contact_switcher = get_theme_mod('cbtoolkit_side2_contact_switcher', true);
    $cbtoolkit_side2_contact_title = get_theme_mod('cbtoolkit_side2_contact_title',  __('Get In Touch', 'ayaa'));
    $cbtoolkit_side2_contact_address = get_theme_mod('cbtoolkit_side2_contact_address',  __('989 Bel Meadow Drive Los Angeles, CA 90017', 'ayaa'));
    $cbtoolkit_side2_contact_phone1 = get_theme_mod('cbtoolkit_side2_contact_phone1',  __('(+1) 909-407-2988', 'ayaa'));
    $cbtoolkit_side2_contact_phone_link1 = get_theme_mod('cbtoolkit_side2_contact_phone_link1',  __('(+1)909-407-2988', 'ayaa'));
    $cbtoolkit_side2_contact_phone2 = get_theme_mod('cbtoolkit_side2_contact_phone2',  __('(+1) 470-142-2412', 'ayaa'));
    $cbtoolkit_side2_contact_phone_link2 = get_theme_mod('cbtoolkit_side2_contact_phone_link2',  __('(+1)470-142-2412', 'ayaa'));
    $cbtoolkit_side2_office_time = get_theme_mod('cbtoolkit_side2_office_time',  __('Mon - Sat : 8am - 5pm', 'ayaa'));
    $cbtoolkit_side2_social_switcher = get_theme_mod('cbtoolkit_side2_social_switcher', true);
    $cbtoolkit_side2_social_fb_link = get_theme_mod('cbtoolkit_side2_social_fb_link',  __('#', 'ayaa'));
    $cbtoolkit_side2_social_twitter_link = get_theme_mod('cbtoolkit_side2_social_twitter_link',  __('#', 'ayaa'));
    $cbtoolkit_side2_social_instagram_link = get_theme_mod('cbtoolkit_side2_social_instagram_link',  __('#', 'ayaa'));
    $cbtoolkit_side2_social_youtube_link = get_theme_mod('cbtoolkit_side2_social_youtube_link',  __('#', 'ayaa'));


?>

    <!-- ayaa-fz-offcanvas-main-nav-wrapper start -->
    <div class="ayaa-fz-offcanvas-main-nav-wrapper">
        <button class="fz-button-close"><i class="fa-thin fa-xmark"></i></button>
        <div class="ayaa-fz-offcanvas-main-nav-wrapper-sections">
            <div class="ayaa-fz-offcanvas-main-nav-section">
                <div class="mobile-menu-updated"></div>
            </div>
            <div class="ayaa-fz-offcanvas-main-sideinfo-section">

                <div class="ayaa-fz-offcanvas-main-sideinfo">
                    <?php if (class_exists('WooCommerce')) : ?>
                        <div class="ayaa-fz-offcanvas-main-search mb-45">
                            <form action="<?php print esc_url(home_url('/')); ?>" method="get">
                                <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search Product', 'ayaa'); ?>" id="search-input">
                                <input type="hidden" name="post_type" value="product" />
                                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    <?php endif; ?>
                    <?php if (class_exists('WooCommerce')) : ?>
                        <div class="ayaa-fz-offcanvas-main-actions mb-15">
                            <?php if (!empty($cbtoolkit_side2_cart_switcher)) : ?>
                                <a href="<?php print wc_get_cart_url(); ?>"><span class="fz-off-actions-icon"><i class="fa-thin fa-bag-shopping"></i>
                                <?php if(class_exists('WooCommerce')) : ?>
                                    <?php if(!empty(WC()->cart->get_cart_contents_total())) : ?>    
                                        <span class="fz-off-actions-count"><span id="mini-cart-count-2341"></span></span>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </span> <span class="fz-off-actions-text"><span><?php print esc_html__('View Cart', 'ayaa'); ?></span><span><?php print esc_html__('View Cart', 'ayaa'); ?></span></span></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_wishlist_switcher)) : ?>
                                <a href="<?php print esc_url(home_url('/wishlist')); ?>"><i class="fa-thin fa-heart"></i> <span class="fz-off-actions-text"><span><?php print esc_html__('View Wishlist', 'ayaa'); ?></span><span><?php print esc_html__('View Wishlist', 'ayaa'); ?></span></span></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($cbtoolkit_side2_contact_switcher)) : ?>
                        <div class="ayaa-fz-offcanvas-main-contacts">
                            <?php if (!empty($cbtoolkit_side2_contact_title)) : ?>
                                <h4 class="ayaa-fz-offcanvas-main-contacts-title mb-30"><?php print esc_html($cbtoolkit_side2_contact_title); ?></h4>
                            <?php endif; ?>

                            <ul class="ayaa-fz-offcanvas-main-contacts-list">
                                <?php if (!empty($cbtoolkit_side2_contact_address)) : ?>
                                    <li>
                                        <i class="fa-thin fa-location-dot"></i>
                                        <span class="ayaa-fz-offcanvas-main-contact-text"><?php print esc_html($cbtoolkit_side2_contact_address); ?></span>
                                    </li>
                                <?php endif; ?>
                                <?php if (!empty($cbtoolkit_side2_contact_phone1 || $cbtoolkit_side2_contact_phone2)) : ?>
                                    <li>
                                        <i class="fa-thin fa-phone-flip"></i>
                                        <span class="ayaa-fz-offcanvas-main-contact-text">
                                            <?php if (!empty($cbtoolkit_side2_contact_phone1)) : ?>
                                                <a href="<?php echo esc_url($cbtoolkit_side2_contact_phone_link1) ? esc_url('tel:' . $cbtoolkit_side2_contact_phone_link1) : ''; ?>"><?php print esc_html($cbtoolkit_side2_contact_phone1); ?></a> <br>
                                            <?php endif; ?>
                                            <?php if (!empty($cbtoolkit_side2_contact_phone2)) : ?>
                                                <a href="<?php echo esc_url($cbtoolkit_side2_contact_phone_link2) ? esc_url('tel:' . $cbtoolkit_side2_contact_phone_link2) : ''; ?>"><?php print esc_html($cbtoolkit_side2_contact_phone2); ?></a>
                                            <?php endif; ?>
                                        </span>
                                    </li>
                                <?php endif; ?>

                                <?php if (!empty($cbtoolkit_side2_office_time)) : ?>
                                    <li>
                                        <i class="fa-thin fa-clock"></i>
                                        <span class="ayaa-fz-offcanvas-main-contact-text"><?php print esc_html__('Store Hours:', 'ayaa'); ?><br><span class="ayaa-fz-opentime"><?php print esc_html($cbtoolkit_side2_office_time); ?></span></span>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($cbtoolkit_side2_social_switcher)) : ?>
                        <div class="ayaa-fz-offcanvas-main-socials mt-45">
                            <?php if (!empty($cbtoolkit_side2_social_fb_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_fb_link); ?>"><i class="fa-brands fa-facebook-f"></i><i class="fa-brands fa-facebook-f"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_social_twitter_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_twitter_link); ?>"><i class="fa-brands fa-twitter"></i><i class="fa-brands fa-twitter"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_social_instagram_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_instagram_link); ?>"><i class="fa-brands fa-instagram"></i><i class="fa-brands fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side2_social_youtube_link)) : ?>
                                <a href="<?php print esc_url($cbtoolkit_side2_social_youtube_link); ?>"><i class="fa-brands fa-youtube"></i><i class="fa-brands fa-youtube"></i></a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- ayaa-fz-offcanvas-main-nav-wrapper end-->

<?php }

//header search 
function header_search_fullwidth()
{ ?>
    <!-- header-search -->
    <div class="cbsearchbar cb-sidebar-area">
        <button class="cbsearchbar__close"><i class="fa-light fa-xmark"></i></button>
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 pt-100 pb-100">
                        <h2 class="cbsearchbar__title"><?php print esc_html__('What Product Are You Looking For?', 'ayaa'); ?></h2>
                        <div class="cbsearchbar__form">
                            <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                                <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search Product', 'ayaa'); ?>">
                                <input type="hidden" name="post_type" value="product" />
                                <button class="cbsearchbar__search-btn" type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-body-overlay"></div>
    <!-- header-search-end -->
<?php }


/**
 * [ayaa_header_menu description]
 * @return [type] [description]
 */
function ayaa_header_menu()
{
?>
    <?php
    $ayaa_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children has-dropdown-menu', $ayaa_menu);
    ?>
<?php
}
function ayaa_header_menu_1()
{
?>
    <?php
    $ayaa_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children has-dropdown-menu', $ayaa_menu);
    ?>
<?php
}
function ayaa_header_menu_3()
{
?>
    <?php
    $ayaa_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children ayaa-fz-has-dropdown-menu-2-update', $ayaa_menu);
    ?>
<?php
}
function ayaa_header_menu_4()
{
?>
    <?php
    $ayaa_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $ayaa_menu);
    ?>
<?php
}
function ayaa_header_menu_5()
{
?>
    <?php
    $ayaa_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $ayaa_menu);
    ?>
<?php
}
function ayaa_header_menu_6()
{
?>
<?php
    $ayaa_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $ayaa_menu);
    ?>
<?php
}
function ayaa_header_menu_7()
{
?>
<?php
    $ayaa_menu = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'menu_id'       => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children', $ayaa_menu);
    ?>
<?php
}
$ayaa_all_categories = '';
function ayaa_get_woo_product_categories()
{
    global $ayaa_all_categories;
    if (class_exists('WooCommerce')) {
        $taxonomy     = 'product_cat';
        $orderby      = 'post__in';
        $show_count   = 0;      // 1 for yes, 0 for no
        $pad_counts   = 0;      // 1 for yes, 0 for no
        $hierarchical = 1;      // 1 for yes, 0 for no  
        $title        = '';
        $empty        = 0;
        $args = array(
            'taxonomy'     => $taxonomy,
            'orderby'      => $orderby,
            'show_count'   => $show_count,
            'pad_counts'   => $pad_counts,
            'hierarchical' => $hierarchical,
            'title_li'     => $title,
            'hide_empty'   => $empty,
        );
        $ayaa_all_categories = get_categories($args);
    }
}
add_action('init', 'ayaa_get_woo_product_categories');
/**
 * Add menu class into link
 */
function ayaa_add_specific_menu_location_atts($atts, $item, $args)
{
    // check if the item is in the primary menu
    if ($args->theme_location == 'main-menu') {
        // add the desired attributes:
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ayaa_add_specific_menu_location_atts', 10, 3);
/**
 * Check if wp menu has submenu
 */
function ayaa_check_has_menu_in_link($atts, $item, $args)
{
    if (in_array('menu-item-has-children', $item->classes)) {
        if (key_exists('class', $atts)) {
            $atts['class'] .= ' dropdown-toggle';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ayaa_check_has_menu_in_link', 10, 3);
/**
 * Add class into submenu link
 */
function ayaa_nav_menu_link_class($atts, $item)
{
    if (!$item->has_children && $item->menu_item_parent > 0) {
        $class         = 'dropdown-item';
        $atts['class'] = $class;
    }

    return $atts;
}
add_filter('nav_menu_link_attributes', 'ayaa_nav_menu_link_class', 10, 2);
function ayaa_copyright_menu()
{
?>
    <?php
    $ayaa_copyright_menu = wp_nav_menu([
        'theme_location' => 'copyright_menu',
    ]);
    ?>
<?php
}
function ayaa_header_menu_2()
{
?>
    <?php
    $ayaa_menu_2 = wp_nav_menu([
        'theme_location' => 'main-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
        'echo'           => false
    ]);
    echo str_replace('menu-item-has-children', 'menu-item-has-children dropdown', $ayaa_menu_2);
    ?>
<?php
}

/**
 * [ayaa_footer_menu description]
 * @return [type] [description]
 */
function ayaa_footer_menu()
{
    wp_nav_menu([
        'theme_location' => 'footer-menu',
        'menu_class'     => '',
        'container'      => '',
        'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
        'walker'         => new WP_Bootstrap_Navwalker,
    ]);
}
function ayaa_footer_social()
{
    $cbsocial_list_widget = get_theme_mod('cbsocial_list_widget');
?>
    <?php if (!empty($cbsocial_list_widget)) : ?>
        <?php foreach ($cbsocial_list_widget as $ayaa_social) : ?>
            <?php if (!empty($ayaa_social['social_label'])) : ?>
                <a href="<?php echo esc_url($ayaa_social['social_url']) ? esc_url($ayaa_social['social_url']) : ''; ?>" target="_blank" class="bottom-footer-social mr-30"><span data-bg-color="<?php echo esc_attr($ayaa_social['social_color']); ?>" class="footer-social-icon mr-10"><i class="icofont-<?php echo esc_attr($ayaa_social['social_icon']) ? esc_attr($ayaa_social['social_icon']) : ''; ?>"></i></span><?php echo esc_html($ayaa_social['social_label']); ?></a>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php }

/**
 *
 * ayaa footer
 */

function ayaa_check_footer()
{
    $ayaa_footer_style = function_exists('get_field') ? get_field('footer_style') : null;
    $ayaa_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-1');
    if ($ayaa_footer_style == 'footer-style-1') {
        ayaa_footer_style_1();
    } elseif ($ayaa_footer_style == 'footer-style-2') {
        ayaa_footer_style_2();
    } elseif ($ayaa_footer_style == 'footer-style-3') {
        ayaa_footer_style_3();
    } elseif ($ayaa_footer_style == 'footer-style-4') {
        ayaa_footer_style_4();
    } elseif ($ayaa_footer_style == 'footer-style-5') {
        ayaa_footer_style_5();
    } elseif ($ayaa_footer_style == 'footer-style-6') {
        ayaa_footer_style_6();
    } else {
        /** default footer style **/
        if ($ayaa_default_footer_style == 'footer-style-1') {
            ayaa_footer_style_1();
        } elseif ($ayaa_default_footer_style == 'footer-style-2') {
            ayaa_footer_style_2();
        } elseif ($ayaa_default_footer_style == 'footer-style-3') {
            ayaa_footer_style_3();
        } elseif ($ayaa_default_footer_style == 'footer-style-4') {
            ayaa_footer_style_4();
        } elseif ($ayaa_default_footer_style == 'footer-style-5') {
            ayaa_footer_style_5();
        } elseif ($ayaa_default_footer_style == 'footer-style-6') {
            ayaa_footer_style_6();
        } else {
            ayaa_footer_style_1();
        }
    }
}
add_action('ayaa_footer_style', 'ayaa_check_footer', 10);

/**
 * footer  style_defaut
 */
function ayaa_footer_style_1()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '1');
    ?>

<?php
}
/**
 * footer  style 2
 */
function ayaa_footer_style_2()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '2');
    ?>

<?php
}
/**
 * footer  style 3
 */
function ayaa_footer_style_3()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '3');
    ?>
<?php
}
/**
 * footer  style 4
 */
function ayaa_footer_style_4()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '4'); ?>
<?php
}
/**
 * footer  style 5
 */
function ayaa_footer_style_5()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '5'); ?>
<?php
}
/**
 * footer  style 6
 */
function ayaa_footer_style_6()
{ ?>
    <?php get_template_part('/inc/templates/footer/footer', '6'); ?>
<?php
}

// ayaa_copyright
function ayaa_copyright_text()
{
    $ayaa_copyright = get_theme_mod('ayaa_copyright', __('© 2023 ayaa Designed by CodeBasket', 'ayaa'));
?>
    <?php if (!empty($ayaa_copyright)) : ?>
        <p><?php print esc_html($ayaa_copyright); ?></p>
    <?php endif; ?>
<?php }
function ayaa_copyright_2_text()
{
    $ayaa_copyright_2 = get_theme_mod('ayaa_copyright_2', __('© 2023 ayaa Designed by CodeBasket', 'ayaa'));
?>
    <?php if (!empty($ayaa_copyright_2)) : ?>
        <p class="mb-0"><?php print esc_html($ayaa_copyright_2); ?></p>
    <?php endif; ?>
    <?php }

/**
 * [ayaa_breadcrumb_func description]
 * @return [type] [description]
 */
function ayaa_breadcrumb_func()
{
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;
    $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image') : '';
    $search_queried_result = get_search_query();
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'page',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    $post_ids = array();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            array_push($post_ids, get_the_ID());
        }
        wp_reset_query();
    }
    $title_from_customizer = get_the_title();
    if (!is_home() && !is_archive() && !is_single() && !is_404() && !is_search() && !is_privacy_policy()) {
        $title_from_customizer = wp_kses_post(get_the_title());
    } else if (is_single()) {
        $title_from_customizer = wp_kses_post(get_the_title());
    } else {

        $title_from_customizer_blog = get_theme_mod('breadcrumb_title_blog', __('Blog', 'ayaa'));
        $title_from_customizer = __('Blog', 'ayaa');
        $title_from_customizer = $title_from_customizer_blog ? $title_from_customizer_blog : $title_from_customizer;
    }
    if (is_archive()) {
        $title_from_customizer = get_the_archive_title();
    }
    $searched_query = array();
    if (is_404()) {
        $searched_query = __('404', 'ayaa');
        $title_from_customizer = esc_html__('Search Results for :', 'ayaa') . $searched_query;
    }
    if (is_search()) {
        $searched_query = get_search_query();
        if (empty($searched_query)) {
            $searched_query = esc_html__('All', 'ayaa');
        }
        $title_from_customizer = esc_html__('Search Results for :', 'ayaa') . $searched_query;
    }



    $_id = get_the_ID();
    $is_breadcrumb = function_exists('get_field') ? get_field('is_it_invisible_breadcrumb', $_id) : '';
    if (!empty($_GET['s'])) {
        $is_breadcrumb = null;
    }
    if (empty($is_breadcrumb) && $breadcrumb_show == 1) {

        $bg_img_from_page = function_exists('get_field') ? get_field('breadcrumb_background_image', $_id) : '';
        $hide_bg_img = function_exists('get_field') ? get_field('hide_breadcrumb_background_image', $_id) : '';

        // get_theme_mod
        $breadcrumb_bg_color = get_theme_mod('breadcrumb_bg_color', __('#F8F8F8', 'ayaa'));
        $bg_img_url = get_template_directory_uri() . '/assets/images/inner-banner-bg.png';
        $breadcrumb_bg_img = get_theme_mod('breadcrumb_bg_img', get_template_directory_uri() . '/assets/images/inner-banner-bg.png');

        $breadcrumb_padding_top_field = function_exists('get_field') ? get_field('ayaa_breadcrumb_padding_top') : '';
        $breadcrumb_padding_bottom_field = function_exists('get_field') ? get_field('ayaa_breadcrumb_padding_bottom') : '';

        $breadcrumb_padding_top_customizer = get_theme_mod('breadcrumb_padding_top', 62);
        $breadcrumb_padding_bottom_customizer = get_theme_mod('breadcrumb_padding_bottom', 65);

        if ($breadcrumb_padding_top_field) {
            $breadcrumb_padding_top = $breadcrumb_padding_top_field;
        } else {
            $breadcrumb_padding_top = $breadcrumb_padding_top_customizer;
        }

        if ($breadcrumb_padding_bottom_field) {
            $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_field;
        } else {
            $breadcrumb_padding_bottom = $breadcrumb_padding_bottom_customizer;
        }
        $breadcrumb_overlay_class = '';
        if ($hide_bg_img && empty($_GET['s'])) {
            $breadcrumb_bg_img = '';
        } else {
            $breadcrumb_bg_img = !empty($bg_img_from_page) ? $bg_img_from_page['url'] : $breadcrumb_bg_img;
            $breadcrumb_overlay_class = 'breadcrumb_overlay';
        }
        $breadcrumb_bg_img_ovelay_color_opacity = get_theme_mod('breadcrumb_bg_img_ovelay_color_opacity', __('0', 'ayaa'));
        $breadcrumb_bg_img_ovelay_color = get_theme_mod('breadcrumb_bg_img_ovelay_color', '');
    ?>
        <div class="banner banner-inner <?php print esc_attr($breadcrumb_overlay_class); ?>" data-bg-color="<?php print esc_attr($breadcrumb_bg_color); ?>" data-background="<?php print esc_url($breadcrumb_bg_img); ?>" data-top-space="<?php print esc_attr($breadcrumb_padding_top); ?>px" data-bottom-space="<?php print esc_attr($breadcrumb_padding_bottom); ?>px" data-background-opacity="<?php echo esc_attr($breadcrumb_bg_img_ovelay_color_opacity) ? esc_attr($breadcrumb_bg_img_ovelay_color_opacity) : '0'; ?>" data-overlay-color="<?php echo esc_attr($breadcrumb_bg_img_ovelay_color); ?>">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12">
                        <div class="breadcrumb-txt">
                            <h1>
                                <?php
                                if (str_contains($title_from_customizer, '<em>')) {
                                    echo wp_kses_post($title_from_customizer, array('<em>' => array()));
                                } else {
                                    echo wp_strip_all_tags($title_from_customizer);
                                }
                                ?>
                            </h1>
                            <nav class="breadcrumb-txt p-0 breadcrumb-trail breadcrumbs">
                                <?php
                                if (function_exists('bcn_display')) {
                                    $display_text = bcn_display(true);
                                    if ($searched_query == 'All') {
                                        $display_text .= $searched_query . '"';
                                    }
                                    echo wp_kses_post($display_text);
                                    unset($display_text);
                                }
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}

add_action('ayaa_before_main_content', 'ayaa_breadcrumb_func');

// ayaa_search_form
function ayaa_search_form()
{
    ?>
    <!-- modal-search-start -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="<?php echo esc_attr__('Close', 'ayaa'); ?>">
            <span aria-hidden="true"><?php echo esc_html__('×', 'ayaa'); ?></span>
        </button>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                    <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Enter Your Keyword', 'ayaa'); ?>">
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <!-- modal-search-end -->
<?php
}

add_action('ayaa_before_main_content', 'ayaa_search_form');


/**
 *
 * pagination
 */
if (!function_exists('ayaa_pagination')) {

    function _ayaa_pagi_callback($pagination)
    {
        return $pagination;
    }

    //page navegation
    function ayaa_pagination($prev, $next, $pages, $args)
    {
        global $wp_query, $wp_rewrite;
        $menu = '';
        $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;

        if ($pages == '') {
            global $wp_query;
            $pages = $wp_query->max_num_pages;

            if (!$pages) {
                $pages = 1;
            }
        }
        $pagination = [
            'base'      => add_query_arg('paged', '%#%'),
            'format'    => '',
            'total'     => $pages,
            'current'   => $current,
            'prev_text' => $prev,
            'next_text' => $next,
            'type'      => 'array',
        ];

        //rewrite permalinks
        if ($wp_rewrite->using_permalinks()) {
            $pagination['base'] = user_trailingslashit(trailingslashit(remove_query_arg('s', get_pagenum_link(1))) . 'page/%#%/', 'paged');
        }

        if (!empty($wp_query->query_vars['s'])) {
            $pagination['add_args'] = ['s' => get_query_var('s')];
        }

        $pagi = '';
        if (paginate_links($pagination) != '') {
            $paginations = paginate_links($pagination);
            $pagi .= '<div class="blog-pagination mb-40">';
            foreach ($paginations as $key => $pg) {
                $pagi .= $pg;
            }
            $pagi .= '</div>';
        }

        print _ayaa_pagi_callback($pagi);
    }
}



function ayaa_header_cart()
{ ?>
    <div class="header-cart-wrap" id="headerCartWrap">
        <div class="cart-list">
            <div class="title">
                <h3><?php echo esc_html__('Shopping Cart', 'ayaa'); ?></h3>
                <button class="cart-close"><i class="fa-regular fa-xmark"></i></button>
            </div>
            <?php reverel_cart_items(); ?>
            <div class="btn-box">
                <a href="<?php echo class_exists('WooCommerce') ? esc_url(wc_get_cart_url()) : ''; ?>" class="def-btn"><?php echo esc_html__('View Cart', 'ayaa'); ?></a>
                <a href="<?php echo class_exists('WooCommerce') ? esc_url(wc_get_checkout_url()) : ''; ?>" class="def-btn"><?php echo esc_html__('Checkout', 'ayaa'); ?></a>
            </div>
        </div>
    </div>
<?php }



function ayaa_sidebar_mobile_menu_1()
{
    $cbtoolkit_side_logo = get_theme_mod('cbtoolkit_side_logo', get_template_directory_uri() . '/assets/images/update/logo-white.png');
    $cbtoolkit_side_btn_text = get_theme_mod('cbtoolkit_side_btn_text',  __('Contact Us', 'ayaa'));
    $cbtoolkit_side_btn_url = get_theme_mod('cbtoolkit_side_btn_url',  __('#', 'ayaa'));
    $cbtoolkit_header_top_email_text_1 = get_theme_mod('cbtoolkit_header_top_email_text_1',  __('info@webmail.com', 'ayaa'));
    $cbtoolkit_header_top_email_link_1 = get_theme_mod('cbtoolkit_header_top_email_link_1',  __('info@webmail.com', 'ayaa'));
    $cbtoolkit_side_support_number_link_1 = get_theme_mod('cbtoolkit_side_support_number_link_1',  __('+642394396432', 'ayaa'));
    $cbtoolkit_side_support_number_text_1 = get_theme_mod('cbtoolkit_side_support_number_text_1',  __('(+642) 394 396 432', 'ayaa'));
    $cbtoolkit_side_contact_address_link_1 = get_theme_mod('cbtoolkit_side_contact_address_link_1',  __('https://goo.gl/maps/ZNyPLyPfoLkFYpiS7', 'ayaa'));
    $cbtoolkit_side_contact_address_text_1 = get_theme_mod('cbtoolkit_side_contact_address_text_1',  __('Ave 14th Street, Mirpur 210, San Franciso, USA 3296.', 'ayaa'));
?>
    <div class="ayaa-mobile-sidebar-main">
        <div class="ayaa-mobile-sidebar-inner">
            <div class="ayaa-mobile-sidebar-tabs">
                <nav>
                    <div class="nav nav-tabs" id="nav-menu-info" role="tablist">
                        <button class="nav-link active" id="nav-menu-tab" data-bs-toggle="tab" data-bs-target="#nav-menu" type="button" role="tab" aria-controls="nav-menu" aria-selected="true"><?php echo esc_html__('MENU', 'ayaa'); ?></button>
                        <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-info" aria-selected="false"><?php echo esc_html__('INFO', 'ayaa'); ?></button>
                    </div>
                </nav>
            </div>
            <div class="ayaa-mobile-sidebar-inner-content">
                <div class="ayaa-mobile-sidebar-content-top pb-25">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <?php if (!empty($cbtoolkit_side_logo)) : ?>
                                <div class="ayaa-mobile-sidebar-logo">
                                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($cbtoolkit_side_logo); ?>" alt="<?php echo esc_attr__('logo', 'ayaa'); ?>"></a>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <button class="ayaa-mobile-sidebar-close-btn"><i class="fa-thin fa-xmark"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content" id="nav-mobile-sidebar-tab">
                    <div class="tab-pane fade show active" id="nav-menu" role="tabpanel" aria-labelledby="nav-menu-tab">
                        <div class="ayaa-mobile-sidebar-content-main">
                            <div class="mobile-menu-updated-2"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <div class="ayaa-mobile-sidebar-content-main-right">
                            <div class="ayaa-mobile-sidebar-content-main ayaa-rv-has-category-mobile-1 mb-30 mb-md-0">
                                <div class="ayaa-rv-cat-menu"></div>
                            </div>
                            <div class="pb-25">
                                <div class="ayaa-mobile-sidebar-search-form">
                                    <form action="<?php print esc_url(home_url('/')); ?>" method="get">
                                        <button type="submit"><i class="fa-thin fa-search"></i></button>
                                        <input type="search" name="s" value="<?php print esc_attr(get_search_query()) ?>" placeholder="<?php print esc_attr__('Search Product', 'ayaa'); ?>" id="search-input" />
                                        <input type="hidden" name="post_type" value="product" />
                                    </form>
                                </div>
                            </div>
                            <?php if (class_exists('WooCommerce')) : ?>
                                <div class="pb-25">
                                    <button class="ayaa-header-cart-count-btn">
                                        <span class="left">
                                            <i class="fa-solid fa-basket-shopping"></i>
                                            <span class="price"><?php echo get_woocommerce_currency_symbol(); ?><span id="mini-cart-subtotal-price-234243"></span></span>
                                        </span>
                                        <span class="right">
                                            <span class="count"><span id="mini-cart-count"></span></span>
                                        </span>
                                    </button>
                                </div>
                            <?php endif; ?>
                            <?php if (class_exists('WooCommerce')) : ?>
                                <div class="ayaa-fz-mobile-sidebar-btn-wrapper-main-2">
                                    <a href="<?php print wc_get_cart_url(); ?>"><i class="fa-thin fa-cart-shopping"></i></a>
                                    <a href="<?php echo esc_url(home_url('/wishlist')); ?>"><i class="fa-light fa-heart"></i></a>
                                    <a href="<?php the_permalink(get_option('woocommerce_myaccount_page_id'));  ?>"><i class="fa-thin fa-user"></i></a>
                                    <a href="<?php echo esc_url(home_url('/contact')); ?>"><i class="fa-thin fa-headphones"></i></a>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_side_btn_text)) : ?>
                                <div class="pb-25">
                                    <a href="<?php echo esc_url($cbtoolkit_side_btn_url) ? esc_url_raw($cbtoolkit_side_btn_url) : ''; ?>" class="ayaa-white-btn"><?php echo esc_html($cbtoolkit_side_btn_text); ?></a>
                                </div>
                            <?php endif; ?>
                            <div class="ayaa-mobile-sidebar-contact-list">
                                <ul>
                                    <?php if (!empty($cbtoolkit_side_contact_address_text_1)) : ?>
                                        <li><a href="<?php echo esc_url($cbtoolkit_side_contact_address_link_1) ? esc_url($cbtoolkit_side_contact_address_link_1) : ''; ?>"><i class="fa-thin fa-location-dot"></i> <span><?php echo esc_html($cbtoolkit_side_contact_address_text_1); ?></span></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($cbtoolkit_header_top_email_text_1)) : ?>
                                        <li><a href="<?php echo esc_url($cbtoolkit_header_top_email_link_1) ? esc_url('mailto:' . $cbtoolkit_header_top_email_link_1) : ''; ?>"><i class="fa-thin fa-envelope-open"></i> <span><?php echo esc_html($cbtoolkit_header_top_email_text_1); ?></span></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($cbtoolkit_side_support_number_text_1)) : ?>
                                        <li><a href="<?php echo esc_url($cbtoolkit_side_support_number_link_1) ? esc_url('tel:' . $cbtoolkit_side_support_number_link_1) : ''; ?>"><i class="fa-thin fa-phone"></i> <span><?php echo esc_html($cbtoolkit_side_support_number_text_1); ?></span></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php }
