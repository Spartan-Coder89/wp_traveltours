<?php

register_rest_route('destinations/v1', '/single/itenerary', array(
    'methods' => 'GET',
    'permission_callback' => '__return_true',
    'callback' => function(WP_REST_Request $request) {
        
        $return_value = [];

        $itenerary = get_post_meta($request['post_id'], '_itenerary', true);
        $return_value = htmlspecialchars_decode($itenerary);

        return new WP_REST_Response($return_value, 200);
    }
));