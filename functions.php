<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

define('THEME_DIR', get_template_directory());
define('THIRD_PARTY_DIR', get_template_directory() .'/assets/thirdparty');
define('THEME_URI', get_template_directory_uri());
define('THIRD_PARTY_DIR_URI', get_template_directory_uri() .'/assets/thirdparty');

include_once THEME_DIR .'/setup/setup.php';