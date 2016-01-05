<?php
/**
 * The template for displaying the home-page.php only
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>


	<div id="primary" class="content-area  col-md-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home-page' ); ?>

<!--there are no comments on pages-->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div id="homepage-sidebar" class="widget-area col-md-4">
	<?php dynamic_sidebar( 'homepage-sidebar' ); ?>
	<?php get_sidebar('homepage');?>
	</div>

<?php get_footer(); ?>
