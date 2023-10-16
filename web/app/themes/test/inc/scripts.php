<?php

/*
    Include custom scripts
*/
function ww_custom_scripts() {
    wp_deregister_script('jquery');
    wp_deregister_script('main');
    wp_deregister_script('fancybox');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/libs/jquery.min.js', null, null, ['in_footer' => false]);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], null, ['in_footer' => true]);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/assets/js/libs/fancybox.min.js', ['jquery'], null, ['in_footer' => true]);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/libs/swiper.min.js', ['jquery'], null, ['in_footer' => true]);
}

add_action('wp_enqueue_scripts', 'ww_custom_scripts');



/*
    Include custom styles depending on the device type
*/

add_action('wp_enqueue_scripts', function () {
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/style.css');
}, 10);


/*
    Include fancybox styles
*/
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/libs/fancybox.css');
}, 10);

/*
    Include swiper styles
*/
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/assets/css/libs/swiper.css');
}, 10);

/*
    Include fonts styles
*/
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('main-font', get_template_directory_uri() . '/assets/fonts/GothamPro/stylesheet.css');
}, 10);