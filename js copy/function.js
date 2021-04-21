// アコーディオン
$(function(){
	var dragging = false;
	$(document).on("touchmove",".accordion,.accordion-open",function(){
		dragging = true;
	});
	$(document).on("touchend click",".accordion",function(){
		if (dragging)
		return;
		$(this).addClass('accordion-open');
		$(this).removeClass('accordion');
		$(this).nextAll(".accordion-contents:first").slideDown(200, 'easeOutCirc', function() {
		});
		event.preventDefault();
	});

	$(document).on("touchend click",".accordion-open",function(){
		if (dragging)
		return;
		$(this).removeClass('accordion-open');
		$(this).addClass('accordion');
		$(this).nextAll(".accordion-contents:first").slideUp(200, 'easeOutCirc', function() {
		});
		event.preventDefault();
	});
	$(document).on("touchstart",".accordion,.accordion-open",function(){
		dragging = false;
	});
});



// アコーディオン hash
$(function(){
	var dragging = false;
	$(document).on("touchmove",".accordion,.accordion-open",function(){
		dragging = true;
	});
	$(document).on("touchend click",".accordion",function(){
		if (dragging)
		return;
		$(this).addClass('accordion-open');
		$(this).removeClass('accordion');
		$(this).nextAll(".accordion-contents:first").slideDown(200, 'easeOutCirc', function() {
		});
		event.preventDefault();
	});

	$(document).on("touchend click",".accordion-open",function(){
		if (dragging)
		return;
		$(this).removeClass('accordion-open');
		$(this).addClass('accordion');
		$(this).nextAll(".accordion-contents:first").slideUp(200, 'easeOutCirc', function() {
		});
		event.preventDefault();
	});
	$(document).on("touchstart",".accordion,.accordion-open",function(){
		dragging = false;
	});
});









$(document).ready(
  function(){
    $("a") .hover(function(){
       $(this).fadeTo("2000",0.8);
    },function(){
       $(this).fadeTo("1000",1.0);
    });
  });



$(function() {
	$('.effect-top').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('effect-top-inview');
		}
//		else{
//			$(this).stop().removeClass('effect-top-inview');
//		}
	});
	$('.effect-top-fade').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('effect-top-fade-inview');
		}
//		else{
//			$(this).stop().removeClass('effect-top-fade-inview');
//		}
	});
	$('.effect-left').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('effect-left-inview');
		}
		else{
			$(this).stop().removeClass('effect-left-inview');
		}
	});
	$('.effect-right').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('effect-right-inview');
		}
		else{
			$(this).stop().removeClass('effect-right-inview');
		}
	});
	$('.effect-fadeIn').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('effect-fadeIn-inview');
		}
//				else{
//					$(this).stop().removeClass('effect-fadeIn-inview');
//				}
	});
 
});




