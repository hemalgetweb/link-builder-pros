<?php

/*
cmt_section_footer_6: start section Footer 4
*/
$cbtoolkit_footer_bg_color_6 = get_theme_mod('cbtoolkit_footer_bg_color_6', __('#f8fffa', 'ayaa'));
$cbtoolkit_copyright_6 = get_theme_mod('cbtoolkit_copyright_6', __('©2023 Ayaa Design & Developed By Codebasket', 'ayaa'));
$footer_widget_column_6 = get_theme_mod('footer_widget_column_6', 4);
$enable_footer_dark = get_theme_mod('enable_footer_dark_6', false);
$allowed = array(
    'a' => array(
        'href' => array(),
        'title' => array(),
        'target' => array()
    ),
);
$footer_class_6[1] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
$footer_class_6[2] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6';
$footer_class_6[3] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6';
$footer_class_6[4] = 'col-xxl-3 col-xl-3 col-lg-6 col-md-6';
$dark_class = '';
if(!empty($enable_footer_dark)) {
    $dark_class = 'ayaa-fz-has-footer-dark-6';
}
?>
<!-- ayaa-fz-footer6-area-start -->
<?php if (is_active_sidebar('footer6-1') || is_active_sidebar('footer6-2') || is_active_sidebar('footer6-3') || is_active_sidebar('footer6-4')) : ?>
    <footer class="ayaa-fz-footer-6 p-rel <?php echo esc_attr($dark_class); ?>" data-bgcolor="<?php echo esc_attr($cbtoolkit_footer_bg_color_6); ?>">
        <div class="ayaa-fz-footer-shape-wrap-6">
            <div class="shape-1">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/update/shape/bar-shape.png" alt="shape">
            </div>
            <div class="shape-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/update/shape/bar-shape-2.png" alt="shape">
            </div>
        </div>
        <div class="ayaa-fz-footer-menu-main-wrapper-6">
            <div class="container">
                <div class="row">
                    <?php
                        for ($num = 1; $num <= 5; $num++) {
                            if (!is_active_sidebar('footer6-' . $num)) {
                                continue;
                            } else {
                                print '<div class="' . esc_attr($footer_class_6[$num]) . '">';
                                dynamic_sidebar('footer6-' . $num);
                                print '</div>';
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </footer>
<?php endif; ?>
<!-- ayaa-fz-footer6-area-end -->
<?php if (!empty($cbtoolkit_copyright_6)) : ?>
<!-- footer copyright start -->
<div class="footer-copyright-6 <?php echo esc_attr($dark_class); ?>" data-bgcolor="<?php echo esc_attr($cbtoolkit_footer_bg_color_6); ?>">
    <div class="container">
        <p class="text-center"><?php echo wp_kses($cbtoolkit_copyright_6, $allowed); ?></p>
    </div>
</div>
<?php endif; ?>