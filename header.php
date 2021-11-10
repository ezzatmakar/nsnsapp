<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>NsNs</title>

    <link rel="apple-touch-icon" sizes="180x180"
          href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32"
          href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16"
          href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/safari-pinned-tab.svg"
          color="#110066">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#110066">
    <meta name="msapplication-config" content="<?php echo get_stylesheet_directory_uri(); ?>/favicon/browserconfig.xml">
    <meta name="theme-color" content="#110066">


    <!-- CSS -->
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
    <div class="container v-center">
        <div class="col-sm-3 col-xs-4 hidden-md hidden-lg">
            <div class="mobMenu">
                <span class="lone"></span>
                <span class="ltwo"></span>
                <span class="lthree"></span>
            </div>
        </div>
        <div class="col-md-1 col-sm-6 col-xs-4">
            <div class="logo">
                <a href="<?php bloginfo('url'); ?>">
                    <?php
                    $image = get_field('logo', 'option'); ?>
                    <img src="<?php echo (!empty($image)) ? $image['url'] : 'NSNS'; ?>"
                         alt="<?php echo (!empty($image)) ? $image['alt'] : 'NSNS'; ?>"></a>
            </div>
        </div>
        <div class="col-md-9 hidden-sm hidden-xs">
            <span class="pcMenuPos"></span>
            <div class="mainMenu">
                <ul>
                    <?php $top_menu = topMenuText();
                    if (get_the_ID() === 10){
                    ?>
                        <li><a href="#about"><?= $top_menu['about_nsns_text']; ?></a></li>
                        <li><a href="#whyNs"><?= $top_menu['advantages_text']; ?></a></li>
                        <li><a href="#testimonials"><?= $top_menu['testimonials_text']; ?></a></li>
                        <li><a href="#qAndA"><?= $top_menu['faqs_text']; ?></a></li>
                        <li><a href="#contactUs"><?= $top_menu['contact_us_text']; ?></a></li>
                        <li><a href="#blogs"><?= $top_menu['articles_text']; ?></a></li>

                    <?php
                    }else{
                        ?>
                        <li><a href="<?php echo get_permalink(10);?>#about"><?= $top_menu['about_nsns_text']; ?></a></li>
                        <li><a href="<?php echo get_permalink(10);?>#whyNs"><?= $top_menu['advantages_text']; ?></a></li>
                        <li><a href="<?php echo get_permalink(10);?>#testimonials"><?= $top_menu['testimonials_text']; ?></a></li>
                        <li><a href="<?php echo get_permalink(10);?>#qAndA"><?= $top_menu['faqs_text']; ?></a></li>
                        <li><a href="<?php echo get_permalink(10);?>#contactUs"><?= $top_menu['contact_us_text']; ?></a></li>
                        <li><a href="<?php echo get_permalink(10);?>#blogs"><?= $top_menu['articles_text']; ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-4">
            <div class="lang">
                <?php languageSwitcher(); ?>
            </div>
        </div>
    </div>
    <div class="menuContent"><span class="mobMenuPos"></span></div>
</header>
<div class="pageWarp">
