 <!-- link builder pros -->
 <section id="about" class="section-padding" style="background-image: url(<?php echo esc_url($settings['banner_background_image']['url']) ? esc_url($settings['banner_background_image']['url']): ''; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
     <div class="container">
         <div class="row flex-column-reverse flex-md-row align-items-center">

             <div class="col-lg-6">
                 <div class="section-img mt-4 mt-lg-0 pt-2 pt-md-0 wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms">
                 <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'banner_left_image' ); ?>
                 </div>
             </div>

             <div class="col-lg-6">
                 <div class="section-content">
                     <div class="sub-heading">
                         <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                         <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1'])?$settings['banner_subtitle_1']:"Tag Here"); ?>
                         </h4>


                         <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms" style="visibility: visible; animation-duration: 0.5s; animation-delay: 150ms; animation-name: fadeInDown;">
                         <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1'])?$settings['banner_title_part_1']:"Why do you need"); ?>
                                <span class="text-clr-primary">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2'])?$settings['banner_title_part_2']:"Link Building?"); ?>
                                </span>
                            </h1>

                        <p class="fw-bold fs-18 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="200ms">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_text_1'])?$settings['banner_text_1']:"Ever launched a great website but no one’s visiting? That’s frustrating. This is where link building services step in."); ?>
                        </p>

                         <p class="fw-normal fs-6 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="200ms">
                         <?php echo cb_core_kses_basic(!empty($settings['banner_text_2'])?$settings['banner_text_2']:"iche edits are a link building technique to place a backlink from an existing article on a website. Given the existing authority and link juice from its internal links, niche edits links has a high chance of boosting its destination page from its current rankings."); ?>
                         </p>

                         <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="200ms">
                         <?php echo cb_core_kses_basic(!empty($settings['banner_text_3'])?$settings['banner_text_3']:"Editorially granted by publishers, niche edits are safe to acquire. Thus, eliminating the"); ?>
                         </p>

                         <div class="d-inline-block">
                             <a href="<?php echo cb_core_kses_basic(!empty($settings['btn_link_1'])?$settings['btn_link_1']:"#"); ?>" class="d-flex align-items-center gap-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                                 <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['btn_text_1'])?$settings['btn_text_1']:"Get in Touch"); ?>
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
 <!-- link bulder pros /-end -->