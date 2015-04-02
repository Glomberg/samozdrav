<?php
/*
*Template Name: Для "CALL-BACK"
*/
get_header(); ?>
	<div class="content">
		<div class="inner">
			<article class="callback">
				<h2><?php the_title(); ?></h2>				
				<section class="single">
					<?php iinclude_page(21); ?>
					<label for="cb-name">ИМЯ:</label>
						<input type="text" id="cb-name" />
						<br>
					<label for="cb-phone">ТЕЛЕФОН:</label>
						<input type="text" id="cb-phone" />
						<br>
					<label for="cb-city">ГОРОД:</label>
						<input type="text" id="cb-city" />
						<br>
					<label for="cb-mess">СООБЩЕНИЕ:</label>
						<textarea id="cb-mess"></textarea>
						<br>
					<a href="javascript:void(0);">Отправить</a>
				</section>
			</article>
<?php get_footer(); ?>