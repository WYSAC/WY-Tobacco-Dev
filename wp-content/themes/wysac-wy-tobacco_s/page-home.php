<?php
/**
 * The template for displaying the -home.php only
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>
<div class="container">
	<div class="row">
		<div id="slider">
			<?php dynamic_sidebar('slider');?>
				</div>
			</div><!--top .row-->
			<div class="row">
		<div id="primary" class="content-area">
			<main id="main" class="site-main col-md-8" role="main">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'home-page' ); ?>

	<!--there are no comments on pages-->

				<?php endwhile; // End of the loop. ?>

				<!--Link Areas -->
					<div id="linkarea">
								<?php get_sidebar('home-linkarea');?>
							</div>
			</main> <!-- #main .col-md-12 -->
			<div id="homepage-sidebar" class="widget-area col-md-4">
				<?php get_sidebar('home');?>
		</div><!--#homepage-sidebar .col-md-4-->
	</div><!-- #primary-->
</div><!--.row-->
</div><!-- .container -->
<?php get_footer(); ?>
