<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('blog')) {
  wp_enqueue_style( 'blog_style', ENQUEUE_STYLES_DIR_URI .'/blog/blog.css');
}
