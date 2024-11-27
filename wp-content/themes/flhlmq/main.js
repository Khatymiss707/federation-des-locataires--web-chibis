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

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}));

const btnFermer = document.querySelector(".fermer");

btnFermer.addEventListener("click", () => {
  document.getElementById("banniere").style.display = "none";
})

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


//Page_liste_service_swiper
var swiper03 = new Swiper(".swiper03", {
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  grabCursor: true,
  centeredSlides: true,
  navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
});


//gsap background parrallax

const logo = document.querySelector(".logo_lettre");


document.addEventListener("DOMContentLoaded", (event) => {
  // gsap code here!
  gsap.from(logo, {
    repeat: -1,
    yoyo: true,
    y: '0.2%',
  });

 });



 const toggleButton = document.querySelector(".affichage_plus_nvs");
 toggleButton.addEventListener("click", myToggle);
 
 function myToggle() {
   var x = document.getElementById("liste_novs_deux");
 
   if (x.style.display === "none") {
     x.style.display = "flex";
   } else {
     x.style.display = "none";
   }
 }



