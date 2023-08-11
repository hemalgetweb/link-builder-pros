<!-- counter -->
<section id="counter" class="section-padding" style="background-image: url(<?php echo esc_url($settings['banner_background_image']['url']) ? esc_url($settings['banner_background_image']['url']): ''; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
         <?php if(!empty($settings['dynamic_service'])) : ?>
        <div class="row">

        <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
            $count++;
            if($count>4){
                continue;
            }

            ?>

            <div class="col-lg-3 col-sm-6">
                <div class="counter-item text-center p-30 mb-3 mb-lg-0">
                    <div class="card border-0 bg-transparent p-0">
                        <div class="counter-img mb-3">
                        <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                        </div>
                        <div class="card-body p-0">
                            <h5 class="card-title fs-36 fw-bold text-clr-secondary mb-3">
                            <?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"260+"); ?>
                            </h5>
                            <p class="card-text fs-18 text-clr-dark2 mb-3">
                            <?php echo cb_core_kses_basic(!empty($slide['service_text']) ?$slide['service_text']:"Happy Clients"); ?>
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
<!-- counter /-end -->