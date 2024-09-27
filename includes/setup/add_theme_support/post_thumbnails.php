<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

add_action('init', function() {
  add_theme_support('post-thumbnails');
});