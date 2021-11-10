<?php get_header(); ?>

    <section class="articleTop">
        <div class="container">
            <div class="col-sm-7 col-xs-12">
                <div class="sliderWarp v-center">
                    <div class="thumbnailGroup v-center">
                        <?php
                        $article_gallery = get_field('article_gallery');
                        if ($article_gallery){
                            foreach ($article_gallery as $i => $g) { ?>
                                <a href="#7"" data-number="<?php echo $i ?>"
                                data-img="<?php echo $g['image'];?>"></a>
                            <?php }
                        }?>
                    </div>
                    <div class="imageWarp cover"></div>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12">
                <div class="articleInfo">
                    <p class="catName"><?php
                    $cats =  get_the_terms(get_the_ID(), 'article_cat');
                    $cats_count = count($cats);
                    foreach($cats as $i => $c){
                        if($i+1 < $cats_count){
                            echo $c->name. " - ";
                        }else{
                            echo $c->name;
                        }
                        
                    }
                    ?></p>
                    <h2><?php 
                    $article_tit = '{:ar}عنوان المقال{:}{:en}Article title{:}';
                    echo apply_filters('the_title', $article_tit);
                    
                    ?></h2>
                    <p class="subTitle">
                        <?= get_the_title(); ?>
                    </p>

                    <div class="sp"></div>
                    <div class="authorInfo">
                        <div class="date">
                            <h3><?php 
                                echo apply_filters('the_title', '{:ar}تاريخ النشر{:}{:en}Published at{:}');
                            ?></h3>
                            <p><?php
                               echo get_field('published_date');
                                ?></p>
                        </div>
                        <div class="writtenBy">
                            <h3><?php 
                                echo apply_filters('the_title', '{:ar}تم النشر بواسطة{:}{:en}Published by{:}');
                            ?></h3>
                            <p><?php echo get_field('author') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="articleDetails">
        <div class="container">
            <div class="col-xs-12">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

<?php get_footer() ?>
