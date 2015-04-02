<?php get_header(); ?>
<?php slider(); ?>
	<div class="content">
		<div class="inner">
		<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<section class="single">
				<p><?php the_content(); ?></p>
			</section>
			<?php edit_post_link( __( 'Править', 'striped' ), '<div class="edit-link">', '</div>' ); ?>
		</article>

<?php endwhile; ?>
	<?php // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || '0' != get_comments_number() ) :
	comments_template();
	endif;
	?>
	</div>
<?php get_footer(); ?>