<?php

/*
cmt_section_footer_5: start section Footer 4
*/
$footer_bg_image_5 = get_theme_mod('footer_bg_image_5', get_template_directory_uri() . '/assets/images/update/bg/footer5_bg.png');
$cbtoolkit_footer_bg_color_5 = get_theme_mod('cbtoolkit_footer_bg_color_5', __('#fff', 'ayaa'));
$cbtoolkit_copyright_5 = get_theme_mod('cbtoolkit_copyright_5', __('©2023 Ayaa Design & Developed By Codebasket', 'ayaa'));
$footer_widget_column_5 = get_theme_mod('footer_widget_column_5', 4);
$allowed = array(
    'a' => array(
        'href' => array(),
        'title' => array()
    ),
);
$footer_class_5[1] = 'col-xl-3 col-lg-12 col-md-12 col-sm-12';
$footer_class_5[2] = 'col-xl-3 col-lg-4 col-md-4 col-sm-6';
$footer_class_5[3] = 'col-xl-2 col-lg-4 col-md-3 col-sm-6';
$footer_class_5[4] = 'col-xl-4 col-lg-4 col-md-5 col-sm-12';
?>
<!-- ayaa-fz-footer5-area-start -->
<?php if (is_active_sidebar('footer5-1') || is_active_sidebar('footer5-2') || is_active_sidebar('footer5-3') || is_active_sidebar('footer5-4')) : ?>
    <div class="ayaa-fz-footer5-area">
        <div class="ayaa-fz-footer5-top-wrapper ayaa-black-deep-bg pt-100 pb-50" data-background="<?php echo esc_url($footer_bg_image_5); ?>">
            <div class="container">
                <div class="row">
                    <?php
                    for ($num = 1; $num <= 5; $num++) {
                        if (!is_active_sidebar('footer5-' . $num)) {
                            continue;
                        } else {
                            print '<div class="' . esc_attr($footer_class_5[$num]) . '">';
                            dynamic_sidebar('footer5-' . $num);
                            print '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- ayaa-fz-footer5-area-end -->

<?php if (!empty($cbtoolkit_copyright_5)) : ?>
    <div class="ayaa-fz-footer5-copyright-wrapper border-top-footer5" data-bgcolor="#000">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <?php echo wp_kses($cbtoolkit_copyright_5, $allowed); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>