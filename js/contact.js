$(document).ready(function(){
	ymaps.ready(init);

	function init(){ 
        var itgeen_map = new ymaps.Map("map", { 
    	    center: [48.519215, 69.569800],
            zoom: 3 
        });

        $(".contact-1").click(function(){
			itgeen_map.panTo([48.004909, 37.810122], {flying: true}).then(function () {
   				itgeen_map.setZoom(16);
			}, function (err) {
			}, this);
		});

		$(".contact-2").click(function(){
			itgeen_map.panTo([34.677464, 135.500665], {flying: true}).then(function () {
   				itgeen_map.setZoom(12);
			}, function (err) {
			}, this);
		});

		$(".contact-3").click(function(){
			itgeen_map.panTo([45.014282, 39.048023], {flying: true}).then(function () {
   				itgeen_map.setZoom(16);
			}, function (err) {
			}, this);
		});

        // Создаём макет содержимого.
        var MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #8aebfe; font-weight: bold;"><nobr>$[properties.iconContent]</nobr></div>'
        );

        var Donetsk = new ymaps.Placemark([48.004913, 37.810117], {
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

        var Krasnodar = new ymaps.Placemark([45.014282, 39.048023], {
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

        var Osaka = new ymaps.Placemark([34.677464, 135.500665], {
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

        itgeen_map.geoObjects.add(Donetsk);
        itgeen_map.geoObjects.add(Krasnodar);
        itgeen_map.geoObjects.add(Osaka);
    }
});