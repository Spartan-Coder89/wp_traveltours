<?php

register_post_type('destinations', [
  'labels'               => [
    'name'               => 'Destinations',
    'singular_name'      => 'Destination',
    'menu_name'          => 'Destinations',
    'name_admin_bar'     => 'Destination',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Destination',
    'new_item'           => 'New Destination',
    'edit_item'          => 'Edit Destination',
    'view_item'          => 'View Destination',
    'all_items'          => 'All Destinations',
    'search_items'       => 'Search Destinations',
    'parent_item_colon'  => 'Parent Destinations:',
    'not_found'          => 'No destinations found.',
    'not_found_in_trash' => 'No destinations found in Trash.',
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
  'supports'           => ['title', 'editor', 'thumbnail', 'excerpt']
]);