<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

if (is_page( 'blog' )) {
    wp_enqueue_script( 'blog_js', THEME_URI .'/setup/enqueue_scripts_styles/scripts/blog/blog.js', [], '0.1', true );
}