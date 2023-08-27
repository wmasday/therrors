<?php

// Import ressource and style.css
function import_scripts_and_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'import_scripts_and_styles');


function setup_init()
{
    // Register Menu
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));

    // Add Theme Support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'setup_init');

function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);



function exerpt_title($title)
{
    $max = 63;
    $rewriteTitle = substr($title, 0, $max);
    $response = strlen($title) > $max ? $rewriteTitle . " &hellip;" : $rewriteTitle;
    return $response;
}
add_filter('the_title', 'exerpt_title', 10, 1);
