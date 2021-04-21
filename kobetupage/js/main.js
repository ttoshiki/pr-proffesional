jQuery(function($){

    /*テキスト上ドット
    ---------------------------------------------------------------------------*/
    function dotTxt() {
        var elm = $('.js_dotTxt');

        elm.each(function() {
            var cont = $(this).html(),
                txt = $.trim(cont),
                newHtml = "";

            txt.split("").forEach(function(v) {
                newHtml += "<span>" + v + "</span>";
            });
            $(this).html(newHtml);
        })
    }
    dotTxt();

    /*スライダー
    ---------------------------------------------------------------------------*/
    function slickFunc() {
        $('.js_intro_slider').slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 20000,
            swipe: false,
            cssEase: 'linear',
            pauseOnFocus: false,
            pauseOnHover: false,
            pauseOnDotsHover: false,
        });
    }
    slickFunc();

    /*スムーススクロール
    ---------------------------------------------------------------------------*/
    function smoothScroll() {
      $('a[href^="#"]:not(a[href="#"])').click(function(){
        let target = $($(this).attr('href')).offset().top,
            slideSpeed = 800;
        $('html, body').animate({'scrollTop': target}, slideSpeed);

        return false;
      });
    }
    smoothScroll();

    // faq
    //---------------------------------------------------------------------------
    function faqAccordion() {
      $('.js_faq_q').each(function() {
         $(this).click(function() {
             $(this).toggleClass('is_active').next('.js_faq_a').slideToggle(400);
         }) ;
      });
    }
    faqAccordion();
});

// スクロールアニメーション
//---------------------------------------------------------------------------
jQuery(window).on('load scroll', function() {

    // 固定ボタン
    //---------------------------------------------------------------------------
    $(function() {
        var scroll = $(window).scrollTop();
        var posH = $('.un_MV_top').innerHeight() + 173;

        if (scroll > posH - 20) {
            $('.js_stickBtn').css({
                'position': 'fixed',
                'right': '20px',
                'top': '20px',
            });
        } else {
            $('.js_stickBtn').css({
                'position': 'absolute',
                'right': '20px',
                'top': posH + 'px',
            });
        }
    });
});
