"use strict";

(function() {

  const modalBody = document.querySelector(".modal-exchange");

  const btnPrev = modalBody.querySelector(".exchange--prev");
  const btnNext = modalBody.querySelector(".exchange--next");
  const slideItems = modalBody.querySelectorAll(".modal-window");
  const slideItemsArr = Array.from(slideItems);
  const index = 0;


  slideItems[index].classList.add("active");
  btnPrev.setAttribute("disabled", "");

  const schowNextSlide = () => {
    const currentWindow = modalBody.querySelector(".modal-window.active");
    const currentWindowIndex = slideItemsArr.indexOf(currentWindow, 0);
    currentWindow.classList.remove("active");
    slideItems[currentWindowIndex + 1].classList.add("active");
    const newCurrentWindow = modalBody.querySelector(".modal-window.active");
    const newIndex = slideItemsArr.indexOf(newCurrentWindow, 0);

    if (newIndex > 0) {
      btnPrev.removeAttribute("disabled");
    }
    if (newIndex == 3) {
      btnNext.setAttribute("disabled", "");
    }
  }

  const schowPrevSlide = () => {
    const currentWindow = modalBody.querySelector(".modal-window.active");
    const currentWindowIndex = slideItemsArr.indexOf(currentWindow, 0);
    currentWindow.classList.remove("active");
    slideItems[currentWindowIndex - 1].classList.add("active");
    const newCurrentWindow = modalBody.querySelector(".modal-window.active");
    const newIndex = slideItemsArr.indexOf(newCurrentWindow, 0);

    if (newIndex < 3) {
      btnNext.removeAttribute("disabled");
    }
    if (newIndex == 0) {
      btnPrev.setAttribute("disabled", "");
    }

  }

  btnNext.addEventListener('click', schowNextSlide);

  btnPrev.addEventListener('click', schowPrevSlide);

})();