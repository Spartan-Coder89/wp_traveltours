<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_null(get_page_by_path('page-not-found'))){

  wp_insert_post([
    'post_title'    => '404',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'page-not-found'
  ]);
}