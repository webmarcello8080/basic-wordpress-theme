<?php

/**
 * Theme setup
 */
function marcello_basic_theme_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('menus');
    add_theme_support('html5', [
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    add_theme_support('customize-selective-refresh-widgets');

    register_nav_menus([
        'primary' => __('Primary Menu', 'marcello-basic-theme'),
        'footer' => __('Footer Menu', 'marcello-basic-theme')
    ]);
}
add_action('after_setup_theme', 'marcello_basic_theme_setup');

/**
 * Enqueue scripts and styles
 */
function marcello_basic_theme_assets()
{
    $theme_version = filemtime(get_template_directory() . '/dist/js/app.min.js');

    wp_enqueue_style(
        'marcello-basic-theme-style',
        get_template_directory_uri() . '/dist/css/app.min.css',
        [],
        $theme_version
    );

    wp_enqueue_script(
        'marcello-basic-theme-script',
        get_template_directory_uri() . '/dist/js/app.min.js',
        [],
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'marcello_basic_theme_assets');

/**
 * Disable Gutenberg block styles if desired
 */
function marcello_basic_theme_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
}
add_action('wp_enqueue_scripts', 'marcello_basic_theme_remove_wp_block_library_css', 100);