(function ($) {
$( document ).ready(function() {

$('.nav-side .nav-toggle').on('click', function(e) {
  e.preventDefault();
  $(this).parent().toggleClass('nav-open');
  $('.header-nav-bar').css('top', '-100px');

  $('.site-content').click( function(){
    $('.nav-side').removeClass('nav-open');
    $('.header-nav-bar').css('top', '0px');
  }); 
});

// Sliding out more options for Photography in mobile sidebar
$('#menu-item-98 a').on('click', function(e) {
  e.preventDefault();
  $('.site-header .header-nav-bar .burger-nav .menu .sub-menu').toggleClass('sub-menu--open');
});


});
}(jQuery));