var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 25000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  loop: true /* Ensure continuous looping */,
});


// JavaScript (script.js)
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.querySelector('.navbar');

  window.addEventListener('scroll', function() {
      if (window.scrollY > 50) { // Adjust this value to change when the transition happens
          navbar.classList.remove('navbar-transparent');
          navbar.classList.add('navbar-white');
      } else {
          navbar.classList.remove('navbar-white');
          navbar.classList.add('navbar-transparent');
      }
  });

  // Initialize navbar state on page load
  if (window.scrollY > 50) {
      navbar.classList.add('navbar-white');
  } else {
      navbar.classList.add('navbar-transparent');
  }
});

$(document).ready(function () {
  $(".faq-question").click(function () {
    $(".faq-item").removeClass("active"); // Remove active class from all
    $(this).closest(".faq-item").addClass("active"); // Add active class to clicked item
  });
});
