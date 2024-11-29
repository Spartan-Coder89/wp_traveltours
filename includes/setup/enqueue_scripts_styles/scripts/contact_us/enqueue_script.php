<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'contact-us' )) {
    wp_enqueue_script( 'contact_us_js', ENQUEUE_SCRIPTS_DIR_URI .'/contact_us/contact_us.js', [], '0.1', true );
    wp_localize_script( 'contact_us_js', 'localized', ['site_url' => get_site_url()]);
}