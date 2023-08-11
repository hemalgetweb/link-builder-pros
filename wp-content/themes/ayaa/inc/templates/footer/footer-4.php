<?php

/*
cmt_section_footer_4: start section Footer 4
*/
$footer_bg_image_4 = get_theme_mod('footer_bg_image_4', '');
$cbtoolkit_footer_bg_color_4 = get_theme_mod('cbtoolkit_footer_bg_color_4', __('#fff', 'ayaa'));
$cbtoolkit_copyright_4 = get_theme_mod('cbtoolkit_copyright_4', __('Copyright Ayaa All Rights Reserved', 'ayaa'));
$footer_widget_column_4 = get_theme_mod('footer_widget_column_4', 4);
$cbtoolkit_footer_copyright_image_4 = get_theme_mod('cbtoolkit_footer_copyright_image_4');
$copyright_class = $cbtoolkit_footer_copyright_image_4 ? esc_attr__('col-xxl-6 col-xl-6 col-lg-6 col-md-6 text-center text-md-start', 'ayaa') : esc_attr__('col-12 text-center', 'ayaa');
$allowed = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
);
$footer_class_4[1] = 'col-xxl-3 col-xl-3 col-lg-4 col-md-6 mb-30';
$footer_class_4[2] = 'col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-30';
$footer_class_4[3] = 'col-xxl-2 col-xl-2 col-lg-3 col-md-3 col-sm-6 mb-30';
$footer_class_4[4] = 'col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-sm-6 mb-30';
$footer_class_4[5] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6 mb-30';
?>
<?php if (is_active_sidebar('footer4-1') || is_active_sidebar('footer4-2') || is_active_sidebar('footer4-3') || is_active_sidebar('footer4-4') || is_active_sidebar('footer4-5')) : ?>
    <!-- footer area start -->
    <div class="footer-area pt-100 pb-65 ayaa-fz-footer-style-4 soft-footer-bg-4 ayaa-soft-bg-3">
        <div class="container">
            <div class="row">
                <?php
                for ($num = 1; $num <= 5; $num++) {
                    if (!is_active_sidebar('footer4-' . $num)) {
                        continue;
                    } else {
                        print '<div class="' . esc_attr($footer_class_4[$num]) . '">';
                        dynamic_sidebar('footer4-' . $num);
                        print '</div>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>
    <!-- footer area end -->
<?php endif; ?>
<?php if (!empty($cbtoolkit_copyright_4)) : ?>
    <!-- copyright area start -->
    <div class="ayaa-fz-footer-copyright-4 pt-25 pb-25">
        <div class="container">
            <div class="row">
                <div class="<?php echo esc_attr($copyright_class); ?>">
                    <div class="ayaa-fz-footer-copyright-text-4">
                        <p><?php echo wp_kses($cbtoolkit_copyright_4, $allowed) ?> </p>
                    </div>
                </div>
                <?php if (!empty($cbtoolkit_footer_copyright_image_4)) : ?>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="ayaa-fz-footer-payment-img-wrap-4 text-center text-md-end">
                            <span class="label d-none d-lg-inline-block"><?php echo esc_html__('Payment System:', 'ayaa'); ?></span>
                            <img src="<?php echo esc_url($cbtoolkit_footer_copyright_image_4); ?>" alt="<?php echo esc_attr__('Payment Gateway', 'ayaa'); ?>" />
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- copyright area end -->
<?php endif; ?>