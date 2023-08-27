<?php

// Start - Import ressource and style.css
function import_scripts_and_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri()); // Call style.css
    wp_enqueue_style('bootstrap', get_stylesheet_uri() . '/src/bootstrap.min.css');
    wp_enqueue_script('bootstrap', get_stylesheet_directory_uri() . '/src/js/bootstrap.min.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'import_scripts_and_styles');
// End - Import ressource and style.css


// Start - Setup Init
function setup_init()
{
    register_nav_menus(array(
        'primary' => 'Primary Menu',
    )); // Register Menu

    add_theme_support('post-thumbnails'); // Add Theme Support For Post Thumbnail
}
add_action('after_setup_theme', 'setup_init');
// End - Setup Init


// Start - Add Class On 'li' In Nav Menu
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
// End - Add Class On 'li' In Nav Menu


// Start - Add Class On 'a' In Nav Menu
function add_menu_link_class($atts, $item, $args)
{
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);
// End - Add Class On 'a' In Nav Menu


// Start - Excerpt Title Post
function exerpt_title($title)
{
    $max = 63;
    $rewriteTitle = substr($title, 0, $max);
    $response = strlen($title) > $max ? $rewriteTitle . " &hellip;" : $rewriteTitle;
    return $response;
}
add_filter('the_title', 'exerpt_title', 10, 1);
// End - Excerpt Title Post