<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_404()) {
  wp_enqueue_style( 'about_us_style', THEME_URI .'/setup/enqueue_scripts_styles/styles/404/404.css');
}
