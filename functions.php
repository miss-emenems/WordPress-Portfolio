<?php

function porfolioSetUp() {
    //wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', false, '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'porfolioSetUp');




?>