<div class="row address">
                <div class="col s12 contact-block">
                	<div class="contact1">
			            <div class="contact-map1">
				           	<img src="images/contacts/map.png" height="115vh" width="175vw" />
			            </div>
			            <div class="contact-text1">
			              	<p>
			              		350065, г.Краснодар ул.Ставропольская 312, 3 этаж, оф.4
			              		<br>
			              		Тел.: +7(938)407-30-84
			              		<br>
			              		E-mail: contacts@itgeen.com
			              		<br>
			              		Skype: itgeenltd
			              		<br>
			              		<a>Посмотреть на карте</a>
			              	</p>
			            </div>
			        </div>
			        <div class="contact2">
		              	<div class="contact-map2">
		              		<img src="images/contacts/map.png" height="115vh" width="175vw" />
		              	</div>
			            <div class="contact-text2">
				           	<p>
				           		Osaca, Joto Ku, Hanaten Nishi, 1-2
				           		<br>
				           		Тел.: +819096149966
				           		<br>
				           		E-mail: itgeenltd@gmail.com
				           		<br>
				           		Skype: itgeenltd
				           	</p>
			            </div>
			        </div>
			        <div class="contact3">
			            <div class="contact-map3">
		              		<img src="images/contacts/map.png" height="115vh" width="175vw" />
		              	</div>
		              	<div class="contact-text3">
		              		<p>
			              		350065, г.Краснодар ул.Ставропольская 312, 3 этаж, оф.4
			              		<br>
			              		Тел.: +7(938)407-30-84
			              		<br>
			              		E-mail: contacts@itgeen.com
			              		<br>
			              		Skype: itgeenltd
		              		</p>
		              	</div>
		            </div>
    	       	</div>
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

	ymaps.ready(init); 
    //var points =<?echo convertLatLngCemeteriesForYandexMap();?>;
    //var placemarks = points;
            
    function init(){ 
        var map = new ymaps.Map("map", { 
    	    center: [48.519215, 69.569800],
            zoom: 3 
        });

        // Создаём макет содержимого.
        var MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #8aebfe; font-weight: bold;"><nobr>$[properties.iconContent]</nobr></div>'
        );

        var myPlacemarkWithContent = new ymaps.Placemark([48.004913, 37.810117], {
            hintContent: 'Собственный значок метки с контентом',
            balloonContent: 'IT-Geen разработка и продвижение сайтов',
            iconContent: ''
        }, {
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'images/lamp.png',
            // Размеры метки.
            iconImageSize: [24, 24],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-24, -24],
            // Смещение слоя с содержимым относительно слоя с картинкой.
            iconContentOffset: [15, 15],
            // Макет содержимого.
            //iconContentLayout: MyIconContentLayout
        });

        map.geoObjects.add(myPlacemarkWithContent);
      /*      
        placemarks.forEach(function(obj){ 
            var myPlacemark=new ymaps.Placemark([obj.latitude, obj.longitude],{ 
        	    hintContent:obj.hintContent,//название кладбища 
            	balloonContent: obj.balloonContent//название и адрес кладбища 
            }); 
            map.geoObjects.add(myPlacemark); 
        }); 
        */
    }
});