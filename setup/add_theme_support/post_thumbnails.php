<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

add_action('after_setup_theme', function() {
  add_theme_support('post-thumbnails');
});