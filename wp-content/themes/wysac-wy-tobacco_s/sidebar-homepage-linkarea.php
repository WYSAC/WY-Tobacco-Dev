<?php
/**
 * Widgetize link areas below the page main content, curated by topic.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */


?>
<div class="widget recent-entries col-8 col-md-7 col-sm-6">
		<h2 class="widget-title">TOPIC: Youth Tobacco Use</h2>
			<ul>
			<?php
			$args = array(
				'posts_per_page' => 5,
				'offset'=> 0,
				'tag_id' => 6 );

			$myposts = get_posts( $args );

			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li class="col-md-6">
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
