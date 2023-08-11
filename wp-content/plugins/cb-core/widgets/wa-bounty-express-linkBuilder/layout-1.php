<!-- benefites -->
<section id="benefits" class="section-padding" style="background-image: url(<?php echo esc_url($settings['banner_background_image']['url']) ? esc_url($settings['banner_background_image']['url']): ''; ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
        <div class="container">
            <div class="section-content text-center pb-50">
                <div class="sub-heading">
                    <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Bounty Express"); ?>
                    </h4>

                    <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms" style="visibility: visible; animation-duration: 0.5s; animation-delay: 150ms; animation-name: fadeInDown;">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"3 Steps of"); ?>
                        <span class="text-clr-primary">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Website Audit Service"); ?>
                        </span>
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"Process"); ?>
                    </h1>
                    <p class="fw-normal fs-6 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Our Bounty Express software is a white label link building service optimized for speed, scalability,"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"and your profit margins."); ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="bounty-express-step mb-lg-0 h-100 wow fadeInDown d-flex flex-lg-column gap-lg-0 gap-4" data-wow-duration="0.55s" data-wow-delay="220ms">
                        <div class="bounty-express-step-icon mb-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/bounty-express-step-1.svg'); ?>" alt="benefites-icon">
                        </div>
                        <div class="bounty-express-step-content mb-2">
                            <p class="fw-normal fs-18 text-clr-dark2">
                            <?php echo cb_core_kses_basic(!empty($settings['service_1']) ?$settings['service_1']:"Create a bounty by choosing the price you want to pay per link, quantity of links, and link metrics (Domain Authority, Domain Rating, Traffic, etc)."); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="bounty-express-step mb-lg-0 h-100 wow fadeInDown d-flex flex-lg-column gap-lg-0 gap-4" data-wow-duration="0.55s" data-wow-delay="220ms">

                        <div class="bounty-express-step-icon mb-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/bounty-express-step-2.svg'); ?>" alt="benefites-icon">
                        </div>
                        <div class="bounty-express-step-content mb-2">
                            <p class="fw-normal fs-18 text-clr-dark2">
                            <?php echo cb_core_kses_basic(!empty($settings['service_2']) ?$settings['service_2']:"Create a bounty by choosing the price you want to pay per link, quantity of links, and link metrics (Domain Authority, Domain Rating, Traffic, etc)."); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="bounty-express-step mb-lg-0 h-100 wow fadeInDown d-flex flex-lg-column gap-lg-0 gap-4" data-wow-duration="0.55s" data-wow-delay="220ms">

                        <div class="bounty-express-step-icon mb-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/bounty-express-step-3.svg'); ?>" alt="benefites-icon">
                        </div>
                        <div class="bounty-express-step-content mb-2">
                            <p class="fw-normal fs-18 text-clr-dark2">
                            <?php echo cb_core_kses_basic(!empty($settings['service_3']) ?$settings['service_3']:"Create a bounty by choosing the price you want to pay per link, quantity of links, and link metrics (Domain Authority, Domain Rating, Traffic, etc)."); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefites /-end -->