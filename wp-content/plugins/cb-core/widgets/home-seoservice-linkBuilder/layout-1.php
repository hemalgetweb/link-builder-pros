<!-- seo services -->
<section id="benefits" class="section-padding" style="background-image: url(<?php echo esc_url($settings['banner_background_image']['url']) ? esc_url($settings['banner_background_image']['url']): ''; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="section-content text-center pb-50">
            <div class="sub-heading">
                <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"SEO services"); ?>
                </h4>
                <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"Our SEO"); ?> <span class="text-clr-primary"><?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Link Building"); ?></span> <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"Services"); ?></h1>
                <p class="fw-normal fs-6 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"est, qui dolorem ipsum quia dolor sit amet."); ?>
            </div>
        </div>

         <?php if(!empty($settings['dynamic_service'])) : ?>
        <div class="row">
            <div class="swiper benefits-slider">
                <div class="swiper-wrapper">

                <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
                    ?>
                    <div class="swiper-slide">
                        <div class="benefites-slide-wrapper">
                            <div class="benefites-card mb-lg-0 h-100 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                                <div class="card border-0">
                                    <div class="benefites-card-icon mb-4">
                                        <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>

                                    </div>
                                    <div class="benefites-card-content mb-2">
                                        <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-3">
                                        <?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"Relationship-Based Link Building"); ?>
                                        </h5>
                                        <p class="card-text fw-normal fs-6 text-clr-dark2">
                                        <?php echo cb_core_kses_basic(!empty($slide['service_text']) ?$slide['service_text']:"This technique is where we develop relationship and connections with influential publishers in your space."); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="swipper-button position-relative">
                <div class="swiper-button-prev-unique position-absolute d-flex justify-content-center align-items-center">
                    <span class="ni ni-arrow-left"></span>
                </div>
                <div class="swiper-button-next-unique position-absolute d-flex justify-content-center align-items-center">
                    <span class="ni ni-arrow-right"></span>
                </div>
            </div>
        </div>

        <?php endif; ?>
    </div>
</section>
<!-- seo services /-end -->