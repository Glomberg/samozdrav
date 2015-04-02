<?php
/*
*Template Name: Для "OTZIVI"
*/
get_header(); ?>
<?php slider(); ?>
	<div class="content">
		<div class="inner">
			<?php iinclude_page(24); ?>
			<?php // If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || '0' != get_comments_number() ) :
				comments_template();
				endif;
			?>
<script>
	$(document).ready(function(){
		$("header li.menu-5").addClass("active");
	});
</script>
<?php get_footer(); ?>