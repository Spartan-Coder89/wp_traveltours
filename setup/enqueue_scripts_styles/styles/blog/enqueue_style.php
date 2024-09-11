<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('blog')) {
  wp_enqueue_style( 'blog_style', THEME_URI .'/setup/enqueue_scripts_styles/styles/blog/blog.css');
}
