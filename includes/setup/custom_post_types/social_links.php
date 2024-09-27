<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

register_post_type('social-links', [
  'labels'               => [
    'name'               => 'Social Links',
    'singular_name'      => 'Social link',
    'menu_name'          => 'Social Links',
    'name_admin_bar'     => 'Social link',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Social link',
    'new_item'           => 'New Social link',
    'edit_item'          => 'Edit Social link',
    'view_item'          => 'View Social link',
    'all_items'          => 'All Social Links',
    'search_items'       => 'Search Social Links',
    'parent_item_colon'  => 'Parent Social Links:',
    'not_found'          => 'No social links found.',
    'not_found_in_trash' => 'No social links found in Trash.',
  ],
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'supports'           => ['title', 'thumbnail']
]);