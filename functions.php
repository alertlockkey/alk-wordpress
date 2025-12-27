<?php
function alertlockkey_enqueue_assets() {
    // CSS
    // wp_enqueue_style('alertlockkey-main', get_template_directory_uri() . '/assets/css/main.css?' . time(), array(), null);
    wp_enqueue_style('alertlockkey-main', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime(get_template_directory() . '/assets/css/main.css'));

    // JS
    wp_enqueue_style('alertlockkey-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css');
    wp_enqueue_style('alertlockkey-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style('alertlockkey-style', get_stylesheet_uri()); // theme style.css
    
    // JS
    wp_enqueue_script('jquery');
    wp_enqueue_script('alertlockkey-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('alertlockkey-three', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', array(), null, true);
    wp_enqueue_script('alertlockkey-browser', get_template_directory_uri() . '/assets/js/browser.min.js', array('jquery'), null, true);
    wp_enqueue_script('alertlockkey-breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array('jquery'), null, true);
    wp_enqueue_script('alertlockkey-util', get_template_directory_uri() . '/assets/js/util.js', array('jquery'), null, true);
    wp_enqueue_script('alertlockkey-scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array('jquery'), null, true);
    wp_enqueue_script('alertlockkey-scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array('jquery'), null, true);
    wp_enqueue_script('alertlockkey-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), filemtime(get_template_directory() . '/assets/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'alertlockkey_enqueue_assets');

function alertlockkey_register_menus() {
    register_nav_menus(array(
        'primary' => __('Main Menu', 'alertlockkey')
    ));
}
add_action('init', 'alertlockkey_register_menus');

function alk_theme_image( $relative_path ) {
    $full_path = get_template_directory() . $relative_path;
    $uri       = get_template_directory_uri() . $relative_path;

    if ( file_exists( $full_path ) ) {
        return $uri . '?v=' . filemtime( $full_path );
    }

    return $uri;
}


