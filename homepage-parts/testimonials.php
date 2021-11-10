<section id="testimonials" class="testimonials">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns2.svg">
                <h1><?php echo get_field('testimonials_title'); ?></h1>
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns.svg">
            </div>
        </div>
    </div>
    <div class="warp">
        <img class="qTop" src="<?php echo get_template_directory_uri(); ?>/img/qq.png">
        <img class="qBottom" src="<?php echo get_template_directory_uri(); ?>/img/qq.png">
        <div class="container">
            <div class="arrowPlace"></div>
            <div class="col-xs-12">
                <div class="owl-carousel" data-arrow="<?php echo get_template_directory_uri(); ?>/img/arrow-left.svg">
                    <?php
                    $testimonials = get_field('testimonials');
                    foreach ($testimonials as $i => $t) { ?>
                        <div class="item" data-box="<?php echo $i ?>">
                            <div class="cover setCube"
                                 style="background-image: url(<?php echo $t['image']['url']; ?>)"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xs-12">
                <?php foreach ($testimonials as $i => $t) { ?>
                    <div class="box" data-box="<?php echo $i ?>">
                        <div class="data">
                            <p><?php echo $t['testimonial']; ?></p>
                        </div>
                        <div class="name">
                            <h3><?php echo $t['name']; ?></h3>
                            <p><?php echo $t['position']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>