<?php

if ( !defined( 'ABSPATH' ) ) {
    die;
}

define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THIRD_PARTY_DIR', get_template_directory() .'/assets/thirdparty');
define('THIRD_PARTY_DIR_URI', get_template_directory_uri() .'/assets/thirdparty');
define('THEME_INCLUDES_DIR', get_template_directory() .'/includes');
define('ENQUEUE_STYLES_DIR_URI', get_template_directory_uri() .'/includes/setup/enqueue_scripts_styles/styles');
define('ADMIN_ENQUEUE_STYLES_DIR_URI', get_template_directory_uri() .'/includes/setup/enqueue_admin_scripts_styles/styles');
define('ENQUEUE_SCRIPTS_DIR_URI', get_template_directory_uri() .'/includes/setup/enqueue_scripts_styles/scripts');
define('ADMIN_ENQUEUE_SCRIPTS_DIR_URI', get_template_directory_uri() .'/includes/setup/enqueue_admin_scripts_styles/scripts');
define('ENQUEUE_CUSTOMIZER_SCRIPTS_DIR_URI', get_template_directory_uri() .'/includes/setup/enqueue_customizer_scripts');

include_once THEME_DIR .'/includes/setup/setup.php';
include_once THEME_DIR .'/includes/customizer/customizer.php';
include_once THEME_DIR .'/includes/helper_functions/helper_functions.php';
include_once THEME_DIR .'/includes/save_metadata/save_metadata.php';
include_once THEME_DIR .'/includes/form_actions/form_actions.php';