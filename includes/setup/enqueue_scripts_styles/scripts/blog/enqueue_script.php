<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'blog' )) {
    wp_enqueue_script( 'blog_js', ENQUEUE_SCRIPTS_DIR_URI .'/blog/blog.js', [], '0.1', true );
}