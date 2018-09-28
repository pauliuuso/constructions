<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.min.css">
        <script type="text/javascript">
            var theme_url = "<?php echo get_stylesheet_directory_uri(); ?>";
        </script>
        <script src="<?php bloginfo('template_url'); ?>/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/app.min.js"></script>
        <title>
            <?php bloginfo('name'); ?>
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
    </head>

    <body>
