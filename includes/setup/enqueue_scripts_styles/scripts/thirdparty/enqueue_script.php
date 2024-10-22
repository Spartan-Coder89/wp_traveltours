<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page('home') or is_page('about-us') or is_singular('destinations')) {
    wp_enqueue_script( 'jquery_js_js', THIRD_PARTY_DIR_URI .'/jquery/jquery.3.7.1.js', null, '3.7.1', true );
    wp_enqueue_script( 'slick_js_js', THIRD_PARTY_DIR_URI .'/slick/slick.min.js', null, '0.1', true );
}