import "../federation-des-locataires--web-chibis/styles.scss";

const swiper = new Swiper('.swiper', {
    loop: true,
    centeredSlides: true, 
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
  });

  //burger toggle
    var links = document.querySelectorAll(".nav__list--dropdown");
  let burger = document.querySelector('.burger');
  burger.addEventListener('click', function() {
    links.classList.toggle('visible');
  });

