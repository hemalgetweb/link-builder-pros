<!-- contact us -->
<section id="contactus" class="section-padding position-relative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-img mb-5 mb-lg-0 wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms" style="visibility: visible; animation-duration: 1.15s; animation-delay: 250ms; animation-name: fadeInDown;">
                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html($settings, 'thumbnail', 'banner_left_image'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contactus-form">
                        <div class="sub-heading">
                            <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms" style="visibility: visible; animation-duration: 0.5s; animation-delay: 100ms; animation-name: fadeInDown;">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ? $settings['banner_subtitle_1'] : "CONTACT US"); ?>
                            </h4>
                            <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms" style="visibility: visible; animation-duration: 0.5s; animation-delay: 150ms; animation-name: fadeInDown;">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ? $settings['banner_title_part_1'] : "Curious? with"); ?>
                                <span class="text-clr-primary">
                                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ? $settings['banner_title_part_2'] : "Let's talk"); ?>
                                </span>
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ? $settings['banner_title_part_3'] : "LinkBuilderPros"); ?>
                            </h1>
                            <p class="fw-normal fs-6 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms" style="visibility: visible; animation-duration: 0.55s; animation-delay: 180ms; animation-name: fadeInDown;">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_text']) ? $settings['banner_text'] : "We love talking link building. Let us know about your project and we'll send you a free proposal"); ?>
                            </p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="301" title="Contact form 1"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact us /-end -->