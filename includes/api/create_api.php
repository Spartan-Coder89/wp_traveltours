<?php

add_action('rest_api_init', function() {
    include_once 'explore_destinations.php';
    include_once 'single_destinations.php';
    include_once 'blog_posts.php';
});