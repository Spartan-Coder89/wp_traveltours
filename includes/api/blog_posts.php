<?php

register_rest_route('blog-posts/v1', '/archive', array(
    'methods' => 'GET',
    'permission_callback' => '__return_true',
    'callback' => function(WP_REST_Request $request) {
        
        $found_posts = [];

        $page = $request['page'];
        $query_args = [
            'post_type' => 'post',
            'posts_per_page' => 12,
            'paged' => $page
        ];

        $query = new WP_Query($query_args);
        $max_pages = $query->max_num_pages;

        if ($query->have_posts()) {

            while ($query->have_posts()) {
                $query->the_post();
                
                $found_posts['posts'][get_the_ID()]['post_title'] = get_the_title();
                $found_posts['posts'][get_the_ID()]['post_link'] = get_the_permalink();
                $found_posts['posts'][get_the_ID()]['post_thumbnail'] = get_the_post_thumbnail_url();
                $found_posts['posts'][get_the_ID()]['post_date'] = get_the_date('m-d-Y');
                $found_posts['posts'][get_the_ID()]['post_excerpt'] = get_the_excerpt();
            }
        }

        wp_reset_postdata();

        $found_posts['max_pages'] = $max_pages;

        return new WP_REST_Response(json_encode($found_posts), 200);
    }
));