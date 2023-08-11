<?php
/**
 * single.php
 * @package WordPress
 * @subpackage ayaa
 * @since ayaa 1.0
 * 
 */
$blog_column = is_active_sidebar( 'blog-sidebar' ) ? 'col-lg-8 ' : 'col-lg-8';
$cbblog_layout = get_theme_mod('cbblog_layout') ? get_theme_mod('cbblog_layout'): 'right-sidebar';
$sidebar_space = '';

if($cbblog_layout == 'right-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'pl-50' : '';
} else if($cbblog_layout == 'left-sidebar') {
	$sidebar_space = is_active_sidebar( 'blog-sidebar' ) ? 'pr-50' : '';
}
 ?>
<?php get_header(); ?>
<!-- breadcrumb -->
<section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <nav class="d-flex align-items-center" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#" class="fs-5 fw-medium text-clr-dark3 text-decoration-none">
                                    Home
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="fs-5 fw-medium text-clr-dark2 text-decoration-none">
                                    Library
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#" class="fs-5 fw-medium text-clr-dark2 text-decoration-none">
                                    Best Link Building Services in 2023: The Ultimate Guide...
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb /-end -->

    <section id="blogdetails-des">
        <div class="container">
            <div class="row">

				<!-- sidebar -->
				<?php if($cbblog_layout == 'left-sidebar') : ?>
					<?php if(is_active_sidebar('blog-sidebar')) : ?>
						<div class="col-lg-4">
							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
                		</div>
					<?php endif; ?>
				<?php endif; ?>


                <!-- main content -->
                <div class="<?php print esc_attr( $blog_column );?>">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php  get_template_part( 'post-formates/single-post/content', get_post_format() ); ?>
					<?php endwhile; ?>
					<?php  get_template_part( 'post-formates/single-post/content', 'biography' ); ?>

					<?php else : ?>
					<h2><?php esc_html_e('No Posts Found', 'ayaa') ?></h2>
					<?php endif; ?>

                </div>

                <!-- sidebar -->
				<?php if($cbblog_layout == 'right-sidebar') : ?>
					<?php if(is_active_sidebar('blog-sidebar')) : ?>
						<div class="col-lg-4">
								<?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
									<?php dynamic_sidebar( 'blog-sidebar' ); ?>
								<?php } ?>
                		</div>
					<?php endif; ?>
				<?php endif; ?>

            </div>
        </div>


    </section>

    <!-- news update -->
    <div id="newsupdate" class="section-padding" style="background-image: url(assets/img/newsupdate.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
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
                    <p class="fw-normal fs-6 text-clr-dark2 mb-5 wow fadeInDown" data-wow-duration="0.55s" data-wow-delay="180ms">
                        Consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam <br> est, qui dolorem ipsum quia dolor sit amet.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="swiper newsupdate-slider mb-5 mb-lg-0">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="newsupdate-wrapper">
                                <div class="card bg-transparent border-0">
                                    <div class="newsupdate-card-img p-1">
                                        <img src="assets/img/newupdateimg1.png" class="card-img" alt="newsupdate-slider-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="newsupdate-card-content">
                                            <div class="newsupdate-card-user d-flex justify-content-between mb-3">
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-calender-date"></span>
                                                    Feb 25, 2023
                                                </p>
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-user-alt"></span>
                                                    Robert Fox
                                                </p>
                                            </div>
                                            <a href="#" class="text-decoration-none card-text fw-bold fs-5 text-clr-dark1">
                                                The Complete Guide to UI Breadcrumbs
                                            </a>
                                            <div class="readmore mt-3">
                                                <a href="#" class="text-decoration-none d-flex align-items-center fw-bold fs-6 text-clr-secondary gap-2">
                                                    Read More
                                                    <span class="ni ni-forward-ios"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="newsupdate-wrapper">
                                <div class="card bg-transparent border-0">
                                    <div class="newsupdate-card-img p-1">
                                        <img src="assets/img/newupdateimg2.png" class="card-img" alt="newsupdate-slider-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="newsupdate-card-content">
                                            <div class="newsupdate-card-user d-flex justify-content-between mb-3">
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-calender-date"></span>
                                                    Feb 25, 2023
                                                </p>
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-user-alt"></span>
                                                    Robert Fox
                                                </p>
                                            </div>
                                            <a href="#" class="text-decoration-none card-text fw-bold fs-5 text-clr-dark1">
                                                What Is Work From Home? The 2023 WFH Guide
                                            </a>
                                            <div class="readmore mt-3">
                                                <a href="#" class="text-decoration-none d-flex align-items-center fw-bold fs-6 text-clr-secondary gap-2">
                                                    Read More
                                                    <span class="ni ni-forward-ios"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="newsupdate-wrapper">
                                <div class="card bg-transparent border-0">
                                    <div class="newsupdate-card-img p-1">
                                        <img src="assets/img/newupdateimg3.png" class="card-img" alt="newsupdate-slider-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="newsupdate-card-content">
                                            <div class="newsupdate-card-user d-flex justify-content-between mb-3">
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-calender-date"></span>
                                                    Feb 25, 2023
                                                </p>
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-user-alt"></span>
                                                    Robert Fox
                                                </p>
                                            </div>
                                            <a href="#" class="text-decoration-none card-text fw-bold fs-5 text-clr-dark1">
                                                Here's How to Become a 3D Designer in 2023
                                            </a>
                                            <div class="readmore mt-3">
                                                <a href="#" class="text-decoration-none d-flex align-items-center fw-bold fs-6 text-clr-secondary gap-2">
                                                    Read More
                                                    <span class="ni ni-forward-ios"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="newsupdate-wrapper">
                                <div class="card bg-transparent border-0">
                                    <div class="newsupdate-card-img p-1">
                                        <img src="assets/img/newupdateimg1.png" class="card-img" alt="newsupdate-slider-img">
                                    </div>
                                    <div class="card-body">
                                        <div class="newsupdate-card-content">
                                            <div class="newsupdate-card-user d-flex justify-content-between mb-3">
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-calender-date"></span>
                                                    Feb 25, 2023
                                                </p>
                                                <p class="fw-normal fs-14 text-clr-dark2">
                                                    <span class="ni ni-user-alt"></span>
                                                    Robert Fox
                                                </p>
                                            </div>
                                            <a href="#" class="text-decoration-none card-text fw-bold fs-5 text-clr-dark1">
                                                The Complete Guide to UI Breadcrumbs
                                            </a>
                                            <div class="readmore mt-3">
                                                <a href="#" class="text-decoration-none d-flex align-items-center fw-bold fs-6 text-clr-secondary gap-2">
                                                    Read More
                                                    <span class="ni ni-forward-ios"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="swipper-button position-relative mb-5 mb-lg-0">
                    <div class="swiper-button-prev-unique-left position-absolute d-flex justify-content-center align-items-center">
                        <span class="ni ni-arrow-left"></span>
                    </div>
                    <div class="swiper-button-next-unique-right position-absolute d-flex justify-content-center align-items-center">
                        <span class="ni ni-arrow-right"></span>
                    </div>
                </div>

                <div class="all-posts text-center mt-5 mt-lg-0">
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

        </div>
    </div>
    <!-- news update /-end -->

<?php get_footer(); ?>