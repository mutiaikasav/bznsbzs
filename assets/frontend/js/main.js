window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#myNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
          if (screen.width <= '991') {
            navbarCollapsible.classList.add('navbar-shrink');
            document.body.querySelector('.logo-white').style.display = "none";
            document.body.querySelector('.logo-green').style.display = "block";
          } else {
            navbarCollapsible.classList.remove('navbar-shrink');
            document.body.querySelector('.logo-green').style.display = "none";
            document.body.querySelector('.logo-white').style.display = "block";
          }
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            document.body.querySelector('.logo-white').style.display = "none";
            document.body.querySelector('.logo-green').style.display = "block";
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);
});

(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }
})()