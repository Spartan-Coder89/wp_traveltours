<?php

function appointment_list_destinations() {

    $return_value = '';

    $destinations = get_posts([
        'post_type' => 'destinations',
        'posts_per_page' => -1
    ]);

    if (!empty($destinations)) {

        foreach ($destinations as $key => $destination) {
            $thumbnail = get_the_post_thumbnail_url($destination->ID) !== false ? get_the_post_thumbnail_url($destination->ID) : 0;
            $value = htmlspecialchars('{"id":"'. $destination->ID .'", "thumbnail":"'. $thumbnail .'"}');
            $return_value .= '<option value="'. $value .'">'. $destination->post_title .'</option>';            
        }
    }

    return $return_value;
}

function appointment_list_booking_conditions() {

    $return_value = '';

    $conditions = get_posts([
        'post_type' => 'booking-conditions',
        'posts_per_page' => -1
    ]);

    if (!empty($conditions)) {

        foreach ($conditions as $key => $condition) {
            $return_value .= '<li>'. $condition->post_content .'</li>';
        }
    }

    return $return_value;
}

function appointment_list_meeting_time() {

    $return_value = '';
    $meeting_times = json_decode(html_entity_decode(get_user_meta(1, '_available_meeting_time', true)));

    if (!empty($meeting_times)) {
        foreach ($meeting_times as $key => $meeting_time) {
            $return_value .= '<option value="'. $meeting_time .'">'. $meeting_time .'</option>';
        }
    }

    return $return_value;
}