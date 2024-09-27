<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('home')) {
  wp_enqueue_style( 'home_style', ENQUEUE_STYLES_DIR_URI .'/home/home.css');
}
