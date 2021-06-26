$(document).ready(function() {
    $('#banner-area .owl-carousel').owlCarousel({
        loop: true,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed: 1000,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });


    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:30,
        nav:false,
        autoplay:true,
        autoplayTimeout:5000,
        smartSpeed: 1000,
        dots:false,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });
    /* $('#products .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: true,
        nav: true,
        responsive: {
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    }) */
});
