import "../federation-des-locataires--web-chibis/styles.scss";
import Swiper from './node_modules/swiper/swiper-bundle';
import './node_modules/swiper/css';

const swiper = new Swiper('.swiper', {
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });