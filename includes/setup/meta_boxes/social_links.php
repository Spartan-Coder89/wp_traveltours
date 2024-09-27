<?php

add_meta_box(
  'social_links',
  'Link',
  function($post) { ?>
    
    <style>
      #social_links .form_control input{
        max-width: 780px;
        width: 100%;
      }
    </style>

    <div class="form_control">
      <input type="text" name="social_link" value="<?php echo get_post_meta($post->ID, '_social_link', true); ?>">
    </div>

    <input type="hidden" name="social_links_nonce" value="<?php echo wp_create_nonce('social_links_nonce'); ?>">

    <?php
  },
  'social-links',
  'normal'
);