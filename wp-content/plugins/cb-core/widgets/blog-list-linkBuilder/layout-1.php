 <!-- blogpost -->
 <?php if($wp_query->have_posts()) : ?>
 <section id="blogposts" class="section-padding">
        <div class="container">
            <div class="featured-posts p-2 mb-4">
                <div class="row align-items-center">
                <?php $count = 1; while($wp_query->have_posts()) :
                        $wp_query->the_post();
                        $post_id = get_the_ID();
                        $category_name = wp_get_post_terms(get_the_ID(), 'category')[0]->name;
                        $category_id = wp_get_post_terms(get_the_ID(), 'category')[0]->term_id;
                        $cat_url = get_category_link($category_id);
                        if($count > 1){
                            continue;
                        }
                    ?>

                    <?php if(has_post_thumbnail($post_id)) { ?>
                        <div class="col-lg-6">
                            <div class="blog-post-img h-100">
                                <a href="<?php echo get_the_permalink($post_id) ?>"><?php the_post_thumbnail($post_id, 'full'); ?></a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="col-lg-6">
                            <div class="blog-post-img h-100">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blogimg1.png'); ?>" class="img-fluid w-100 h-100 " alt="post-img">
                            </div>
                        </div>
                    <?php }  ?>




                    <div class="col-lg-6">
                        <div class="blogpost-info">
                            <div class="blogpost-date-author d-flex flex-wrap gap-3 align-items-center align-items-center mb-3">
                                <div class="date-wrapper d-flex align-items-center gap-2">


                                    <div class="blog-date">
                                        <p class="fw-normal fs-14 text-clr-dark2">
                                        <?php echo get_the_date(); ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="author-wrapper d-flex align-items-center gap-2">
                                    <div class="author-icon">
                                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blogicon2.png'); ?>" alt="icon">
                                    </div>
                                    <div class="author-name">
                                        <p class="fw-normal fs-14 text-clr-dark2">
                                        <?php echo get_the_author($post_id); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="blog-title mb-3">
                                <a href="<?php the_permalink($post_id) ?>" class="card-title fw-bold fs-4 text-clr-dark1 text-decoration-none">
                                <?php the_title(); ?>
                                </a>
                            </div>

                            <p class="card-text fw-normal fs-6 text-clr-dark2 mb-3">
                            <?php the_excerpt(); ?>
                            </p>

                            <a href="<?php the_permalink($post_id) ?>" class="d-flex align-items-center text-decoration-none gap-2 fs-6 fw-bold text-clr-secondary">
                                Read More
                                <span class="ni ni-forward-ios fw-bold"></span>
                            </a>
                        </div>
                    </div>
                    <?php  $count++; endwhile; ?>

                </div>

            </div>
            <div class="row">

            <?php $count = 1; while($wp_query->have_posts()) :
                $wp_query->the_post();
                $post_id = get_the_ID();
                $category_name = wp_get_post_terms(get_the_ID(), 'category')[0]->name;
                $category_id = wp_get_post_terms(get_the_ID(), 'category')[0]->term_id;
                $cat_url = get_category_link($category_id);
                if($count > 1){
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-posts mb-4 wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="260ms">
                        <div class="card border-0">

                            <?php if(has_post_thumbnail($post_id)) { ?>
                                <div class="blogpost-img">
                                    <a href="<?php echo get_the_permalink($post_id) ?>"><?php the_post_thumbnail($post_id, 'full'); ?></a>

                                </div>
                                <?php } else { ?>
                                    <div class="newsupdate-card-img p-1">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/newupdateimg1.png'); ?>" class="card-img" alt="newsupdate-slider-img">
                                </div>
                                <?php }  ?>
                            <div class="card-body bg-transparent">
                                <div class="blogpost-content">
                                    <div class="blog-author d-flex flex-wrap gap-4 align-items-center mb-3">
                                        <div class="date-wrapper d-flex align-items-center gap-2">
                                            <div class="date-icon">
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blogicon1.png'); ?>" alt="icon">
                                            </div>
                                            <div class="blog-date">
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                 <?php echo get_the_date(); ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="author-wrapper d-flex align-items-center gap-2">
                                            <div class="author-icon">
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/blogicon2.png'); ?>" alt="icon">
                                            </div>
                                            <div class="author-name">
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                <?php echo get_the_author($post_id); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog-tite mb-3">
                                        <a href="<?php the_permalink($post_id) ?>" class="card-title fw-bold fs-5 text-clr-dark1 text-decoration-none">
                                        <?php the_title(); ?>
                                        </a>
                                    </div>
                                    <a href="<?php the_permalink($post_id) ?>" class="d-flex align-items-center text-decoration-none gap-2 fs-6 fw-bold text-clr-secondary readmore">
                                        Read More
                                        <span class="ni ni-forward-ios fw-bold"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } $count++; endwhile; ?>
            </div>
            <div class="text-center mt-4">
                <div class="d-inline-block">
                    <a href="#" class="d-flex align-items-center gap-3 common-btn text-decoration-none fs-6 fw-bold bg-clr-primary text-white wow fadeInDown" data-wow-duration="1.30s" data-wow-delay="620ms">
                        <span>
                            Get in Touch
                        </span>
                        <span class="ni ni-forward-ios"></span>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- blogpost /-end -->
    <?php endif; ?>