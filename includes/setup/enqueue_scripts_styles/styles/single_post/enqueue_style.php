<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_singular('post')) {
  wp_enqueue_style( 'single_post_style', ENQUEUE_STYLES_DIR_URI .'/single_post/single_post.css');
}
