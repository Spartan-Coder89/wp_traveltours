<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('about-us')) {
  wp_enqueue_style( 'slick_js', THIRD_PARTY_DIR_URI .'/slick/slick.css' );
  wp_enqueue_style( 'slick_theme_js', THIRD_PARTY_DIR_URI .'/slick/slick-theme.css' );
  wp_enqueue_style( 'about_us_style', ENQUEUE_STYLES_DIR_URI .'/about_us/about_us.css');
}
