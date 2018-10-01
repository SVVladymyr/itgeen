$(document).ready(function(){
	$(".contact-map1 > img").show("slide", { direction: "right" }, 1000);
	$(".contact-map2 > img").hide();
    $(".contact-map3 > img").hide();
    $(".contact-text1").mouseenter(function(){
    	$(".contact-map2 > img").hide("slide", { direction: "left" }, 500,function(){
    		$(".contact-map3 > img").hide("slide", { direction: "left" }, 500, function(){
    			$(".contact-map1 > img").show("slide", { direction: "right" }, 1000, function(){
    				$(".contact-map2 > img").hide();
    				$(".contact-map3 > img").hide();
    			});
    		});
    	});
    });
    $(".contact-text2").mouseenter(function(){
	   	$(".contact-map1 > img").hide("slide", { direction: "left" }, 500, function(){
	   		$(".contact-map3 > img").hide("slide", { direction: "left" }, 500, function(){
	   			$(".contact-map2 > img").show("slide", { direction: "right" }, 1000, function(){
	   				$(".contact-map1 > img").hide();
	   				$(".contact-map3 > img").hide();
	   			});
	   		});
	   	});
    });
    $(".contact-text3").mouseenter(function(){
	   	$(".contact-map1 > img").hide("slide", { direction: "left" }, 500, function(){
	   		$(".contact-map2 > img").hide("slide", { direction: "left" }, 500, function(){
	   			$(".contact-map3 > img").show("slide", { direction: "right" }, 1000, function(){
	   				$(".contact-map1 > img").hide();
	   				$(".contact-map2 > img").hide();
	   			});			
	   		});
	   	});
    });
});