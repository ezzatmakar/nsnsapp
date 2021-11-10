<?php

/**
 * remove WordPress editor from specific pages by
 *
 * @author Ezzat MAakar
 */
function remove_editor()
{
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        if ($template == 'Template-home.php') {
            remove_post_type_support('page', 'editor');
        }
        if ($template == 'Template-FAQs.php') {
            remove_post_type_support('page', 'editor');
        }
    }
}

add_action('init', 'remove_editor');

add_theme_support('post-thumbnails');

// Include the styles
function theme_add_styles()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . "/css/bootstrap.min.css", array());
    if (class_exists('WPGlobus') && WPGlobus::Config()->language !== 'en') {
        wp_enqueue_style('bootstrap-rtl', get_stylesheet_directory_uri() . "/css/bootstrap-rtl.min.css", array());
        wp_enqueue_style('carousel', get_stylesheet_directory_uri() . "/css/owl.carousel.min.css", array());
        wp_enqueue_style('magnific', get_stylesheet_directory_uri() . "/css/magnific-popup.css", array());
        wp_enqueue_style('rtl', get_stylesheet_directory_uri() . "/css/style.min.css", array(), '1.0.6');
    }else{
        wp_enqueue_style('carousel', get_stylesheet_directory_uri() . "/css/owl.carousel.min.css", array());
        wp_enqueue_style('magnific', get_stylesheet_directory_uri() . "/css/magnific-popup.css", array());
        wp_enqueue_style('main', get_stylesheet_directory_uri() . "/css/style.min.css", array(), '1.0.4');
        wp_enqueue_style('ltr', get_stylesheet_directory_uri() . "/css/style-ltr.min.css", array(), '1.0.3');
    }
    wp_enqueue_style('custom', get_stylesheet_directory_uri() . "/css/custom.css", array(), '1.0.2');
}
add_action('wp_enqueue_scripts', 'theme_add_styles');

// Include scripts
function theme_add_scripts()
{
    wp_deregister_script('jquery'); // deregister the default WordPress jQuery
    wp_register_script('jquery', get_stylesheet_directory_uri() . "/js/jquery.min.js", false, null, true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('carousel', get_stylesheet_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_enqueue_script('magnific-popup', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('validate', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), null, true);
    wp_enqueue_script('messages_ar', get_stylesheet_directory_uri() . '/js/messages_ar.js', array('jquery'), null, true);
    wp_enqueue_script('grids', get_stylesheet_directory_uri() . '/js/grids.min.js', array(), null, true);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0.7', true);
}
add_action('wp_enqueue_scripts', 'theme_add_scripts');

// Add menu support to my custom theme
add_theme_support('menus');
function wpb_custom_new_menu() {
    register_nav_menus(
        array(
            'my-custom-menu' => __( 'Brief urls' ),
            'extra-menu' => __( 'Important urls' )
        )
    );
}
add_action( 'init', 'wpb_custom_new_menu' );


// General theme settings
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{
    // Check function exists.
    if (function_exists('acf_add_options_page')) {
        // Register options page.
        $parent = acf_add_options_page(array(
            'page_title' => __('General Settings'),
            'menu_title' => __('General Settings'),
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ));
        acf_add_options_sub_page(array(
            'page_title'  => __('Contact details Settings'),
            'menu_title'  => __('Contact details'),
            'parent_slug' => $parent['menu_slug'],
            'capability' => 'edit_posts',
            'redirect' => false
        ));
    }
}

function languageSwitcher(): void
{
    if (class_exists('WPGlobus')) { ?>
        <div class="dropdown">  <?php

            /**
             * Filter that prevent using language that has `draft` status.
             * That works with module `Publish` from WPGlobus Plus add-on.
             */
            $enabled_languages = apply_filters('wpglobus_extra_languages', WPGlobus::Config()->enabled_languages, WPGlobus::Config()->language);
            $current_lang = WPGlobus::Config()->language;

            ?>
            <button class="dropdown-toggle" type="button" id="langMenu" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="true">
                <span class="ico icon-angle-down"></span>
                <span class="hidden-sm hidden-xs"><?php echo WPGlobus::Config()->en_language_name[$current_lang]; ?></span>
                <span class="hidden-md hidden-lg"><span class="icon-globe"></span></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="langMenu">
                <?php
                foreach ($enabled_languages as $index => $language):
                    if ($language != WPGlobus::Config()->language) {
                        $url = WPGlobus_Utils::localize_current_url($language);
                        $nameOfLanguage = WPGlobus::Config()->en_language_name[$language];
                        ?>
                        <li><a href="<?= $url; ?>"><?php echo $nameOfLanguage ?></a></li>
                    <?php }
                endforeach;
                ?>
            </ul>
        </div>
    <?php }
}

function generalSettings(): array
{
    $settingsArr = [];
    $settingsArr['title'] = (WPGlobus::Config()->language === 'en') ? get_field('social_media_title_english', 'options') : get_field('social_media_title_arabic', 'options');
    $settingsArr['facebook'] = get_field('facebook', 'options');
    $settingsArr['youtube'] = get_field('youtube', 'options');
    $settingsArr['instagram'] = get_field('instagram', 'options');
    $settingsArr['twitter'] = get_field('twitter', 'options');
    $settingsArr['android'] = get_field('android', 'options');
    $settingsArr['ios'] = get_field('ios', 'options');

    return $settingsArr;
}

function contactDetails(){
    if ( WPGlobus::Config()->language !== 'en'){
        $details = get_field('contact_details_ar', 'options');
    }else {
        $details = get_field('contact_details_english', 'options');
    }
    return $details;
}

function applicationTitle(){
    if ( WPGlobus::Config()->language !== 'en'){
        $title = get_field('application_title_arabic', 'options');
    }else {
        $title = get_field('application_title', 'options');
    }
    return $title;
}

function topMenuText(){
    if ( WPGlobus::Config()->language !== 'en'){
        $arabic_menu = get_field('arabic', 'options');
        return $arabic_menu;
    }else {
        $english_menu = get_field('english', 'options');
        return $english_menu;
    }
}


// add_action('rest_api_init', function () {
//     register_rest_route('wp/v2', '/articles/(?P<category>\d+)', [
//         'methods' => 'GET',
//         'callback' => 'getArticles',
//         'args' => array(
//             'category' => array(
//               'validate_callback' => function($param, $request, $key) {
//                 return is_numeric( $param );
//               }
//             ),
//         ),
//     ]);
// });

// function getArticles($cat, $paged){
//     $output = [];
//     $category_term_id = ($cat) ? $cat : "";
//     $pageNumber = ($paged) ? $paged : 1;

//     if($cat && $cat !== ""){
//         $args = [
//             'post_type' => 'article',
//             'posts_per_page' => 2,
//             'post_status' => 'publish',
//             'paged' => $pageNumber,
//             'tax_query' => array(
//                 array(
//                     'taxonomy' => 'article_cat',
//                     'field' => 'term_id',
//                     'terms' => $category_term_id
//                 ),
//             ),
//         ];
//     }else{
//         $args = [
//             'post_type' => 'article',
//             'posts_per_page' => 2,
//             'post_status' => 'publish',
//             'paged' => $pageNumber,
//         ];
//     }
    
//     $articles = new WP_Query($args);
//     if ($articles->have_posts()) {
//         while ($articles->have_posts()) {
//             $articles->the_post();
//             $all_articles['premalink'] = get_the_permalink();
//             $all_articles['image'] = get_the_post_thumbnail_url();
//             $all_articles['published_date'] = get_field('published_date');
//             $all_articles['title'] =  get_the_title();

//             $output[] = $all_articles;
//         }
//     }
//     wp_send_json(['data' => $output]);
// }


