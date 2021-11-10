<?php $why_ns_ns = get_field('why_ns_ns'); ?>
<section class="whyNs" id="whyNs">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns2.svg">
                <h1><?php echo $why_ns_ns['title']; ?></h1>
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns.svg">
            </div>
        </div>
    </div>
    <div class="container v-center">
        <div class="col-sm-6 col-xs-12 col-text">
            <div class="content">
                <p><?php echo $why_ns_ns['description']; ?></p>
            </div>
            <div class="navi">
                <a href="<?= get_permalink(389) ?>" class="btnBlue"><?= $why_ns_ns['join_us_text'] ?></a>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12  col-image">
            <div class="imageBg">
				<?php $img = (WPGlobus::Config()->language === 'en') ? $why_ns_ns['image']['url'] : $why_ns_ns['image_arabic']['url']; ?>
				<?php $img_alt = (WPGlobus::Config()->language === 'en') ? $why_ns_ns['image']['alt'] : $why_ns_ns['image']['alt']; ?>
                <img src="<?php echo $img; ?>">
            </div>
            <div class="imageWarp">
                <div class="image">
                    <img src="<?php echo $img; ?>"
                         alt="<?php echo $img_alt; ?>">
                </div>
                <div class="text">
                    <img class="heartIco" src="<?php echo get_template_directory_uri(); ?>/img/heart.svg">
                    <p><?php echo $why_ns_ns['image_description']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container two v-center">
        <div class="col-sm-6 col-xs-12">
            <img class="line" src="<?php echo get_template_directory_uri(); ?>/img/why-ns-shape-1.svg">
            <div class="threeImgeWarp">
                <div class="imgWarp">
                <?php $img1 = (WPGlobus::Config()->language === 'en') ? $why_ns_ns['second_image']['url'] : $why_ns_ns['second_image_arabic']['url']; ?>
				<?php $img_alt1 = (WPGlobus::Config()->language === 'en') ? $why_ns_ns['second_image']['alt'] : $why_ns_ns['second_image_arabic']['alt']; ?>
                    <img class="top" src="<?php echo $img1; ?>"
                         alt="<?php echo $img_alt1; ?>">
                    <img class="bottom" src="<?php echo get_template_directory_uri(); ?>/img/nsnsnsns.svg">
                </div>
                <div class="imgWarp two">
					<img class="top" src="<?php echo $img1; ?>"
                         alt="<?php echo $img_alt1; ?>">
                    <img class="bottom" src="<?php echo get_template_directory_uri(); ?>/img/nsnsnsns.svg">
                </div>
                <div class="imgWarp three">
                    <img class="top" src="<?php echo $img1; ?>"
                         alt="<?php echo $img_alt1; ?>">
                    <img class="bottom" src="<?php echo get_template_directory_uri(); ?>/img/nsnsnsns.svg">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xs-12">
            <div class="content">
                <p><?php echo $why_ns_ns['description_part_tow']; ?></p>
            </div>
            <div class="navi">
                <a href="<?= get_permalink(389) ?>" class="btnBlue"><?= $why_ns_ns['join_us_text'] ?></a>
            </div>
        </div>
    </div>
</section>