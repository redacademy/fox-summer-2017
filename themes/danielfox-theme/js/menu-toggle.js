(function ($) {
$( document ).ready(function() {

$('.nav-side .nav-toggle').on('click', function(e) {
  e.preventDefault();
  $(this).parent().toggleClass('nav-open');
  $('.header-nav-bar').css('top', '-100px');
  $('.nav-toggle').hide();

  $('.site-content').click( function(){
    $('.nav-side').removeClass('nav-open');
    $('.header-nav-bar').css('top', '0px');
    $('.nav-toggle').show();
  }); 

});

  $('.mobile-modal-description-toggle').on('click', function() {
   $('#mobile-modal-details').toggleClass('mobile-modal-description-window');
  // $(this).parent().parent().css('bottom','-250px');
});


// Sliding out more options for Photography in mobile sidebar
$('#menu-item-98 a').on('click', function() {
  $('.site-header .header-nav-bar .burger-nav .menu .sub-menu').toggleClass('sub-menu--open');
});


});
}(jQuery));