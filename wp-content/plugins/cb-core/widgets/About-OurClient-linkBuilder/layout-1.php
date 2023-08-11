<!--  our clients start -->
<section id="our-clients" class="section-padding bg-clr-dark-blue">
    <div class="section-content text-center pb-50">
        <div class="sub-heading">
            <h4 class="fw-bold fs-12 text-uppercase text-white letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
            <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Our Client"); ?>
            </h4>
            <h1 class="fw-bold fs-36 text-white mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"Trusted By Brands"); ?>
                <span class="text-clr-primary">
                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"You Trust"); ?>
                </span>

            </h1>
            <p class="fw-normal fs-6 text-white mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
            <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"We’re a growing team of link builders — full of personality minus the ego. We’re the wearer"); ?> <br> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"of many hats dedicated to helping companies like yours grow"); ?>
            </p>
        </div>
    </div>

    <div class="brand-carousel-area">
        <?php if(!empty($settings['dynamic_service'])) : ?>
        <div class="marquee-vertical">
            <div class="top-slide-wrap d-flex align-items-center">
                <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
                $count++;
                ?>
                <div class="slide-item radius-6 d-flex align-items-center justify-content-center">
                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if(!empty($settings['dynamic_service_reverse'])) : ?>
        <div class="marquee-reverse mt-lg-4 mt-3">
            <div class="top-slide-wrap d-flex align-items-center">
                <?php $count = 0; foreach($settings['dynamic_service_reverse'] as $slide) :
                $count++;
                ?>
                <div class="slide-item radius-6 d-flex align-items-center justify-content-center">
                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>

</section>
<!-- our clients /-end -->