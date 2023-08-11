<!-- meet out team -->
<section id="meetoutteam" class="section-padding">
    <div class="container">
        <div class="section-content text-center pb-50">
            <div class="sub-heading">
                <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"MEET OUR TEAM"); ?>
                </h4>
                <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"Leadership"); ?>
                    <span class="text-clr-primary">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Team Member"); ?>
                    </span>

                </h1>
                <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"We're a growing team of link builders — full of personality minus the ego. We're the wearer of many"); ?> <br>  <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"hats dedicated to helping companies like yours grow"); ?>
                </p>
            </div>
        </div>


        <?php if(!empty($settings['dynamic_service'])) : ?>
        <div class="row">
        <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
            $count++;
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="team-member mb-4 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="140ms">
                    <div class="card border-0">
                        <div class="team-member-img">
                        <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                        </div>
                        <div class="card-body">
                            <div class="team-member-info text-center">
                                <h5 class="card-title">
                                <?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"Darlene Robertson"); ?>
                                </h5>
                                <p class="card-text">
                                <?php echo cb_core_kses_basic(!empty($slide['service_text']) ?$slide['service_text']:"Founder And CEO"); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>


        </div>

        <?php endif; ?>



        </div>
    </div>
</section>
<!-- meet out team /-end -->