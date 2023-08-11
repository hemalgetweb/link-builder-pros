 <!-- testimonials -->
 <section id="testimonials" class="section-padding">
     <div class="container">
         <div class="section-content text-center pb-50">
             <div class="sub-heading">
                 <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                 <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Testimonials"); ?>
                 </h4>
                 <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                 <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"What Our Link Building"); ?>
                     <span class="text-clr-primary">
                     <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Client"); ?>
                     </span>
                     <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"Says"); ?>
                 </h1>
                 <p class="fw-normal fs-6 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                 <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"est, qui dolorem ipsum quia dolor sit amet."); ?>
                 </p>
             </div>
         </div>


        <?php if(!empty($settings['dynamic_service'])) : ?>
        <div class="row">
             <div class="swiper testi-slider">
                 <div class="swiper-wrapper">
                    <?php $count = 0; foreach($settings['dynamic_service'] as $slide) : ?>
                    <div class="swiper-slide">
                         <div class="testislider-wrapper text-center position-relative">
                             <div class="card border-0">
                                 <div class="testi-card-img">
                                 <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $slide, 'thumbnail', 'service_icon' ); ?>
                                 </div>
                                 <div class="card-body">
                                     <div class="testi-card-content">
                                         <p class="card-text fw-normal fs-18 text-clr-dark2">
                                         <?php echo cb_core_kses_basic(!empty($slide['service_text']) ?$slide['service_text']:"We have been working with them for 2 years now, link building for over 25 different clients. The quality of links is always amazing, communication is great."); ?>
                                         </p>
                                         <div class="testi-card-user py-4">
                                             <h5 class="fw-bold fs-5 text-clr-dark1">
                                             <?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"Ralph Edwards"); ?>
                                             </h5>
                                             <p class="fw-normal fs-14 text-clr-dark2">
                                             <?php echo cb_core_kses_basic(!empty($slide['service_sub_title']) ?$slide['service_sub_title']:"Co-Founder - Grow & Convert"); ?>
                                             </p>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="testi-card-quote position-absolute">
                                     <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/testimonial-slider-quote.png'); ?>" alt="quote">
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
 <!-- testimonials /-end -->