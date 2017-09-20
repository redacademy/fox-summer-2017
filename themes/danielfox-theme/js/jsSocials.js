(function ($) {
  $( document ).ready(function() {
  $( '.shareRoundIcons' ).each(function() {
    var shareTitle =  $(this).data('share-title');
    var shareLink =  $(this).data('share-link');
   $( this ).jsSocials({
      url: 'http:' + shareLink,
      text: shareTitle,
      showLabel: false,
      showCount: false,
     shares: [ 'facebook', 'twitter' ]
 });
});
    
});
}(jQuery));