export default {
  init() {
    // JavaScript to be fired on all pages

    /*******************************
    -> Mmenu - mobile menu
    *******************************/
    $('#mobile-menu--trigger').click(function () {
      $(this).toggleClass('active');
    });

    // Init mmenu mobile navigation
    $("#mobile-nav").mmenu({
      "extensions": [
        "border-full",
        "effect-listitems-slide",
        "position-front",
        "pagedim-black",
        "fx-panels-slide-100",
        "fx-listitems-drop",
      ],
      "offCanvas": {
        "zposition": "front",
      },
      "navbar": {
        "title": "Navigation",
      },
      "navbars": [
        {
          "position": "top",
          "content": [
            "prev",
            "title",
          ],
        },
      ],
    });

    // Open/close the menu when clicking the mobile menu icon
    var API = $("#mobile-nav").data("mmenu");
    let trigger = $("#mobile-menu__trigger")

    trigger.click(function () {
      API.open();
      API.close();
    });

    API.bind( "open:finish", function() {
      setTimeout(function() {
        trigger.addClass( "active" );
      }, 0);
    });

    API.bind( "close:finish", function() {
        setTimeout(function() {
          trigger.removeClass( "active" );
        }, 0);
    });

    /*******************************
    -> Lazy load in images
    *******************************/
    $('.lazy').lazy({
      effect: 'fadeIn',
    });

    /*******************************
    -> Disable clicks on menu items with children
    *******************************/
    $('#menu-main-navigation .menu-item-has-children > a').click(function(e) {
      e.preventDefault();
    });


  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};