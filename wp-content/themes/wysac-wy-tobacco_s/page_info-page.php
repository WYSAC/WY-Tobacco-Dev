<?php
/**
 * Template Name: Informational Pages
 * The template for displaying about pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

<!--there are no comments on pages-->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div id="sidebar-about" class="widget-area col-md-4 recent-entries">
		<?php get_sidebar('about'); ?>
	</div>
<?php get_footer(); ?>
