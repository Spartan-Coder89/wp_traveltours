<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

register_post_type('testimonials', [
  'labels'               => [
    'name'               => 'Testimonials',
    'singular_name'      => 'Testimonial',
    'menu_name'          => 'Testimonials',
    'name_admin_bar'     => 'Testimonial',
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Testimonial',
    'new_item'           => 'New Testimonial',
    'edit_item'          => 'Edit Testimonial',
    'view_item'          => 'View Testimonial',
    'all_items'          => 'All Testimonials',
    'search_items'       => 'Search Testimonials',
    'parent_item_colon'  => 'Parent Testimonials:',
    'not_found'          => 'No testimonials found.',
    'not_found_in_trash' => 'No testimonials found in Trash.',
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
  'supports'           => ['title', 'thumbnail', 'editor']
]);