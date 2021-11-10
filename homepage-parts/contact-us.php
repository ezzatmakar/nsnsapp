<section class="contactUs" id="contactUs">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri()?>/img/ns2.svg">
                <h1>للتواصل معنا</h1><img class="rightIcon" src="<?php echo get_template_directory_uri()?>/img/ns.svg">
            </div>
        </div>
    </div>
    <div class="bottom">
        <img class="shapeTop" src="<?php echo get_template_directory_uri()?>/img/form-bg-lines.svg">
        <div class="container">
            <div class="col-xs-12">
                <div class="box">
                    <div class="col col-form">
                        <div class="subTitle">
                            <h2><?php echo get_field('contact_us_title'); ?></h2>
                        </div>
                        <?php 
      $contact_form = '{:ar}'.do_shortcode('[contact-form-7 id="335" title="Contact us ar" html_class="customValid formAr"]').'{:}{:en}'.do_shortcode('[contact-form-7 id="336" title="Contact us en" html_class="customValid"]').'{:}';
                         echo apply_filters('the_title', $contact_form );
                    ?>
                    </div>
                    <div class="col col-info">
                        <img class="personShape" src="<?php echo get_template_directory_uri()?>/img/form-img-1.png">
                        <div class="subTitle">
                            <img class="tabIco" src="<?php echo get_template_directory_uri()?>/img/map-icon.svg">
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
        <img class="shapeBottom" src="<?php echo get_template_directory_uri()?>/img/form-bg-lines.svg">
    </div>
</section>