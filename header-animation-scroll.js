jQuery(document).ready(function($) {
    var myHeader = $('#header');
    var lastScroll = 0;

    $(window).scroll(function() {
        var scrollNow = $(window).scrollTop();

       
        if (scrollNow > 50 && scrollNow > lastScroll) {
            myHeader.addClass('headerScroll');
        } else {
            myHeader.removeClass('headerScroll');
        }

        lastScroll = scrollNow;
    });
});