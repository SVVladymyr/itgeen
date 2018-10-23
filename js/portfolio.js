
	$(document).ready( function(){
		swiper = new Swiper('.swiper-container-all', {
	    	slidesPerView: 3,
			slidesPerColumn: 2,
			spaceBetween: 0,
			autoplay: {
	     	  	delay: 4000,
	        	disableOnInteraction: false,
	     	},
	      	navigation: {
			   	nextEl: '.swiper-button-next-all',
			    prevEl: '.swiper-button-prev-all',
			},
		});
	});