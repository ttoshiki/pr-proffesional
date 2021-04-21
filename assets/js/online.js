jQuery(function () {
    $('.online__courseName').click(function() {
        if(!$(this).hasClass('isOpen')) {
            $(this).next().slideDown();
            $(this).addClass('isOpen');
        } else {
            $(this).next().slideUp();
            $(this).removeClass('isOpen');
        }
    });

    $(".online__mainVisual.sp").bgswitcher({
      images: ["/wp-content/themes/association/assets/img/online/main_visual_bg_sp02.jpg", "/wp-content/themes/association/assets/img/online/main_visual_bg_sp01.jpg"],
    });

    $(".online__mainVisualSubImage").bgswitcher({
      images: ["/wp-content/themes/association/assets/img/online/main_visual_sp01.jpg", "/wp-content/themes/association/assets/img/online/main_visual_sp02.jpg"],
    });

    // モーダル
    $('.online__graduateButton').on('click', function() {
      let target = $(this).data('modal-link');
      let modal = document.querySelector('.' + target);
      $(modal).toggleClass('is-show');
      $('body').css('overflow', 'hidden');
    });

      //  modalを閉じるときの動作
    $('.modal__bg').on('click', function() {
      $(this).parents('.modal').toggleClass('is-show');
      $('body').removeAttr('style');
    });

    $('.modal__closeButton').on('click', function() {
      $(this).parents('.modal').toggleClass('is-show');
      $('body').removeAttr('style');
    });
});