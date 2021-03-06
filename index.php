<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ITGeen</title>
    <!--
    <meta name="viewport" content="width=device-width" />
-->
	<!--[if lt IE 9]>
    	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="component/timelinejs/dist/css/style.css" />
    <link rel="stylesheet" href="component/slick/slick/slick.css" />
    <link rel="stylesheet" href="component/slick/slick/slick-theme.css" />
	<link rel="stylesheet" type="text/css" href="component/swiper/dist/css/swiper.css" />
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/advancement.css">
    <link rel="stylesheet" href="css/reviews.css">
    <link rel="stylesheet" href="css/briefcases.css">
    <link rel="stylesheet" href="css/10-click.css">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/target.css">
    <link rel="stylesheet" href="css/application.css">
    <link rel="stylesheet" href="component/navigation/css/style.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
</head>
<body>
	<div class="itgeen-container">
		<header>
				<div class="row phone">
					<div class="col s3 offset-s1">
						<div>	
							<h6 class="phone-header">
								<span class="center-align">+7(938)407-30-84</span>
							</h6>
						</div>
					</div>
					<div class="col s3 offset-s2">	
						<h6 class="phone-header">
							<span class="center-align">+7(938)407-30-84</span>
						</h6>
					</div>
					<div class="col s3">	
						<h6 class="phone-header">
							<span class="center-align">+7(938)407-30-84</span>
						</h6>
					</div>
				</div>
				<canvas id="canvas"></canvas>
				<div class="row">
					<div class="col s1 m1 l1 xl1 header-block-1">
						<img src="images/logo.png" width="150%" height="auto" class="logo">
						<div class="row">
							<div class="col s12 header-block-11">
								<img src="images/exclamation.png" width="130%" height="auto" class="exclamation">
							</div>
						</div>
					</div>
					<div class="col s5 m5 l5 xl5 header-block-2">
						<div class="row">
							<div class="col s12">
								<img id="img-canvas" src="images/fon.png" />
								<span class="text-header-block-21" align="right"><h1><b>Разработка<br><nobr>и продвижение</nobr><br>сайтов</b></h1></span>
							</div>
							<div class="col s6 header-block-22">
								<span class="ul-title-block-22">Почему стоит работать с нами</span>
								<ul class="ul-header-block-22">
									<li><span>Выполняем все работы в срок</span></li>
									<li><span>10 лет на рынке, имеем профессиональную команду</span></li>
									<li><span>Всегда идем навстречу клиенту</span></li>
									<li><span>Нацелены на результат, увеличиваем вашу прибыль</span></li>
								</ul>
							</div>
							<div class="col s3 header-block-23">
								<img src="images/question-1.png" width="60%" height="auto" class="question-1">
								<img src="images/question-2.png" width="60%" height="auto" class="question-2">
								<img src="images/question-3.png" width="50%" height="auto" class="question-3">
							</div>	
						</div>
					</div>
					<div class="col s6 m6 l6 xl6 header-block-3">
						<div class="row">
							<div class="col s12 reset-left-padding">
								<div class="image-header-block-3">
									<img src="images/header-image3.png" width="130%" height="20%" class="animated">
								</div>		
							</div>
						</div>
						<div class="row">
							<div class="col s6">
								<div class="header-block-33">
									<div class="input-field col s12">
								        <input id="first_name" type="text" class="validate">
								        <label for="first_name">Имя</label>
								    </div>
								    <div class="input-field col s12">
								        <input id="phone" type="text" class="validate">
								        <label for="phone">Телефон</label>
								    </div>
							        <div class="input-field col s12">
							        	<input id="text" type="text" class="validate">
								        <label for="text">Что Вас интересует?</label>
								    </div>
								    <div class="col s12 btn-header-block-33">
								    	<br><a class="btn">Оставить заявку</a>
								    </div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="mynav">
					<ul class="cd-primary-nav">
						<li class="cd-label">About us</li>

						<li><a href="#0">The team</a></li>
						<li><a href="#0">Our services</a></li>
						<li><a href="#0">Our projects</a></li>

						<li class="cd-label">Work with us</li>

						<li><a href="#0">Start a project</a></li>
						<li><a href="#0">Join In</a></li>
						<li><a href="#0">Create an account</a></li>

						<li class="cd-label">Follow us</li>
						
						<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
						<li class="cd-social cd-instagram"><a href="#0">Instagram</a></li>
						<li class="cd-social cd-dribbble"><a href="#0">Dribbble</a></li>
						<li class="cd-social cd-twitter"><a href="#0">Twitter</a></li>
					</ul>
				</div>
				<!-- cd-nav -->
				<a class="cd-primary-nav-trigger cd-header is-fixed">
					<span class="cd-menu-icon"></span>
				</a> <!-- cd-primary-nav-trigger -->
		</header>
		</div>
		<main>
			<!-- Start block About  -->
			<div class="row">
				<div class="col s11 push-s1 main-about">
					<div class="row  valign-wrapper">
						<div class="col s6">
							<div class="row main-about-header">
								<div class="col s7 main-about-marker">
									<span>
										О нас
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col s12">
									<p class="main-about-text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
									<p class="main-about-text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</p>
								</div>
							</div>
						</div>
						<div class="col s6 main-about-img">
							<img src="images/workplace.png" class="responsive-img" />
						</div>
					</div>
				</div>
			</div>
			<!-- End block About  -->
			<!-- Start block Our services  -->
			<div class="row">
				<div class="col s6 offset-s6 title-our-services">
					<span>Наши услуги</span>
				</div>
			</div>
			<div class="row our-services">
				<div class="col s4 top-our-services-left">
					<img src="images/our-services/icon-11.png" class="responsive-img text-icon-1" vspace="3" hspace="3">
					<img src="images/our-services/icon-21.png" class="responsive-img text-icon-2" vspace="3" hspace="3">
					<img src="images/our-services/icon-31.png" class="responsive-img text-icon-3" vspace="3" hspace="3">
					<img src="images/our-services/icon-41.png" class="responsive-img text-icon-4" vspace="3" hspace="3">
					<img src="images/our-services/icon-51.png" class="responsive-img text-icon-5" vspace="3" hspace="3">
					<img src="images/our-services/icon-61.png" class="responsive-img text-icon-6" vspace="3" hspace="3">
					<div class="row our-services-left">
						<div class="col s12 our-services-left-block text-icon-1">
							<p class="title-our-services-left-block">1. Соцсети (SMM)</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p class="cash-our-services-left-block"><span>Цена: 2011 руб.</span></p>
						</div>
						<div class="col s12 our-services-left-block text-icon-2">
							<p class="title-our-services-left-block">2. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p class="cash-our-services-left-block"><span>Цена: 2012 руб.</span></p>
						</div>
						<div class="col s12 our-services-left-block text-icon-3">
							<p class="title-our-services-left-block">3. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p class="cash-our-services-left-block"><span>Цена: 2013 руб.</span></p>
						</div>
						<div class="col s12 our-services-left-block text-icon-4">
							<p class="title-our-services-left-block">4. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p class="cash-our-services-left-block"><span>Цена: 2014 руб.</span></p>
						</div>
						<div class="col s12 our-services-left-block text-icon-5">
							<p class="title-our-services-left-block">5. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p class="cash-our-services-left-block"><span>Цена: 2015 руб.</span></p>
						</div>
						<div class="col s12 our-services-left-block text-icon-6">
							<p class="title-our-services-left-block">6. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p class="cash-our-services-left-block"><span>Цена: 2016 руб.</span></p>
						</div>
						<!--
						<div class="col s12 our-services-left-block text-icon-7">
							<p class="title-our-services-left-block">7. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
						</div>
						<div class="col s12 our-services-left-block text-icon-8">
							<p class="title-our-services-left-block">8. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
						</div>
						<div class="col s12 our-services-left-block text-icon-9">
							<p class="title-our-services-left-block">9. SMM анализ</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
							<p>Проводим SMM анализ сообщества пПППм пп пыуп павп в апвапва павпв пвапв апва</p>
						</div>
					-->
					</div>
				</div>
				<div class="col s8 our-services-right">
					<div class="row">
						<div class="col s4">
							<a class="btn-floating icon icon-1" data-value="1"><img src="images/our-services/icon-1.png" class="responsive-img img-icon-1"><p>Сайты</p></a>
						</div>
						<div class="col s4">
							<a class="btn-floating icon icon-2" data-value="2"><img src="images/our-services/icon-2.png" class="responsive-img img-icon-2"><p>Приложения</p></a>
						</div>
						<div class="col s4">
							<a class="btn-floating icon icon-3" data-value="3"><img src="images/our-services/icon-3.png" class="responsive-img img-icon-3"><p>SEO</p></a>
						</div>
					</div>
					<div class="row">
						<div class="col s4">
							<a class="btn-floating icon icon-4" data-value="4"><img src="images/our-services/icon-4.png" class="responsive-img img-icon-4"><p>Соцсети (SMM)</p></a>
						</div>
						<div class="col s4">
							<a class="btn-floating icon icon-5" data-value="5"><img src="images/our-services/icon-5.png" class="responsive-img img-icon-5"><p>Контекст</p></a>
						</div>
						<div class="col s4">
							<a class="btn-floating icon icon-6" data-value="6"><img src="images/our-services/icon-6.png" class="responsive-img img-icon-6"><p>Дизайн</p></a>
						</div>
					</div>
					<!--
					<div class="row">
						<div class="col s4">
							<a class="btn-floating icon icon-7" data-value="7"><img src="images/our-services/icon-7.png" class="responsive-img img-icon-7"><p>Продающие <br>тексты</p></a>
						</div>
						<div class="col s4">
							<a class="btn-floating icon icon-8" data-value="8"><img src="images/our-services/icon-8.png" class="responsive-img img-icon-8"><p>Дизайн</p></a>
						</div>
						<div class="col s4">
							<a class="btn-floating icon icon-9" data-value="9"><img src="images/our-services/icon-9.png" class="responsive-img img-icon-9"><p>Консультация</p></a>
						</div>
					-->
					</div>
				</div>
			</div>
			<!-- End block Our services  -->
			<!-- Start block history about -->
			<!--
			<div class="row">
				<div class="col s5 our-history">
					<span>Наша история</span>
				</div>
				<div class="col s12">
					<div class="tl-wrapper">
					  <ul class="timeline" width="100%" height="auto">
					    <li class="tl-item" data-year="2014">
					      <div class="tl-copy">
					        <h3 class="title">iTGeen, </h3>
					        <div class="tl-description">
					          <p>Волшебные интернет решения</p>
					        </div>
					      </div>		
					      <div class="tl-image"><img src="component/timelinejs/dist/images/japan2.jpg"/></div>
					    </li>
					    <li class="tl-item" data-year="">
					      <div class="tl-image"><img src="component/timelinejs/dist/images/fuji2.jpg"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Jrefa</h3>
					        <div class="tl-description">
					          <p>Торговая компания, помощь в создании русскоязычной версии сайта</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2015">
					      <div class="tl-image"><img src="component/timelinejs/dist/images/bonsai2.jpg"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Дороничи</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2017">
					      <div class="tl-image"><img src="component/timelinejs/dist/images/zen2.jpg"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Aw, you're all Mr. Grumpy Face today. They're not aliens, they're Earth&hellip;liens!</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2003">
					      <div class="tl-image"><img src=" http://placehold.it/1650x1000/"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Aw, you're all Mr. Grumpy Face today. They're not aliens, they're Earth&hellip;liens!</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2004">
					      <div class="tl-image"><img src=" http://placehold.it/1650x1000/"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Aw, you're all Mr. Grumpy Face today. They're not aliens, they're Earth&hellip;liens!</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2005">
					      <div class="tl-image"><img src=" http://placehold.it/1650x1000/"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Aw, you're all Mr. Grumpy Face today. They're not aliens, they're Earth&hellip;liens!</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2006">
					      <div class="tl-image"><img src=" http://placehold.it/1650x1000/"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Aw, you're all Mr. Grumpy Face today. They're not aliens, they're Earth&hellip;liens!</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2007">
					      <div class="tl-image"><img src=" http://placehold.it/1650x1000/"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Aw, you're all Mr. Grumpy Face today. They're not aliens, they're Earth&hellip;liens!</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					    <li class="tl-item" data-year="2008">
					      <div class="tl-image"><img src=" http://placehold.it/1650x1000/"/></div>
					      <div class="tl-copy">
					        <h3 class="title">Aw, you're all Mr. Grumpy Face today. They're not aliens, they're Earth&hellip;liens!</h3>
					        <div class="tl-description">
					          <p>Aw, you're all Mr. Grumpy Face today. No&hellip; It's a thing; it's like a plan, but with more greatness. They're not aliens, they're Earth&hellip;liens! Sorry, checking all the water in this area; there's an escaped fish. All I've got to do is pass as an ordinary human being. Simple. What could possibly go wrong? You've swallowed a planet!</p>
					        </div>
					      </div>
					    </li>
					  </ul>
					</div>
				</div>	
			</div>
		-->
			<!-- End block history about -->
			<!-- Start block portfolio -->
			<div class="row">
				<div class="col s5 our-history">
					<span>Портфолио</span>
				</div>
			</div>
			<div class="row">
			    <div class="col s12 portfolio">
				    <ul class="tabs">
				        <li class="tab col s2"><a id="-all" class="active" href="#all">Все</a></li>
				        <li class="tab col s2"><a id="-site" href="#site">Сайты</a></li>
				        <li class="tab col s2"><a id="-app" href="#app">Приложения</a></li>
				        <li class="tab col s2"><a id="-video" href="#video">Видео</a></li>
				        <li class="tab col s2"><a id="-design" href="#design">Дизайн</a></li>
				        <li class="tab col s2"><a id="-seo" href="#seo">Продвижение</a></li>
	 		        </ul>
			    </div>
			    <div id="all" class="col s12">
			    	<div class="row">
			    		<br>
			    		<div class="col s12">
			    			<div class="content">
			    				<!-- Swiper -->
								<div class="swiper-container swiper-container-all">
								    <div class="swiper-wrapper">
									
									
									<?
								$ckeys=file("base/portfolio.csv");
								$ckeyss=count($ckeys);
								for ($i=1;$i<$ckeyss;$i++)
								{
									$ckeysrez=explode(";",$ckeys[$i]); 
									$imgrez=$ckeysrez[11];
									$namrez=$ckeysrez[0];
									$opisrez=$ckeysrez[1];
									//echo "проверка=" . $ckeysrez . " img=" . $imgrez . " nam=" . $namrez . "<br/>";
									$j=$i+1; ?>								
									
								
										<div class="swiper-slide">
								      		<a class="pictureContainer">
												<img src="images/portfolio/<?echo($imgrez);?>" alt="image01" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"><?echo($namrez);?></p>
												<p class="btn-portfolio-textopis"><?echo($opisrez);?></p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
								    	</div>  
											
								<? } ?>  
									
									
								    	<div class="swiper-slide">
								      		<a class="pictureContainer">
												<img src="images/portfolio/1-1.jpg" alt="image01" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
								    	</div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/2-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from 	Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/3-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/4-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/5-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/6-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/7-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/8-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/9-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/10-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/11-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/12-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/13-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/14-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/15-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/16-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/17-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/18-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
								    </div>
								    <div class="swiper-button-next swiper-button-next-all"></div>
    								<div class="swiper-button-prev swiper-button-prev-all"></div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			    <div id="site" class="col s12">
			    	<div class="row">
			    		<br>
			    		<div class="col s12">
			    			<div class="content">
			    				<!-- Swiper -->
								<div class="swiper-container swiper-container-site">
								    <div class="swiper-wrapper">
								    	<div class="swiper-slide">
								      		<a class="pictureContainer">
												<img src="images/portfolio/1-1.jpg" alt="image01" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
								    	</div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/2-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from 	Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/3-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/4-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/5-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/6-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/7-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/8-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/9-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/10-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/11-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/12-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/13-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/14-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/15-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/16-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/17-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/18-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
								    </div>
								    <div class="swiper-button-next swiper-button-next-site"></div>
    								<div class="swiper-button-prev swiper-button-prev-site"></div>
							  	</div>
							</div>
						</div>
					</div>
			    </div>
			    <div id="app" class="col s12">
			    	<div class="row">
			    		<br>
			    		<div class="col s12">
			    			<div class="content">
			    				<!-- Swiper -->
								<div class="swiper-container swiper-container-app">
								    <div class="swiper-wrapper">
								    	<div class="swiper-slide">
								      		<a class="pictureContainer">
												<img src="images/portfolio/1-1.jpg" alt="image01" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
								    	</div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/2-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from 	Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/3-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/4-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/5-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/6-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/7-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/8-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/9-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/10-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/11-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/12-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/13-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/14-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/15-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/16-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/17-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/18-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
								    </div>
								    <div class="swiper-button-next swiper-button-next-app"></div>
    								<div class="swiper-button-prev swiper-button-prev-app"></div>
							  	</div>
							</div>
						</div>
					</div>
			    </div>
			    <div id="video" class="col s12">
			    	<div class="row">
			    		<br>
			    		<div class="col s12">
			    			<div class="content">
			    				<!-- Swiper -->
								<div class="swiper-container swiper-container-video">
								    <div class="swiper-wrapper">
								    	<div class="swiper-slide">
								      		<a class="pictureContainer">
												<img src="images/portfolio/1-1.jpg" alt="image01" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
								    	</div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/2-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from 	Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/3-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/4-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/5-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/6-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/7-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/8-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/9-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/10-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/11-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/12-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/13-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/14-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/15-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/16-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/17-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/18-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
								    </div>
								    <div class="swiper-button-next swiper-button-next-video"></div>
    								<div class="swiper-button-prev swiper-button-prev-video"></div>
							  	</div>
							</div>
						</div>
					</div>
			    </div>
			    <div id="design" class="col s12">
			    	<div class="row">
			    		<br>
			    		<div class="col s12">
			    			<div class="content">
			    				<!-- Swiper -->
								<div class="swiper-container swiper-container-design">
								    <div class="swiper-wrapper">
								    	<div class="swiper-slide">
								      		<a class="pictureContainer">
												<img src="images/portfolio/1-1.jpg" alt="image01" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
								    	</div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/2-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from 	Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/3-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/4-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/5-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/6-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/7-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/8-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/9-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/10-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/11-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/12-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/13-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/14-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/15-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/16-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/17-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/18-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
								    </div>
								    <div class="swiper-button-next swiper-button-next-design"></div>
    								<div class="swiper-button-prev swiper-button-prev-design"></div>
							  	</div>
							</div>
						</div>
					</div>
			    </div>
			    <div id="seo" class="col s12">
			    	<div class="row">
			    		<br>
			    		<div class="col s12">
			    			<div class="content">
			    				<!-- Swiper -->
								<div class="swiper-container swiper-container-seo">
								    <div class="swiper-wrapper">
								    	<div class="swiper-slide">
								      		<a class="pictureContainer">
												<img src="images/portfolio/1-1.jpg" alt="image01" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
								    	</div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/2-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from 	Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/3-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/4-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/5-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/6-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/7-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/8-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/9-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/10-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/11-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/12-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/13-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/14-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/15-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/16-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/17-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
									    <div class="swiper-slide">
									    	<a class="pictureContainer">
												<img src="images/portfolio/18-1.jpg" alt="image02" width="100%" />
											</a>
											<a class="btn btn-portfolio">
												<p class="btn-portfolio-text"> Block of images from Portfolio </p>
												<p class="btn-portfolio-btn">
													Просмотреть
												</p>
											</a>
									    </div>
								    </div>
								    <div class="swiper-button-next swiper-button-next-seo"></div>
    								<div class="swiper-button-prev swiper-button-prev-seo"></div>
							  	</div>
							</div>
						</div>
					</div>
			    </div>
			</div>
			<!-- End block portfolio -->
			<!-- Start block ten clicks -->
			<div class="row">
				<div class="col s6 offset-s6 title-our-services">
					<span>Сайт в 10 кликов</span>
				</div>
			</div>
			<div class="row ten-click-block-top">
				<div class="col s12">
					<div class="row ten-click-top-block">
						<div class="col s2 offset-s1">
							<div class="ten-click-text-header">
								01
							</div>
							<div class="ten-click-text">
								Обсуждение<br> пожеланий
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								02
							</div>
							<div class="ten-click-text">
								Подготовка<br> прототипа
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								03
							</div>
							<div class="ten-click-text">
								Дизайн<br> интерфейса
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								04
							</div>
							<div class="ten-click-text">
								Верстка<br> макетов
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								05
							</div>
							<div class="ten-click-text">
								Программирование
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row ten-click-block-center">
				<div class="col s6 ten-click-img1">
					<div class="row">
						<div class="col s9 offset-s3 ten-click-text">
							<p>
								Планирование структуры, разработка навигации сайта и сценариев распределения информации по страницам
								<wbr>
								Планирование структуры, разработка навигации сайта и сценариев распределения информации по страницам
								<wbr>
								Планирование структуры, разработка навигации сайта и сценариев распределения информации по страницам
								<wbr>
								Планирование структуры, разработка навигации сайта и сценариев распределения информации по страницам
							</p>
						</div>
					</div>
				</div>
				<div class="col s6 ten-click-img2">
				</div>
			</div>
			<div class="row ten-click-block-bottom">
				<div class="col s12">
					<div class="row ten-click-top-block">
						<div class="col s2 offset-s1">
							<div class="ten-click-text-header">
								06
							</div>
							<div class="ten-click-text">
								Наполнение<br> контентом
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								07
							</div>
							<div class="ten-click-text">
								Поисковая<br> оптимизация
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								08
							</div>
							<div class="ten-click-text">
								Поддержка<br> и раскрутка
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								09
							</div>
							<div class="ten-click-text">
								Контекстная<br> реклама
							</div>
						</div>
						<div class="col s2">
							<div class="ten-click-text-header">
								10
							</div>
							<div class="ten-click-text">
								Правильный<br> сайт
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col s12 btn-header-block-33">
					<a class="btn" onclick="$('.tap-target').tapTarget('open')">Заказать услугу</a>
				</div>
			</div>
			<!-- End block ten clicks -->
			<!-- Start block advancement -->
			<div class="row advancement-row">
				<div class="col s5 our-history">
					<span>Продвижение</span>
				</div>
				<div class="col s12 advancement">
					<div class="row">
						<div class="col s2">
							<div class="advancement-text-header">
								<img src="images/advancement/star.png" height="auto" width="60%" />
							</div>
							<div class="advancement-text">
								<p>Повышение<br>имиджа</p>
							</div>
						</div>
						<div class="col s2">
							<div class="advancement-text-header">
								<img src="images/advancement/bag.png" height="auto" width="60%" />
							</div>
							<div class="advancement-text">
								<p>Вы знаете,<br>за что платите</p>
							</div>
						</div>
						<div class="col s2">
							<div class="advancement-text-header">
								<img src="images/advancement/dollar.png" height="auto" width="60%" />
							</div>
							<div class="advancement-text">
								<p>Дешевле чем<br>оффлайн реклама</p>
							</div>
						</div>
						<div class="col s2">
							<div class="advancement-text-header">
								<img src="images/advancement/card.png" height="auto" width="60%" />
							</div>
							<div class="advancement-text">
								<p>Коммуникация<br>с клиентами</p>
							</div>
						</div>
						<div class="col s2">
							<div class="advancement-text-header">
								<img src="images/advancement/target.png" height="auto" width="60%" />
							</div>
							<div class="advancement-text">
								<p>Целевая<br>аудитория</p>
							</div>
						</div>
						<div class="col s2">
							<div class="advancement-text-header">
								<img src="images/advancement/calc.png" height="auto" width="60%" />
							</div>
							<div class="advancement-text">
								<p>Рост<br>продаж</p>
							</div>
						</div>
					</div>
					<div class="row">
						<p>Ежедневно в интернете покупают и продают миллионы людей. В России объём интернет продаж в 2017 году составил 1,1 трлн. рублей. Если вас нет в интернете, то вы теряете большой объём клиентов.</p>
						<p>Ежедневно в интернете покупают и продают миллионы людей. В России объём интернет продаж в 2017 году составил 1,1 трлн. рублей. Если вас нет в интернете, то вы теряете большой объём клиентов. Ежедневно в интернете покупают и продают миллионы людей. В России объём интернет продаж в 2017 году составил 1,1 трлн. рублей. Если вас нет в интернете, то вы теряете большой объём клиентов.</p>
					</div>
					<div class="row">
						<div class="col s12 btn-header-block-33">
							<a class="btn" onclick="$('.tap-target').tapTarget('open')">Заказать услугу</a>
						</div>
					</div>
				</div>
			</div>
			<!--
			<div class="row advancement-bottom">
				<div class="col s12 advancement-bottom-header">
					<p>Почему МЫ</p>
				</div>
				<div class="col s12">
					<div class="row advancement-bottom-text">
						<div class="col s3 offset-s1">
							<img src="images/advancement/why-we1.png" height="auto" width="40%" />
							<p>Передовые<br>технологии</p>
						</div>
						<div class="col s3 offset-s1">
							<img src="images/advancement/why-we2.png" height="auto" width="40%" />
							<p>Наши специалисты охватывают<br>широкий спектр интернет услуг</p>
						</div>
						<div class="col s3 offset-s1">
							<img src="images/advancement/why-we3.png" height="auto" width="40%" />
							<p>Упор на<br>реальный результат</p>
						</div>
					</div>
				</div>
			</div>	
		-->
			<!-- End block advancement -->
			<!-- Start block briefcases -->
			<div class="row">
				<div class="col s6 offset-s6 title-our-services">
					<span>Кейсы</span>
				</div>
			</div>
			<div class="row briefcases-block">
				<div class="col s12 briefcases">
					<div class="row display-inline">
						<a class="display-alert1 main-hover">
							<div class="col s6 main">
								<div class="left">
									<div class="left-one">
		                				<img src="images/briefcases/line.png">
		            				</div>
									<div class="left-two">
		                				<img src="images/briefcases/bus3.png">
		            				</div>
		            				<div class="left-text">
		            					<p class="left-text-top">
		            						A Picturesque Platform for a Global Giant
		            					</p>
		            					<p class="left-text-main">
											Engel &amp; Völkers has grown into one of the world’s largest and most <br> respected luxury real estate companies.
										</p>
										<p class="text-photo-end">
											Посмотреть проект
										</p>
		            				</div>
		            			</div>
	            				<div class="right">
	                				<img src="images/briefcases/perspective.png">
	            				</div>
							</div>
						</a>
						<a class="display-alert2 main-hover">
							<div class="col s6 main">
								<div class="left">
									<div class="left-one">
		                				<img src="images/briefcases/line.png">
		            				</div>
									<div class="left-two">
		                				<img src="images/briefcases/bus3.png">
		            				</div>
		            				<div class="left-text">
		            					<p class="left-text-top">
		            						A Picturesque Platform for a Global Giant
		            					</p>
		            					<p class="left-text-main">
											Engel &amp; Völkers has grown into one of the world’s largest and most <br> respected luxury real estate companies.
										</p>
										<p class="text-photo-end">
											Посмотреть проект
										</p>
		            				</div>
		            			</div>
	            				<div class="right">
	                				<img src="images/briefcases/perspective.png">
	            				</div>
							</div>
						</a>
					</div>
					<div class="row">
						<div class="col s12 alert-block">
							<div class="alert1">
							  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
							  	</span> 
							  	<div>
									<div class="row brief-tabs">
								    	<div class="col m3">
								      		<ul class="tabs-brief-1">
								        		<li class="tab"><a class="active" href="#img1"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img2"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img3"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
								      		</ul>
								    	</div>
								    	<div class="col m9">
									    <div id="img1" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 1
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
									    <div id="img2" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 2
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
									    <div id="img3" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 3
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col s12 alert-block">
							<div class="alert2">
							  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
							  	</span> 
							  	<div>
									<div class="row brief-tabs">
								    	<div class="col m3">
								      		<ul class="tabs-brief-2">
								        		<li class="tab"><a class="active" href="#img4"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img5"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img6"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
								      		</ul>
								    	</div>
								    	<div class="col m9">
										    <div id="img4" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 1
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
										    <div id="img5" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 2
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
										    <div id="img6" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 3
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row display-inline display-inline-bottom">
						<a class="display-alert3 main-hover">
							<div class="col s6 main">
								<div class="left">
									<div class="left-one">
		                				<img src="images/briefcases/line.png">
		            				</div>
									<div class="left-two">
		                				<img src="images/briefcases/bus3.png">
		            				</div>
		            				<div class="left-text">
		            					<p class="left-text-top">
		            						A Picturesque Platform for a Global Giant
		            					</p>
		            					<p class="left-text-main">
											Engel &amp; Völkers has grown into one of the world’s largest and most <br> respected luxury real estate companies.
										</p>
										<p class="text-photo-end">
											Посмотреть проект
										</p>
		            				</div>
		            			</div>
	            				<div class="right">
	                				<img src="images/briefcases/perspective.png">
	            				</div>
							</div>
						</a>
						<a class="display-alert4 main-hover">
							<div class="col s6 main">
								<div class="left">
									<div class="left-one">
		                				<img src="images/briefcases/line.png">
		            				</div>
									<div class="left-two">
		                				<img src="images/briefcases/bus3.png">
		            				</div>
		            				<div class="left-text">
		            					<p class="left-text-top">
		            						A Picturesque Platform for a Global Giant
		            					</p>
		            					<p class="left-text-main">
											Engel &amp; Völkers has grown into one of the world’s largest and most <br> respected luxury real estate companies.
										</p>
										<p class="text-photo-end">
											Посмотреть проект
										</p>
		            				</div>
		            			</div>
	            				<div class="right">
	                				<img src="images/briefcases/perspective.png">
	            				</div>
							</div>
						</a>	
					</div>
					<div class="row">
						<div class="col s12 alert-block">
							<div class="alert3">
							  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
							  	</span> 
							  	<div>
									<div class="row brief-tabs">
								    	<div class="col m3">
								      		<ul class="tabs-brief-3">
								        		<li class="tab"><a class="active" href="#img7"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img8"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img9"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
								      		</ul>
								    	</div>
								    	<div class="col m9">
									    <div id="img7" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 1
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
									    <div id="img8" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 2
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
									    <div id="img9" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 3
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col s12 alert-block">
							<div class="alert4">
							  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
							  	</span> 
							  	<div>
									<div class="row brief-tabs">
								    	<div class="col m3">
								      		<ul class="tabs-brief-4">
								        		<li class="tab"><a class="active" href="#img10"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img11"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img12"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
								      		</ul>
								    	</div>
								    	<div class="col m9">
										    <div id="img10" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 1
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
										    <div id="img11" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 2
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
										    <div id="img12" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 3
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row display-inline display-inline-bottom">
						<a class="display-alert5 main-hover">
							<div class="col s6 main">
								<div class="left">
									<div class="left-one">
		                				<img src="images/briefcases/line.png">
		            				</div>
									<div class="left-two">
		                				<img src="images/briefcases/bus3.png">
		            				</div>
		            				<div class="left-text">
		            					<p class="left-text-top">
		            						A Picturesque Platform for a Global Giant
		            					</p>
		            					<p class="left-text-main">
											Engel &amp; Völkers has grown into one of the world’s largest and most <br> respected luxury real estate companies.
										</p>
										<p class="text-photo-end">
											Посмотреть проект
										</p>
		            				</div>
		            			</div>
	            				<div class="right">
	                				<img src="images/briefcases/perspective.png">
	            				</div>
							</div>
						</a>
						<a class="display-alert6 main-hover">
							<div class="col s6 main">
								<div class="left">
									<div class="left-one">
		                				<img src="images/briefcases/line.png">
		            				</div>
									<div class="left-two">
		                				<img src="images/briefcases/bus3.png">
		            				</div>
		            				<div class="left-text">
		            					<p class="left-text-top">
		            						A Picturesque Platform for a Global Giant
		            					</p>
		            					<p class="left-text-main">
											Engel &amp; Völkers has grown into one of the world’s largest and most <br> respected luxury real estate companies.
										</p>
										<p class="text-photo-end">
											Посмотреть проект
										</p>
		            				</div>
		            			</div>
	            				<div class="right">
	                				<img src="images/briefcases/perspective.png">
	            				</div>
							</div>
						</a>	
					</div>
					<div class="row">
						<div class="col s12 alert-block">
							<div class="alert5">
							  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
							  	</span> 
							  	<div>
									<div class="row brief-tabs">
								    	<div class="col m3">
								      		<ul class="tabs-brief-5">
								        		<li class="tab"><a class="active" href="#img13"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img14"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img15"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
								      		</ul>
								    	</div>
								    	<div class="col m9">
									    <div id="img13" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 1
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
									    <div id="img14" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 2
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
									    <div id="img15" class="col tab-content brief-photo">
									    	<div>
										    	<div class="full-photo">
										    		<img src="images/briefcases/photo-full.png">
										    	</div>
										    	<div class="text-photo">
										    		<strong>
										    			Moving Fashion E-Commerce Forward 3
										    		</strong>
													<p>
														For over seven decades, Paul Stuart has been a purveyor of some of the finest
														clothing in the world. Our website design helped them refresh their luxury
														brand
														status with an updated online experience, including the “shop within a shop”
														integration
														of Phineas Cole, a sub-brand geared towards a younger demographic.
													</p>
										    	</div>
										    </div>
									    </div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>
						<div class="col s12 alert-block">
							<div class="alert6">
							  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;
							  	</span> 
							  	<div>
									<div class="row brief-tabs">
								    	<div class="col m3">
								      		<ul class="tabs-brief-6">
								        		<li class="tab"><a class="active" href="#img16"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img17"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
										        <li class="tab"><a href="#img18"><img src="images/briefcases/photo.png" class="img-responsive active-img"></a></li>
								      		</ul>
								    	</div>
								    	<div class="col m9">
										    <div id="img16" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 1
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
										    <div id="img17" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 2
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
										    <div id="img18" class="col tab-content brief-photo">
										    	<div>
											    	<div class="full-photo">
											    		<img src="images/briefcases/photo-full.png">
											    	</div>
											    	<div class="text-photo">
											    		<strong>
											    			Moving Fashion E-Commerce Forward 3
											    		</strong>
														<p>
															For over seven decades, Paul Stuart has been a purveyor of some of the finest
															clothing in the world. Our website design helped them refresh their luxury
															brand
															status with an updated online experience, including the “shop within a shop”
															integration
															of Phineas Cole, a sub-brand geared towards a younger demographic.
														</p>
											    	</div>
											    </div>
										    </div>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End block briefcases -->
			<!-- Start block reviews -->
			<div class="row">
				<div class="col s5 our-history">
					<span>Отзывы</span>
				</div>
				<div class="col s12 reviews">
					<div class="slider">
						<div>
							<img src="images/reviews/slider-image.png">	
						</div>
						<div>
							<img src="images/reviews/slider-image.png">
						</div>
						<div>
							<img src="images/reviews/slider-image.png">
						</div>
						<div>
							<img src="images/reviews/slider-image.png">
						</div>
						<div>
							<img src="images/reviews/slider-image.png">
						</div>
					</div>
					<div class="row">
						<div class="col s3 offset-s1 form-reviews">
							<div>
								<div class="input-field col s12">
								    <input id="first_name_reviews" type="text" class="validate">
								    <label for="first_name_reviews">Имя</label>
								</div>
								<div class="input-field col s12">
								    <input id="phone_reviews" type="text" class="validate">
								    <label for="phone_reviews">Телефон</label>
								</div>
								<div class="input-field col s12">
								   	<input id="text_reviews" type="text" class="validate">
								    <label for="text_reviews">Что Вас интересует?</label>
								</div>
								<div class="col s12 btn-header-block-33">
								  	<a class="btn">Заказать услугу</a>
								</div>
							</div>			
						</div>
					</div>
				</div>
			</div>
			<!-- End block reviews -->
			<!-- Start block submit your application -->
			<div class="row">
				<div class="col s6 offset-s6 title-our-services">
					<span>Форма заказа</span>
					<p class="text-header-right">Свяжитесь с нами</p>	
				</div>
			</div>
			<div class="application-form">
			    <form class="submission-form">
			    	<div class="input-field-1">
				    	<div class="input-field col s12">
						    <input id="first_name_reviews-1" type="text" class="validate">
						    <label for="first_name_reviews-1">Имя</label>
						</div>
						<div class="input-field col s12">
						    <input id="phone_reviews-1" type="email" class="validate"
	           					pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$"
           						required
           					/>
						    <label for="phone_reviews-1">Email</label>
						    <span class="helper-text" data-error="Ошибка ввода" data-success=""></span>
						</div>
						<div class="input-field col s12">
						   	<textarea id="textarea1" class="materialize-textarea"></textarea>
						   	<label for="textarea1">Что Вас интересует ?</label>
						</div>
						<div class="col s12 btn-header-block-33">
						   	<a class="btn">Отправить заявку</a>
						</div>
					</div>
				</form>
			</div>
			<!-- End block submit your application -->
			<!-- Start block contacts -->
			<div class="row contact">
				<div class="col s5 our-history">
					<span>Контакты</span>
				</div>
			</div>
			<!-- End block contacts -->	
		</main>

		<footer>
          <div>
            <div class="row address">
            	<div class="col s4">
		              	<div>
		              		<p>
			              		350065, г.Краснодар ул.Ставропольская 312,<br> 3 этаж, оф.4
			              		<br>
			              		Тел.: +7(938)407-30-84
			              		<br>
			              		E-mail: contacts@itgeen.com
			              		<br>
			              		Skype: itgeenltd
			              		<br>
			              		<a class="contact-3">Посмотреть на карте</a>
		              		</p>
		              	</div>
	            </div>
               	<div class="col s4">
			            <div>
			              	<p>
			              		83000, г.Донецк ул.50-летия СССР 136
			              		<br>
			              		Тел.: +7(938)407-30-84
			              		<br>
			              		E-mail: contacts@itgeen.com
			              		<br>
			              		Skype: itgeenltd
			              		<br>
			              		<a class="contact-1">Посмотреть на карте</a>
			              	</p>
			            </div>
		        </div>
		        <div class="col s4">
			            <div>
				           	<p>
				           		Osaca, Joto Ku, Hanaten Nishi, 1-2
				           		<br>
				           		Тел.: +819096149966
				           		<br>
				           		E-mail: itgeenltd@gmail.com
				           		<br>
				           		Skype: itgeenltd
				           		<br>
			              		<a class="contact-2">Посмотреть на карте</a>
				           	</p>
			            </div>
		        </div>
   	       		<div class="col s12" id="map" style="width: 100%; height: 250px"></div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="row">
            	<div class="col s8 footer-copyright-left">
            		<div class="row">
            			<div class="col s6 right-align">
            				<a href="#"><img src="images/footer/vk.png"></a>
            			</div>
            			<div class="col s6 center-align">
            				<a href="#"><img src="images/footer/facebook.png"></a>
            			</div>
            		</div>
            	</div>
            	<div class="col s4 footer-copyright-right center-align">
            		<a href="#"><img src="images/footer/vk.png"></a>
            	</div>
            </div>
            <div class="row">
            	<div class="col s12 center-align">
            		<span>- Компания ITДжинн -</span>
            	</div>
            </div>	
          </div>
        </footer>
        <!-- Element Showed -->
        <div class="fixed-action-btn direction-top active">
  			<a id="menu" class="waves-effect waves-light btn btn-floating btn-floating-color" onclick="$('.tap-target').tapTarget('open')"><i class="material-icons">mail_outline</i></a>
  		</div>
		<!-- Tap Target Structure -->
		<div class="tap-target" data-target="menu">
		    <div class="tap-target-content">
		    	<div class="input-field-1">
			    	<div class="input-field col s12">
					    <input id="first_name_reviews-1" type="text" class="validate">
					    <label for="first_name_reviews-1">Имя</label>
					</div>
					<div class="input-field col s12">
					    <input id="phone_reviews-1" type="text" class="validate">
					    <label for="phone_reviews-1">Телефон</label>
					</div>
					<div class="input-field col s12">
					   	<input id="text_reviews-1" type="text" class="validate">
					    <label for="text_reviews-1">Что Вас интересует?</label>
					</div>
					<div class="col s12 btn-header-block-33">
					   	<a class="btn">Оставить заявку</a>
					</div>
				</div>
			</div>
		</div>
	</div>	
    <script type="text/javascript" src="js/css3-mediaqueries.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="component/timelinejs/dist/js/index.js"></script>
    <script type="text/javascript" src="component/slick/slick/slick.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
    <script type="text/javascript" src="js/target.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="component/navigation/js/main.js"></script>
    <script type="text/javascript" src="component/Grid/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="component/Grid/js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="component/swiper/dist/js/swiper.min.js"></script>
	<script type="text/javascript" src="js/portfolio.js"></script>
	<script type="text/javascript" src="js/our-services.js"></script>
</body>
</html>