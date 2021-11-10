<section class="blogs" id="blogs">
    <div class="container">
        <div class="col-xs-12">
            <div class="title">
                <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns2.svg">
                <h1>
                    <?php
                    $ar = '{:ar}المقالات{:}{:en}Articles{:}';
                    echo  apply_filters('the_title', $ar );
                    ?>
                </h1><img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns.svg">
            </div>
        </div>
    </div>
    <div class="container mobSlider">
        <?php
        $args = ['post_type' => 'article',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
            'post_status' => 'publish'
        ];
        $articles = new WP_Query($args);
        if ($articles->have_posts()) {
            while ($articles->have_posts()) {
                $articles->the_post(); ?>

                <div class="col-sm-4 col-xs-12 col">
                    <div class="box">
                        <div class="imageWarp">
                            <a href="<?= get_the_permalink(); ?>">
                                <div class="cover"
                                     style="background-image: url(<?= get_the_post_thumbnail_url(); ?>)"></div>
                            </a>
                        </div>
                        <div class="date">
                            <p><?= get_field('published_date'); ?></p>
                        </div>
                        <div class="content">
                            <p><?= get_the_title(); ?></p>
                        </div>
                        <div class="navi">
                            <a href="<?= get_the_permalink(); ?>"><?php
                                $mob = '{:ar}أقرا المقال كامل{:}{:en}Read All article{:}';
                                echo  apply_filters('the_title', $mob );
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        wp_reset_query() ?>
    </div>

    <div class="container">
        <div class="col-xs-12">
            <div class="more">
                <a href="<?php echo get_page_link(181);?>" class="btnWhite">
                    <?php
                    $mob = '{:ar}لمزيد من المقالات{:}{:en}All articles{:}';
                    echo  apply_filters('the_title', $mob );
                    ?>
                </a>
            </div>
        </div>
    </div>
</section>
