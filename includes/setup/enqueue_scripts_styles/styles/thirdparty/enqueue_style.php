<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('home') or is_page('about-us') or is_singular('destinations')) {
  wp_enqueue_style( 'slick_css', THIRD_PARTY_DIR_URI .'/slick/slick.css' );
  wp_enqueue_style( 'slick_theme_css', THIRD_PARTY_DIR_URI .'/slick/slick-theme.css' );
}
