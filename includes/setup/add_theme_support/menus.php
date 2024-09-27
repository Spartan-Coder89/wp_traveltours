<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

add_action('init', function() {
  
  add_theme_support('menus');

  if (empty(wp_get_nav_menu_object('Header Menu'))) {

    $menu_id = wp_create_nav_menu('Header Menu');

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Home'),
      'menu-item-url' => home_url( '/' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Destinations'),
      'menu-item-url' => home_url( '/explore-destinations' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('About Us'),
      'menu-item-url' => home_url( '/about-us' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Blog'),
      'menu-item-url' => home_url( '/blog' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Contact Us'),
      'menu-item-url' => home_url( '/contact-us' ),
      'menu-item-status' => 'publish'
    ) );
  }

  if (empty(wp_get_nav_menu_object('Footer Menu'))) {

    $menu_id = wp_create_nav_menu('Footer Menu');

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Home'),
      'menu-item-url' => home_url( '/' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Destinations'),
      'menu-item-url' => home_url( '/explore-destinations' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('About Us'),
      'menu-item-url' => home_url( '/about-us' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Blog'),
      'menu-item-url' => home_url( '/blog' ),
      'menu-item-status' => 'publish'
    ) );

    wp_update_nav_menu_item( $menu_id, 0, array(
      'menu-item-title' => __('Contact Us'),
      'menu-item-url' => home_url( '/contact-us' ),
      'menu-item-status' => 'publish'
    ) );
  }
});