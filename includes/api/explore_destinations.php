<?php

register_rest_route('destinations/v1', '/archive', array(
    'methods' => 'GET',
    'permission_callback' => '__return_true',
    'callback' => function(WP_REST_Request $request) {
        
        $found_posts = [];
        $filters = json_decode($request['filters'], true);

        $page = $request['page'];
        $query_args = [
            'post_type' => 'destinations',
            'posts_per_page' => 12,
            'paged' => $page,
            'meta_query' => [
                'relation' => 'OR',
                [
                    'key' => '_destination_price',
                    'value' => $filters['destination_price'],
                    'compare' => '<='
                ],
                [
                    'key' => '_destination_duration',
                    'value' => $filters['destination_duration'],
                    'compare' => '<='
                ]
            ]
        ];
        $tax_query['relation'] = 'OR';

        if (!empty($filters['destinations'])) {
            $tax_query[] = [
                'taxonomy' => 'destinations',
                'field' => 'slug',
                'terms' => $filters['destinations']
            ];
        }

        if (!empty($filters['activities'])) {
            $tax_query[] = [
                'taxonomy' => 'activities',
                'field' => 'slug',
                'terms' => $filters['activities']
            ];
        }

        if (!empty($filters['trip_types'])) {
            $tax_query[] = [
                'taxonomy' => 'trip_types',
                'field' => 'slug',
                'terms' => $filters['trip_types']
            ];
        }

        if (!empty($filters['destinations_tags'])) {
            $tax_query[] = [
                'taxonomy' => 'destinations_tags',
                'field' => 'slug',
                'terms' => $filters['destinations_tags']
            ];
        }

        if (count($tax_query) > 1) {
            $query_args['tax_query'] = $tax_query;
        }

        $query = new WP_Query($query_args);
        $max_pages = $query->max_num_pages;

        if ($query->have_posts()) {

            while ($query->have_posts()) {
                $query->the_post();
                
                $found_posts['posts'][get_the_ID()]['post_title'] = get_the_title();
                $found_posts['posts'][get_the_ID()]['post_link'] = get_the_permalink();
                $found_posts['posts'][get_the_ID()]['post_thumbnail'] = get_the_post_thumbnail_url();
                $found_posts['posts'][get_the_ID()]['post_excerpt'] = get_the_excerpt();
                $found_posts['posts'][get_the_ID()]['post_destination_duration'] = get_post_meta(get_the_ID(), '_destination_duration', true);
                $found_posts['posts'][get_the_ID()]['post_destination_location'] = get_post_meta(get_the_ID(), '_destination_location', true);
            }
        }

        wp_reset_postdata();

        $found_posts['max_pages'] = $max_pages;

        return new WP_REST_Response(json_encode($found_posts), 200);
    }
));