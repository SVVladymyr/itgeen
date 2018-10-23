$(document).ready(function(){
	$(".contact-text1").addClass("unactive-contact-block1");
	$(".contact-text2").addClass("unactive-contact-block2");
	$(".contact-text3").addClass("unactive-contact-block3");
	$(".contact-map2").addClass("hidden-block");

	$(".contact1").mouseover(function(){
		if($(".contact-text1").hasClass("active-contact-block1")){
			$(".contact-text2").removeClass("active-contact-block2").addClass("unactive-contact-block2");
			$(".contact-text1").removeClass("active-contact-block1").addClass("unactive-contact-block1");
		}
	});

	$(".contact2").mouseover(function(){
		$(".contact-map2").removeClass("hidden-block").addClass("visible-block");
		if($(".contact-text2").hasClass("unactive-contact-block2")){
			$(".contact-text1").removeClass("unactive-contact-block1").addClass("active-contact-block1");
		} else {
			$(".contact-text2").removeClass("active-contact-block2").addClass("unactive-contact-block2");
		}
	});

	$(".contact3").mouseover(function(){
		if($(".contact-text2").hasClass("unactive-contact-block2")){
			$(".contact-text1").removeClass("unactive-contact-block1").addClass("active-contact-block1");
			$(".contact-text2").removeClass("unactive-contact-block2").addClass("active-contact-block2");
		}
	});
});