<?php

if (is_page('home') or is_singular('destinations')) {
  wp_enqueue_style( 'slick_js', THIRD_PARTY_DIR_URI .'/slick/slick.css' );
  wp_enqueue_style( 'slick_theme_js', THIRD_PARTY_DIR_URI .'/slick/slick-theme.css' );
}
