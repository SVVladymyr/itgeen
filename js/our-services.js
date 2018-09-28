jQuery(document).ready(function($) {
  	for(var i = 9; i > 0; i--) {		
		$('.icon-' + i).click(function(e) {
			for(var j = 1; j < 10; j++) {
				var block = '.text-icon-' + j;
		    	$(block).hide();
		    }
		    var value = $(this).data('value');
		    var main_block = '.text-icon-' + value;
		    $(main_block).show('slow');
		});
	}
});

/* Script for block Portfolio */
/* Animate block. ScrollTop*/
$(document).ready(function(){
    $('.tabs').tabs();
	$('.pictureContainer').mouseenter(function() {
		$(this).animate({scrollTop: $('img', this).height()}, 4000);
	});
	$('.pictureContainer').mouseleave(function() {
    	$(this).stop();
		$(this).animate({scrollTop:0}, 400);
	});
});

/* Start Carousel. Block is name All */
$(document).ready(function(){
    $('.carousel').carousel({
    });
});

/* End script for block Portfolio */
/* Start script for block Reviews */
/* Start slider */
$(document).ready(function(){
	$('.slider').slick({
		dots: false,
		accessibility: false,
		slidesToShow: 4,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
	});
});
/* End script for block Reviews */
/* Start block animation top text for block briefcases */
$( ".display-alert1" ).on( "click", function() {
    /*$(".alert1").css("display","block");*/
    $(".alert1").fadeIn(1000);
    $('html, body').animate({ scrollTop: $(".alert1").offset().top }, 1000);
});
$( ".display-alert2" ).on( "click", function() {
    $(".alert2").fadeIn(1000);
    $('html, body').animate({ scrollTop: $(".alert2").offset().top }, 1000);
});
$( ".display-alert3" ).on( "click", function() {
    $(".alert3").fadeIn(1000);
    $('html, body').animate({ scrollTop: $(".alert3").offset().top }, 1000);
});
$( ".display-alert4" ).on( "click", function() {
    $(".alert4").fadeIn(1000);
    $('html, body').animate({ scrollTop: $(".alert4").offset().top }, 1000);
});
/* End block animation top text for block briefcases */