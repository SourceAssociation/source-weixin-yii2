(function($) {
    'use strict';

    $(function() {
        var $w = $(window);

        $(window).scroll(function () {
            var wh = $w.scrollTop(),
                dh = $(document).height();
            if ( wh > 50 ) {
                $('#scroll-toolbar').children('a').addClass('scroll-active');
            }else{
                $('#scroll-toolbar').children('a').removeClass('scroll-active');
            }
        });
    });

})(jQuery);