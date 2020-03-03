
 $(document).ready(function($) {
     //magnific popup
    $('#popimg').magnificPopup({
       delegate: '.btn-gallery',
       type: 'image',
       gallery: {
           enabled: true
       }
   }); 
   //End of magnific popup

   //scroll down
   $(".scroll").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
//   End of scroll down

// slick slider
  $(".vertical-center-4").slick({
    dots: true,
    vertical: true,
    centerMode: true,
    slidesToShow: 4,
    slidesToScroll: 2
  });
  $(".vertical-center-3").slick({
    dots: true,
    vertical: true,
    centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
  $(".vertical-center-2").slick({
    dots: true,
    vertical: true,
    centerMode: true,
    slidesToShow: 2,
    slidesToScroll: 2
  });
  $(".vertical-center").slick({
    dots: true,
    vertical: true,
    centerMode: true,
  });
  $(".vertical").slick({
    dots: true,
    vertical: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
  $(".regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3
  });
  $(".center").slick({
    dots: true,
    infinite: true,
    centerMode: true,
    slidesToShow: 5,
    slidesToScroll: 3
  });
  $(".variable").slick({
    dots: true,
    infinite: true,
    variableWidth: true
  });
  $(".lazy").slick({
    lazyLoad: 'ondemand', // ondemand progressive anticipated
    infinite: true
  });
//   End of slick slider
});

 //Start of mobile navigation bar
 $(document).on( 'click', 'span#open-navigation-bar', function(){
  document.getElementById("mySidenav").style.width = "300px";
});
$(document).on( 'click', 'a#close-navigation-bar', function(){
  document.getElementById("mySidenav").style.width = "0";
});



//End of mobile navigation bar
// remove text from button
  $(".search-widget .search-submit").val("");
// remove text from button
jQuery(function ($) {
    
    $('.count').counterUp({
        delay: 10,
        time: 1000
    });
   
    
});


