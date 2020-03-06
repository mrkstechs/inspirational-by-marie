<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inspirational_By_Marie
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php wp_nav_menu( array('theme_location' => 'social-menu') ); ?>
		<p>© Copyright 2020, Inspirational By Marie</p>
	</footer><!-- #colophon -->
	<div id="background-shapes">
		<div id="bg-top">
			<div class="bg-shape"></div>
			<div class="bg-shape"></div>
		</div>
		<div id="bg-bottom">
			<div class="bg-shape"></div>
			<div class="bg-shape"></div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
