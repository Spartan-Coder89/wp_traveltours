<?php

function single_destinations_list_gallery() {

    $return_value = '<div class="img"></div>';
    $destination_gallery = get_post_meta(get_the_ID(), '_destination_gallery', true);
    $destination_gallery = json_decode(html_entity_decode($destination_gallery), true);

    if (!empty($destination_gallery)) {

        $return_value = '';
        foreach ($destination_gallery as $key => $photo) {
            $return_value .= '<div class="img" style="background-image: url('. $photo['url'] .')"></div>';
        }
    }

    return $return_value;
}

function single_destinations_video_promotion() {

    $return_value = '';

    $video_promotions = get_post_meta(get_the_ID(), '_video_promotion', true);

    if (!empty($video_promotions)) {

        $return_value .= '<div class="video_promotion">
            <video controls>
                <source src="'. wp_get_attachment_url($video_promotions) .'" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>';
    }

    return $return_value;
}