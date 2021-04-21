// fadein
jQuery(function () {
    jQuery(window).scroll(function () {
        jQuery('.fadein').each(function () {
            var elemPos = jQuery(this).offset().top;
            var scroll = jQuery(window).scrollTop();
            var windowHeight = jQuery(window).height();
            if (scroll > elemPos - windowHeight + 0) {
                jQuery(this).addClass('scrollin');
            }
        });
    });
    jQuery(window).scroll();

});

jQuery(function ($) {
    //ここに普通のjQueryの書き方で。下の行は例
    $(".graduate-voice-page .title-wrapper").click(function () {
        $(this).next().slideToggle();
        $(this).find('#icon-plus').toggle();
        $(this).find('#icon-minus').toggle();
    });
});
jQuery(function ($) {
    $('a[href^=#]').click(function () {
        // スクロールの速度
        var speed = 400; // ミリ秒
        // アンカーの値取得
        var href = $(this).attr("href");
        // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top;
        // スムーススクロール
        $('body,html').animate({ scrollTop: position }, speed, 'swing');
        return false;
    });
});
