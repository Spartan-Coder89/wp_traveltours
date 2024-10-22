jQuery(document).ready(function() {

	let frame, traveltours_aboutus_gallery_setting = wp.customize( traveltours_aboutus_gallery_data.settingId )
	let attachments = traveltours_aboutus_gallery_setting.get() ? JSON.parse(traveltours_aboutus_gallery_setting.get()) : []

	/**
	 * Add images to gallery
	 * ==========================================================================================================================================
	 */
	jQuery('#add_gallery_images').click( function(e) {

		e.preventDefault()

		// If the media frame already exists, reopen it.
		if (frame) {
			frame.open()
			return
		}

		// Create a new media frame
		frame = wp.media({
			title: 'Select Images for Gallery',
			button: {
				text: 'Use these images'
			},
			multiple: true
		});

		// When images are selected, run a callback
		frame.on('select', function() {

			let selection = frame.state().get('selection').toJSON();
			
			selection.forEach(function(attachment) {
				attachments.push({
					"id" : attachment.id,
					"url" : attachment.url
				});
			});

			// Convert image IDs into a JSON string to save in the Customizer setting
			traveltours_aboutus_gallery_setting.set(JSON.stringify(attachments));
		});

		frame.open();

		// Update preview or other actions
		wp.customize(traveltours_aboutus_gallery_data.settingId, function(value) {
			value.bind(function(new_val) {

				let images = JSON.parse(new_val);

				jQuery('#gallery_images_list').empty();

				for (let i = 0; i < images.length; i++) {

					let element = images[i];
					jQuery('#gallery_images_list').append(`
						<li style="display: flex; align-items: center; padding-bottom: 10px;">
							<div style="
								background-image: url('${element.url}');
								background-repeat: no-repeat; 
								background-size: cover; 
								background-position: center;
								width: 80px; 
								height: 60px; 
								margin-right: 16px;
								border: 1px solid #dcdcde;
								border-radius: 3px;">
							</div>
							<span class="remove" style="cursor: pointer;" data-id="${element.id}">Remove</span>
						</li>
					`)
				}
			});
		});
		
	})


	/**
	 * Remove an item from the gallery
	 * ==========================================================================================================================================
	 */
	jQuery('#gallery_images_list').on('click', '.remove', function() {

		let id_to_remove = jQuery(this).data('id')
		let gallery_setting = JSON.parse(traveltours_aboutus_gallery_setting.get())

		gallery_setting = gallery_setting.filter(item => item.id !== id_to_remove)
		attachments = attachments.filter(item => item.id !== id_to_remove)

		// Update preview or other actions
		wp.customize(traveltours_aboutus_gallery_data.settingId, function(value) {
			value.bind(function(new_val) {

				let images = JSON.parse(new_val);

				jQuery('#gallery_images_list').empty();

				for (let i = 0; i < images.length; i++) {

					let element = images[i];
					jQuery('#gallery_images_list').append(`
						<li style="display: flex; align-items: center; padding-bottom: 10px;">
							<div style="
								background-image: url('${element.url}');
								background-repeat: no-repeat; 
								background-size: cover; 
								background-position: center;
								width: 80px; 
								height: 60px; 
								margin-right: 16px;
								border: 1px solid #dcdcde;
								border-radius: 3px;">
							</div>
							<span class="remove" style="cursor: pointer;" data-id="${element.id}">Remove</span>
						</li>
					`)
				}
			});
		});

		traveltours_aboutus_gallery_setting.set(JSON.stringify(gallery_setting))
	})


	/**
	 * Add contents gallery images list
	 * ==========================================================================================================================================
	 */
	if (traveltours_aboutus_gallery_setting.get() !== '') {
		
		let images = JSON.parse(traveltours_aboutus_gallery_setting.get())

		for (let i = 0; i < images.length; i++) {

			let element = images[i];
			jQuery('#gallery_images_list').append(`
				<li style="display: flex; align-items: center; padding-bottom: 10px;">
					<div style="
						background-image: url('${element.url}');
						background-repeat: no-repeat; 
						background-size: cover; 
						background-position: center;
						width: 80px; 
						height: 60px; 
						margin-right: 16px;
						border: 1px solid #dcdcde;
						border-radius: 3px;">
					</div>
					<span class="remove" style="cursor: pointer;" data-id="${element.id}">Remove</span>
				</li>
			`)
		}
	}
})

