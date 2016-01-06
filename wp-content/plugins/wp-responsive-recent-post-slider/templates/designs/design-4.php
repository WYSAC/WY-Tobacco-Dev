  <?php 
global $separator;
global $parents; 
global $post_id; ?> 
 <div class="post-slides">
	<div class="post-list">
		<div class="post-list-content">
		<div class="medium-5 columns">
		<div class="post-image-bg">
			<?php the_post_thumbnail('url'); ?>
			</div>
			
			</div>
			<div class="medium-7 columns">
			<?php if($showCategory == "true") { ?>
	<div class="recentpost-categories">		
			<?php echo get_the_category_list( $separator, $parents, $post_id ); ?>
		</div>
	<?php } ?>
			  <h2 class="wp-post-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
				<?php if($showDate == "true") {  ?>	
			<div class="wp-post-date">		
				<?php echo get_the_date(); ?>
				</div>				
					<?php } ?>
					<?php if($showContent == "true") {  ?>	
				<div class="wp-post-content">
					<?php $excerpt = get_the_excerpt();?>
					<p><?php echo wprps_limit_words($excerpt,$words_limit); ?>...</p>
				</div>
				<?php } ?>
				
				</div>
		</div>
		</div>
		
	</div>