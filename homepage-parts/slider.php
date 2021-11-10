<img class="homeTopBg" src="<?php echo get_stylesheet_directory_uri() ?>/img/home-top-shape-bg.svg" alt="">
<section class="mainSlider">
    <div class="owl-carousel">
        <?php
        $homepage_slider = get_field('homepage_slider');
        if ($homepage_slider) {
            foreach ($homepage_slider as $slide) { ?>
                <div class="item">
                <div class="container v-center">
                    <div class="col-sm-6 col-xs-12 col-text">
                        <div class="title">
                            <h1><?php echo $slide['slide_title']; ?></h1>
                        </div>
                        <div class="content">
                            <p><?php echo $slide['slide_description']; ?></p>
                        </div>
                        <div class="navi">
                            <a href="<?php echo $slide['slide_video_url']; ?>" class="playVedio open-vedio-link"><span
                                        class="warp v-center"><span class="playIcon  v-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/play.svg">
                        </span><?php echo $slide['view_video_text']; ?></span></a>
                            <a href="<?= get_permalink(389) ?>" class="btnBlue"><?= $slide['join_us_button_text']; ?></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12 col-image">
                        <?php $slid_img = (WPGlobus::Config()->language === 'en') ? $slide['slide_image']['url'] :  $slide['slide__image_arabic']['url']; ?>
                        <div class="image">
                            <img src="<?php echo $slid_img ?>">
                        </div>
                    </div>
                </div>
                </div><?php
            }
        } ?>

    </div>
    <div class="container">
        <div class="col-xs-12">    
            <div class="scrollDown"><?php echo apply_filters('the_title', '{:ar}تابع للأسفل{:}{:en}follow down{:}' );?><img
                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/scroll-down.svg"></div>
        </div>
    </div>
</section>