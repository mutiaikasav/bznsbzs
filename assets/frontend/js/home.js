$(document).ready(function() {
  $('.headline-slick').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
  });
  $('.headline-slick').slick('setPosition');
});