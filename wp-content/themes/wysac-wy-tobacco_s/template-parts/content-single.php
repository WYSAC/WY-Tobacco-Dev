<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WYSAC Wyoming Tobacco
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php  /* Get the Child Category and Print it only in Publications*/
			foreach((get_the_category()) as $childcat) {
					if (cat_is_ancestor_of(2, $childcat)) {
					echo '<a class="category-label" href="'.get_category_link($childcat->cat_ID).'">';
					 echo $childcat->cat_name . '</a><br/>';
				 	}
				 else echo '<span class="post-format-label">' .get_post_format(). '</span>';
			 }
				 ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php wysac_wy_tobacco_posted_on();?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wysac-wy-tobacco' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wysac_wy_tobacco_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
