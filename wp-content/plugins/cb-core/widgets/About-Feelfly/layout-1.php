
<!-- about -->
<section id="about" class="section-padding">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row align-items-center">
                <div class="col-md-6">
                    <div class="section-img mt-4 mt-md-0 pt-2 pt-md-0 wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms">
                        <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'banner_left_image' ); ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="section-content">
                        <div class="sub-heading">
                            <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"About LinkBuilderPros"); ?>
                            </h4>
                            <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"The link building"); ?>
                                <span class="text-clr-primary">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"agency"); ?>
                                </span>
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"that <br> drives insane rankings"); ?>
                                </span>
                            </h1>

                            <p class="fw-medium fs-18 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Consectetur adipiscing elit, sed do eiusmod tempor quis laboris incididunt ut labore et dolore magna aliqua."); ?>
                            </p>

                            <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="200ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu fugiat."); ?>
                            </p>

                            <div class="d-inline-block">
                                <a href="" class="d-flex align-items-center gap-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                                    <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['btn_text_1']) ?$settings['btn_text_1']:"Learn More"); ?>
                                    </span>
                                    <span class="ni ni-forward-ios"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about /-end -->