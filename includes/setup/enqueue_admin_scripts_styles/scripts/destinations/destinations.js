jQuery(document).ready(function() {

    function generate_id() {
        let random_num = Math.floor(Math.random() * 1000);
        let three_digit_id = String(random_num).padStart(3, '0');
    
        return three_digit_id;
    }

    /**
     * Video Promotion
     * ===========================================================================================================================
     */
    jQuery('#add_video').click( function(e) {

        e.preventDefault()
    
        // Create a new media frame
        frame = wp.media({
            title: 'Select Video',
            button: {
                text: 'Use video'
            },
            library : {
				// uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
				type : 'video'
			},
            multiple: false
        });
    
        // When video are selected, run a callback
        frame.on('select', function() {
            let selection = frame.state().get('selection').toJSON();
            jQuery('#video_promotion_input').val(selection[0].id)

            if (jQuery('#video_promotion_element')) {
                jQuery('#video_promotion_element').remove()
            }
            
            jQuery('#video_container').prepend('<video id="video_promotion_element" src="'+ selection[0].url +'" controls></video>')
        })

        // If the media frame already exists, reopen it.
        if (frame) {
            frame.open()
            return
        }
    
        frame.open();
    })

    jQuery('#remove_video').click( function(e) {
        e.preventDefault()
        jQuery('#video_promotion_element').remove()
        jQuery('#video_promotion').val('')
    })


    /**
     * Gallery Images
     * ===========================================================================================================================
     */

    let destination_gallery = JSON.parse(jQuery('#destination_gallery').val())
    let gallery_images =  typeof destination_gallery === 'object' ? destination_gallery : [];

    jQuery('#add_to_gallery').click( function(e) {

        e.preventDefault()
    
        // Create a new media frame
        frame = wp.media({
            title: 'Select Images',
            button: {
                text: 'Use images'
            },
            library : {
				// uploadedTo : wp.media.view.settings.post.id, // attach to the current post?
				type : 'image'
			},
            multiple: true
        });
    
        // When video are selected, run a callback
        frame.on('select', function() {

            let selection = frame.state().get('selection').toJSON();            
            selection.forEach(attachment => {

                jQuery('#gallery_container').prepend(
                    `<div class="img" style="background-image: url(`+ attachment.url +`)">
                      <span class="dashicons dashicons-remove remove_img" data-id="`+ attachment.id +`"></span>
                    </div>`
                )

                gallery_images.push({
                    "id" : attachment.id,
                    "url" : attachment.url
                })
            })

            jQuery('#destination_gallery').val(JSON.stringify(gallery_images))
        })

        // If the media frame already exists, reopen it.
        if (frame) {
            frame.open()
            return
        }
    
        frame.open()
    })

    jQuery('#gallery_container').on('click', '.remove_img', function() {

        let this_element = jQuery(this)
        let id_to_remove = this_element.data('id')

        this_element.parent('.img').remove()
        gallery_images = gallery_images.filter(attachment => attachment.id != id_to_remove)
        jQuery('#destination_gallery').val(JSON.stringify(gallery_images))
    })
})


document.addEventListener('alpine:init', () => {

    Alpine.data('itenerary', () => ({
        
        itenerary_input : document.getElementById('itenerary_input').value ? JSON.parse(document.getElementById('itenerary_input').value) : [],

        add_day() {
            this.itenerary_input.push([])
            document.getElementById('itenerary_input').value = JSON.stringify(this.itenerary_input)
        },

        remove_day(event) {
            let this_element = event.target
            let key_to_remove = this_element.dataset.key

            if (this_element.dataset.key) {
                this.itenerary_input.splice(key_to_remove, 1)
            }

            document.getElementById('itenerary_input').value = JSON.stringify(this.itenerary_input)
        },

        select_day(event) {
            let this_element = event.target
            
            document.getElementById('remove_day').dataset.key = this_element.dataset.key

            document.querySelectorAll('.tab_head').forEach( function(element) {
                if (element.classList.contains('active')) {
                    element.classList.remove('active')
                }
            })

            document.querySelectorAll('.itenerary_tab_content').forEach( function(element) {
                if (element.classList.contains('active')) {
                    element.classList.remove('active')
                }
            })

            this_element.classList.add('active')
            document.querySelector('.itenerary_tab_content_'+ this_element.dataset.key).classList.add('active')

            document.getElementById('itenerary_input').value = JSON.stringify(this.itenerary_input)
        },

        add_itenerary() {

            let current_key = null
            let itenerary_content = document.getElementById('itenerary_textarea').value
            
            document.querySelectorAll('.tab_head').forEach( function(element) {
                if (element.classList.contains('active')) {
                    current_key = element.dataset.key
                }
            })

            if (itenerary_content && current_key) {
                this.itenerary_input[current_key].push(itenerary_content)
                document.getElementById('itenerary_textarea').value = ''
            }

            document.getElementById('itenerary_input').value = JSON.stringify(this.itenerary_input)
        },

        remove_itenerary(list_index, itenerary_index) {
            this.itenerary_input[list_index].splice(itenerary_index, 1)
            document.getElementById('itenerary_input').value = JSON.stringify(this.itenerary_input)
        }
    }))


    Alpine.data('key_highlights', () => ({

        key_highlights_input : document.getElementById('key_highlights_input').value ? JSON.parse(document.getElementById('key_highlights_input').value) : [],

        add_highlight() {
            let highlight_title = document.getElementById('highlight_title').value
            let highlight_excerpt = document.getElementById('highlight_excerpt').value
            let highlight_textarea = document.getElementById('highlight_textarea').value
            
            this.key_highlights_input.push({
                "title" : highlight_title,
                "highlight_excerpt" : highlight_excerpt,
                "highlight_content" : highlight_textarea
            })

            document.getElementById('key_highlights_input').value = JSON.stringify(this.key_highlights_input)
            document.getElementById('highlight_title').value = ''
            document.getElementById('highlight_excerpt').value = ''
            document.getElementById('highlight_textarea').value = ''
        },

        remove_highlight(key) {
            let key_to_remove = key

            this.key_highlights_input.splice(key_to_remove, 1)
            document.getElementById('key_highlights_input').value = JSON.stringify(this.key_highlights_input)
        }
    }))
})