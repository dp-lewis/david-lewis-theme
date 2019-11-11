<?php
add_theme_support( 'post-thumbnails' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function my_deregister_scripts(){
    wp_dequeue_script( 'wp-embed' );
}
   add_action( 'wp_footer', 'my_deregister_scripts' );

function remove_block_css(){
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_css', 100 );