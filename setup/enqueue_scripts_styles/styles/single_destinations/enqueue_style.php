<?php

if (is_singular('destinations')) {
  wp_enqueue_style( 'single_destinations_style', THEME_URI .'/setup/enqueue_scripts_styles/styles/single_destinations/single_destination.css');
}
