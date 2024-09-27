<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

register_post_type('booking-conditions', [
  'labels'               => [
    'name'               => 'Booking Conditions',
    'singular_name'      => 'Booking Condition',
    'menu_name'          => 'Booking Conditions',
    'name_admin_bar'     => 'Booking Condition',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Booking Condition',
    'new_item'           => 'New Booking Condition',
    'edit_item'          => 'Edit Booking Condition',
    'view_item'          => 'View Booking Condition',
    'all_items'          => 'All Booking Conditions',
    'search_items'       => 'Search Booking Conditions',
    'parent_item_colon'  => 'Parent Booking Conditions:',
    'not_found'          => 'No conditions found.',
    'not_found_in_trash' => 'No conditions found in Trash.',
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
  'supports'           => ['editor']
]);