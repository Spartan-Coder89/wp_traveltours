<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if ($current_screen->base == 'post' and $current_screen->post_type == 'destinations') {
    wp_enqueue_media(); // Enqueue WordPress Media Uploader
    wp_enqueue_script( 'destinations_js', ADMIN_ENQUEUE_SCRIPTS_DIR_URI .'/destinations/destinations.js', array( 'jquery', 'customize-controls' ), '', true );
}