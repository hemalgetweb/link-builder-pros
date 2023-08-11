<?php
if (!empty($settings['btn_link_1']['url'])) {
    $this->add_link_attributes('btn_link_1', $settings['btn_link_1']);
}
// define image 1
$this->add_render_attribute('banner_imag_1', 'src', $settings['banner_imag_1']['url']);
$this->add_render_attribute('banner_imag_1', 'alt', \Elementor\Control_Media::get_image_alt($settings['banner_imag_1']));
$this->add_render_attribute('banner_imag_1', 'title', \Elementor\Control_Media::get_image_title($settings['banner_imag_1']));
$this->add_render_attribute('banner_imag_1', 'class', '');


$this->add_render_attribute('banner_bg_1', 'src', $settings['banner_bg_1']['url']);
$this->add_render_attribute('banner_bg_1', 'alt', \Elementor\Control_Media::get_image_alt($settings['banner_bg_1']));
$this->add_render_attribute('banner_bg_1', 'title', \Elementor\Control_Media::get_image_title($settings['banner_bg_1']));
$this->add_render_attribute('banner_bg_1', 'class', '');

?>



<!--banner start -->
<div class="banner bg-clr-teal fs-6 ">
        <div class="bannerDownBg"></div>
        <div class="container">
            <div class="banner-wrapper d-flex flex-column justify-content-between pb-4">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-info text-center text-lg-start mb-5 mb-lg-0">
                            <p class="text-clr-deepBlue fs-6 fw-semi-bold">Hassle-Free Visa Processing</p>
                            <h1 class="fs-48 text-white fw-normal mb-4 my-text">
                                Apply visa to your dream country with <span
                                    class="text-clr-deepBlue fw-bold">Feelfly</span> Travels visa processing.
                            </h1>
                            <div class="section-intro fs-18 fw-normal text-clr-skyBlue mb-5 ">
                                <p class="fs-18 text-clr-lightBlue">
                                    Our seasoned visa and immigration consultants are committed to providing exceptional
                                    services tailored to your specific
                                    needs.
                                </p>
                            </div>
                            <div class="banner-btn">
                                <button type="button"
                                    class="bg-clr-deepBlue button h-52 border-0 px-4 py-2 rounded-pill text-white fw-semi-bold">Apply
                                    Your Dream Visa</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-img text-center text-lg-end ">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/banner-right.png'); ?>" alt="banner img" class="img-fluid">
                            <!-- <div class="imageGallery d-flex align-items-center">
                                <div class="firstImgGallery" id="imgContainer">
                                    <img src="assets/img/firstImg.png" class="img-fluid motiv01 motiv " alt="">
                                    <img src="assets/img/firstImg.png" class="img-fluid motiv02 motiv " alt="">
                                    <img src="assets/img/firstImg.png" class="img-fluid motiv03 motiv " alt="">
                                </div>
                                <div class="secondImgGallery">
                                    <div class="secondFirstRow ">
                                        <img src="assets/img/secondImg.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="secondSecondRow">
                                        <img src="assets/img/thirdImg.png" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--/ banner end -->