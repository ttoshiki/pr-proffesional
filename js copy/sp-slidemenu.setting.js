



    $(window).on('load resize', function() {
        var minWidth = 669;
        if (minWidth <= $(this).width()) {
$("#wrapper").removeAttr('style');
        } else {
var menu = SpSlidemenu({
      main : '#wrapper',
      button: '.btn-menu',
      slidemenu : '#menu',
      direction: 'left'
});
        }
    });