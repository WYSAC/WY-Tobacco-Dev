<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info text-center">
			&#169;<?php the_time('Y');?> <a href="http://wwww.uwyo.edu/wysac">Wyoming Survey & Analysis Center,</a> <a href="http://www.uwyo.edu">University of Wyoming</a> |
			<img src="https://s.w.org/about/images/logos/wordpress-logo-32.png" width="20" style="padding-bottom:3px;" > Powered by <a href="http://www.wordpress.org">WordPress</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
