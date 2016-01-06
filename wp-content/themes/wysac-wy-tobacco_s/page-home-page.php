<?php
/**
 * The template for displaying the home-page.php only
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>

<div id="slider">
	<?php dynamic_sidebar('slider');?>
		</div>
	<div id="primary" class="content-area col-md-8">
		<main id="main" class="site-main" role="main">


			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'home-page' ); ?>

<!--there are no comments on pages-->

			<?php endwhile; // End of the loop. ?>
<!--Link Areas -->
		<div class="container">
			<div class="row">
				<?php get_sidebar('homepage-linkarea');?>
				<?php dynamic_sidebar('home-linkarea-1'); ?>
			</div>
			<div class="widget row">
				<?php dynamic_sidebar('home-linkarea-2'); ?>
		</div>
	</div>
		</main> <!-- #main -->
	</div><!-- #primary -->
<div id="homepage-sidebar" class="widget-area">
	<?php get_sidebar('homepage');?>
	</div>
<?php get_footer(); ?>
