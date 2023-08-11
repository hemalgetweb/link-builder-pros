<!-- Call to action section  -->
<section id="cta" class="section-padding" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/img/cta.png'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="row">
            <div class="cta-wrapper text-center">
                <h2 class="fs-36 fw-bold text-white mb-4 wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="220ms">
                <?php echo cb_core_kses_basic(!empty($settings['banner_text_part_1'])?$settings['banner_text_part_1']:"Looking For Specific Guest Posts"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_part_2'])?$settings['banner_text_part_2']:"Services? Just Shout Out With an Email"); ?> <br class="d-none d-lg-block"> <?php echo cb_core_kses_basic(!empty($settings['banner_text_part_3'])?$settings['banner_text_part_3']:"Request"); ?>.
                </h2>

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
</section>
<!-- Call to action section /End -->