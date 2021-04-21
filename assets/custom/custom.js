jQuery(function($) {

    // スライダー
    // ---------------------------------------------------------------------------
    $(function() {
        var target = $('.column-page .mv .slide');

        target.slick({
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            spped: 1000,
        });
    });
});
