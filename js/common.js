'use strict';

document.addEventListener('DOMContentLoaded', function () {
  //トップのタイトルのアニメーション
  const textAnime = document.querySelector('.text-anime');
  if (textAnime) {
    textAnime.classList.add('inview');
  }

  //スクロール監視
  const fadeAnime = document.querySelectorAll('.fade');
  const cb = function (entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (entry.target.classList.contains('fadeRightTrigger')) {
          entry.target.classList.add('fadeRight');
        } else if (entry.target.classList.contains('fadeLeftTrigger')) {
          entry.target.classList.add('fadeLeft');
        } else {
          entry.target.classList.add('fadeUp');
        }
        observer.unobserve(entry.target);
      }
    });
  };
  const option = {
    root: null,
    rootMargin: '-100px 0px',
  };
  const io = new IntersectionObserver(cb, option);
  fadeAnime.forEach((el) => io.observe(el));
});

//ハンバーガーメニュー
const drawer = document.querySelector('.drawer');
const body = document.querySelector('body');
const open = document.querySelector('.header-wrapper__nav');
function navMenu() {
  drawer.addEventListener('click', function () {
    body.classList.toggle('nav-open');
    open.classList.toggle('open');
  });
}
navMenu();

//swiper
const swiper = new Swiper('.swiper_1', {
  loop: true,
  autoplay: true,
  centeredSlides: true,
  slidesPerView: 1,
  speed: 1500,
  breakpoints: {
    768: {
      slidesPerView: 1.5,
    },
    1024: {
      slidesPerView: 3,
    },
  },
  pagination: {
    el: '.swiper-pagination',
  },
});

const gallery = new Swiper('.gallery', {
  loop: true,
  autoplay: true,
  centeredSlides: true,
  autoHeight: false,
  slidesPerView: 1,
  speed: 2000,
  breakpoints: {
    768: {
      slidesPerView: 1.5,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});
