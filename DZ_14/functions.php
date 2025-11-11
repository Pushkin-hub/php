<?php
function polygon_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => 'Основное меню'
    ));
}
add_action('after_setup_theme', 'polygon_theme_setup');

function polygon_theme_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;500&display=swap');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'polygon_theme_scripts');

function create_testimonials_post_type() {
    register_post_type('testimonials',
        array(
            'labels' => array(
                'name' => __('Отзывы'),
                'singular_name' => __('Отзыв')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail'),
            'menu_icon' => 'dashicons-testimonial'
        )
    );
}
add_action('init', 'create_testimonials_post_type');
?>