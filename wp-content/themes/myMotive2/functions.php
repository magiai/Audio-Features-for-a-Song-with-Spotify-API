<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');

function enqueue_script() {


    //wp_enqueue_script(
//        'bootstrap',
//        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.bundle.min.js',
//        ['jquery', 'popper'],
//        '1.0.0',
//        true);
//
//    wp_enqueue_style(
//        'bootstrap',
//        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css',
//        null,
//        true);
//
//
//    wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js',['jquery']);
//
//    wp_enqueue_style('slick','https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
//
//    wp_enqueue_style ('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');



    wp_enqueue_style(
        'scss',
        get_stylesheet_directory_uri() . '/css/style.css',
        //zwracanie ścieżki do naszego motywu
        [],
        true);

    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/js/app.js',
        ['jquery'], null, true);

    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/authorization_code/app.js',
        ['jquery'], null, true);

    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/client_credentials/app.js',
        ['jquery'], null, true);

    wp_enqueue_script('app', get_stylesheet_directory_uri() . '/implicit_grant/app.js',
        ['jquery'], null, true);
}
add_action( 'wp_enqueue_scripts' , 'enqueue_script' );


