// -- Import style
import './style/main.scss';

// -- Import libraries
import $ from "jquery";

$(document).ready(function(){

  // --------------------------------
  // MENU EVENTS AND FUNCTIONS
  // --------------------------------

  const navLinks = document.querySelectorAll('.nav-menu__link');
  const navMenu = document.getElementById('nav-menu');
  const hamburgerButton = document.getElementById('hamburger');


  // Create scroll events on menu item click
  navLinks.forEach(link => {
    link.addEventListener('click', event => {
      event.preventDefault();
      const elementId = link.getAttribute('href');
      var elmnt = $(elementId);
      $('html, body').animate({
        scrollTop: $(elmnt).offset().top - 45
      }, 500);
      // Close hamburger menu if opened
      $(hamburgerButton).removeClass('is-active');
      $(navMenu).removeClass('visible');
    })
  });

  // Cache selectors
  var topMenu = $("#nav"),
  topMenuHeight = topMenu.outerHeight(),
  // All list items
  menuItems = topMenu.find('a[href*="#"]'),
  // Anchors corresponding to menu items
  scrollItems = menuItems.map(function(){
    var item = $($(this).attr("href"));
    if (item.length) { return item; }
  });

  // Bind to scroll
  $(window).scroll(function(){
    // Get container scroll position
    var fromTop = $(this).scrollTop()+topMenuHeight;

    // Get id of current scroll item
    var cur = scrollItems.map(function(){
      if ($(this).offset().top < fromTop)
        return this;
    });

    // Get the id of the current element
    cur = cur[cur.length-1];
    var id = cur && cur.length ? cur[0].id : "";

    // Set/remove active class
    menuItems
      .parent().removeClass("nav-menu__item--active")
      .end().filter("[href='#"+id+"']")
      .parent().addClass("nav-menu__item--active");

  });

  hamburgerButton.addEventListener('click', event => {
    hamburgerButton.classList.toggle('is-active');
    navMenu.classList.toggle('visible');
  })

});
