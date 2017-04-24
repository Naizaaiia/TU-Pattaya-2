    (function($){
      $(document).ready(function(){
        $(window).scroll(function(){
          var window_scroll_position = $(this).scrollTop();
          var parallax_value = window_scroll_position/2;

          $('#parallax img').css({
            '-webkit-transform': 'translateY('+ parallax_value +'px)',
            '-moz-transform': 'translateY('+ parallax_value +'px)',
            '-o-transform': 'translateY('+ parallax_value +'px)',
            '-ms-transform': 'translateY('+ parallax_value +'px)',
            'transform': 'translateY('+ parallax_value +'px)'
          });
        });
        $('#parallaxical a').click(function(e){
          var title = $(this).attr('title');
          _gaq.push(['_trackEvent', 'Takeovers', 'Clickthrough to Page', title]);
        });
      });
    })(jQuery)
    
      /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );


