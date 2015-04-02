$(document).ready(function(){
	/*уголок внизу страницы, скролл вверх*/
	$("div.to-up").on('click', function(){
		$("body,html").animate({scrollTop: 0}, 400);
	});
	/*пункты выдачи заказов, скролл вверх*/
	$(window).scroll(function() { 
		if($(document).scrollTop() > 700) { 
			$('#pvz-to-up').fadeIn(); 
		} else { 
			$('#pvz-to-up').fadeOut(); 
		} 
	});
	$("#pvz-to-up").on("click", function(){
		$("body,html").animate({scrollTop: 0}, 400);
	});
	/*клик по баннеру*/
	/*калькулятор заказа*/
	/*AJAX передача данных callback*/
	/*AJAX передача данных заказа*/
});