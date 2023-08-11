<?php
if (!empty($settings['btn_link_1']['url'])) {
    $this->add_link_attributes('btn_link_1', $settings['btn_link_1']);
}

$this->add_render_attribute('banner_right_image', 'src', $settings['banner_right_image']['url']);
$this->add_render_attribute('banner_right_image', 'alt', \Elementor\Control_Media::get_image_alt($settings['banner_right_image']));
$this->add_render_attribute('banner_right_image', 'title', \Elementor\Control_Media::get_image_title($settings['banner_right_image']));
$this->add_render_attribute('banner_right_image', 'class', 'img-fluid');

?>

<!-- hero -->
<section id="hero" style="background-image: url(<?php echo esc_url($settings['banner_background_image']['url']) ? esc_url($settings['banner_background_image']['url']) : ''; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-content mb-5 mb-lg-0">
                    <div class="sub-heading">
                        <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.3s" data-wow-delay="100ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ? $settings['banner_subtitle_1'] : "Who we are"); ?>
                        </h4>
                        <h1 class="fw-bold fs-48 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ? $settings['banner_title_part_1'] : "Turns Your Idea into"); ?> <br>
                            <span class="text-clr-primary"><?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ? $settings['banner_title_part_2'] : "Marketable"); ?></span> <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ? $settings['banner_title_part_3'] : "Deliverables"); ?>
                        </h1>
                        <p class="fw-normal fs-18 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_text']) ? $settings['banner_text'] : "We're a specialist link building agency that builds incredible backlinks to improve your search engine rankings."); ?>
                        </p>
                        <div class="d-inline-block">
                            <a href="#" class="d-flex align-items-center gap-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                                <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['btn_text_1']) ? $settings['btn_text_1'] : "Get in Touch"); ?>
                                </span>
                                <span class="ni ni-forward-ios"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="section-img text-center wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms">
                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html($settings, 'thumbnail', 'banner_right_image'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero /-end -->