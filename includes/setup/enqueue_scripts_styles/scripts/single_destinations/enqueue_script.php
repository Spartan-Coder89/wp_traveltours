<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_singular( 'destinations' )) {
    wp_enqueue_script( 'single_destinations_js', ENQUEUE_SCRIPTS_DIR_URI .'/single_destinations/single_destination.js', [], '0.1', true );
}