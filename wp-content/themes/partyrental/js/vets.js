$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage'], #tiles a").on('click', function(event) {
  event.preventDefault();
  var hash = this.hash;
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 1000, function(){
    window.location.hash = hash;
    });
  });
    
  if ( $(".navbar").length ) {

  /* Adjust Masthead for WP Admin Bar */

    if ( $("#wpadminbar").length ) {
      $(".navbar").css({
        "top" : $("#wpadminbar").height()
      })
    }

  }

  $(window).scroll(function() {

    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
  
    var scroll = $(window).scrollTop();
      if (scroll > 0) {
        $(".navbar").addClass("scroll");
      }
    
      else {
        $(".navbar").removeClass("scroll");
      }

      // Cache the Window object
      var $window = $(window);
      
      // Parallax Backgrounds

      // Tutorial: http://code.tutsplus.com/tutorials/a-simple-parallax-scrolling-technique--net-27641
      
      $('section[data-type="background"]').each(function(){

        var $bgobj = $(this); // assigning the object
    
      // Scroll the background at var speed
      // the yPos is a negative value because we're scrolling it UP!                
      var yPos = -($window.scrollTop() / $bgobj.data('speed'));
      
      // Put together our final background position
      var coords = '50% '+ yPos + 'px';
      
      // Move the background
      $bgobj.css({ backgroundPosition: coords });

      console.log(coords);

    });

  });
  
});