window.addEventListener('DOMContentLoaded', () => {

    jQuery('#images_carousel').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    })

    jQuery('#content .wrap .features .images .previous').click(() => {
        jQuery('#images_carousel .slick-prev').trigger('click')
    })

    jQuery('#content .wrap .features .images .next').click(() => {
        jQuery('#images_carousel .slick-prev').trigger('click')
    })

    jQuery('#content .wrap .features .images .fullscreen').click(() => {
        jQuery('#lightbox').addClass('show')
    })

    jQuery('#lightbox_images_carousel').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    })

    jQuery('#lightbox .images .previous').click(() => {
        jQuery('#lightbox_images_carousel .slick-prev').trigger('click')
    })

    jQuery('#lightbox .images .next').click(() => {
        jQuery('#lightbox_images_carousel .slick-prev').trigger('click')
    })

    jQuery('#lightbox .images .close_lightbox').click(() => {
        jQuery('#lightbox').removeClass('show')
    })
})

document.addEventListener('alpine:init', () => {

    Alpine.data('itenerary_tabs', () => ({

        tabs : [],
        tab_active : 0,

        async get_itenerary(post_id) {
            
            let response = await fetch(rest_api.base +'/destinations/v1/single/itenerary?post_id='+ post_id)
            let data = await response.json()
            this.tabs = JSON.parse(data)
        }
    }))
})