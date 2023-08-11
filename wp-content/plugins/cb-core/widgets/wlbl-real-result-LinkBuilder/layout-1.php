<!-- link building strategy -->
<section id="linkbuildingstrategy" class="section-padding">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row align-items-center">
                <div class="col-lg-6">
                    <div class="section-img wow fadeInDown mt-4 mt-md-0 pt-2 pt-md-0" data-wow-duration="1.15s" data-wow-delay="250ms">
                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'banner_right_image' ); ?>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="section-content">
                        <div class="sub-heading">
                            <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1'])?$settings['banner_subtitle_1']:"BIG PICTURE"); ?>
                            </h4>
                            <h1 class="fw-bold fs-36 text-clr-dark1 pb-2 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1'])?$settings['banner_title_part_1']:"Typically included in a"); ?>
                                <span class="text-clr-primary">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2'])?$settings['banner_title_part_2']:"white label link building"); ?>
                            </span>
                                </span>
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3'])?$settings['banner_title_part_3']:""); ?>
                            </h1>

                            <?php if(!empty($settings['banner_text_1'])){ ?>
                            <p class="fw-normal fs-6 text-clr-dark2 mb-2 wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="200ms" style="visibility: visible; animation-duration: 0.6s; animation-delay: 200ms; animation-name: fadeInDown;">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_text_1'])?$settings['banner_text_1']:"We work with influencers to secure relevant, sustainable links that improve your search engine rankings and drive targeted traffic. We understand that every business and website is unique, our PR team manually handpicks each and every placement."); ?>
                            </p>
                            <?php  } ?>
                            <?php if(!empty($settings['banner_text_2'])){ ?>
                            <p class="fw-normal fs-6 text-clr-dark2 mb-3 mb-md-5 wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="200ms" style="visibility: visible; animation-duration: 0.6s; animation-delay: 200ms; animation-name: fadeInDown;">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_text_2'])?$settings['banner_text_2']:"We work with influencers to secure relevant, sustainable links that improve your search engine rankings and drive targeted traffic. We understand that every business and website is unique, our PR team manually handpicks each and every placement."); ?>
                            </p>
                            <?php  } ?>
                        </div>
                    </div>

                    <?php if(!empty($settings['dynamic_service'])) : ?>
                    <div class="accordion-wrapper">
                            <ul class="m-0 p-0 common-list-style">
                            <?php $count = 0; foreach($settings['dynamic_service'] as $slide) : ?>
                                <li class="fw-normal fs-6 text-clr-dark2 d-flex align-items-center">
                                    <span class="ni ni-check-thick check-icon me-3"></span>
                                    <?php echo cb_core_kses_basic(!empty($slide['service_title'])?$slide['service_title']:"We create Effective content."); ?>
                            </li>
                            <?php $count++; endforeach; ?>
                            </ul>
                    </div>
                    <?php endif; ?>

                    <div class="d-inline-block mt-3 pt-3">
                        <a href="<?php echo cb_core_kses_basic(!empty($settings['button_link_1'])?$settings['button_link_1']:""); ?>" class="d-flex align-items-center gap-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                            <span>
                            <?php echo cb_core_kses_basic(!empty($settings['button_text'])?$settings['button_text']:"More Services"); ?>
                            </span>
                            <span class="ni ni-downward-ios"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- link building strategy /-end -->