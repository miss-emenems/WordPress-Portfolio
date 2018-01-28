<?php

function porfolioSetUp() {
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', false, '1.0', 'all');
    wp_enqueue_script(
        'slick',
        get_template_directory_uri() . '/js/slick.min.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'what-input',
        get_template_directory_uri() . '/js/vendor/what-input.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'foundation',
        get_template_directory_uri() . '/js/vendor/foundation.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'incrementalNumber',
        get_template_directory_uri() . '/js/incrementalNumber.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'directional-hover',
        get_template_directory_uri() . '/js/jquery.directional-hover.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'mCustomScrollbar',
        get_template_directory_uri() . '/js/jquery.mCustomScrollbar.min.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'fontawesome',
        'https://use.fontawesome.com/629040543b.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'scrollreveal',
        'https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js',
        array('jquery'), '1.0', false
    );
    wp_enqueue_script(
        'myscript',
        get_template_directory_uri() . '/js/scripts.js',
        array('jquery'), '1.0', false
    );

}

add_action('wp_enqueue_scripts', 'porfolioSetUp');

?>