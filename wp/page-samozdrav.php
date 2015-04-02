<?php
/*
*Template Name: Для "SAMOZDRAV"
*/
get_header(); ?>
<?php slider(); ?>
	<div class="content">
		<div class="inner">
		<article class="big-page">
			<h2><?php the_title(); ?></h2>
			<section style="min-height: 0; padding: 0;">
					<?php iinclude_page(30); ?>
<script>
	$(document).ready(function(){
		$("header li.menu-2").addClass("active");
	});
</script>
<?php get_footer(); ?>