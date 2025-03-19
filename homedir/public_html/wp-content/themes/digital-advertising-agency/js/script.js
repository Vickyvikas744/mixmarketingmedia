/* ===============================================
	OWL CAROUSEL SLIDER
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('.slider .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots: false,
    navText : ['Prev','Next '],
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 1
      },
      1000: {
        items: 1
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

/* ===============================================
  OPEN CLOSE MENU
============================================= */

function digital_advertising_agency_open_menu() {
  jQuery('button.toggle-menu').addClass('close-panal');
  setTimeout(function(){
    jQuery('.main-menu').show();
  }, 100);

  return false;
}

jQuery( "button.toggle-menu").on("click", digital_advertising_agency_open_menu);

function digital_advertising_agency_close_menu() {
  jQuery('button.close-menu').removeClass('close-panal');
  jQuery('.main-menu').hide();
}

jQuery( "button.close-menu").on("click", digital_advertising_agency_close_menu);

/* ===============================================
  TRAP TAB FOCUS ON MODAL MENU
============================================= */

jQuery('button.close-menu').on('keydown', function (e) {
  if (jQuery("this:focus") && (e.which === 9)) {
    e.preventDefault();
    jQuery(this).blur();
    jQuery('button.toggle-menu').focus();
  }
});

/* ===============================================
  SCROLL TOP
============================================= */

jQuery(window).scroll(function () {
  if (jQuery(this).scrollTop() > 100) {
    jQuery('.scroll-up').fadeIn();
  } else {
    jQuery('.scroll-up').fadeOut();
  }
});

jQuery('a[href="#tobottom"]').click(function () {
  jQuery('html, body').animate({scrollTop: 0}, 'slow');
  return false;
});

/*===============================================
 PRELOADER
=============================================== */

jQuery('document').ready(function($){
  setTimeout(function () {
    jQuery(".cssloader").fadeOut("slow");
  },1000);
});

/*===============================================
 COLOR HEADING
=============================================== */

jQuery( document ).ready(function() {
  jQuery(".blog_box h3").each(function() {
    var t = jQuery(this).text();
    var splitT = t.split(" ");
    var firstIndex = 1;
    var secondIndex = 2;

    var lastIndex = splitT.length - 1;
    var newText = "";
    for(var i = 0; i < splitT.length; i++) {
      if(i == firstIndex) {
        newText += "<span style='color:#f0017b'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      } else if (i == secondIndex) {
        newText += "<span style='color:#f0017b'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      } else if (i == lastIndex) {
        newText += "<span style='color:#6c0daf'>";
        newText += splitT[i] + " ";
        newText += "</span>";
      } else {
        newText += splitT[i] + " ";
      }
    }
    jQuery(this).html(newText);
  });
});