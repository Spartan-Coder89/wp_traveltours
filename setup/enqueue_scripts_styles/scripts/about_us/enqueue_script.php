<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'about-us' )) {
    wp_enqueue_script( 'about_us_js', THEME_URI .'/setup/enqueue_scripts_styles/scripts/about_us/about_us.js', [], '0.1', true );
}