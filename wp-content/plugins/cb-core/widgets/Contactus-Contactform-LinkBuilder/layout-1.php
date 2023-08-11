<!-- hero -->
<section id="contactus" class="section-padding cta" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/img//subpage-banner-bg-shape.svg'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-content">
                    <div class="sub-heading">
                        <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_1']) ?$settings['banner_title_part_1']:"Every"); ?>
                            <span class="text-clr-primary">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_2']) ?$settings['banner_title_part_2']:"successful venture"); ?>
                            </span>
                            <?php echo cb_core_kses_basic(!empty($settings['banner_title_part_3']) ?$settings['banner_title_part_3']:"starts with a consultation!"); ?>
                        </h1>
                        <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                        <?php echo cb_core_kses_basic(!empty($settings['banner_text']) ?$settings['banner_text']:"Take five minutes to fill out our project form so that we can get to know you and understand your project."); ?>
                        </p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-item d-flex align-items-center gap-3 pb-3 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="220ms">
                        <div class="contact-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/contacticon1.svg'); ?>" alt="contact-icon">
                        </div>

                        <a href="#" class="d-block contact-info text-decoration-none">
                            <div class="contact-number mb-2">
                                <h5 class="fs-5 fw-bold text-clr-dark1">
                                <?php echo cb_core_kses_basic(!empty($settings['contact_number']) ?$settings['contact_number']:"+880 24556849"); ?>
                                </h5>
                            </div>
                            <div class="contact-desig">
                                <p class="fs-18 fw-normal text-clr-dark2">
                                    Phone Number
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="contact-item d-flex align-items-center gap-3 pb-3 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="260ms">
                        <div class="contact-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/contacticon2.svg'); ?>" alt="contact-icon">
                        </div>

                        <a href="#" class="d-block contact-info text-decoration-none">
                            <div class="contact-number mb-2">
                                <h5 class="fs-5 fw-bold text-clr-dark1">
                                <?php echo cb_core_kses_basic(!empty($settings['contact_email']) ?$settings['contact_email']:"info@linkbuilderpros.com"); ?>
                                </h5>
                            </div>
                            <div class="contact-desig">
                                <p class="fs-18 fw-normal text-clr-dark2">
                                    Email Address
                                </p>
                            </div>
                        </a>
                    </div>

                    <div class="contact-item d-flex align-items-center gap-3 pb-3 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="300ms">
                        <div class="contact-icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/contacticon3.svg'); ?>" alt="contact-icon">
                        </div>

                        <a href="#" class="d-block contact-info text-decoration-none">
                            <div class="contact-number mb-2">
                                <h5 class="fs-5 fw-bold text-clr-dark1">
                                <?php echo cb_core_kses_basic(!empty($settings['contact_address']) ?$settings['contact_address']:"23/6, Mirpur Road, Shyamoli, <br>
                                    Dhaka-1207."); ?>
                                </h5>
                            </div>
                            <div class="contact-desig">
                                <p class="fs-18 fw-normal text-clr-dark2">
                                    Office Location
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="contactus-form wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="320ms">
                    <form>
                        <div class="sub-heading">
                            <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms" style="visibility: visible; animation-duration: 0.5s; animation-delay: 100ms; animation-name: fadeInDown;">
                                CONTACT US
                            </h4>
                            <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms" style="visibility: visible; animation-duration: 0.5s; animation-delay: 150ms; animation-name: fadeInDown;">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_right_title_part_1']) ?$settings['banner_right_title_part_1']:" Curious? with"); ?>
                                <span class="text-clr-primary">
                                <?php echo cb_core_kses_basic(!empty($settings['banner_right_title_part_2']) ?$settings['banner_right_title_part_2']:" Let's talk"); ?>
                                </span>
                                <?php echo cb_core_kses_basic(!empty($settings['banner_right_title_part_3']) ?$settings['banner_right_title_part_3']:" LinkBuilderPros"); ?>
                            </h1>
                            <p class="fw-normal fs-6 text-clr-dark2 mb-3 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms" style="visibility: visible; animation-duration: 0.55s; animation-delay: 180ms; animation-name: fadeInDown;">
                            <?php echo cb_core_kses_basic(!empty($settings['banner_text_right']) ?$settings['banner_text_right']:" We love talking link building. Let us know about your project and we'll send you a free proposal"); ?>
                            </p>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="email" placeholder="Your Name" class="form-control ps-5 user" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="password" placeholder="Your Email" class="form-control ps-5 email" id="exampleInputPassword1">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <input type="text" placeholder="What is your budget for link building?" class="form-control ps-5 card" id="exampleInputPassword1">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <select class="select-option-class fs-14 fw-medium text-clr-dark4">
                                        <option value="1">Please Select</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" placeholder="Your Email" class="form-control ps-5 website" id="exampleInputPassword1">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <textarea class="form-control comment-box p-0" placeholder="How can we help you?" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sub-btn text-center">
                            <button class="w-100 border-0 fw-bold fs-6 text-white" type="submit">
                                <span class="d-flex justify-content-center align-items-center gap-3">
                                    Get In Touch
                                    <span class="ni ni-forward-ios"></span>
                                </span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hero /-end -->