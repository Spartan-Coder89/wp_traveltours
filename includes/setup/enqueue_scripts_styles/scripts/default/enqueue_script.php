<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

wp_enqueue_script( 'alpine_js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js', [], '3.14.1', ['in_footer' => true, 'strategy'  => 'defer',] );
wp_enqueue_script( 'common_js', ENQUEUE_SCRIPTS_DIR_URI .'/default/common.js', [], '0.1', true );