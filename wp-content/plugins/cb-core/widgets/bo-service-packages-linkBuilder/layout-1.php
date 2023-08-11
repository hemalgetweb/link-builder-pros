<!-- Service Packages list -->
<section class="service-packages-list section-padding">
    <div class="container">
        <div class="section-content text-center">
            <div class="sub-heading">
                <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_subtitle_1']) ?$settings['banner_subtitle_1']:"Service Packages"); ?>
                </h4>
                <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"Outreach Link Building"); ?>
                    <span class="text-clr-primary">
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"Service"); ?>
                    </span>
                    <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"Packages"); ?>
                </h1>
                <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_text_1']) ?$settings['banner_text_1']:"We don't just offer one Blogger Outreach package. We cater to all clients of varying budgets to"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_2']) ?$settings['banner_text_2']:"ensure that everyone has the chance to build a positive backlink profile."); ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <p class="fw-medium fs-18 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                <?php echo cb_core_kses_basic(!empty($settings['service_text']) ?$settings['service_text']:"At our Blogger Outreach agency We can tailor our packages to you depending on your goals and what results you want to see."); ?>
                </p>
                <?php if(!empty($settings['dynamic_service'])) : ?>
                <ul class="m-0 p-0 common-list-style">
                <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
                        $count++;
                        if($count > 4){
                            continue;
                        }
                        ?>
                    <li class="fw-medium fs-18 text-clr-dark2 d-flex align-items-center gap-2">
                        <span class="mb-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="#FF7300" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.75 11.9999L10.58 14.8299L16.25 9.16992" stroke="#FF7300" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="ms-1"><?php echo cb_core_kses_basic(!empty($slide['service_title']) ?$slide['service_title']:"Non-approval Blogger Outreach"); ?></span>
                    </li>
                    <?php endforeach; ?>

                </ul>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
            <?php if(!empty($settings['dynamic_service'])) : ?>
                <ul class="mt-2 mt-md-0 p-0 common-list-style">
                <?php $count = 0; foreach($settings['dynamic_service'] as $slide) :
                        $count++;
                        if($count > 4){
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
                    <?php } endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Service Packages list /End -->