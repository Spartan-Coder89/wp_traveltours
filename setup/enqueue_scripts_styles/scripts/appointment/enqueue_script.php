<?php

if (is_page( 'appointment' )) {
    wp_enqueue_script( 'about_us_js', THEME_URI .'/setup/enqueue_scripts_styles/scripts/appointment/appointment.js', [], '0.1', true );
}