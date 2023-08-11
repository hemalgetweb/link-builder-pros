 <!-- services users -->
 <section class="services-users section-padding">
     <div class="container">

         <div class="section-content text-center pb-50">
             <div class="sub-heading">
                 <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                     services users
                 </h4>
                 <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                     Why Our Guest
                     <span class="text-clr-primary">
                         Posting Service
                     </span>
                     Rocks
                 </h1>
                 <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                     Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam <br class="d-none d-lg-block"> est, qui dolorem ipsum quia dolor sit amet.
                 </p>
             </div>
         </div>
         <?php if (!empty($settings['dynamic_service_parent'])) : ?>

             <?php $count = 0;
                foreach ($settings['dynamic_service_parent'] as $slide) :

                    if ($count % 2 != 0) {
                ?>
                     <div class="row align-items-center">
                         <div class="col-md-6">
                             <div class="section-content">
                                 <div class="sub-heading">

                                     <h3 class="fw-bold fs-30 text-clr-dark1 mb-3">
                                         <?php echo cb_core_kses_basic(!empty($slide['service_title']) ? $slide['service_title'] : "Real Websites, Real Traffic, Real Result"); ?>
                                     </h3>
                                     <p class="card-text fw-normal fs-6 text-clr-dark2 pb-3 mb-1">
                                         <?php echo cb_core_kses_basic(!empty($slide['service_text']) ? $slide['service_text'] : "That's why we only reach out to blogs that we can pair on a domain, category, and page-level during the placement process. Relevancy is just one of the huge boxes we tick that skyrockets"); ?>
                                     </p>
                                     <ul class="m-0 p-0 common-list-style">
                                     <?php
                                        foreach ($slide['nested_service_chield'] as $feature) :
                                        ?>
                                         <li class="fw-normal fs-6 text-clr-dark2 d-flex align-items-center">
                                             <span class="ni ni-check-thick check-icon me-3"></span>
                                             <?php echo cb_core_kses_basic(!empty($feature['feature_title']) ? $feature['feature_title'] : "Get relevancy analysis from domain to link level."); ?>
                                         </li>
                                        <?php endforeach; ?>
                                     </ul>

                                     <div class="d-inline-block mt-4 pt-2 d-flex flex-wrap services-users-dubble-btn">
                                         <a href="<?php echo cb_core_kses_basic(!empty($slide['button_1_link']) ? $slide['button_1_link'] : ""); ?>" class="d-flex align-items-center gap-2 gap-lg-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                                             <span>
                                                 View Pricing
                                             </span>
                                             <span class="ni ni-forward-ios"></span>
                                         </a>

                                         <a href="<?php echo cb_core_kses_basic(!empty($slide['button_2_link']) ? $slide['button_2_link'] : ""); ?>" class="d-flex align-items-center gap-2 gap-lg-3 minimal-blue-btn text-decoration-none fs-6 fw-bold bg-white text-clr-secondary wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                                             <span>
                                                 Case Studies
                                             </span>
                                             <span class="ni ni-forward-ios"></span>
                                         </a>
                                     </div>

                                 </div>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="services-users-section-img mt-4 mt-lg-0 pt-2 pt-md-0 wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms">
                                 <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html($slide, 'thumbnail', 'service_icon'); ?>
                             </div>
                         </div>
                     </div>
                 <?php } else { ?>
                     <div class="row flex-column-reverse flex-md-row align-items-center">
                         <div class="col-md-6">
                             <div class="services-users-section-img mt-4 mt-md-0 pt-2 pt-md-0 wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms">
                                 <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html($slide, 'thumbnail', 'service_icon'); ?>
                             </div>
                         </div>

                         <div class="col-md-6">
                             <div class="section-content">
                                 <div class="sub-heading">

                                     <h3 class="fw-bold fs-30 text-clr-dark1 mb-3">
                                         <?php echo cb_core_kses_basic(!empty($slide['service_title']) ? $slide['service_title'] : "Niche Relevant Placements"); ?>
                                     </h3>
                                     <p class="card-text fw-normal fs-6 text-clr-dark2 pb-3 mb-1">
                                         <?php echo cb_core_kses_basic(!empty($slide['service_text']) ? $slide['service_text'] : "That's why we only reach out to blogs that we can pair on a domain, category, and page-level during the placement process. Relevancy is just one of the huge boxes we tick that skyrockets"); ?>
                                     </p>
                                     <ul class="m-0 p-0 common-list-style">
                                     <?php
                                        foreach ($slide['nested_service_chield'] as $feature) :
                                        ?>
                                         <li class="fw-normal fs-6 text-clr-dark2 d-flex align-items-center">
                                             <span class="ni ni-check-thick check-icon me-3"></span>
                                             <?php echo cb_core_kses_basic(!empty($feature['feature_title']) ? $feature['feature_title'] : "Get relevancy analysis from domain to link level."); ?>
                                         </li>
                                        <?php endforeach; ?>
                                     </ul>

                                     <div class="d-inline-block mt-4 pt-2 d-flex flex-wrap services-users-dubble-btn">
                                         <a href="<?php echo cb_core_kses_basic(!empty($slide['button_1_link']) ? $slide['button_1_link'] : ""); ?>" class="d-flex align-items-center gap-2 gap-lg-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                                             <span>
                                                 View Pricing
                                             </span>
                                             <span class="ni ni-forward-ios"></span>
                                         </a>

                                         <a href="<?php echo cb_core_kses_basic(!empty($slide['button_2_link']) ? $slide['button_2_link'] : ""); ?>" class="d-flex align-items-center gap-2 gap-lg-3 minimal-blue-btn text-decoration-none fs-6 fw-bold bg-white text-clr-secondary wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                                             <span>
                                                 Case Studies
                                             </span>
                                             <span class="ni ni-forward-ios"></span>
                                         </a>
                                     </div>

                                 </div>
                             </div>
                         </div>
                     </div>

             <?php }
                    $count++;
                endforeach; ?>
         <?php endif; ?>
     </div>
 </section>
 <!-- services users -/End -->