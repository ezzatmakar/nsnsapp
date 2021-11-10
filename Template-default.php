<?php
/**
 * Template Name: Default
 */

get_header();
?>

    <section class="termsPage">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns2.svg">
                    <h1><?php the_title()?></h1>
                    <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns.svg">
                </div>
            </div>
            <div class="col-xs-12">
                <p><?php echo get_the_content(); ?></p>
            </div>
        </div>
    </section>


<?php get_footer(); ?>