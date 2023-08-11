<!-- link building strategy -->
<section id="linkbuildingstrategy" class="section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-5 mb-lg-0">
                <div class="section-content">
                    <div class="sub-heading">
                        <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1'])?$settings['banner_subtitle_1']:"Link Building Strategy"); ?>
                        </h4>
                        <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1'])?$settings['banner_title_part_1']:"Cutting Edge Link Building Strategy
                            Our Link Building"); ?>
                            <span class="text-clr-primary">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2'])?$settings['banner_title_part_2']:"Packages"); ?>
                            </span>
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3'])?$settings['banner_title_part_3']:"& Pricing"); ?>
                        </h1>
                        <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_text_1'])?$settings['banner_text_1']:"Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam"); ?> <br> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2'])?$settings['banner_text_2']:"est, qui dolorem ipsum quia dolor sit amet."); ?>
                        </p>
                    </div>
                </div>

                <?php if(!empty($settings['dynamic_service'])) : ?>
                <div class="accordion-wrapper">
                    <ul class="accordion-list list-unstyled">

                        <?php $count = 0; foreach($settings['dynamic_service'] as $slide) : ?>
                        <li class="accordion-list-item px-3 py-3 mb-2 <?php if($count == 0) { echo 'open'; } ?> wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                            <h5 class="accordion-title d-flex justify-content-between fw-medium fs-18 text-clr-dark1">
                            <?php echo cb_core_kses_basic(!empty($slide['service_title'])?$slide['service_title']:"We do things that no one else does"); ?>
                                <span class="ni ni-upword-ios"></span>
                            </h5>
                            <div class="accordion-desc" <?php if($count != 0) { echo 'style="display:none"'; } ?> >
                                <p class="pe-5 pt-3 fw-normal fs-6 text-clr-dark2">
                                <?php echo cb_core_kses_basic(!empty($slide['service_text'])?$slide['service_text']:"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu fugiat."); ?>
                                </p>
                            </div>
                        </li>
                        <?php $count++; endforeach; ?>

                    </ul>
                </div>
                <?php endif; ?>

            </div>

            <div class="col-md-6">
                <div class="section-img wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms">
                <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'banner_right_image' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- link building strategy /-end -->