<!-- Service Packages list -->
<section class="service-packages-list section-padding">
        <div class="container">
            <div class="section-content text-center pb-50">
                <div class="sub-heading">
                    <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Service Packages"); ?>
                    </h4>
                    <h1 class="fw-bold fs-36 text-clr-dark1 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"Why Chose White Label Link Building by"); ?> <br class="d-none d-lg-block">
                        <span class="text-clr-primary">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"LinkBuilderPros?"); ?>
                        </span>
                    </h1>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="fw-medium fs-18 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"Extensive database of the stylistic requirements of every publisher we've ever pitched, so our first pitch goes right!"); ?>
                    </p>
                    <p class="fw-medium fs-18 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"Rapid editing and revision process so we never miss a potential placement opportunity"); ?>
                    </p>
                    <p class="fw-medium fs-18 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_text_3']) ?$settings['banner_text_3']:"Our Make It Right Guarantee. If there's ever an issue, we'll run it down and make it right."); ?>
                    </p>
                </div>

                <div class="col-md-6">
                <?php if(!empty($settings['dynamic_service'])) : ?>
                    <ul class="p-0 mt-3 mt-md-0 common-list-style">
                    <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
                        $count++;
                        ?>
                        <li class="fw-medium fs-18 text-clr-dark2 d-flex align-items-center gap-2">
                            <span class="mb-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#FF7300" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="#FF7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span class="ms-1"><?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"Consequuntur magni dolores eos qui ratione voluptatem"); ?></span>
                        </li>
                        <?php endforeach; ?>

                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Packages list /End -->