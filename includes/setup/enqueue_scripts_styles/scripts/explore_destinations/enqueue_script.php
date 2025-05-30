<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'explore-destinations' )) {
    wp_enqueue_script( 'explore_destinations_js', ENQUEUE_SCRIPTS_DIR_URI .'/explore_destinations/explore_destinations.js', [], '0.1', true );
    wp_localize_script( 'explore_destinations_js', 'rest_api', ['base' => get_site_url() .'/wp-json']);
}