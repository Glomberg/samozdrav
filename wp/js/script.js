$(document).ready(function(){
	$("div.to-up").on('click', function(){
		$("body,html").animate({scrollTop: 0}, 400);
	});
});