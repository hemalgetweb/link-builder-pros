<?php

/*
cmt_section_footer_3: start section Footer 1
*/
$footer_bg_image_3 = get_theme_mod('footer_bg_image_3', '');
$cbtoolkit_footer_bg_color_3 = get_theme_mod('cbtoolkit_footer_bg_color_3', __('#fff', 'ayaa'));
$cbtoolkit_copyright_3 = get_theme_mod('cbtoolkit_copyright_3', __('©2023 Ayaa Design & Developed by CodeBasket', 'ayaa'));
$footer_widget_column_3 = get_theme_mod('footer_widget_column_3', 4);
$cbtoolkit_footer_copyright_image_3 = get_theme_mod('cbtoolkit_footer_copyright_image_3', '');
$copyright_class = $cbtoolkit_footer_copyright_image_3 ? esc_attr__('col-md-6 order-1 order-md-0 text-center text-md-start', 'ayaa') : esc_attr__('col-12 text-center', 'ayaa');
$allowed = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
);
$footer_class_3[1] = 'col-xxl-3 col-xl-3 col-lg-8 col-md-8';
$footer_class_3[2] = 'col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6';
$footer_class_3[3] = 'col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6';
$footer_class_3[4] = 'col-xxl-2 col-xl-2 col-lg-4 col-md-4 col-sm-6';
$footer_class_3[5] = 'col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6';

?>
<!-- ayaa-fz-footer-area-3-start -->
<div class="ayaa-fz-footer-3-area ayaa-soft-bg-3">
    <div class="container">
        <?php if (is_active_sidebar('footer3-1') || is_active_sidebar('footer3-2') || is_active_sidebar('footer3-3') || is_active_sidebar('footer3-4') || is_active_sidebar('footer3-5')) : ?>
            <div class="ayaa-fz-footer-3-top-wrapper bdrbsoft pt-100 pb-50">
                <div class="row">
                    <?php
                    for ($num = 1; $num <= 5; $num++) {
                        if (!is_active_sidebar('footer3-' . $num)) {
                            continue;
                        } else {
                            print '<div class="' . esc_attr($footer_class_3[$num]) . '">';
                            dynamic_sidebar('footer3-' . $num);
                            print '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (!empty($cbtoolkit_copyright_3)) : ?>
            <div class="ayaa-fz-footer-3-copyright pt-20">
                <div class="row align-items-center">
                    <div class="<?php echo esc_attr($copyright_class); ?>">
                        <p class="mb-20"><?php echo wp_kses($cbtoolkit_copyright_3, $allowed); ?></p>
                    </div>
                    <?php if (!empty($cbtoolkit_footer_copyright_image_3)) : ?>
                        <div class="col-md-6 order-0 order-md-1">
                            <div class="ayaa-fz-footer-3-creditcard text-center text-md-end mb-20">
                                <img src="<?php echo esc_url($cbtoolkit_footer_copyright_image_3); ?>" alt="<?php echo esc_attr__('img', 'ayaa'); ?>">
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- ayaa-fz-footer-area-3-end -->