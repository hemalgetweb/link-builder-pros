<!-- news update -->
<div id="newsupdate" class="section-padding" style="background-image: url(<?php echo esc_url(get_template_directory_uri() . '/assets/img/newsupdate.png'); ?>); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="section-content text-center pb-50">
            <div class="sub-heading">
                <h4 class="fw-bold fs-12 text-uppercase text-clr-secondary letter-spacing2em mb-2 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="100ms">
                    News Update
                </h4>
                <h1 class="fw-bold fs-36 text-clr-dark1 mb-3 wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="150ms">
                    See Our
                    <span class="text-clr-primary">
                        Latest
                    </span>
                    News & Blog
                </h1>
                <p class="fw-normal fs-6 text-clr-dark2 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                    Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam <br class="d-none d-lg-block"> est, qui dolorem ipsum quia dolor sit amet.
                </p>
            </div>
        </div>

        <?php if($wp_query->have_posts()) : ?>
            <div class="row">
            <div class="swiper newsupdate-slider mb-5 mb-sm-0 mb-lg-0">
                <div class="swiper-wrapper">
            <?php while($wp_query->have_posts()) :
                $wp_query->the_post();
                $post_id = get_the_ID();
                $category_name = wp_get_post_terms(get_the_ID(), 'category')[0]->name;
                $category_id = wp_get_post_terms(get_the_ID(), 'category')[0]->term_id;
                $cat_url = get_category_link($category_id);
            ?>
                    <div class="swiper-slide">
                        <div class="newsupdate-wrapper">
                            <div class="card bg-transparent border-0">
                                <?php if(has_post_thumbnail($post_id)) { ?>
                                <div class="newsupdate-card-img p-1">
                                    <a href="<?php echo get_the_permalink($post_id) ?>"><?php the_post_thumbnail($post_id, 'full'); ?></a>
                                    <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/newupdateimg1.png'); ?>" class="card-img" alt="newsupdate-slider-img"> -->
                                </div>
                                <?php } else { ?>
                                    <div class="newsupdate-card-img p-1">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/newupdateimg1.png'); ?>" class="card-img" alt="newsupdate-slider-img">
                                </div>
                                <?php }  ?>

                                <div class="card-body">
                                    <div class="newsupdate-card-content">
                                        <div class="newsupdate-card-user d-flex justify-content-between mb-3">
                                            <p class="fw-normal fs-14 text-clr-dark2">
                                                <span class="ni ni-calender-date"></span>
                                                <?php echo get_the_date(); ?>
                                            </p>
                                            <p class="fw-normal fs-14 text-clr-dark2">
                                                <span class="ni ni-user-alt"></span>
                                                <?php echo get_the_author($post_id); ?>
                                            </p>
                                        </div>
                                        <a href="<?php the_permalink($post_id) ?>" class="text-decoration-none card-text fw-bold fs-5 text-clr-dark1"><?php the_title(); ?></a>
                                        <div class="readmore mt-3">
                                            <a href="<?php the_permalink($post_id) ?>" class="text-decoration-none d-flex align-items-center fw-bold fs-6 text-clr-secondary gap-2">
                                                Read More
                                                <span class="ni ni-forward-ios"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php endwhile; ?>
            </div>
            </div>

            <div class="swipper-button position-relative mb-5 mb-sm-0 mb-lg-0">
                <div class="swiper-button-prev-unique-left position-absolute d-flex justify-content-center align-items-center">
                    <span class="ni ni-arrow-left"></span>
                </div>
                <div class="swiper-button-next-unique-right position-absolute d-flex justify-content-center align-items-center">
                    <span class="ni ni-arrow-right"></span>
                </div>
            </div>

            <div class="all-posts text-center mt-5 mt-sm-0 mt-lg-0">
                <div class="d-inline-block">
                    <a href="#" class="d-flex align-items-center gap-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                        <span>
                            Get in Touch
                        </span>
                        <span class="ni ni-forward-ios"></span>
                    </a>
                </div>
            </div>

        </div>
        <?php endif; ?>

    </div>
</div>
<!-- news update /-end -->