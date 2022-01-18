<?php
if (!function_exists('universal_theme_setup')) :
    function universal_theme_setup()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'width' => 163,
            'flex-height' => true,
            'header-text' => 'Universal',
            'unlink-homepage-logo' => false,
        ]);
        register_nav_menus([
            'header_menu' => 'Header Menu',
            'footer_menu' => 'Footer Menu'
        ]);
    }
endif;

add_action('after_setup_theme', 'universal_theme_setup');

function enqueue_universal_style()
{
    wp_enqueue_style('font-Lato', "https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap");
    wp_enqueue_style('font-Roboto', "https://fonts.googleapis.com/css2?family=Lato:wght@100;300&family=Roboto+Slab:wght@700&display=swap");
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('universal-theme',
        get_template_directory_uri() . '/assets/css/universal-theme.css', 'style');
    wp_enqueue_script('main-universal-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), '1.0', true);

}

add_action('wp_enqueue_scripts', 'enqueue_universal_style');