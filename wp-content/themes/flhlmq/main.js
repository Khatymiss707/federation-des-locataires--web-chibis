const swiper = new Swiper('.swiper', {
  loop: true,
  centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },
});

const swiper02 = new Swiper('.swiper02', {
  loop: true,
  spaceBetween: 100,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
});

  //burger toggle
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav_menu");

  hamburger.addEventListener("click", () =>{
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
  })

  document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
  })); 

  //accordeon
/*let title = document.querySelector(".accordion__item__title"); 
let contenu = document.querySelector(".accordion__item__content--open"); 

var $title = $('.title');
var content   = '.content';
$title.click(function () {
  $(this).next(content).slideToggle();
  $(this).parent().siblings().children().next().slideUp();
  return false;
});*/


//liste_service

var swiper03 = new Swiper(".swiper03", {
  spaceBetween: 0,
  slidesPerView: 1, // Show 1 card at a time
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination", 
    type: "progressbar", 
  },
});
