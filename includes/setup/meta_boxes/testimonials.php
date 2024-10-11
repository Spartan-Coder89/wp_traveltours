<?php

add_meta_box(
  'testimonials',
  'Position',
  function($post) { ?>
    
    <div class="form_control">
      <input type="text" name="testimonial_position" value="<?php echo get_post_meta($post->ID, '_testimonial_position', true); ?>">
    </div>

    <input type="hidden" name="testimonials_nonce" value="<?php echo wp_create_nonce('testimonials_nonce'); ?>">
    <?php
  },
  'testimonials',
  'side'
);