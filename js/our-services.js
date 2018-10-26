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
		$('.tabs').tabs({
		  	onShow: function(tab) {
		  		var newclass = ".swiper-container" + $(".active").attr('id');
		  		swiper.destroy();
		  		delete window["swiper"];
		    	swiper = new Swiper(newclass, {
	      			slidesPerView: 3,
				    slidesPerColumn: 2,
				    slidesPerGroup: 3,
				    spaceBetween: 0,
				    /*
				    autoplay: {
	       				delay: 3500,
	        			disableOnInteraction: false,
	      			},*/
	      			navigation: {
				    	nextEl: '.swiper-button-next' + $(".active").attr('id'),
				        prevEl: '.swiper-button-prev' + $(".active").attr('id'),
				    },
				});

		  	}
		});

		$('.tabs-brief-1').tabs();
		$('.tabs-brief-2').tabs();
		$('.tabs-brief-3').tabs();
		$('.tabs-brief-4').tabs();
		$('.tabs-brief-5').tabs();
		$('.tabs-brief-6').tabs();
		
	    $('.btn-portfolio').hide();
	    $('.swiper-slide').mouseenter(function() {
			$(this).children('.btn-portfolio').show();
		});
	    $('.swiper-slide').mouseleave(function() {
			$(this).children('.btn-portfolio').hide();
		});
		$('.pictureContainer').mouseleave(function() {
	    	$(this).stop();
			$(this).animate({scrollTop:0}, 1000);
		});
	    $('.btn-portfolio-btn').click(function() {
	    	$(this).parent().hide();
	    	$(this).parent().siblings('.pictureContainer').animate({scrollTop: $('img', $(this).parent().siblings('.pictureContainer')).height()}, 5000);
	    });
	    /*
		$('.pictureContainer').mouseenter(function() {
			$(this).animate({scrollTop: $('img', this).height()}, 4000);
		});
		*/
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
		var count = 4;
		var main_width = screen.width;
		if(main_width < 400) {
			count = 1;
		} else if((main_width < 1200)||(/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent))){
			count = 2;
		}

		$('.slider').slick({
			dots: false,
			accessibility: false,
			slidesToShow: count,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
		});

		if(main_width > 1200) {
			/* Start block animation top text for block briefcases */
			$( ".display-alert1" ).on( "click", function() {
			    /*$(".alert1").css("display","block");*/
			    $(".alert2").fadeOut(500);
			    $(".alert3").fadeOut(500);
			    $(".alert4").fadeOut(500);
			    $(".alert5").fadeOut(500);
			    $(".alert6").fadeOut(500);
			    $(".alert1").fadeIn(1000);
			    $('html, body').animate({ scrollTop: $(".alert1").offset().top }, 1000);
			});
			$( ".display-alert2" ).on( "click", function() {
				$(".alert1").fadeOut(500);
			    $(".alert3").fadeOut(500);
			    $(".alert4").fadeOut(500);
			    $(".alert5").fadeOut(500);
			    $(".alert6").fadeOut(500);
			    $(".alert2").fadeIn(1000);
			    $('html, body').animate({ scrollTop: $(".alert2").offset().top }, 1000);
			});
			$( ".display-alert3" ).on( "click", function() {
				$(".alert2").fadeOut(500);
			    $(".alert1").fadeOut(500);
			    $(".alert4").fadeOut(500);
			    $(".alert5").fadeOut(500);
			    $(".alert6").fadeOut(500);
			    $(".alert3").fadeIn(1000);
			    $('html, body').animate({ scrollTop: $(".alert3").offset().top }, 1000);
			});
			$( ".display-alert4" ).on( "click", function() {
				$(".alert2").fadeOut(500);
			    $(".alert3").fadeOut(500);
			    $(".alert1").fadeOut(500);
			    $(".alert5").fadeOut(500);
			    $(".alert6").fadeOut(500);
			    $(".alert4").fadeIn(1000);
			    $('html, body').animate({ scrollTop: $(".alert4").offset().top }, 1000);
			});
			$( ".display-alert5" ).on( "click", function() {
				$(".alert2").fadeOut(500);
			    $(".alert3").fadeOut(500);
			    $(".alert1").fadeOut(500);
			    $(".alert4").fadeOut(500);
			    $(".alert6").fadeOut(500);
			    $(".alert5").fadeIn(1000);
			    $('html, body').animate({ scrollTop: $(".alert5").offset().top }, 1000);
			});
			$( ".display-alert6" ).on( "click", function() {
				$(".alert2").fadeOut(500);
			    $(".alert3").fadeOut(500);
			    $(".alert1").fadeOut(500);
			    $(".alert4").fadeOut(500);
			    $(".alert5").fadeOut(500);
			    $(".alert6").fadeIn(1000);
			    $('html, body').animate({ scrollTop: $(".alert6").offset().top }, 1000);
			});
			/* End block animation top text for block briefcases */
		}
	});
	/* End script for block Reviews */