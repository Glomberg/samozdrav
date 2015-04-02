<?php
/*
*Template Name: Для "SAMOZDRAV"
*/
get_header(); ?>
<?php slider(); ?>
	<div class="content">
		<div class="inner">
			<?php iinclude_page(30); ?>
<script>
	$(document).ready(function(){
		$("header li.menu-2").addClass("active");
	});
</script>
<?php get_footer(); ?>