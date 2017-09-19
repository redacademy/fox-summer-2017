(function ($) {
  $( document ).ready(function() {


    var $mobileDetails =  $('.mobile-modal-details');

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


    $('.gallery-modal-link').on('click', function(){
      $mobileDetails.removeClass('mobile-modal-description-window');
      $mobileDetails.removeClass('mobile-modal-description-toggle-close');
    });

    // toggle description in modal
    $('.mobile-modal-description-toggle').on('click', function() {
      $mobileDetails.toggleClass('mobile-modal-description-window');
      $('.mobile-modal-description-toggle').toggleClass('mobile-modal-description-toggle-close');
    });


    // Sliding out more options for Photography in mobile sidebar
    $('#menu-item-98 a').on('click', function() {
     $('.site-header .header-nav-bar .burger-nav .menu .sub-menu').toggleClass('sub-menu--open');
    });



    $('#modal-1').on('hidden.bs.modal', function () {
        $('#modal-1 iframe').attr('src', $('#modal-1 iframe').attr('src'));
    });

    $('#modal-2').on('hidden.bs.modal', function () {
        $('#modal-2 iframe').attr('src', $('#modal-2 iframe').attr('src'));
    });

     $('#modal-3').on('hidden.bs.modal', function () {
        $('#modal-3 iframe').attr('src', $('#modal-3 iframe').attr('src'));
    });


  });
}(jQuery));