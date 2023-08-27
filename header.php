<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="<?php bloginfo('url'); ?>" class="navbar-brand"><?php echo get_theme_mod('sitename', 'Therrors;'); ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#isTogglerNav" aria-controls="isTogglerNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                $args = array(
                    'theme_location'  => 'primary',
                    'menu_class'      => 'menu-wrapper',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'isTogglerNav',
                    'items_wrap'      => '<ul class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>',
                    'add_li_class'    => 'nav-item',
                    'link_class'      => 'nav-link'
                );
                wp_nav_menu($args);
                ?>

                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>