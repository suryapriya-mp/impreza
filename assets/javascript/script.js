//const swup = new Swup();
AOS.init();
/**
 * =========X==========================X==========
 * BRAND SLIDER
 * =========X==========================X==========
 */

var swiper = new Swiper(".brand-slider", {
    slidesPerView: 7,
    loop: true,
    speed: 500,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    },

    breakpoints: {
        320: {
            slidesPerView: 3,
            spaceBetween: 20,
        },

        500: {
            slidesPerView: 3,
            spaceBetween: 20,
        },

        600: {
            slidesPerView: 4,
            spaceBetween: 20,
        },

        768: {
            slidesPerView: 5,
            spaceBetween: 30,
        },

        991: {
            slidesPerView: 5,
            spaceBetween: 40,
        },

        1140: {
            slidesPerView: 6,
            spaceBetween: 50,
        },

        1280: {
            slidesPerView: 7,
            spaceBetween: 80,
        },
    }
});


/**
 * =========X==========================X==========
 * JAVASCRIPT COUNTER
 * =========X==========================X==========
 */

var counted = 0;
$(window).scroll(function () {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (counted == 0 && $(window).scrollTop() > oTop) {
        $('.count').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
            },

                {

                    duration: 2000,
                    easing: 'swing',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        counted = 1;
    }

});



var swiper = new Swiper(".client-slider", {
    slidesPerView: 1,
    loop: true,
    navigation:true,
    speed: 500,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false
    },
    
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
});