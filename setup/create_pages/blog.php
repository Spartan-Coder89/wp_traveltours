<?php

if (is_null(get_page_by_path('blog'))){

  wp_insert_post([
    'post_title'    => 'Blog',
    'post_content'  => '',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_type'     => 'page',
    'post_name'     => 'blog'
  ]);
}