<?php get_header(); ?>

	<div id="slidershadow">
		<div id="featured">

			<?php SliderContent(); ?>
					
		</div>
	</div>
<div class="shadow_wrap_800px">
	<div class="content_wrapper">
		<div class="front-left columns seperator">
			<div class="content_heading h-left">
				<h1>Nyheder</h1>
			</div>
			<?php get_template_part( 'loop', 'index' ); ?>
			
		</div>
		<div class="front-right columns right_seperator">
			<div class="content_heading h-right">
				<h1>Poll</h1>
			</div>
				<div id="sidebar">
					<?php get_sidebar(); ?>
				</div>
		</div>

		<div style="clear:both"></div>
	</div>
</div>
<div class="shadow_wrap_800px">
	<div class="content_wrapper spotbox">
		
		<!-- spotbox widgets -->
		<aside>

			<ul>
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Spotbox Widget Area')) : ?>
				<li><h4>Spotbox widget area</h4></li>
				<li>Add widgets in Appearance > Widgets!</li>
				<?php endif; ?>
			</ul>

		</aside>
		<!-- spotbox widgets -->

		<div style="clear:both"></div>
	</div>
</div>		
<?php get_footer(); ?>