</div> <!-- End of pageWarp-->
<footer>
    <div class="container">
        <div class="col-sm-2 col-xs-12 col">
            <div class="logo">
                <?php
                $image = get_field('footer_logo', 'option'); ?>
                <img src="<?php echo (!empty($image)) ? $image['url'] : 'NSNS'; ?>"
                     alt="<?php echo (!empty($image)) ? $image['alt'] : 'NSNS'; ?>"></a>
            </div>
        </div>
        <div class="col-sm-2 col-xs-6 col">

            <div class="footerMenu"> 
                <h3><?php 
					$short_str = '{:ar}روابط مختصرة{:}{:en}short links{:}';
					echo apply_filters('the_title', $short_str );
					?>
                </h3>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'my-custom-menu',
                ));
                ?>
            </div>
        </div>
        <div class="col-sm-3 col-xs-12 col col-contact">
            <div class="footerMenu">
                <?php $details = contactDetails(); ?>
                <h3><?php echo $details['title'];?></h3>
                <div class="contactInfo">
                    <p>
                        <?php echo $details['address'];  ?><br>
                        <?php
                        $mob = '{:ar}'. $details['phone_number_text'] .'{:}{:en}Mobile{:}';
                        $whs = '{:ar}الواتس آب{:}{:en}What\'sApp{:}';
                        $fax = '{:ar}الموبايل{:}{:en}Mobile{:}';
                        echo  apply_filters('the_title', $mob ) . " : " . $details['phone_nummber'];  ?><br>
                        <?php echo apply_filters('the_title', $whs ). " : ".$details['whats_app_number'];  ?><br>
                        <?php echo apply_filters('the_title', $fax ). " : ".$details['fax_number'];  ?><br>
                        <br>
                    </p>
                    <p><?php echo $details['email'];  ?></p>
                    <p><?php echo $details['times_of_work'];  ?></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6 col col-important">
            <div class="footerMenu">
                <h3><?php 
					$impo_str = '{:ar}روابط مهمة{:}{:en}Important links{:}';
					echo apply_filters('the_title', $impo_str );
					?>
				</h3>
                    <?php
                    wp_nav_menu( array(
                            'theme_location' => 'extra-menu',
                         ));
                    ?>
            </div>
            <br>
            <div class="footerMenu">
                <?php $settings = generalSettings(); ?>
                <h3><?= $settings['title']; ?></h3>
                <div class="socialLinksIn">
                    <a href="<?= $settings['facebook']; ?>" target="_blank"><span class="icon-facebook"></span></a>
                    <a href="<?= $settings['youtube']; ?>" target="_blank"><span class="icon-youtube-play"></span></a>
                    <a href="<?= $settings['twitter']; ?>" target="_blank"><span class="icon-twitter"></span></a>
                    <a href="<?= $settings['instagram']; ?>" target="_blank"><span class="icon-instagram"></span></a>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-xs-12">
            <div class="footerMenu">
               <h3><?php echo applicationTitle(); ?></h3>
            </div>
            <div class="appStore">
                <a href="<?= $settings['ios'];?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/apple-store.png"></a>
                <a href="<?= $settings['android'];?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/google-store.png"></a>
            </div>

            <div class="lang">
                <?php languageSwitcher(); ?>
            </div>

        </div>

        <div class="col-xs-12">
            <div class="copyrights">
                <?php 
                $copyright_text = get_field('copyright_text', 'options');
                if(WPGlobus::Config()->language === 'en') {
                    $part1 = $copyright_text['text_part_1'];
                    $part2 = $copyright_text['text_part_2'];
                }else{
                    $part1 = $copyright_text['text_part_1_arabic'];
                    $part2 = $copyright_text['text_part_2_arabic'];
                }
                ?>
                <p><?= $part1 ?> @ <a href="https://www.approcks.com/" target="_blank"><?= $part2. " ". date('Y'); ?></a></p>
            </div>
        </div>
   
</footer>

<!-- JavaScript plugins -->
<?php wp_footer(); ?>

</body>
</html>

<?php  if (get_the_ID() === 10):  ?>
<script>

    $('.mainMenu a[href*="#"]').on('click', function (e) {
        e.preventDefault()
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top-100
        },500);
    })
   
</script>
<?php else: ?>
<script>

    // $(".mainMenu a").on('click', function(event) {
    //     // let url = $($(this).attr('href'))
    //     // console.log(url)
    //     if (this.hash !== "") {
    //         // Prevent default anchor click behavior
    //         // event.preventDefault();
    //         var hash = this.hash;
    //         $('html, body').animate({
    //             scrollTop: $(hash).offset().top-100
    //         },500, function(){
    //             // Add hash (#) to URL when done scrolling (default click behavior)
    //
    //             window.location.hash = hash;
    //         });
    //     }
    // });
</script>
<?php endif; ?>
