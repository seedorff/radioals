<?php get_header(); ?>

	<div id="featured">

		<?php SliderContent(); ?>
				
	</div>

<?php get_template_part( 'loop', 'index' ); ?>

<?php get_sidebar(); ?>
		
<?php get_footer(); ?>