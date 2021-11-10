<section class="knowMore" id="about">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns2.svg">
                <h1><?php echo get_field('section_title'); ?></h1>
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns.svg">
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

    <div class="container">
        <div class="col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
            <div class="imageWithText one v-bottom">
                <?php $search_for_anything = get_field('search_for_anything'); ?>
				<?php $img = (WPGlobus::Config()->language === 'en') ? $search_for_anything['image']['url'] : $search_for_anything['image_arabic']['url']; ?>
				<?php $img_alt = (WPGlobus::Config()->language === 'en') ? $search_for_anything['image']['alt'] : $search_for_anything['image_arabic']['alt']; ?>
				
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
                <?php $reserve_a_vacation_spot_now = get_field('reserve_a_vacation_spot_now'); ?>
				<?php $img1 = (WPGlobus::Config()->language === 'en') ? $reserve_a_vacation_spot_now['image']['url'] : $reserve_a_vacation_spot_now['image_arabic']['url']; ?>
				<?php $img_alt1 = (WPGlobus::Config()->language === 'en') ? $reserve_a_vacation_spot_now['image']['alt'] : $reserve_a_vacation_spot_now['image_arabic']['alt']; ?>
                <img src="<?php echo $img1; ?>"
                     alt="<?php echo $img_alt1; ?>">
                <div class="text">
                    <p><strong><?php echo $reserve_a_vacation_spot_now['title']; ?></strong></p>
                    <p><?php echo $reserve_a_vacation_spot_now['subtitle']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <img class="homeShape2" src="<?php echo get_template_directory_uri(); ?>/img/home-bg-shape-2.svg">
    <div class="appStore">
        <div class="container">
            <div class="col-xs-12">
                <?php $settings = generalSettings(); ?>

                <a href="<?=  $settings['ios']?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/apple-store.png">
                </a>
                <a href="<?=  $settings['android']?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/google-store.png">
                </a>
            </div>
            <div class="col-xs-12">
                <div class="content">
                    <p><?php echo get_field('description'); ?></p>
                </div>
                <div class="navi">
                    <a href="<?php echo get_page_link(14) ?>" class="btnWhite"><?php echo get_field('know_more_button_text'); ?></a>
                </div>
            </div>
        </div>
    </div>
    <img class="homeShape3" src="<?php echo get_template_directory_uri(); ?>/img/home-bg-shape-3.svg">
</section>