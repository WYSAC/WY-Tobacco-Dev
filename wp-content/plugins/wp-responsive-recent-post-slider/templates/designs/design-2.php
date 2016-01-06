 <?php 
global $separator;
global $parents; 
global $post_id;
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post_id) ); ?> 
 <div class="post-slides">
	<div class="post-content-position">
	
	<!-- Content-left/right -->
	<div class="post-content-left medium-6 columns">
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
				<div class="post-image-bg">
			<img src="<?php echo $feat_image; ?>"alt="<?php the_title(); ?>" />
			</div>
			</div>
	</div>