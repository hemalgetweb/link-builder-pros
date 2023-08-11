<?php
    $post_gallery = function_exists('get_field') ? get_field('post_gallery') : '';
    $categories = get_the_terms( $post->ID, 'category' );
    $cbtoolkit_blog_btn_switch = get_theme_mod('cbtoolkit_blog_btn_switch', true);
    $cbtoolkit_blog_meta_switch = get_theme_mod('cbtoolkit_blog_meta_switch', true);
    $cbtoolkit_blog_author_switch = get_theme_mod('cbtoolkit_blog_author_switch', true);
    $cbtoolkit_blog_date_switch = get_theme_mod('cbtoolkit_blog_date_switch', true);
    $cbtoolkit_blog_comments_switch = get_theme_mod('cbtoolkit_blog_comments_switch', true);
    $cbtoolkit_blog_btn_text = get_theme_mod('cbtoolkit_blog_btn_text', __('Read More', 'ayaa'));
    $ayaa_cat  = get_the_category(get_the_ID()) ? (array) get_the_category(get_the_ID())[0]: '';
    $first_cat_name = '';
    $first_cat_id = '';
    $first_cat_url = '';
    if(!empty($ayaa_cat)) {
        $first_cat_name = $ayaa_cat['name'];
        $first_cat_id = $ayaa_cat['term_id'];
        $first_cat_url = get_category_link( $first_cat_id );
    }
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('ayaa-fz-blog-box-447 mb-50 format-gallery'); ?>>
    <?php if ( !empty( $post_gallery ) ): ?>
        <div class="blog-thumb swiper-container ayaa-blog-box-gallery">
            <div class="owl-carousel ayaa-blog-slider ayaa-has-default-carousel-nav">
                <?php foreach ( $post_gallery as $image ): ?>
                    <div class="owl-slide">
                        <div class="ayaa-fz-thumbnail-image ayaa-fz-blog-thumbnail-447">
                            <img src="<?php echo esc_url($image['full_image_url']); ?>" alt="<?php echo esc_attr($image['caption']); ?>">
                            <?php if (!empty($cbtoolkit_blog_date_switch)) : ?>
                                <div class="ayaa-blog-caption-date-447">
                                    <span class="day"><?php print esc_html(get_the_date('d', get_the_ID())); ?></span>
                                    <span class="month"><?php print esc_html(get_the_date('M', get_the_ID())); ?></span>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($cbtoolkit_blog_meta_switch)) : ?>
                                <div class="ayaa-blog-meta-in-box-447 d-none d-sm-flex">
                                    <?php if (!empty($cbtoolkit_blog_author_switch)) : ?>
                                        <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php echo get_avatar(get_the_author_meta('ID')); ?><?php print esc_html(get_the_author()); ?></a>
                                    <?php endif; ?>
                                    <?php if(!empty($first_cat_name)) : ?>
                                        <a href="<?php echo esc_url($first_cat_url) ? esc_url($first_cat_url): ''; ?>"><?php echo esc_html($first_cat_name); ?></a>
                                    <?php endif; ?>
                                    <?php if (!empty($cbtoolkit_blog_comments_switch)) : ?>
                                        <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif;?>
    <div class="ayaa-fz-blog-content-447">
        <?php if(!empty($cbtoolkit_blog_meta_switch)) : ?>
        <div class="ayaa-fz-blog-meta-wrap-447 mb-15">
            <?php if(!empty($cbtoolkit_blog_date_switch)) : ?>
                <span><i class="fal fa-calendar"></i><?php echo esc_html(get_the_date()); ?></span>
            <?php endif; ?>
            <?php if(!empty($cbtoolkit_blog_author_switch)) : ?>
                <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="fal fa-user"></i><?php print esc_html(get_the_author());?></a>
            <?php endif; ?>
            <?php if(!empty($cbtoolkit_blog_comments_switch)) : ?>
                <a href="<?php comments_link();?>"><i class="fal fa-comments"></i><?php comments_number();?></a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php if(get_the_title()) : ?>
        <h4 class="ayaa-fz-blog-title-447"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php endif; ?>
        <p><?php echo wp_kses_post(wp_trim_words(get_the_excerpt(), 44)); ?></p>
        <?php if(!empty($cbtoolkit_blog_btn_switch)) : ?>
            <?php if(!empty($cbtoolkit_blog_btn_text)) : ?>
                <div class="ayaa-fz-blog-btn-wrapper-447">
                    <a href="<?php the_permalink(); ?>" class="ayaa-fz-blog-button-447"><span><?php echo esc_html($cbtoolkit_blog_btn_text); ?></span> <span><?php echo esc_html($cbtoolkit_blog_btn_text); ?></span></a>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</article>