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
					if (cat_is_ancestor_of(2, $childcat) && has_post_thumbnail() ) {
						echo '<a class="category-label" href="'.get_category_link($childcat->cat_ID).'">';
					 	echo $childcat->cat_name . '</a><br/>';
						echo the_post_thumbnail('entry-feature-large');
				 	}
				 else echo '<span class="post-format-label">' .get_post_format(). '</span>';
			 }
				 ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2 class="entry-subtitle"><?php // display subtitle custom fields
						global $wp_query;
						$postid = $wp_query->post->ID;
									echo get_post_meta($postid, 'subtitle', true);
						wp_reset_query();
						?></h2>

		<div class="entry-meta">
			<? php if ( ! function_exists( 'twentyten_posted_on' ) ) :
							/**
							 * Integrate Co-Authors Plus with wysac-wy-tobacco by replacing wysac_wy_tobacco_posted_on() with this function
							 */
							function wysac_wy_tobacco_posted_on() {
							    if ( function_exists( 'coauthors_posts_links' ) ) :
							        printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'wysac_wy_tobacco' ),
							            'meta-prep meta-prep-author',
							            sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
							                get_permalink(),
							                esc_attr( get_the_time() ),
							                get_the_date()
							            ),
							            coauthors_posts_links( null, null, null, null, false )
							        );
							    else:
							        printf( __( '<span class="%1$s">Posted on</span> %2$s <span class="meta-sep">by</span> %3$s', 'wysac_wy_tobacco' ),
							            'meta-prep meta-prep-author',
							            sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
							                get_permalink(),
							                esc_attr( get_the_time() ),
							                get_the_date()
							            ),
							            sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
							                get_author_posts_url( get_the_author_meta( 'ID' ) ),
							                esc_attr( sprintf( __( 'View all posts by %s', 'wysac_wy_tobacco' ), get_the_author() ) ),
							                get_the_author()
							            )
							        );
							    endif;
							}
							endif;
							?>

								<?php /* wysac_wy_tobacco_posted_on();*/ ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php /*
			 /*wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wysac-wy-tobacco' ),
				'after'  => '</div>',
			) ); */
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			wysac_wy_tobacco_entry_footer();
			?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
