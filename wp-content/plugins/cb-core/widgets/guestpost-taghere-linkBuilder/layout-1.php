 <!-- Golden Elements -->
 <section id="benefits" class="section-padding golden-elements-section">
        <div class="container">

            <div class="section-content text-center">
                <div class="sub-heading">
                    <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Tag Here"); ?>
                    </h4>
                    <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"The 3"); ?>
                        <span class="text-clr-primary">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Golden Elements"); ?>
                        </span>
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"of A Great"); ?>
                        <br class="d-none d-lg-block">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_4']) ?$settings['banner_title_part_4']:"of A Great Guest Post Services"); ?>
                    </h1>
                    <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"est, qui dolorem ipsum quia dolor sit amet."); ?>
                    </p>
                </div>
            </div>

            <?php if(!empty($settings['dynamic_service'])) : ?>
            <div class="row golden-elements-card-wrapper">

            <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
            $count++;

            ?>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 pb-2 pb-lg-0">
                    <div class="golden-elements-card bg-white h-100 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                        <div class="card border-0">
                            <div class="golden-elements-card-icon mb-4">
                            <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                            </div>
                            <div class="benefites-card-content mb-2">
                                <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-4">
                                <?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"Auto-Pilot Outreach"); ?>
                                </h5>
                                <p class="card-text fw-normal fs-6 text-clr-dark2">
                                <?php echo cb_core_kses_basic(!empty($slide['service_text']) ?$slide['service_text']:"You focus on your business while we focus on building the relationships for you."); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- Golden Elements /-end -->