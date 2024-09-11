window.addEventListener('DOMContentLoaded', () => {

    jQuery('#explore_destination .carousel').slick({
        dots: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 780,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    })

    jQuery('#explore_destination .carousel_nav .arrow_left').click(() => {
        jQuery('#explore_destination .carousel .slick-prev').trigger('click')
    })

    jQuery('#explore_destination .carousel_nav .arrow_right').click(() => {
        jQuery('#explore_destination .carousel .slick-next').trigger('click')
    })

    jQuery('#testimonial .testimonial_slick').slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1
    })

    jQuery('#testimonial .carousel_nav .arrow_left').click(() => {
        jQuery('#testimonial .testimonial_slick .slick-prev').trigger('click')
    })

    jQuery('#testimonial .carousel_nav .arrow_right').click(() => {
        jQuery('#testimonial .testimonial_slick .slick-next').trigger('click')
    })
})