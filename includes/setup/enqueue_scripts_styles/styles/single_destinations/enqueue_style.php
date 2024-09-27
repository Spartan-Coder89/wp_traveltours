<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_singular('destinations')) {
  wp_enqueue_style( 'single_destinations_style', ENQUEUE_STYLES_DIR_URI .'/single_destinations/single_destination.css');
}
