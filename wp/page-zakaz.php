<?php
/*
*Template Name: Для "ZAKAZ"
*/
get_header(); ?>
<?php slider(); ?>
	<div class="content">
		<div class="inner">
			<article>
				<h2><?php the_title(); ?></h2>
				<section style="padding: 35px 45px;" id="zakaz">
					<table width="100%">
						<tr>
							<th width="45%">Выбор товара:</th>
							<th width="17%">Кол-во:</th>
							<th width="18%">Цена за уп:</th>
							<th width="20%">Общая сумма:</th>
						</tr>
						<tr>
							<td>								
								<input type="checkbox" id="komplex-standart" />
								<label for="komplex-standart" class="complex"></label>
								<img src="<?php echo get_template_directory_uri(); ?>/images/miniatura.jpg" alt="" />
								<span><label for="komplex-standart">Комплекс "Самоздрав"<br>в стандартной комплектации</label></span>
								<span class="i"> i</span></td>
							<td>
								<input class="zakaz-value" type="text" disabled />
							</td>
							<td>2100 руб.</td>
							<td rowspan="2" class="zakaz-summa"></td>
						</tr>
						<tr>
							<td>
								<input type="checkbox" id="komplex-comfort" class="complex" />
								<label for="komplex-comfort" class="complex"></label>
								<img src="<?php echo get_template_directory_uri(); ?>/images/miniatura.jpg" alt="" />
								<span><label for="komplex-comfort">Комплекс "Самоздрав"<br>в комплектации "Комфорт"</label></span>
								<span class="i"> i</span></</td>
							<td>
								<input class="zakaz-value" type="text" disabled />
							</td>
							<td>1900 руб.</td>
						</tr>
					</table>
					<div class="hr"></div>
					<div class="bonus"><span style="color: red;">Подарок</span> к каждому заказу: книга «Выход из тупика»</div>
					<div class="bonus">При заказе 2-ух упаковок - бесплатная доставка по Мск и СПб</div>
					<div class="bonus">При заказе 3-ёх упаковок - бесплатная доставка по России</div>
					<br>
					<!-- FORM -->
					<div class="zakaz-form">
						<label for="zakaz-form-fio">ФИО:</label>
						<input type="text" id="zakaz-form-fio" name="zakaz-form-fio" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-adress">Адрес:</label>
						<input type="text" id="zakaz-form-adress" name="zakaz-form-adress" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-phone">Телефон:</label>
						<input type="text" id="zakaz-form-phone" name="zakaz-form-phone" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-email">E-mail:</label>
						<input type="text" id="zakaz-form-email" name="zakaz-form-email" />
					</div>
					<div class="zakaz-form">
						<label for="zakaz-form-city">Город:</label>
						<input type="text" id="zakaz-form-city" name="zakaz-form-city" />
					</div>
					<!-- /FORM -->
					<div class="options">Мы осуществляем доставку во все города России</div>
					<div class="options">Стоимость курьерской доставки от 250р.</div>
					<div class="options">Самостоятельный забор из <a href="http://samozdrav1.ru/pvz/" target="_blank">пунктов выдачи заказов</a> от 100р.</div>
					<div class="options">Время доставки от 1 дня</div>
					<div class="options">* Точную стоимость и время доставки Вам назовет оператор</div>
					<br>
					
					<div class="bonus">Способ оплаты:</div>
					<input type="radio" name="sposob-oplaty" id="sposob-oplaty-nal" />
						<label class="sposob-oplaty" for="sposob-oplaty-nal">Наличными при получении</label>
					<input type="radio" name="sposob-oplaty" id="sposob-oplaty-kard" />	
						<label class="sposob-oplaty" for="sposob-oplaty-kard">Безналичной оплатой</label>
						
					<a href="javascript:void(0);" id="zakaz-submit">Оформить</a>
				<?php iinclude_page(36); ?>
<script>
	$(document).ready(function(){
		$("header li.menu-6").addClass("active");
	});
</script>
<?php get_footer(); ?>