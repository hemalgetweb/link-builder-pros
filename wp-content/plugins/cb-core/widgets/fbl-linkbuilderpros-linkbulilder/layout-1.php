<?php
if (!empty($settings['btn_link_1']['url'])) {
    $this->add_link_attributes('btn_link_1', $settings['btn_link_1']);
}

$this->add_render_attribute( 'banner_right_image', 'src', $settings['banner_right_image']['url'] );
$this->add_render_attribute( 'banner_right_image', 'alt', \Elementor\Control_Media::get_image_alt( $settings['banner_right_image'] ) );
$this->add_render_attribute( 'banner_right_image', 'title', \Elementor\Control_Media::get_image_title( $settings['banner_right_image'] ) );
$this->add_render_attribute( 'banner_right_image', 'class', 'img-fluid' );

?>

    <section id="about" class="section-padding" style="background-image: url(<?php echo esc_url($settings['banner_background_image']['url']) ? esc_url($settings['banner_background_image']['url']): ''; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-content">
                        <div class="sub-heading">
                            <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Link Builder Pros"); ?>
                            </h4>
                            <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1'])?$settings['banner_title_part_1']:"Do You Think Foundation Backlinks for"); ?>
                                <span class="text-clr-primary">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2'])?$settings['banner_title_part_2']:"SEO Really"); ?>
                                </span>
                                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3'])?$settings['banner_title_part_3']:"Matter?"); ?>
                            </h1>

                            <p class="fw-normal fs-6 text-clr-dark2 mb-3 mb-md-5 wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="200ms">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_text'])?$settings['banner_text']:"To begin with, fundamental link building is a crucial component of SEO for a new site’s debut. Your pages will not rank highly in Google SERPs unless they have a varied mix of popular and authoritative pages"); ?>
                            </p>

                            <?php if(!empty($settings['dynamic_service'])) : ?>
                            <ul class="m-0 p-0 common-list-style wow fadeInDown" data-wow-duration="0.60s" data-wow-delay="260ms">
                            <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
                            $count++;
                            ?>
                                <li class="fw-normal fs-6 text-clr-dark2 d-flex align-items-center gap-2">
                                    <span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.15" d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" fill="#FF7300"/>
                                            <path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="#FF7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <span class="ms-1"><?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"We create Effective content."); ?></span>
                                </li>
                            <?php endforeach; ?>

                            </ul>
                            <?php endif; ?>

                            <div class="d-inline-block mt-3 pt-3">
                                <a href="<?php echo cb_core_kses_basic(!empty($settings['btn_link_1']) ?$settings['btn_link_1']:""); ?>" class="d-flex align-items-center gap-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="320ms">
                                    <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['btn_text_1'])?$settings['btn_text_1']:"Get Started"); ?>
                                    </span>
                                    <span class="ni ni-forward-ios"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="section-img mt-5 mt-lg-0 wow fadeInDown" data-wow-duration="1.15s" data-wow-delay="250ms">
                    <?php echo \Elementor\Group_Control_Image_Size::get_attachment_image_html( $settings, 'thumbnail', 'banner_right_image' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>