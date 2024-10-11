<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if ($current_screen->base == 'post' and $current_screen->post_type == 'destinations') {
    wp_enqueue_style( 'destinations_style', ADMIN_ENQUEUE_STYLES_DIR_URI .'/destinations/destinations.css');
}