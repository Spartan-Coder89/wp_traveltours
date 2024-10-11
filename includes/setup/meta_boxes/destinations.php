<?php

add_meta_box(
  'basic_info',
  'Basic Information',
  function($post) { 
    
    $basic_info = get_post_meta($post->ID, '_basic_info', true);
    ?>
    
    <div id="basic_info_container">
      <div class="form_control">
        <label for="starts_at">Starts at:</label>
        <input type="text" name="basic_info[starts_at]" value="<?php echo isset($basic_info['starts_at']) ? $basic_info['starts_at'] : ''; ?>">
      </div>
      <div class="form_control">
        <label for="duration">Duration:</label>
        <input type="text" name="basic_info[duration]" value="<?php echo isset($basic_info['duration']) ? $basic_info['duration'] : ''; ?>">
      </div>
      <div class="form_control">
        <label for="location">Location:</label>
        <input type="text" name="basic_info[location]" value="<?php echo isset($basic_info['location']) ? $basic_info['location'] : ''; ?>">
      </div>
      <div class="form_control">
        <label for="flight">Flight:</label>
        <input type="text" name="basic_info[flight]" value="<?php echo isset($basic_info['flight']) ? $basic_info['flight'] : ''; ?>">
      </div>
      <div class="form_control">
        <label for="board_and_lodging">Board and Lodging:</label>
        <input type="text" name="basic_info[board_and_lodging]" value="<?php echo isset($basic_info['board_and_lodging']) ? $basic_info['board_and_lodging'] : ''; ?>">
      </div>
      <div class="form_control">
        <label for="visa">Visa:</label>
        <input type="text" name="basic_info[visa]" value="<?php echo isset($basic_info['visa']) ? $basic_info['visa'] : ''; ?>">
      </div>
    </div>


    <?php
  },
  'destinations',
  'normal'
);


add_meta_box(
  'gallery',
  'Gallery',
  function($post) { ?>
    
    <div id="gallery_container">
      <?php echo get_single_destination_gallery($post->ID, true); ?>
    </div>

    <button type="button" id="add_to_gallery">Add images</button>
    <input type="hidden" id="destination_gallery" name="destination_gallery" value="<?php echo get_post_meta($post->ID, '_destination_gallery', true); ?>">

    <?php
  },
  'destinations',
  'normal'
);


add_meta_box(
  'video_promotion',
  'Video Promotion',
  function($post) { ?>
    
    <div id="video_promotion_container">
      <div id="video_container">
        <?php echo get_video_attachment(get_post_meta( $post->ID, '_video_promotion', true)); ?>
      </div>
      <input type="hidden" id="video_promotion_input" name="video_promotion">
      <button type="button" id="add_video">Add video</button>
      <button type="button" id="remove_video">Remove video</button>
    </div>

    <?php
  },
  'destinations',
  'normal'
);


add_meta_box(
  'key_highlights',
  'Key Highlights',
  function($post) { ?>
    
    <div id="key_highlights_container" x-data="key_highlights">
      <div class="input_wrap">
        <input type="text" id="highlight_title" placeholder="Highlight Title">
        <input type="text" id="highlight_excerpt" placeholder="Highlight Short Excerpt">
        <textarea id="highlight_textarea"></textarea>
        <button type="button" id="add_highlight" @click="add_highlight">Add highlight</button>
      </div>
      <ul id="key_highlights_list">
        <template x-for="(highlight, index) in key_highlights_input">
          <li>
            <span class="dashicons dashicons-remove remove_highlight" @click="remove_highlight(index)"></span>
            <span>
              <span class="title" x-text="highlight.title"></span>
              <span class="highlight_excerpt" x-text="highlight.highlight_excerpt"></span>
              <span class="highlight_content" x-text="highlight.highlight_content"></span>
            </span>
          </li>
        </template>
      </ul>
      <input type="hidden" id="key_highlights_input" name="key_highlights" value="<?php echo get_post_meta($post->ID, '_key_highlights', true); ?>">
    </div>

    <?php
  },
  'destinations',
  'normal'
);


add_meta_box(
  'itenerary',
  'Itenerary',
  function($post) { ?>
    
    <div id="itenerary_wrap" x-data="itenerary">
      <div class="input_wrap">
        <textarea id="itenerary_textarea"></textarea>
        <button type="button" id="add_itenerary" @click="add_itenerary">Add Itenerary</button>
      </div>
      <div id="itenerary_tabs">
        <div id="itenerary_tab_heads">
          <div id="tabs">
            <template x-for="(itenerary, index) in itenerary_input">
              <div class="tab_head" :data-key="index" x-text="`Day `+ (index + 1)" :key="index" @click="select_day" :class="{active : index === 0}"></div>
            </template>
          </div>
          <span id="add_day" class="dashicons dashicons-plus" @click="add_day"></span>
          <span id="remove_day" class="dashicons dashicons-minus" @click="remove_day"></span>
        </div>

        <div id="itenerary_tab_content">
          <template x-for="(itenerary, list_index) in itenerary_input" :key="list_index">
            <ul class="itenerary_tab_content" :class="list_index == 0 ? 'itenerary_tab_content_'+ list_index +' active' : 'itenerary_tab_content_'+ list_index">
              <template x-for="(item, itenerary_index) in itenerary" :key="itenerary_index">
                <li>
                  <span class="dashicons dashicons-remove" @click="remove_itenerary(list_index, itenerary_index)"></span>
                  <span x-text="item"></span>
                </li>
              </template>
            </ul>
          </template>
        </div>
      </div>

      <input type="hidden" name="itenerary" id="itenerary_input" value="<?php echo get_post_meta($post->ID, '_itenerary', true); ?>" />
    </div>

    <?php
  },
  'destinations',
  'normal'
);


add_meta_box(
  'top_featured',
  'Top Featured',
  function($post) { 
    
    $is_top_featured = !empty(get_post_meta($post->ID, '_top_featured', true)) ? get_post_meta($post->ID, '_top_featured', true) : 0;
    $is_top_featured_no = $is_top_featured == 0 ? 'checked' : '';
    $is_top_featured_yes = $is_top_featured == 1 ? 'checked' : '';

    ?>
    
    <div id="top_featured_controls_container">
      <div class="form_control">
        <input type="radio" name="top_featured" value="1" <?php echo $is_top_featured_yes; ?>>
        <label for="top_featured">Yes</label>
      </div>
      <div class="form_control">
        <input type="radio" name="top_featured" value="0" <?php echo $is_top_featured_no; ?>>
        <label for="top_featured">No</label>
      </div>
    </div>

    <?php
  },
  'destinations',
  'side'
);


add_meta_box(
  'featured',
  'Is Featured',  
  function($post) { 
    
    $is_featured = !empty(get_post_meta($post->ID, '_featured', true)) ? get_post_meta($post->ID, '_featured', true) : 0;
    $is_featured_no = $is_featured == 0 ? 'checked' : '';
    $is_featured_yes = $is_featured == 1 ? 'checked' : '';

    ?>

    <div id="featured_controls_container">
      <div class="form_control">
        <input type="radio" name="featured" value="1" <?php echo $is_featured_yes; ?>>
        <label for="featured">Yes</label>
      </div>
      <div class="form_control">
        <input type="radio" name="featured" value="0" <?php echo $is_featured_no; ?>>
        <label for="featured">No</label>
      </div>
    </div>

    <?php
  },
  'destinations',
  'side'
);