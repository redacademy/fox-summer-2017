jQuery(document).ready(function ($) {
    $('.button').on('click', function (event) {
        event.preventDefault();
        $('.email').toggle('slow');
        $('.email').focus();
    });
    $('.email').blur(function () {
        $('.email').hide();
    });
});