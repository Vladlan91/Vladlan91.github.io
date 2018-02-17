
var $menu = $("#my-menu").mmenu({
   extensions: ['widescreen','position-right', 'theme-black', 'effect-menu-slide','pagedim-black'],
		navbar:{
			title:'<img href="index.html" src="img/logo-1.jpg" alt="Cалон красоты Элион">'
		}
});

var $men = $("#my-men").mmenu({
   extensions: ['widescreen','position-right', 'effect-menu-slide','pagedim-black'],
    navbar:{
      title:'<img href="index.html" src="img/logo-1.jpg" alt="Cалон красоты Элион">'
    }
});

var $icon = $("#my-icon");
var API = $menu.data( "mmenu" );
var APIS = $men.data( "mmenu" );

$icon.on( "click", function() {
   API.open();
});

$icon.on( "click", function() {
   APIS.open();
});

API.bind( "open:finish", function() {
   setTimeout(function() {
      $icon.addClass( "is-active" );
   }, 100);
});


API.bind( "close:finish", function() {
   setTimeout(function() {
      $icon.removeClass( "is-active" );
   }, 100);

});

$(document).ready(function(){
  $(".carousel-services").owlCarousel({
   loop: true,
   nav: true,
   autoplay : true,
   autoplayTimeout : 2000,
   smartSpeed: 700,
   navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>']

  });

});
  $(".reviews").owlCarousel({
     loop: true,
     autoplay : true,
     items : 1,
     nav: false,
     dot: true,
     autoplayTimeout : 7000,
     smartSpeed: 800
  });

    $(".blog").owlCarousel({
     loop: true,
     autoplay : true,
     items : 1,
     nav: false,
     dot: true,
     autoplayTimeout : 4000,
     smartSpeed: 700
  });

    
