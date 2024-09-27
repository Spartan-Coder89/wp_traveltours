<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('explore-destinations')) {
  wp_enqueue_style( 'explore_destinations_style', ENQUEUE_STYLES_DIR_URI .'/explore_destinations/explore_destinations.css');
}
