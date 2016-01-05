<?php
/**
 * Sidebar for homepage with recent posts and resources
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */


?>
<div class="widget recent-entries">
		<h2 class="widget-title">Recent Publications</h2>
			<ul>
			<?php
			$args = array(
				'posts_per_page' => 5,
				'offset'=> 0,
				'category' => 3 );

			$myposts = get_posts( $args );

			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li>
					<span class="post-date"><?php the_time('m.d.Y');?></span>
					<br/> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endforeach;
			wp_reset_postdata();?>
			</ul>

			<h2 class="widget-title">Recent Resources</h2>
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

<!--#secondary-->
