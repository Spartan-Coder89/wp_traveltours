<?php

function listout_destinations_taxonomies() {

    $destinations_taxonomies = get_object_taxonomies('destinations', 'objects');

    if (!empty($destinations_taxonomies)) {

        foreach ($destinations_taxonomies as $taxonomy) {
            echo '<div class="filter checkboxes">';
                echo '<p class="label">'. esc_html($taxonomy->label) .':</p>';

                $terms = get_terms( array(
                    'taxonomy' => $taxonomy->name,
                    'hide_empty' => true,
                ));

                if (!is_wp_error($terms) && !empty($terms)) {

                    foreach ($terms as $term) {
                        echo '<div class="checkbox_selector">';
                            echo '<input type="checkbox" value="'. $term->slug .'" x-on:change="update_filters(`'. $taxonomy->name .'`, `'. $term->slug .'`)">';
                            echo '<label>'. $term->name .'</label>';
                        echo '</div>';
                    }
                }

            echo '</div>';
        }
    }
}