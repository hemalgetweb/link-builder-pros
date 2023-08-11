<!-- pricing -->
<section id="pricing" class="section-padding" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/img/pricing-bg.png'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="section-content text-center pb-50">
            <div class="sub-heading">
                <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1'])?$settings['banner_subtitle_1']:"Pricing"); ?>
                </h4>
                <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1'])?$settings['banner_title_part_1']:"Our Link Building"); ?>
                    <span class="text-clr-primary">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2'])?$settings['banner_title_part_2']:"Packages"); ?>
                    </span>
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3'])?$settings['banner_title_part_3']:"& Pricing"); ?>
                </h1>
                <p class="fw-normal fs-6 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_text'])?$settings['banner_text']:"Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
est, qui dolorem ipsum quia dolor sit amet."); ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 pb-2 pb-lg-0">
                <div class="pricing-card h-100 p-4 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                    <div class="card border-0">
                        <div class="pricing-card-icon hiring-icon mb-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/pricing-icon.png'); ?>" alt="hiring-icon">
                        </div>
                        <div class="pricing-card-content mb-2">
                            <div class="pricing-head mb-4">
                                <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-3">
                                     <?php echo cb_core_kses_basic(!empty($settings['pkg_title_1'])?$settings['pkg_title_1']:"5K+ Traffic"); ?>
                                </h5>
                                <p class="card-text fw-normal fs-14 text-clr-dark2">
                                <?php echo cb_core_kses_basic(!empty($settings['pkg_desc_1'])?$settings['pkg_desc_1']:"Backlinks from 5K+ Organic Traffic Sites"); ?>
                                </p>
                            </div>

                            <div class="pricing mb-4">
                                <h3 class="fw-bold fs-30 text-clr-primary">
                                    $<?php echo cb_core_kses_basic(!empty($settings['pkg_price_1'])?$settings['pkg_price_1']:"199"); ?>
                                    <span class="fs-14 fw-normal text-clr-dark2">
                                        /Per Placement
                                    </span>
                                </h3>

                                <div class="pricing-border my-3"></div>

                                <a href="<?php echo cb_core_kses_basic(!empty($settings['pkg_link_1'])?$settings['pkg_link_1']:"#"); ?>" class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 common-btn pricing-btn text-decoration-none fs-6 fw-bold text-clr-dark1">
                                    <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['button_text_1'])?$settings['button_text_4']:"Get Started"); ?>
                                    </span>
                                    <span class="ni ni-forward-ios"></span>
                                </a>

                            </div>

                            <?php if(!empty($settings['dynamic_feature_included_1'])) : ?>
                            <div class="features">
                                <p class="fw-normal fs-6 text-clr-dark1 pb-3 mb-3">
                                <?php echo cb_core_kses_basic(!empty($settings['feature_included'])?$settings['feature_included']:"Feature Included:"); ?>
                                </p>
                                <ul class="p-0">
                                    <?php foreach($settings['dynamic_feature_included_1'] as $slide) : ?>
                                    <li class="fw-normal fs-14 text-clr-dark2 d-flex align-items-center gap-3 mb-2">
                                        <?php if($slide['feature_included_icon'] == "no"){ ?>
                                            <span class="ni ni-cross-sm pricing-check bg-clr-status-danger-shade text-clr-status-danger"></span>
                                        <?php } else { ?>
                                            <span class="ni ni-check-thick pricing-check bg-clr-secondary-shade text-clr-secondary"></span>
                                        <?php } ?>
                                        <?php echo cb_core_kses_basic(!empty($slide['feature_included_title'])?$slide['feature_included_title']:""); ?>
                                    </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- package 2 -->
            <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 pb-2 pb-lg-0">
                <div class="pricing-card h-100 p-4 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="260ms">
                    <div class="card border-0">
                        <div class="pricing-card-icon hiring-icon mb-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/pricing-icon2.png'); ?>" alt="hiring-icon">
                        </div>
                        <div class="pricing-card-content mb-2">
                            <div class="pricing-head mb-4">
                                <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-3">
                                <?php echo cb_core_kses_basic(!empty($settings['pkg_title_2'])?$settings['pkg_title_2']:"10K+ Traffic"); ?>
                                </h5>
                                <p class="card-text fw-normal fs-14 text-clr-dark2">
                                <?php echo cb_core_kses_basic(!empty($settings['pkg_desc_2'])?$settings['pkg_desc_2']:"Backlinks from 10K+ Organic Traffic Sites"); ?>
                                </p>
                            </div>

                            <div class="pricing mb-4">
                                <h3 class="fw-bold fs-30 text-clr-primary">
                                    $<?php echo cb_core_kses_basic(!empty($settings['pkg_price_2'])?$settings['pkg_price_2']:"279"); ?>
                                    <span class="fs-14 fw-normal text-clr-dark2">
                                        /Per Placement
                                    </span>
                                </h3>

                                <div class="pricing-border my-3"></div>

                                <a href="<?php echo cb_core_kses_basic(!empty($settings['pkg_link_2'])?$settings['pkg_link_2']:"#"); ?>" class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 common-btn pricing-btn text-decoration-none fs-6 fw-bold text-clr-dark1">
                                    <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['button_text_2'])?$settings['button_text_4']:"Get Started"); ?>
                                    </span>
                                    <span class="ni ni-forward-ios"></span>
                                </a>

                            </div>

                            <?php if(!empty($settings['dynamic_feature_included_2'])) : ?>
                            <div class="features">
                                <p class="fw-normal fs-6 text-clr-dark1 pb-3 mb-3">
                                <?php echo cb_core_kses_basic(!empty($settings['feature_included'])?$settings['feature_included']:"Feature Included:"); ?>
                                </p>
                                <ul class="p-0">
                                    <?php foreach($settings['dynamic_feature_included_2'] as $slide) : ?>
                                    <li class="fw-normal fs-14 text-clr-dark2 d-flex align-items-center gap-3 mb-2">
                                        <?php if($slide['feature_included_icon'] == "no"){ ?>
                                            <span class="ni ni-cross-sm pricing-check bg-clr-status-danger-shade text-clr-status-danger"></span>
                                        <?php } else { ?>
                                            <span class="ni ni-check-thick pricing-check bg-clr-secondary-shade text-clr-secondary"></span>
                                        <?php } ?>
                                        <?php echo cb_core_kses_basic(!empty($slide['feature_included_title'])?$slide['feature_included_title']:""); ?>
                                    </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- package 3 -->
            <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 pb-2 pb-lg-0">
                <div class="pricing-card h-100 p-4 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="300ms">
                    <div class="card border-0">
                        <div class="pricing-card-icon hiring-icon mb-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/pricing-icon3.png'); ?>" alt="hiring-icon">
                        </div>
                        <div class="pricing-card-content mb-2">
                            <div class="pricing-head mb-4">
                                <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-3">
                                <?php echo cb_core_kses_basic(!empty($settings['pkg_title_3'])?$settings['pkg_title_3']:"20K+ Traffic"); ?>
                                </h5>
                                <p class="card-text fw-normal fs-14 text-clr-dark2">
                                <?php echo cb_core_kses_basic(!empty($settings['pkg_desc_3'])?$settings['pkg_desc_3']:"Backlinks from 20K+ Organic Traffic Sites"); ?>
                                </p>
                            </div>

                            <div class="pricing mb-4">
                                <h3 class="fw-bold fs-30 text-clr-primary">
                                    $<?php echo cb_core_kses_basic(!empty($settings['pkg_price_2'])?$settings['pkg_price_3']:"379"); ?>
                                    <span class="fs-14 fw-normal text-clr-dark2">
                                        /Per Placement
                                    </span>
                                </h3>

                                <div class="pricing-border my-3"></div>

                                <a href="<?php echo cb_core_kses_basic(!empty($settings['pkg_link_3'])?$settings['pkg_link_3']:"#"); ?>" class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 common-btn pricing-btn text-decoration-none fs-6 fw-bold text-clr-dark1">
                                    <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['button_text_3'])?$settings['button_text_3']:"Get Started"); ?>
                                    </span>
                                    <span class="ni ni-forward-ios"></span>
                                </a>

                            </div>
                            <?php if(!empty($settings['dynamic_feature_included_3'])) : ?>
                            <div class="features">
                                <p class="fw-normal fs-6 text-clr-dark1 pb-3 mb-3">
                                <?php echo cb_core_kses_basic(!empty($settings['feature_included'])?$settings['feature_included']:"Feature Included:"); ?>
                                </p>
                                <ul class="p-0">
                                    <?php foreach($settings['dynamic_feature_included_3'] as $slide) : ?>
                                    <li class="fw-normal fs-14 text-clr-dark2 d-flex align-items-center gap-3 mb-2">
                                        <?php if($slide['feature_included_icon'] == "no"){ ?>
                                            <span class="ni ni-cross-sm pricing-check bg-clr-status-danger-shade text-clr-status-danger"></span>
                                        <?php } else { ?>
                                            <span class="ni ni-check-thick pricing-check bg-clr-secondary-shade text-clr-secondary"></span>
                                        <?php } ?>
                                        <?php echo cb_core_kses_basic(!empty($slide['feature_included_title'])?$slide['feature_included_title']:""); ?>
                                    </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
            <!-- package 4 -->
            <div class="col-lg-3 col-sm-6 mb-3 mb-lg-0 pb-2 pb-lg-0">
                <div class="pricing-card h-100 p-4 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="340ms">
                    <div class="card border-0">
                        <div class="pricing-card-icon hiring-icon mb-4">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/pricing-icon4.png'); ?>" alt="hiring-icon">
                        </div>
                        <div class="pricing-card-content mb-2">
                            <div class="pricing-head mb-4">
                                <h5 class="card-title fw-bold fs-5 text-clr-dark1 mb-3">
                                <?php echo cb_core_kses_basic(!empty($settings['pkg_title_4'])?$settings['pkg_title_4']:"30K+ Traffic"); ?>
                                </h5>
                                <p class="card-text fw-normal fs-14 text-clr-dark2">
                                <?php echo cb_core_kses_basic(!empty($settings['pkg_desc_4'])?$settings['pkg_desc_4']:"Backlinks from 30K+ Organic Traffic Sites"); ?>
                                </p>
                            </div>

                            <div class="pricing mb-4">
                                <h3 class="fw-bold fs-30 text-clr-primary">
                                    $<?php echo cb_core_kses_basic(!empty($settings['pkg_price_2'])?$settings['pkg_price_4']:"497"); ?>
                                    <span class="fs-14 fw-normal text-clr-dark2">
                                        /Per Placement
                                    </span>
                                </h3>

                                <div class="pricing-border my-3"></div>

                                <a href="<?php echo cb_core_kses_basic(!empty($settings['pkg_link_3'])?$settings['pkg_link_4']:"#"); ?>" class="d-flex align-items-center justify-content-center gap-2 gap-xl-3 common-btn pricing-btn text-decoration-none fs-6 fw-bold text-clr-dark1">
                                    <span>
                                    <?php echo cb_core_kses_basic(!empty($settings['button_text_4'])?$settings['button_text_4']:"Get Started"); ?>
                                    </span>
                                    <span class="ni ni-forward-ios"></span>
                                </a>

                            </div>

                            <?php if(!empty($settings['dynamic_feature_included_4'])) : ?>
                            <div class="features">
                                <p class="fw-normal fs-6 text-clr-dark1 pb-3 mb-3">
                                <?php echo cb_core_kses_basic(!empty($settings['feature_included'])?$settings['feature_included']:"Feature Included:"); ?>
                                </p>
                                <ul class="p-0">
                                    <?php foreach($settings['dynamic_feature_included_4'] as $slide) : ?>
                                    <li class="fw-normal fs-14 text-clr-dark2 d-flex align-items-center gap-3 mb-2">
                                        <?php if($slide['feature_included_icon'] == "no"){ ?>
                                            <span class="ni ni-cross-sm pricing-check bg-clr-status-danger-shade text-clr-status-danger"></span>
                                        <?php } else { ?>
                                            <span class="ni ni-check-thick pricing-check bg-clr-secondary-shade text-clr-secondary"></span>
                                        <?php } ?>
                                        <?php echo cb_core_kses_basic(!empty($slide['feature_included_title'])?$slide['feature_included_title']:""); ?>
                                    </li>
                                    <?php endforeach; ?>

                                </ul>
                            </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- pricing /-end -->