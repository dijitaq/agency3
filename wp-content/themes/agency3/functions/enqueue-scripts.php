<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Register scripts
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js', array( 'jquery' ), "6.4.3", true );

    wp_enqueue_script( 'videojs-js', 'https://cdnjs.cloudflare.com/ajax/libs/video.js/7.6.0/video.min.js', array(), "7.6.0", true );

    wp_enqueue_script( 'app-js', get_template_directory_uri() . '/assets/js/app.js', array(), filemtime(get_template_directory() . '/assets/js'), true );
       
    // Register main stylesheet
    wp_enqueue_style( 'videojs-css', 'https://cdnjs.cloudflare.com/ajax/libs/video.js/7.6.0/video-js.min.css' );

    wp_enqueue_style( 'font-awsome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css');

    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/app.css', array(), filemtime(get_template_directory() . '/assets/css'), 'all' );


    // Comment reply script for threaded comments
    // if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
    //     wp_enqueue_script( 'comment-reply' );
    // }

    
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );


    if ( is_front_page() ) {
        wp_enqueue_script( 'googlemap-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDKJIH7Ywy7JzOcsm9NhbpiRnCraSx5Dzk', null, null, true );

        wp_enqueue_script( 'scrollmagic-js', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.js', array(), "2.0.5", true );

        wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js', array(), "1.9.0", true );

        wp_enqueue_script( 'app-home-js', get_template_directory_uri() . '/assets/js/app-home.js', array(), filemtime(get_template_directory() . '/assets/js'), true );

        wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css');

    } else if ( is_single() ) {
        wp_enqueue_script( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), "3.5.7", true );

        wp_enqueue_script( 'app-single-js', get_template_directory_uri() . '/assets/js/app-single.js', array(), filemtime(get_template_directory() . '/assets/js'), true );

        wp_enqueue_style( 'fancybox-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);