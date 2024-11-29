<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'appointment' )) {
    wp_enqueue_script( 'appointment_js', ENQUEUE_SCRIPTS_DIR_URI .'/appointment/appointment.js', [], '0.1', true );
    wp_localize_script( 'appointment_js', 'localized', ['site_url' => get_site_url()]);
}