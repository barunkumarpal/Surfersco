var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      type: 'fraction',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var swiperTestimonial = new Swiper('.testomonial-container', {
    slidesPerView: 1,
    // spaceBetween: 10,
    // loop: true,
    // // init: false,
    // autoplay: {
    //   delay: 2000,
    // },
    // pagination: {
    //   el: '.testomonial-pagination',
    //   clickable: true,
    // },
    // navigation: {
    //   nextEl: '.testomonial-button-next',
    //   prevEl: '.testomonial-button-prev',
    // },
    // breakpoints: {
    //   '@0.00': {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //   },
    //   '@0.75': {
    //     slidesPerView: 2,
    //     spaceBetween: 20,
    //   },
    //   '@1.00': {
    //     slidesPerView: 3,
    //     spaceBetween: 40,
    //   },
    //   '@1.50': {
    //     slidesPerView: 4,
    //     spaceBetween: 50,
    //   },
    // }
});
var mySwiper2 = new Swiper('#swiper-container2', {  
  spaceBetween: -10,
  // loop: true,
    // // init: false,
    autoplay: {
      delay: 2000,
    },
  // watchSlidesProgress: true,
  // watchSlidesVisibility: true,
  // slidesPerGroup: 3,
  
  // loopFillGroupWithBlank: false,

  breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 5
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 8
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 10
      }
    }

})