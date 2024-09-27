<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'home' )) {
    wp_enqueue_script( 'home_js', ENQUEUE_SCRIPTS_DIR_URI .'/home/home.js', [], '0.1', true );
}