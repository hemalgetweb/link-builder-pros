<!-- benefites -->
<section id="benefits" class="section-padding" style="background-image: url(<?php echo esc_url($settings['banner_background_image']['url']) ? esc_url($settings['banner_background_image']['url']): ''; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="section-content text-center pb-50">
                <div class="sub-heading">
                    <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Bounty Express"); ?>
                    </h4>
                    <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"White Label Link Building Powered by"); ?> <br class="d-none d-lg-block">
                        <span class="text-clr-primary">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Bounty Express"); ?>
                        </span>
                    </h1>
                    <p class="fw-normal fs-6 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Our Bounty Express software is a white label link building service optimized for speed, scalability,"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"and your profit margins."); ?>
                    </p>
                </div>
            </div>
            <?php if(!empty($settings['dynamic_service'])) : ?>
            <div class="row row-cols-1 row-cols-lg-5">
                <?php $count = 0; foreach($settings['dynamic_service'] as $slide) : ?>
                <div class="col mb-4 mb-lg-0">
                    <div class="bounty-express-step mb-lg-0 h-100 wow fadeInDown d-flex flex-lg-column gap-lg-0 gap-4" data-wow-duration="0.55s" data-wow-delay="220ms">
                        <div class="bounty-express-step-icon mb-4">
                        <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                        </div>
                        <div class="bounty-express-step-content mb-2">
                            <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-3">
                            <?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"100% Manual"); ?>
                            </h5>
                            <p class="fw-normal fs-18 text-clr-dark2">
                            <?php echo cb_core_kses_basic(!empty($slide['service_text']) ?$slide['service_text']:"We have been working with them for 2 years now, link building for over 25 different clients. The quality of links is always amazing, communication is great."); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- benefites /-end -->