<?php

if (!function_exists('neveshtan_setup')) {

    function neveshtan_setup()
    {
        load_theme_textdomain('neveshtan', get_template_directory() . '/languages' );
        register_nav_menus(
            array(
                'drawer-nav-menu' => __('Hamburger Menu', 'neveshtan'),
                'nav-tabs' => __('Navigation Tabs', 'neveshtan')
            )
        );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'script',
                'style',
            )
        );
        add_theme_support('align-wide');
        add_theme_support('responsive-embeds');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support(
            'custom-logo',
            array(
                'height' => 36,
                'width' => 36,
                'flex-height' => false,
                'flex-width'  => true,
            )
        );
    }
}
add_action('after_setup_theme', 'neveshtan_setup');

function neveshtan_register_styles()
{
    wp_enqueue_style('neveshtan-style', get_stylesheet_uri(), array(), 1.0, 'all');
}

function neveshtan_register_scripts()
{
    wp_enqueue_script('neveshtan-script', get_template_directory_uri() . '/assets/js/script.js', array(), 1.0, true);
}

add_action('wp_enqueue_scripts', 'neveshtan_register_styles');
add_action('wp_enqueue_scripts', 'neveshtan_register_scripts');

add_filter('wpseo_remove_reply_to_com', '__return_false');

if (get_theme_mod('remove_emoji', false) === true) {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}

include_once('inc/comments-format.php');
include_once('inc/customizer.php');
include_once('inc/primary-category.php');
include_once('inc/widgets.php');
