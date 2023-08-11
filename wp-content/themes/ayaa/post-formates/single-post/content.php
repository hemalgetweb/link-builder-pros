<?php
$cbtoolkit_blog_date_switch = get_theme_mod('cbtoolkit_blog_date_switch', true);
$cbtoolkit_blog_meta_switch = get_theme_mod('cbtoolkit_blog_meta_switch', true);
$cbtoolkit_blog_author_switch = get_theme_mod('cbtoolkit_blog_author_switch', true);
$cbtoolkit_blog_comments_switch = get_theme_mod('cbtoolkit_blog_comments_switch', true);
$ayaa_content_padding_top = empty(has_post_thumbnail()) ? '' : '';
$ayaa_cat  = get_the_category(get_the_ID()) ? (array) get_the_category(get_the_ID())[0] : '';
$first_cat_name = '';
$first_cat_id = '';
$first_cat_url = '';
if (!empty($ayaa_cat)) {
    $first_cat_name = $ayaa_cat['name'];
    $first_cat_id = $ayaa_cat['term_id'];
    $first_cat_url = get_category_link($first_cat_id);
}

?>

<?php if (!empty(get_the_content())) : ?>
<div class="blog-title mb-3">

    <?php if (get_the_title()) : ?>
        <h2 class="fw-bold fs-36 text-clr-dark1">
            <?php the_title(); ?>
        </h2>
    <?php endif; ?>
</div>
<div class="blogdetails-postdate">
    <div class="newsupdate-card-user d-flex flex-wrap gap-3 mb-3">
        <p class="fw-normal fs-14 text-clr-dark2 d-flex align-items-center gap-2">
            <span class="ni ni-calender-date"></span>
            Feb 25, 2023
        </p>
        <p class="fw-normal fs-14 text-clr-primary d-flex align-items-center gap-2">
            <span class="ni ni-user-alt"></span>
            Robert Fox
        </p>
    </div>
</div>

<?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) :
    $att = get_post_thumbnail_id();
    $image_src = wp_get_attachment_image_src($att, 'full');
    if (!empty($image_src)) {
        $image_src = $image_src[0];
    }
    ?>
<div class="blogdetails-thumbnail mb-5">
    <img src="<?php echo esc_url($image_src); ?>" class="img-fluid w-100" alt="<?php the_title_attribute(); ?>">
</div>
<?php endif; ?>
<div class="blog-info-details position-relative pb-50">
    <div class="social-icons position-absolute top-0">
        <ul class="social-items text-center p-0">
            <li class="mb-3">
                <p class="fs-5 fw-medium text-clr-dark3">
                    Share
                </p>
            </li>
            <li class="mb-3">
                <a href="#" class="text-decoration-none">
                    <span class="ni ni-facebook-f"></span>
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="text-decoration-none">
                    <span class="ni ni-instagram"></span>
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="text-decoration-none">
                    <span class="ni ni-twitter"></span>
                </a>
            </li>
            <li class="mb-3">
                <a href="#" class="text-decoration-none">
                    <span class="ni ni-linkedin"></span>
                </a>
            </li>
        </ul>
    </div>

    <?php the_content(); ?>

    <div class="bloginfo-subauthor d-flex gap-4 mt-5">
        <div class="bloginfo-subauthor-img">
            <img src="assets/img/sub-author.png" alt="sub-author">
        </div>
        <div class="bloginfo-subauthor-info ff-grotesk">
            <div class="bloginfo-subauthor-title">
                <h5 class="fw-bold fs-5 text-clr-dark1">
                    Leslie Alexander
                </h5>
            </div>
            <div class="bloginfo-subauthor-des">
                <p class="fs-18 fw-normal text-clr-dark2">
                    Daniel Eskandar ist Growth Marketing Specialist bei Help Dartera, wo wir exzellenten r Unternehmen jeder Größe ermögl ichen. Verbinden Sie sich mit ihr auf <a href="#" class="text-decoration-none fw-medium">
                        LinkedIn
                    </a>.
                </p>
            </div>
        </div>
    </div>



</div>

<?php endif ?>