'use strict';

window.addEventListener("scroll", function() {
  const topBtn = document.getElementById("scroll-top");
  const scroll = window.pageYOffset;
  if (scroll > 350) {
      topBtn.style.opacity = 1;
  } else topBtn.style.opacity = 0;
});

let topButton = document.querySelector("#scroll-top");
if (topButton !== null) {
  console.log(topButton.addEventListener("click", scroll_top));
  function scroll_top() {
    window.scroll({
      top: 0,
      behavior: "smooth"
    });
  };
};