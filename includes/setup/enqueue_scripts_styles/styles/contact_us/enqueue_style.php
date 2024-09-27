<?php

if ( !defined( 'ABSPATH' ) ) {
  die;
}

if (is_page('contact-us')) {
  wp_enqueue_style( 'contact_us_style', ENQUEUE_STYLES_DIR_URI .'/contact_us/contact_us.css');
}
