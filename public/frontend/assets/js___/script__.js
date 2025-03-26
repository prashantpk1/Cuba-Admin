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
    loop: true, /* Ensure continuous looping */
  });
  


$(document).ready(function () {
        $(".faq-question").click(function () {
            $(".faq-item").removeClass("active"); // Remove active class from all
            $(this).closest(".faq-item").addClass("active"); // Add active class to clicked item
        });
    });

    