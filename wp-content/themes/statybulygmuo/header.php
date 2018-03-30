<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css_3.5.2.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <script src="<?php bloginfo('template_url'); ?>/js/jquery-3.3.1.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/tether_1.4.0.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/fontawesome_v5.0.6.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/scripts.js"></script>
        <title>
            <?php bloginfo('name'); ?> 
            | 
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <?php wp_head(); ?>
    </head>

    <body>