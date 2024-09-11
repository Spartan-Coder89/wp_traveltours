<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

register_taxonomy('destinations', ['destinations'], [
  'labels'                       => [
    'name'                       => 'Destinations',
    'singular_name'              => 'Destination',
    'menu_name'                  => 'Destinations',
    'all_items'                  => 'All Destinations',
    'parent_item'                => 'Parent Destination',
    'parent_item_colon'          => 'Parent Destination:',
    'new_item_name'              => 'New Destination Name',
    'add_new_item'               => 'Add New Destination',
    'edit_item'                  => 'Edit Destination',
    'update_item'                => 'Update Destination',
    'view_item'                  => 'View Destination',
    'separate_items_with_commas' => 'Separate Destinations with commas',
    'add_or_remove_items'        => 'Add or remove Destinations',
    'choose_from_most_used'      => 'Choose from the most used Destinations',
    'popular_items'              => 'Popular Destinations',
    'search_items'               => 'Search Destinations',
    'not_found'                  => 'No Destinations found.',
  ],
  'public'            => true,
  'hierarchical'      => true,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
]);

register_taxonomy('activities', ['destinations'], [
  'labels'                       => [
    'name'                       => 'Activities',
    'singular_name'              => 'Activity',
    'menu_name'                  => 'Activities',
    'all_items'                  => 'All Activities',
    'parent_item'                => 'Parent Activity',
    'parent_item_colon'          => 'Parent Activity:',
    'new_item_name'              => 'New Activity Name',
    'add_new_item'               => 'Add New Activity',
    'edit_item'                  => 'Edit Activity',
    'update_item'                => 'Update Activity',
    'view_item'                  => 'View Activity',
    'separate_items_with_commas' => 'Separate Activities with commas',
    'add_or_remove_items'        => 'Add or remove Activities',
    'choose_from_most_used'      => 'Choose from the most used Activities',
    'popular_items'              => 'Popular Activities',
    'search_items'               => 'Search Activities',
    'not_found'                  => 'No Activities found.',
  ],
  'public'            => true,
  'hierarchical'      => true,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
]);

register_taxonomy('trip_types', ['destinations'], [
  'labels'                       => [
    'name'                       => 'Trip Types',
    'singular_name'              => 'Trip Type',
    'menu_name'                  => 'Trip Types',
    'all_items'                  => 'All Trip Types',
    'parent_item'                => 'Parent Trip Type',
    'parent_item_colon'          => 'Parent Trip Type:',
    'new_item_name'              => 'New Trip Type Name',
    'add_new_item'               => 'Add New Trip Type',
    'edit_item'                  => 'Edit Trip Type',
    'update_item'                => 'Update Trip Type',
    'view_item'                  => 'View Trip Type',
    'separate_items_with_commas' => 'Separate Trip Types with commas',
    'add_or_remove_items'        => 'Add or remove Trip Types',
    'choose_from_most_used'      => 'Choose from the most used Trip Types',
    'popular_items'              => 'Popular Trip Types',
    'search_items'               => 'Search Trip Types',
    'not_found'                  => 'No Trip Types found.',
  ],
  'public'            => true,
  'hierarchical'      => true,
  'show_ui'           => true,
  'show_admin_column' => true,
  'query_var'         => true,
]);