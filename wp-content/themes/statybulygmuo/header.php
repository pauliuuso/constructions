<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
        <script src="<?php bloginfo('template_url'); ?>/js/core/jquery-3.3.1.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/tether_1.4.0.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/jquery.scrollsnap.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/jquery.scrollstop.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/slick.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/core/lottie.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/app.min.js"></script>
        <title>
            <?php bloginfo('name'); ?>
            |
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <?php wp_head(); ?>
    </head>

    <body>
