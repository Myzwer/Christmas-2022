import "../sass/frontend.scss";
import "./particles";

// NAV MENU
(function ($) {
  // Begin jQuery
  $(function () {
    // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".nav-dropdown").toggle();
      // Close one dropdown when selecting another
      $(".nav-dropdown").not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $("html").click(function () {
      $(".nav-dropdown").hide();
    });
    // Toggle open and close nav styles on click
    $("#nav-toggle").click(function () {
      $("nav ul").slideToggle();
    });
    // Hamburger to X toggle
    $("#nav-toggle").on("click", function () {
      this.classList.toggle("active");
    });
  }); // end DOM ready
})(jQuery); // end jQuery

// Add modal id and class for... well the modal.
jQuery(document).ready(function ($) {
  $(".nav-list > li:last-child").attr("id", "one");
});
jQuery(document).ready(function ($) {
  $(".nav-list > li:last-child").attr("class", "button");
});

// MODAL POPUP
(function ($) {
  // The JS modal for all "mark your calendar" buttons.
  window.onload = function () {
    $(".button").click(function () {
      const buttonId = $(this).attr("id");
      $("#modal-container").removeAttr("class").addClass(buttonId);
      $("body").addClass("modal-active");
    });

    $("#modal-container").click(function () {
      $(this).addClass("out");
      $("body").removeClass("modal-active");
    });
  };
})(jQuery); // end jQuery

// PARTICLES
document.addEventListener("DOMContentLoaded", function (event) {
  const particles = document.getElementById("particles-js");
  if (particles) {
    particlesJS("particles-js", {
      particles: {
        number: {
          value: 118,
          density: {
            enable: true,
            value_area: 710.2328774690454,
          },
        },
        color: {
          value: "#e6c380",
        },
        shape: {
          type: "circle",
          stroke: {
            width: 0,
            color: "#000000",
          },
          polygon: {
            nb_sides: 5,
          },
          image: {
            src: "img/github.svg",
            width: 100,
            height: 100,
          },
        },
        opacity: {
          value: 0.5,
          random: false,
          anim: {
            enable: false,
            speed: 1,
            opacity_min: 0.1,
            sync: false,
          },
        },
        size: {
          value: 3,
          random: true,
          anim: {
            enable: false,
            speed: 40,
            size_min: 0.1,
            sync: false,
          },
        },
        line_linked: {
          enable: false,
          distance: 150,
          color: "#ffffff",
          opacity: 0.4,
          width: 1,
        },
        move: {
          enable: true,
          speed: 3,
          direction: "none",
          random: true,
          straight: false,
          out_mode: "out",
          bounce: false,
          attract: {
            enable: false,
            rotateX: 600,
            rotateY: 1200,
          },
        },
      },
      interactivity: {
        detect_on: "canvas",
        events: {
          onhover: {
            enable: true,
            mode: "repulse",
          },
          onclick: {
            enable: true,
            mode: "push",
          },
          resize: true,
        },
        modes: {
          grab: {
            distance: 400,
            line_linked: {
              opacity: 1,
            },
          },
          bubble: {
            distance: 400,
            size: 40,
            duration: 2,
            opacity: 8,
            speed: 3,
          },
          repulse: {
            distance: 127.87212787212788,
            duration: 0.4,
          },
          push: {
            particles_nb: 4,
          },
          remove: {
            particles_nb: 2,
          },
        },
      },
      retina_detect: true,
    });
  }
});
