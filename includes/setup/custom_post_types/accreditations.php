<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

register_post_type('accreditations', [
  'labels'               => [
    'name'               => 'Accreditations',
    'singular_name'      => 'Accreditation',
    'menu_name'          => 'Accreditations',
    'name_admin_bar'     => 'Accreditation',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Accreditation',
    'new_item'           => 'New Accreditation',
    'edit_item'          => 'Edit Accreditation',
    'view_item'          => 'View Accreditation',
    'all_items'          => 'All Accreditations',
    'search_items'       => 'Search Accreditations',
    'parent_item_colon'  => 'Parent Accreditations:',
    'not_found'          => 'No accreditations found.',
    'not_found_in_trash' => 'No accreditations found in Trash.',
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
  'supports'           => ['title', 'editor', 'thumbnail']
]);