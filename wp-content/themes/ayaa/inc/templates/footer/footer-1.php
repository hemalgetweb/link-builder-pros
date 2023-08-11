<?php
$ayaa_footer_logo_2 = get_theme_mod('ayaa_footer_logo_2');

/*
cmt_section_footer_2: start section Footer 1
*/
$footer_bg_image_2 = get_theme_mod('footer_bg_image_2', get_template_directory_uri() . '/assets/img/logo/logo.png');
$cbtoolkit_footer_bg_color_2 = get_theme_mod('cbtoolkit_footer_bg_color_2', __('#fff', 'ayaa'));
$cbtoolkit_copyright_2 = get_theme_mod('cbtoolkit_copyright_2', __('© 2023 Designed by CodeBasket', 'ayaa'));
$cbtoolkit_footer_copyright_image_2 = get_theme_mod('cbtoolkit_footer_copyright_image_2');
$copyright_class = $cbtoolkit_footer_copyright_image_2 ? esc_attr__('col-xxl-6 col-xl-6 col-md-7', 'ayaa') : esc_attr__('col-12 text-center', 'ayaa');
$footer_class_2[1] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6'; 
$footer_class_2[2] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
$footer_class_2[3] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
$footer_class_2[4] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
?>
<!-- footer area start -->
<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) : ?>
    <div class="footer-area ayaa-fz-footer-2-update" data-background="<?php echo esc_url($footer_bg_image_2); ?>" data-bgcolor="<?php echo esc_attr($cbtoolkit_footer_bg_color_2); ?>">
        <div class="ayaa-rv-footer-main-wrapper pt-100 pb-55">
            <div class="container">
                <div class="row">
                    <?php
                    for ($num = 1; $num <= 4; $num++) {
                        if (!is_active_sidebar('footer-' . $num)) {
                            continue;
                        }
                        print '<div class="' . esc_attr($footer_class_2[$num]) . '">';
                        dynamic_sidebar('footer-' . $num);
                        print '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- footer area end -->
    </div>
<?php endif; ?>
<?php if (!empty($cbtoolkit_copyright_2)) : ?>
    <div class="ayaa-rv-copyright-area">
        <div class="container">
            <div class="ayaa-rv-copyright-inner gray-bg">
                <div class="row align-items-center">
                    <div class="<?php echo esc_attr($copyright_class); ?>">
                        <div class="ayaa-rv-copyright-text">
                            <p><?php echo wp_kses_post($cbtoolkit_copyright_2); ?></p>
                        </div>
                    </div>
                    <?php if (!empty($cbtoolkit_footer_copyright_image_2)) : ?>
                        <div class="col-xxl-6 col-xl-6 col-md-5">
                            <div class="ayaa-rv-copyright-img text-end">
                                <img src="<?php echo esc_url_raw($cbtoolkit_footer_copyright_image_2); ?>" alt="<?php echo esc_attr__('payment gateway', 'ayaa'); ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>