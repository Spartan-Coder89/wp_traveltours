<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_singular('post')) {
  wp_enqueue_style( 'single_post_style', THEME_URI .'/setup/enqueue_scripts_styles/styles/single_post/single_post.css');
}
