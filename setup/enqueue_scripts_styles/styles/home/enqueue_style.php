<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('home')) {
  wp_enqueue_style( 'home_style', THEME_URI .'/setup/enqueue_scripts_styles/styles/home/home.css');
}
