<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('explore-destinations')) {
  wp_enqueue_style( 'explore_destinations_style', THEME_URI .'/setup/enqueue_scripts_styles/styles/explore_destinations/explore_destinations.css');
}
