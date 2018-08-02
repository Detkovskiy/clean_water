jQuery(document).ready(function(){

  var $width = $(window).width();
  var delta = 215;

  if ($width < 769) {
     delta = 0;
  }

  $('.js_scroll').on('click', function(e) {
    e.preventDefault();
    var tut = $(this).attr('data-scroll-block');
    $('html,body').animate({ scrollTop: $(tut).offset().top - delta}, 500);
  });

  $('.js_scroll_menu').on('click', function(e) {
    e.preventDefault();
    var tut = $(this).attr('data-scroll-block');
    $('html,body').animate({ scrollTop: $(tut).offset().top - delta}, 1100);
  });

});


$(function(){
  $(window).on('load resize', function() {

    var $width = $(window).width();

    if ($width >= 769) {

      var h_hght = 370;
      var h_mrg = 0;

      var elem = $('#top_nav');
      var top = $(this).scrollTop();

      if (top > 0 && top <= h_hght) {
        elem.css('top', 370 - top);
      }


      if ($width >= 769 && $width < 1024) {
        elem.css('top', 66);
        h_hght = 82;
      }

      if(top > h_hght){
        elem.css('top', h_mrg);
      }

      $(window).scroll(function(){
        top = $(this).scrollTop();

        if (top+h_mrg < h_hght) {
          elem.css('top', (h_hght-top));
        } else {
          elem.css('top', h_mrg);
        }
      });
    }
  });
});
