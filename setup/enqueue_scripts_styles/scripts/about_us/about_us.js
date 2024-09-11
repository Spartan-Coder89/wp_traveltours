window.addEventListener('DOMContentLoaded', () => {

    jQuery('#images_carousel').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    })

    jQuery('#content .wrap .images .previous').click(() => {
        jQuery('#images_carousel .slick-prev').trigger('click')
    })

    jQuery('#content .wrap .images .next').click(() => {
        jQuery('#images_carousel .slick-prev').trigger('click')
    })

    jQuery('#content .wrap .images .fullscreen').click(() => {
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