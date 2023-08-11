<!-- hiring expert -->
<section id="benefits" class="section-padding">
    <div class="container">

        <div class="section-content text-center pb-50">
            <div class="sub-heading">
                <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Hiring expert"); ?>
                </h4>
                <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"Benefits of"); ?>
                    <span class="text-clr-primary">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Hiring"); ?>
                    </span>
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"LinkBuilderPro"); ?>
                </h1>
                <p class="fw-normal fs-6 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"est, qui dolorem ipsum quia dolor sit amet."); ?>
                </p>
            </div>
        </div>


        <?php if(!empty($settings['dynamic_service'])) : ?>
        <div class="row">
            <?php $count = 0; foreach($settings['dynamic_service'] as $slide) : ?>
            <div class="col-sm-6 mb-5">
                <div class="benefites-card h-100 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                    <div class="card border-0">
                        <div class="benefites-card-icon hiring-icon mb-4">
                        <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                        </div>
                        <div class="benefites-card-content mb-2">
                            <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-3">
                            <?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"Specialized Expertise"); ?>
                            </h5>
                            <p class="card-text fw-normal fs-6 text-clr-dark2">
                            <?php echo cb_core_kses_basic(!empty($slide['service_text']) ?$slide['service_text']:"Link building agencies are often staffed with experts who have extensive experience and knowledge in the field. They stay up-to-date with the latest best practices, techniques, and trends, and have a deep understanding of what works"); ?>
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
<!-- hiring expert /-end -->