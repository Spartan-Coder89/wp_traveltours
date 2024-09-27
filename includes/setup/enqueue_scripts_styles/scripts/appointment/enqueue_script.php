<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'appointment' )) {
    wp_enqueue_script( 'about_us_js', ENQUEUE_SCRIPTS_DIR_URI .'/appointment/appointment.js', [], '0.1', true );
}