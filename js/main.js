jQuery(document).ready(function(){

  $('.js_scroll').on('click', function(e) {
    e.preventDefault();
    var tut = $(this).attr('data-scroll-block');
    $('html,body').animate({ scrollTop: $(tut).offset().top}, 500);
  });

  $('.js_scroll_menu').on('click', function(e) {
    e.preventDefault();
    var tut = $(this).attr('data-scroll-block');
    $('html,body').animate({ scrollTop: $(tut).offset().top}, 1100);
  });

});
/*


ymaps.ready(init);

function init(){

  var myMap;

  myMap = new ymaps.Map("map", {
    center: [59.910392, 30.387760],
    zoom: 16,
    controls: []
  });

  myMap.behaviors.disable('scrollZoom');

  var myPlacemark = new ymaps.Placemark([59.910392, 30.367760] , {
    iconContent: "ул. Мельничная, д. 18, лит. А"
  }, {
    preset: 'twirl#redStretchyIcon'
    //iconLayout: 'default#image'
    //iconImageHref: 'img/icon-map-pin.svg',
    //iconImageSize: [230, 146],
    //iconImageOffset: [-45, -147]
    });

  myMap.geoObjects.add(myPlacemark);

}*/
