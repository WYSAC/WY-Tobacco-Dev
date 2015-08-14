<?php
/**
 * The template for displaying the home-page.php only
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home-page' ); ?>

<!--there are no comments on pages-->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar('front-1');?>
		<?php get_sidebar('front-2');?>
	<?php get_sidebar('front-3');?>

<?php get_footer(); ?>
