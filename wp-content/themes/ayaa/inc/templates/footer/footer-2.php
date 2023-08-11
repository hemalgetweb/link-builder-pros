<?php

/*
cmt_section_footer_1: start section Footer 1
*/
$footer_bg_image_1 = get_theme_mod('footer_bg_image_1', '');
$cbtoolkit_footer_bg_color_1 = get_theme_mod('cbtoolkit_footer_bg_color_1', __('#fff', 'ayaa'));
$cbtoolkit_copyright_1 = get_theme_mod('cbtoolkit_copyright_1', __('2023 Ayaa Design & Developed by CodeBasket', 'ayaa'));
$allowed = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
);
$footer_class_1[1] = 'col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 order-md-0 order-lg-0 mb-50';
$footer_class_1[2] = 'col-xxl-2 col-xl-3 col-lg-3 col-md-3 order-md-2  order-lg-1 col-sm-4 mb-50';
$footer_class_1[3] = 'col-xxl-3 col-xl-5 col-lg-5 col-md-6 order-md-1 order-lg-2 col-sm-8 mb-50';
$footer_class_1[4] = 'col-xxl-2 col-xl-4 col-lg-4 col-md-3 col-sm-4 order-md-3  order-lg-3 mb-50';
$footer_class_1[5] = 'col-xxl-2 col-xl-4 col-lg-4 col-md-6 col-sm-8 order-md-4  order-lg-4 mb-50';

?>
<!-- footer area start -->
<footer class="footer-area ayaa-fz-footer-2" data-background="<?php echo esc_url($footer_bg_image_1); ?>" data-bgcolor="<?php echo esc_attr($cbtoolkit_footer_bg_color_1); ?>">
    <?php if (is_active_sidebar('footer2-1') || is_active_sidebar('footer2-2') || is_active_sidebar('footer2-3') || is_active_sidebar('footer2-4') || is_active_sidebar('footer2-5')) : ?>
        <div class="container pt-100 pb-50">
            <div class="ayaa-fz-footer-wrapper-main-2">
                <div class="row">
                    <?php
                    for ($num = 1; $num <= 5; $num++) {
                        if (!is_active_sidebar('footer2-' . $num)) {
                            continue;
                        } else {
                            print '<div class="' . esc_attr($footer_class_1[$num]) . '">';
                            dynamic_sidebar('footer2-' . $num);
                            print '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (!empty($cbtoolkit_copyright_1)) : ?>
        <div class="ayaa-fz-copyright-area-2">
            <div class="container">
                <p class="text-center"><?php echo wp_kses($cbtoolkit_copyright_1, $allowed); ?></p>
            </div>
        </div>
    <?php endif; ?>
    <!-- /. copyright end -->   
</footer>
<!-- footer area end -->