<?php get_header(); ?>

	<div id="slidershadow">
		<div id="featured">

			<?php SliderContent(); ?>
					
		</div>
	</div>

<div id="content_wrapper">
	<div class="front-left columns seperator">
		<div class="content_heading h-left">
			<h1>Nyheder</h1>
		</div>
		<?php get_template_part( 'loop', 'index' ); ?>
		
	</div>
	<div class="front-right columns">
		<div class="content_heading h-right">
			<h1>Poll</h1>
		</div>
			<?php get_sidebar(); ?>

	</div>

	<div style="clear:both"></div>
</div>

		
<?php get_footer(); ?>