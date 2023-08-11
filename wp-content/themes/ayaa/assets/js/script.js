/**
 * @Script js for (Template/Project Name)
 * @project     - Project Name
 * @author      -
 * @created_by  -
 * @created_at  -
 * @modified_by -
 **/

$(window).on("load", function () {
  // code should be execute here

});
/**
 * ========================================================
 * this function execute when DOM element ready
 * ========================================================
 */

  // passwords show hide JS
  const togglePasswordVisibility = (id, inputId) => {
    const passwordInput = document.getElementById(inputId);
    const togglePasswordVisibility = document.getElementById(id);
    passwordInput.type === "password"
        ? (passwordInput.type = "text", togglePasswordVisibility.innerHTML = '<span class="pass-show-hide-icon text_dark_2 fs-6 ni ni-eye position-absolute"></span>')
        : (passwordInput.type = "password", togglePasswordVisibility.innerHTML = '<span class="pass-show-hide-icon text_dark_2 fs-6 pass-show ni ni-eye-off position-absolute"></span>');
};
// passwords show hide JS - END




$(document).ready(function () {
  /* code execute from here */
  // custom accordion
  $(function () {
    if ($(".accordion-list").length) {
      $(".accordion-list").on("click", ".accordion-title", function (e) {
        e.preventDefault();
        // remove siblings activities
        $(this)
          .closest(".accordion-list-item")
          .siblings()
          .removeClass("open")
          .find(".accordion-desc")
          .slideUp();
        $(this)
          .closest(".accordion-list-item")
          .siblings()
          .find(".ni")
          .addClass("ni-downward-ios")
          .removeClass("ni-upword-ios");

        // add slideToggle into this
        $(this)
          .closest(".accordion-list-item")
          .toggleClass("open")
          .find(".accordion-desc")
          .slideToggle();
        $(this).find(".ni").toggleClass("ni-downward-ios ni-upword-ios");
      });
    }
  });

  // wow js init
  $(function () {
    var wow = new WOW({
      animateClass: "animated",
      mobile: true,
    });
    wow.init();
  });
});

// Swipper js

let CBTESTIMONIAL = function($scope, $) {
  $scope.find('.testi-slider').each(function() {
  // swiper activations and options initialization
  let AppsProjectActive = new Swiper('.testi-slider', {

      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next-unique',
          prevEl: '.swiper-button-prev-unique',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        550: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        991: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }
  });
  });
}


let CBNewBlogHome = function($scope, $) {
  $scope.find('.newsupdate-slider').each(function() {
  // swiper activations and options initialization
  let AppsProjectActive = new Swiper('.newsupdate-slider', {

      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next-unique-right',
          prevEl: '.swiper-button-prev-unique-left',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        550: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        991: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }
  });
  });
}



let CBSEOHome = function($scope, $) {
  $scope.find('.benefits-slider').each(function() {
  // swiper activations and options initialization
  let AppsProjectActive = new Swiper('.benefits-slider', {

      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,
      },
      navigation: {
          nextEl: '.swiper-button-next-unique',
          prevEl: '.swiper-button-prev-unique',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        550: {
          slidesPerView: 1,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        991: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      }
  });
  });
}

// Swipper js end


$( window ).on( 'elementor/frontend/init', function() {
  elementorFrontend.hooks.addAction( 'frontend/element_ready/cb-newsblog-home.default', CBNewBlogHome );
  elementorFrontend.hooks.addAction( 'frontend/element_ready/cb-seoservice-home.default', CBSEOHome );
  elementorFrontend.hooks.addAction( 'frontend/element_ready/cb-testimonial-home.default', CBTESTIMONIAL );
} );
