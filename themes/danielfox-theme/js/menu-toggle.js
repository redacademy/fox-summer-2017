(function ($) {
$( document ).ready(function() {
$('.nav-side .nav-toggle').on('click', function(e) {
  e.preventDefault();
  $(this).parent().toggleClass('nav-open');

  //Write instructions here to change CSS for .header-nav-bar AND hide header-page-name AND hide header-logo-mobile
});

    $(document).click( function(event){
      if( !$('.nav-side .nav-open, .nav-side .nav-toggle').is(event.target)){
      $('.nav-side').removeClass('nav-open');
      }
    });

});
}(jQuery));