<?php
/*
Template Name: サービス2
*/
?>

<?php get_header(); ?>
<div id="contents">

<div class="">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

	<div id="conL">
		<h2>
			<?php the_title(); ?>
		</h2>

		<p>テストサービスページ</p>
		<p>テストサービスページ</p>
		<p>テストサービスページ</p>
		<p>テストサービスページ</p>
		<p>テストサービスページ</p>
		<p>テストサービスページ</p>
		<p>テストサービスページ</p>
		<p>テストサービスページ</p>


	</div><!-- /#conL -->
	<?php get_sidebar(); ?>

</div><!-- /#contents -->

<?php get_footer(); ?>
<!-- /#footerMenu -->