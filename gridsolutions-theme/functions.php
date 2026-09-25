<?php
/**
 * Grid Solutions Theme Functions
 */

if (!defined('ABSPATH')) {
    exit;
}

function gridsolutions_setup() {
    // Ondersteuning voor document title tag door WordPress
    add_theme_support('title-tag');

    // Ondersteuning voor uitgelichte afbeeldingen (featured images)
    add_theme_support('post-thumbnails');

    // HTML5 markup support
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Navigatiemenu's registreren
    register_nav_menus(array(
        'primary' => __('Hoofdmenu', 'gridsolutions'),
        'footer'  => __('Footermenu', 'gridsolutions')
    ));
}
add_action('after_setup_theme', 'gridsolutions_setup');

function gridsolutions_scripts() {
    // Enqueue theme stylesheet
    wp_enqueue_style('gridsolutions-style', get_stylesheet_uri(), array(), '1.0.0');

    // Enqueue main script
    if (file_exists(get_template_directory() . '/assets/js/main.js')) {
        wp_enqueue_script('gridsolutions-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'gridsolutions_scripts');

/**
 * Helper om dynamische link op te halen voor bekende pagina slugs
 */
function gridsolutions_get_page_url($slug, $fallback = '') {
    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page->ID);
    }
    return home_url('/' . ($fallback ?: $slug . '/'));
}
