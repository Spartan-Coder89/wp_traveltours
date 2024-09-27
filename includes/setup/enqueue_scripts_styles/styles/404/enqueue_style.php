<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_404()) {
  wp_enqueue_style( '404_style', ENQUEUE_STYLES_DIR_URI .'/404/404.css');
}
