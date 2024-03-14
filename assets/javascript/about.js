
AOS.init();

$(document).ready(function () {

    $('.play').click(function () {
        $('.play').toggleClass("played");
        if ($(this).hasClass("played")) {
            $(this).parents('.aboutBanner').find('video').get(0).play();
        }
        else {
            $(this).parents('.aboutBanner').find('video').get(0).pause();
        }
    })

    var swiper = new Swiper(".team-slider", {
        slidesPerView: 4,
        loop: true,
        navigation: true,
        speed: 500,
        spaceBetween: 20,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320:{
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });
});
