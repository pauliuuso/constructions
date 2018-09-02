<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
<!--        <link rel="stylesheet" href="--><?php //bloginfo('template_url'); ?><!--/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css_3.5.2.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">
        <script src="<?php bloginfo('template_url'); ?>/js/core/jquery-3.3.1.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/tether_1.4.0.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/jquery.easing.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/jquery.scrollsnap.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/jquery.scrollstop.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/sections/general.js"></script>
        <title>
            <?php bloginfo('name'); ?>
            |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <?php wp_head(); ?>
    </head>

    <body>

<!--        <div id="main-menu" class="main-menu pr-2">-->
<!---->
<!--            <ul class="main-menu-links">-->
<!--                <li class="pointer" onclick="ScrollTo('#construction-home');">Home</li>-->
<!--                <li class="pointer" onclick="ScrollTo('#construction-about');">About</li>-->
<!--                <li class="pointer" onclick="ScrollTo('#construction-gallery');">Gallery</li>-->
<!--                <li class="pointer" onclick="ScrollTo('#construction-contacts');">Contacts</li>-->
<!--            </ul>-->
<!--        -->
<!--        </div>-->