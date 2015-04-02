<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php if (is_front_page () ) echo 'Самоздрав'; else wp_title('', true, 'right'); ?></title>
	<link rel="shortcut icon" href="http://samozdrav1.ru/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/css-reset.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
	<link href='http://fonts.googleapis.com/css?family=Scada:400,700,400italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_head(); ?>
</head>
<body>
	<header>
	<div class="bg-before"></div>
	<div class="bg-after"></div>
		<div class="inner">
			<div class="bg2"></div>
			<div class="logo">
				<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" /></a>
			</div>
			<a href="http://samozdrav1.ru/callback/" id="callback">Заказать обратный звонок</a>
			<nav>
				<div class="before-nav"></div>
				<ul>
					<li class="menu-1"><a href="/">Статьи</a></li>
					<li class="menu-2"><a href="http://samozdrav1.ru/samozdrav/">Самоздрав</a></li>
					<li class="menu-3"><a href="http://samozdrav1.ru/sertificats/">Сертификаты</a></li>
					<li class="menu-4"><a href="http://samozdrav1.ru/voprosi/">Вопросы</a></li>
					<li class="menu-5"><a href="http://samozdrav1.ru/otzivi/">Отзывы</a></li>
					<li class="menu-6" style="padding-top: 5px;"><a href="http://samozdrav1.ru/zakaz/">Оформить<br>заказ</a></li>
				</ul>
				<div class="after-nav"></div>
			</nav>
		</div>
	</header>
	<!--<div class="inner">
		<section class="slider">
			<div class="text">
				Комплекс &laquo;Самоздрав&raquo; - устраняет спазм<br>
				сосудов за счет нормализации газового<br>
				состава крови и может применяться при:<br>
				- артериальной гипертензии;<br>
				- стенокардии и аритмии;<br>
				- бронхиальной астме;<br>
				- мигрени и ряде других заболеваний.
			</div>
		</section>
		<section class="contacts">
			<div class="contacts-email">
				<div class="contacts-icon"></div>
				<span>samozdrav1@mail.ru</span>
			</div>
			<div class="contacts-phones">
				<div class="contacts-icon"></div>
				<span>8 (495) 374-71-86 (Мск)<br>
					8 (812) 643-20-47 (СПб)<br>
					8 (800) 500-51-86 (РФ)
				</span>
			</div>
		</section>		
	</div>
	<div class="clear"></div>-->