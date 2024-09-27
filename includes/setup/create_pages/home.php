<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_null( get_page_by_path('home'))){

  wp_insert_post([
    'post_title'    => 'Home',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'home'
  ]);

  //  Set the home page as homepage
  $home = get_page_by_path('home');
  update_option('page_on_front', $home->ID);
  update_option('show_on_front', 'page');
}