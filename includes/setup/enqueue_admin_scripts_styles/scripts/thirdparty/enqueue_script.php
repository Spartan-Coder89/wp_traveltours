<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (($current_screen->base == 'post' and $current_screen->post_type == 'destinations') or $current_screen->base == 'toplevel_page_appointments') {
    wp_enqueue_script( 'alpine_js', 'https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js', [], '3.14.1', ['in_footer' => true, 'strategy'  => 'defer',] );
}