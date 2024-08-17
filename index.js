document.querySelector('#loginBtn').addEventListener('click', function () {
    window.location.href = 'login1.html';
});
var swiper = new swiper("swiper-container",{
    spaceBetween:30,
    effect: "fade",
    loop: true,
    autoplay: {
        delay:3500,
        disableOnInteraction: false,
    }
});
var swiper = new swiper(".swiper-testimonial", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
  var swiper = new swiper("swiper-container", {
    spaceBetween: 30,
    effect: "fade",
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    }
});
var swiper = new Swiper(".swiper-testimonial", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 50,
    stretch: 0,
    depth: 100,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});