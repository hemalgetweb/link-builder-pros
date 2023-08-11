<!-- faq -->
<section id="faq" class="section-padding">
    <div class="container">
        <div class="section-content text-center">
            <div class="sub-heading">
                <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                    FAQ
                </h4>
                <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                    Frequently Asked
                    <span class="text-clr-primary">
                        Link Building
                    </span>
                    Questions
                </h1>
                <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam <br class="d-none d-lg-block"> est, qui dolorem ipsum quia dolor sit amet.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="accordion-wrapper">
                    <ul class="accordion-list list-unstyled">
                    <?php $count = 0; foreach($settings['dynamic_service'] as $slide) : ?>

                        <?php if($count <= 3) { ?>
                        <li class="accordion-list-item px-3 py-3 mb-2 <?php if($count == 0) { echo 'open'; } ?> wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                            <h5 class="accordion-title d-flex justify-content-between fw-medium fs-18 text-clr-dark1">
                            <?php echo cb_core_kses_basic(!empty($slide['service_title'])?$slide['service_title']:"We do things that no one else does"); ?>
                                <span class="ni ni-upword-ios"></span>
                            </h5>
                            <div class="accordion-desc" <?php if($count != 0) { echo 'style="display:none"'; } ?> >
                                <p class="pe-5 pt-3 fw-normal fs-6 text-clr-dark2">
                                <?php echo cb_core_kses_basic(!empty($slide['service_text'])?$slide['service_text']:"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu fugiat."); ?>
                                </p>
                            </div>
                        </li>
                        <?php } $count++; endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="accordion-wrapper">
                    <ul class="accordion-list list-unstyled">

                    <?php $count = 0; foreach($settings['dynamic_service'] as $slide) : ?>

                    <?php if($count >= 4){  ?>
                    <li class="accordion-list-item px-3 py-3 mb-2 <?php if($count == 0) { echo 'open'; } ?> wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                        <h5 class="accordion-title d-flex justify-content-between fw-medium fs-18 text-clr-dark1">
                        <?php echo cb_core_kses_basic(!empty($slide['service_title'])?$slide['service_title']:"We do things that no one else does"); ?>
                            <span class="ni ni-upword-ios"></span>
                        </h5>
                        <div class="accordion-desc" <?php if($count != 0) { echo 'style="display:none"'; } ?> >
                            <p class="pe-5 pt-3 fw-normal fs-6 text-clr-dark2">
                            <?php echo cb_core_kses_basic(!empty($slide['service_text'])?$slide['service_text']:"Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehe nderit in voluptate velit esse cillum dolore eu fugiat."); ?>
                            </p>
                        </div>
                    </li>
                    <?php } $count++; endforeach; ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq /-end -->