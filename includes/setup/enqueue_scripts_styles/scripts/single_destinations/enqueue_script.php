<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_singular( 'destinations' )) {
    wp_enqueue_script( 'single_destinations_js', ENQUEUE_SCRIPTS_DIR_URI .'/single_destinations/single_destination.js', [], '0.1', true );
    wp_localize_script( 'single_destinations_js', 'rest_api', ['base' => get_site_url() .'/wp-json']);
}