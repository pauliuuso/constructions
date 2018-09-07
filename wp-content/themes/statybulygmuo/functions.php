<?php

function wpb_theme_setup()
{
    add_theme_support('post-thumbnails');
}

/**
 * @return int
 */
function set_excerpt_length()
{
    return 150;
}

add_action('after_setup_theme', 'wpb_theme_setup');
add_filter('excerpt_length', 'set_excerpt_length');
