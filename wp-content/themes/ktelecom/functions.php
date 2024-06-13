<?php
function ktelekom_assets() {
    // Подключаем CSS файл темы
    wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/main.css' );

    // Подключаем файлы Owl Carousel
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );

    // Подключаем jQuery
    wp_enqueue_script('jquery');

    // Подключаем JS Owl Carousel
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true );

    // Подключаем JS файл темы
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'owl-carousel'), null, true );
}
add_action( 'wp_enqueue_scripts', 'ktelekom_assets' );

show_admin_bar(false);