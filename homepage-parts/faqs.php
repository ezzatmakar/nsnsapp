<section class="qAndA" id="qAndA">
  <div class="container">
    <div class="col-xs-12">
      <div class="title">
        <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns2.svg">
        <h1><?php echo get_field('faqs_section')['title']; ?></h1>
        <img class="rightIcon" src="<?php echo get_template_directory_uri(); ?>/img/ns.svg">
      </div>
    </div>
  </div>
  <div class="container v-center">

    <div class="col-sm-6 col-xs-12 col-text">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php
        $args = [
            'post_type' => 'faq',
            'posts_per_page' => 5,
            'orderby' => 'date',
            'order' => 'ASC',
            'post_status' => 'publish',
        ];
        $i = 1;
        $faqs = new WP_Query($args);
        if ($faqs->have_posts()) {
            while ($faqs->have_posts()) {
                $faqs->the_post();
                ?>
        <div class="panel panelDefault">
          <div class="panelHeading" role="tab" id="heading<?php echo $i ?>">
            <h4 class="panelTitle">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>"
                aria-expanded="<?php echo ($i == 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $i; ?>"
                class="<?php echo ($i != 1) ? 'collapsed' : ''; ?>"><?php echo get_the_title(); ?>
                <span class="icon"></span>
              </a>
            </h4>
          </div>
          <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse <?php echo ($i == 1) ? 'in' : ''; ?>"
            role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
            <div class="panelBody">
              <p><?php echo get_field('faq_answer'); ?></p>
            </div>
          </div>
        </div>
        <?php
                $i++;
            }
        }
        wp_reset_query() ?>
      </div>

    </div>
    <div class="col-sm-5 col-sm-offset-1 col-xs-12  col-image">
      <div class="imageWarp v-bottom">
        <img class="w100" src="<?php echo get_template_directory_uri(); ?>/img/qa.svg">
        <a href="<?php echo get_page_link(33);?>" class="btnWhite">اعرف اكتر من هنا</a>
      </div>
    </div>
  </div>
</section>