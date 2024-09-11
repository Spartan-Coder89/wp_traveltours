<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'home' )) {
    wp_enqueue_script( 'home_js', THEME_URI .'/setup/enqueue_scripts_styles/scripts/home/home.js', [], '0.1', true );
}