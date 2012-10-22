<?php
/*
Template Name: Home
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'sidebar') ); ?>

<div id="content-main">
	<?php $archive_query = new WP_Query('showposts=1000');
		while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
			<div id="entry-content" <?php post_class(); ?>>
			<div class="panel">
				<a href="<?php echo get_permalink(); ?>">
				<div id="excerpt" class="back">
					
					<?php if ( !has_post_thumbnail() ) {
						the_excerpt(); 
					}else{
						echo "<h2>".get_the_title()."</h2>"; 
					}?>
					 
				</div>
				</a>
				<div class="front">
				 	
					<?php if ( has_post_thumbnail() ) {
						//set_post_thumbnail_size( 200, 200, true );
						//the_post_thumbnail();
						$post_image_id = get_post_thumbnail_id($post->ID);
						if ($post_image_id) {
							$thumbnail = wp_get_attachment_image_src( $post_image_id, 'featured', false);
							if ($thumbnail) (string)$thumbnail = $thumbnail[0];
							echo '<div style="background:#666 url(\''.$thumbnail.'\') center center no-repeat scroll; background-size:cover; width:100%; height:100%;"></div>';
						}
						
					}
					else
						echo "<h2>".get_the_title()."</h2>"; ?>
					
				</div>
			</div>
			</div>
		<?php endwhile; ?>

</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>