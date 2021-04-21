$(function() {
    $(window).setBreakpoints({
        distinct: true,
        breakpoints: [ 1, 768 ]
    });
    $(window).bind('enterBreakpoint768',function() {
        $('.sp-img').each(function() {
            $(this).attr('src', $(this).data('img'));
        });
    });
    $(window).bind('enterBreakpoint1',function() {
        $('.sp-img').each(function() {
            $(this).attr('src', $(this).data('img').replace('_pc', '_sp'));
        });
    });
});