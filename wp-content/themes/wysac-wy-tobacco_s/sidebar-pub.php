<?php
/**
 * Sidebar for publication pages with pub blurb and list of topics (tags)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */


?>
<div id="sidebar-pub" class="widget-area col-md-4 recent-entries">
	<div class="widget">
		<h2 class="widget-title">Blurb</h2>
			<p>this is probably a call to a custom field in the post</p>
		</div>

		<div class="widget">
			<h2 class="widget-title">Related Topics</h2>
				<ul>
				<?php
				$args = array(
					'posts_per_page' => 5,
					'offset'=> 0,
					'category' => 1 );

				$myposts = get_posts( $args );

				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<li>
						<span class="post-date"><?php the_time('m.d.Y');?></span>
						<br/> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endforeach;
				wp_reset_postdata();?>
				</ul>
		</div>
	</div>

<!-- #secondary-->
