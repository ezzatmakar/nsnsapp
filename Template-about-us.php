<?php
/**
 * Template Name: About Us
 */

get_header();
?>


<img class="homeTopBg" src="<?php echo get_template_directory_uri() ?>/img/home-top-shape-bg.svg">

<section class="knowMore aboutUsPage">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri() ?>/img/ns2.svg">
                <h1><?php the_title(); ?></h1>
                <img class="rightIcon" src="<?php echo get_template_directory_uri() ?>/img/ns.svg">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="box one v-center">
                <?php $active_user = get_field('active_user'); ?>
                <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/shape1.png">
                <img class="ico" src="<?php echo $active_user['icon']['url']; ?>"
                     alt="<?php echo $active_user['icon']['alt']; ?>">
                <h2><span class="lines"><?php echo $active_user['counter']; ?></span></h2>
                <p><?php echo $active_user['title']; ?></p>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-2 col-sm-6 col-xs-12">
            <div class="box three v-center">
                <?php $free_trial = get_field('free_trial'); ?>
                <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/shape1.png">
                <img class="ico" src="<?php echo $free_trial['icon']['url']; ?>"
                     alt="<?php echo $active_user['icon']['alt']; ?>">
                <h2><span class="lines"><?php echo $free_trial['counter']; ?></span></h2>
                <p><?php echo $free_trial['title']; ?></p>
            </div>
        </div>
        <div class="col-md-5 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
            <div class="box two v-center">
                <?php $service_providers = get_field('service_providers'); ?>
                <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/shape1.png">
                <img class="ico" src="<?php echo $service_providers['icon']['url']; ?>"
                     alt="<?php echo $active_user['icon']['alt']; ?>">
                <h2><span class="lines"><?php echo $service_providers['counter']; ?></span></h2>
                <p><?php echo $service_providers['title']; ?></p>
            </div>
        </div>
    </div>
    <div class="appStore">
        <div class="container">

            <div class="col-xs-12">
                <div class="content">
                    <p><?php echo get_the_content() ?></p>
                </div>
            </div>
            <?php $settings = generalSettings(); ?>
            <div class="col-xs-12">
                <a href="<?= $settings['ios']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/apple-store.png"></a>
                <a href="<?= $settings['android']; ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/img/google-store.png"></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
            <div class="imageWithText one v-bottom">
                <?php $search_for_anything = get_field('search_for_anything'); 
                $img = (WPGlobus::Config()->language === 'en') ? $search_for_anything['image']['url'] : $search_for_anything['image_arabic']['url'];
				$img_alt = (WPGlobus::Config()->language === 'en') ? $search_for_anything['image']['alt'] : $search_for_anything['image_arabic']['alt'];
				?>
                <img src="<?php echo $img; ?>"
                     alt="<?php echo $img_alt; ?>">
                <div class="text">
                    <p><strong><?php echo $search_for_anything['title']; ?></strong></p>
                    <p><?php echo $search_for_anything['subtitle']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-6 col-xs-12">
            <div class="imageWithText two v-bottom">
                <?php $reserve_a_vacation_spot_now = get_field('reserve_a_vacation_spot_now'); 
				$img = (WPGlobus::Config()->language === 'en') ? $reserve_a_vacation_spot_now['image']['url'] : $reserve_a_vacation_spot_now['image_arabic']['url'];
				$img_alt = (WPGlobus::Config()->language === 'en') ? $reserve_a_vacation_spot_now['image']['alt'] : $reserve_a_vacation_spot_now['image_arabic']['alt'];
				?>
				
                <img src="<?php echo $img; ?>"
                     alt="<?php echo $img_alt; ?>">
                <div class="text">
                    <p><strong><?php echo $reserve_a_vacation_spot_now['title']; ?></strong></p>
                    <p><?php echo $reserve_a_vacation_spot_now['subtitle']; ?></p>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="vissionAndMission">
    <img class="homeShape2" src="<?php echo get_template_directory_uri() ?>/img/home-bg-shape-2.svg">
    <img class="homeShape3" src="<?php echo get_template_directory_uri() ?>/img/home-bg-shape-3.svg">
    <div class="container">
        <div class="col-sm-5 col-sm-offset-1 col-xs-12">
            <div class="box one">
                <img class="ico" src="<?php echo get_template_directory_uri() ?>/img/leadership.svg">
                <?php $mission = get_field('mission') ?>
                <h2><?php echo $mission['title'] ?></h2>
                <p><?php echo $mission['mission_description'] ?></p>
            </div>
        </div>
        <div class="col-sm-5 col-xs-12">
            <div class="box two">
                <img class="ico" src="<?php echo get_template_directory_uri() ?>/img/vision.svg">
                <?php $vision = get_field('vision') ?>
                <h2><?php echo $vision['title'] ?></h2>
                <p><?php echo $vision['vision_description'] ?></p>
            </div>
        </div>
    </div>
</section>

<section class="contactUs aboutUsPage">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri() ?>/img/ns2.svg">
                <h1>للتواصل معنا</h1><img class="rightIcon" src="<?php echo get_template_directory_uri() ?>/img/ns.svg">
            </div>
        </div>
    </div>
    <div class="bottom">
        <img class="shapeTop" src="<?php echo get_template_directory_uri() ?>/img/form-bg-lines.svg">
        <div class="container">
            <div class="col-xs-12">
                <div class="box">
                    <div class="col col-form">
                        <div class="subTitle">
                            <h2><?php echo get_field('contact_us_title') ?></h2>
                        </div>
                        <?php
                        $contact_form = '{:ar}' . do_shortcode('[contact-form-7 id="335" title="Contact us ar" html_class="customValid formAr"]') . '{:}{:en}' . do_shortcode('[contact-form-7 id="336" title="Contact us en" html_class="customValid"]') . '{:}';
                        echo apply_filters('the_title', $contact_form);
                        ?>
                    </div>
                    <div class="col col-info">
                        <img class="personShape" src="<?php echo get_template_directory_uri() ?>/img/form-img-1.png">
                        <div class="subTitle">
                            <img class="tabIco" src="<?php echo get_template_directory_uri() ?>/img/map-icon.svg">
                            <?php $details = contactDetails(); ?>
                            <h2><?= $details['title']; ?></h2>
                        </div>
                        <div class="content">
                            <p>
                                <?php echo $details['address'];  ?><br>
                                <?php echo  $details['phone_number_text'] . " : " . $details['phone_nummber'];  ?><br>
                                <?php echo $details['whats_app_text']. " : ".$details['whats_app_number'];  ?><br>
                                <?php echo $details['fax_text']. " : ".$details['fax_number'];  ?><br>
                            </p>
                            <p><?php echo $details['email'];  ?></p>
                            <p><?php echo $details['times_of_work'];  ?></p>
                            <br>
                            <?php $settings = generalSettings(); ?>
                            <p><strong><?php echo $settings['title']; ?></strong></p>
                            <div class="socialLinksIn">
                                <a href="<?= $settings['facebook']; ?>" target="_blank"><span class="icon-facebook"></span></a>
                                <a href="<?= $settings['youtube']; ?>" target="_blank"><span class="icon-youtube-play"></span></a>
                                <a href="<?= $settings['twitter']; ?>" target="_blank"><span class="icon-twitter"></span></a>
                                <a href="<?= $settings['instagram']; ?>" target="_blank"><span class="icon-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img class="shapeBottom" src="<?php echo get_template_directory_uri() ?>/img/form-bg-lines.svg">

    </div>
</section>
<?php get_footer(); ?>
