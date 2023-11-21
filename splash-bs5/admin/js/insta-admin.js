;
jQuery(document).ready(function($) {
    var publishBtnOffsetTop = $('#publishing-action').offset().top;

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll > publishBtnOffsetTop - 20) {
            $('#publishing-action').addClass('has-fixed');
        } else {
            $('#publishing-action').removeClass('has-fixed');
        }          
    });

    // alert(publishBtnOffsetTop)
});