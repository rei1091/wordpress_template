<?php get_header(); ?>
<div id="contents">

	<div class="">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
		} ?>
	</div>

	<div id="conL">

		<?php if (have_posts()):
			while (have_posts()):
				the_post(); ?>

				<h2>
					<?php the_title(); ?>
				</h2>
				<p>
					<?php the_time('Y/m/d'); ?>
				</p>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

		<a href="<?php bloginfo('stylesheet_directory'); ?>/contact"><button class="btn1">お問い合わせ</button></a>


	</div><!-- /#conL -->
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>