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
  centeredSlides: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
});

  //burger toggle
  const hamburger = document.querySelector(".hamburger");
  const navMenu = document.querySelector(".nav-menu");

  hamburger.addEventListener("click", () =>{
    hamburger.classList.toggle("active");
    navMenu.classList.toggle(".active");
  })

  document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove(".active");
    navMenu.classList.remove(".active");
  })); 

