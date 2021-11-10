<?php
/**
 * Template Name: Articles
 */

get_header(); ?>

    <section class="blogs newsPage">
        <div class="container">
            <div class="col-xs-12">
                <div class="title">
                    <img class="rightIcon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ns2.svg">
                    <h1><?= get_the_title() ?></h1><img class="rightIcon"
                                                        src="<?php echo get_stylesheet_directory_uri(); ?>/img/ns.svg">
                </div>
                <div class="subTitle">
                    <p><?= get_field('subtitle'); ?></p>
                </div>
                <div class="catSlider">
                    <div class="owl-carousel"
                         data-arrow="<?php echo get_stylesheet_directory_uri(); ?>/img/arrow-left-circle.svg">
                        <div class="item">
                            <a class="<?php echo (!$_GET['category']) ? 'active' : ''; ?>"
                               href="<?= get_permalink(get_the_ID()); ?>">
                                <?php echo apply_filters('the_title', '{:ar}الكل{:}{:en}All{:}'); ?>
                            </a>
                        </div>
                        <?php
                        $cats_article = get_terms(array(
                            'taxonomy' => 'article_cat',
                            'hide_empty' => true,
                        ));
                        foreach ($cats_article as $cat) { ?>
                            <div class="item">
                                <a class="<?php if ($_GET['category'] == $cat->term_id) echo 'active'; ?>"
                                   href="<?= get_permalink(get_the_ID()) . "?category=" . $cat->term_id ?>"><?= $cat->name ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $category_term_id = $_GET['category'];
            if ($_GET['category'] && $_GET['category'] != "") {
                $args = [
                    'post_type' => 'article',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'article_cat',
                            'field' => 'term_id',
                            'terms' => $category_term_id
                        ),
                    ),
                ];
            } else {
                $args = [
                    'post_type' => 'article',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'paged' => $paged,
                ];
            }

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
                                    $read_full = '{:ar}أقرا المقال كامل{:}{:en}Read All article{:}';
                                    echo apply_filters('the_title', $read_full);
                                    ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                } ?>
                <div class="col-md-12 text-center">
                    <div class="pagination ">
                        <?php
                        $big = 999999999;
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, get_query_var('paged')),
                            'total' => $articles->max_num_pages,
                            'next_text' => __('&raquo;'),
                            'prev_text' => __('&laquo;'),
                        ));
                        ?>
                    </div>
                </div>
            <?php } ?>
        </div>

    </section>
<?php get_footer(); ?>