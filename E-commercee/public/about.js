AOS.init();
var mixer = mixitup('.container');

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  breakpoints: {
      500: {
          slidesPerView:2,
          spaceBetweenSlides: 30
      },
      700: {
          slidesPerView: 3,
          spaceBetweenSlides: 40
      }
  } ,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var swiper = new Swiper(".mySwiper2", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper_next",
    prevEl: ".swiper_prev",
  },
});


let menu = document.querySelector("#menu")
let bars = document.querySelector("#bars")

bars.addEventListener("click", ()=>{
  menu.classList.toggle("show")
})



  let navbar = document.querySelector("#navbar")
  window.addEventListener("scroll",()=>{
      if(window.scrollY > 10)
      {
        navbar.classList.add("bgnav")
      }
      else{
        navbar.classList.remove("bgnav")
      }
  })