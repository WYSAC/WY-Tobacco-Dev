<?php
/**
 * Widgetize link areas below the page main content, curated by topic.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WYSAC Wyoming Tobacco
 */


?>
<div class="widget recent-entries linkarea col-8 col-md-7 col-sm-6">
		<h2 class="widget-title"><span class="linkarea-topic">Topic</span> Youth Tobacco Use</h2>
			<ul>
			<?php
			$args = array(
				'posts_per_page' => 5,
				'offset'=> 0,
				'tag_id' => 6 );

			$myposts = get_posts( $args );

			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
				<li class="col-md-6">
					<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('linkarea-feature'); ?> </a> <?php endif; ?>
					<br/><span class="post-date"><?php the_time('m.d.Y');?></span>
					<br/> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endforeach;
			wp_reset_postdata();?>
			</ul>

			<h2 class="widget-title"><span class="linkarea-topic">Topic</span> Schools</h2>
				<ul>
				<?php
				$args = array(
					'posts_per_page' => 5,
					'offset'=> 0,
					'tag_id' => 17 );

				$myposts = get_posts( $args );

				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
					<li class="col-md-6">
						<span class="post-date"><?php the_time('m.d.Y');?></span>
						<br/> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endforeach;
				wp_reset_postdata();?>
				</ul>
		</div>

<!--#secondary-->
