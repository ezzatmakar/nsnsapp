<section class="activity">
    <img class="bg" src="<?php echo get_template_directory_uri(); ?>/img/trade-img-1.svg">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns2.svg">
                <h1><?php echo get_field('activities_title'); ?></h1>
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns.svg">
            </div>
        </div>
    </div>
    <div class="container slider-container">
        <div class="col-xs-12">
            <div class="owl-carousel"
                 data-arrow="<?php echo get_template_directory_uri(); ?>/img/arrow-left-circle.svg">
                <?php
                $activities = get_field('activities');
                foreach ($activities as $a) { 
                     
                    $img = (WPGlobus::Config()->language === 'en') ? $a['image']['url'] : $a['image_arabic']['url'];
                    ?>
                    <div class="item">
                        <div class="cover v-bottom" style="background-image: url(<?= $img ?>)">
                            <div class="name">
                                <h3><?php echo $a['title']; ?></h3>
                            </div>
                            <div class="text">
                                <p><?php echo $a['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>