<?php

/**
 * Disable WordPress emojis
 */
function marcello_basic_theme_disable_wp_emojis() {
    // Remove emoji detection script
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    // Remove from admin as well
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');

    // Disable TinyMCE emoji plugin
    add_filter('tiny_mce_plugins', function ($plugins) {
        if (is_array($plugins)) {
            return array_diff($plugins, ['wpemoji']);
        }
        return [];
    });

    // Remove DNS prefetch for emojis
    add_filter('emoji_svg_url', '__return_false');
}
add_action('init', 'marcello_basic_theme_disable_wp_emojis');

/**
 * Remove default post type menu from admin dashboard
 */
function marcello_basic_theme_remove_default_post_type_menu() {
    remove_menu_page('edit.php'); // Posts
}
add_action('admin_menu', 'marcello_basic_theme_remove_default_post_type_menu');

/**
 * Disable theme file editor
 */
function marcello_basic_theme_disable_theme_file_editor() {
    define('DISALLOW_FILE_EDIT', true);
}
add_action('init', 'marcello_basic_theme_disable_theme_file_editor');

/**
 * Disable default block patterns
 */
function marcello_basic_theme_disable_default_block_patterns() {
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'marcello_basic_theme_disable_default_block_patterns');

/**
 * Remove customizer additional CSS section
 */
function marcello_basic_theme_remove_customizer_additional_css($wp_customize) {
    $wp_customize->remove_section('custom_css');
}
add_action('customize_register', 'marcello_basic_theme_remove_customizer_additional_css', 20);

/**
 * Force Classic Editor instead of Gutenberg
 */
function marcello_basic_theme_force_classic_editor() {
    // Disable Gutenberg completely
    add_filter('use_block_editor_for_post', '__return_false', 10);

    // Disable Gutenberg for widgets too (optional but recommended)
    add_filter('use_widgets_block_editor', '__return_false');
}
add_action('init', 'marcello_basic_theme_force_classic_editor');