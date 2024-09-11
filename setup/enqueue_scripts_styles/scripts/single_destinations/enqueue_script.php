<?php

if (is_singular( 'destinations' )) {
    wp_enqueue_script( 'single_destinations_js', THEME_URI .'/setup/enqueue_scripts_styles/scripts/single_destinations/single_destination.js', [], '0.1', true );
}