(function ($) {
  $( ".share" ).each(function() {
    var shareTitle =  $(this).data('share-title');
    var shareLink =  $(this).data('share-link');
   $( this ).jsSocials({
      url: 'http:' + shareLink,
       text: shareTitle,
     shares: ["twitter", "facebook", "googleplus", "linkedin", "pinterest", "stumbleupon", "whatsapp"]
 });
});
    
}(jQuery));


