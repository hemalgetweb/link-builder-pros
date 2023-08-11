<!-- mega menu start -->
<section class="apps-mega-menu has-sub-menu">
    <div class="row">
        <div class="col-12">
            <?php if(!empty($settings['slides'])) : ?>
                <div class="apps-mega-menu-list-wrapper-114">
                    <?php foreach($settings['slides'] as $slide) : ?>
                    <a href="<?php echo $slide['link'] ? esc_url($slide['link']['url']) : ''; ?>">
                        <div class="apps-mega-menu-list-item-114">
                            <div class="row align-items-center">
                                <div class="col-xxl-10 col-xl-10 col-lg-10 col-sm-10">
                                    <div class="apps-mega-menu-list-item-left-114">
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon( $slide['icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </div>
                                        <div class="content text-start">
                                            <?php if(!empty($slide['title'])) : ?>
                                                <h5 class="title"><?php echo esc_html($slide['title']); ?></h5>
                                            <?php endif; ?>
                                            <?php if(!empty($slide['subtitle'])) : ?>
                                                <p><?php echo esc_html($slide['subtitle']); ?> </p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-2 col-sm-2">
                                    <div class="apps-mega-menu-item-right-114">
                                        <div class="icon">
                                            <i class="fal fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
        </div>
    </div>
</section>
<!-- mega menu end -->