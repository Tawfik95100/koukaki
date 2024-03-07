<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
    //Ajout du style du théme enfant
    wp_enqueue_style( 'enfant-style', get_stylesheet_directory_uri() . '/sass/koukaki.css' );
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

function swiper_cdn(){
    wp_enqueue_style('swiper_css','https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css',array(),'11.0.5');
    wp_enqueue_script('swiper_js','https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js',array(),'11.0.5',true);
}
add_action('wp_enqueue_scripts','swiper_cdn');

function load_js(){
    
    wp_enqueue_script('parallaxe',get_stylesheet_directory_uri() . '/js/parallaxe.js',array(),'1.0.0', true);
    wp_enqueue_script('nuage',get_stylesheet_directory_uri() . '/js/animation_nuage.js',array(),'1.0.0', true);
    wp_enqueue_script('swiper',get_stylesheet_directory_uri() . '/js/swiper.js',array(),'1.0.0', true);
    wp_enqueue_script('menuburger',get_stylesheet_directory_uri() . '/js/menuburger.js',array(),'1.0.0', true);
    wp_enqueue_script('fleurs',get_stylesheet_directory_uri() . '/js/fleurs_scroll.js',array(),'1.0.0', true);
    wp_enqueue_script('sections',get_stylesheet_directory_uri() . '/js/fadeSection.js',array(),'1.0.0', true);
}

add_action('wp_enqueue_scripts','load_js');

