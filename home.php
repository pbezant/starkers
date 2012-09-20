<?php
/*
Template Name: Home
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'sidebar') ); ?>
<style>

</style>

<div id="content-main">
	<?php $archive_query = new WP_Query('showposts=1000');
		while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
			<div id="entry-content" <?php post_class(); ?>>
			<div id="f1_card">
				<a href="<?php echo get_permalink(); ?>">
				<div class="front face">
				 	
					<?php if ( has_post_thumbnail() ) {
						//set_post_thumbnail_size( 150, 150, true );
						the_post_thumbnail();
					}
					else
						echo "<h2>".get_the_title()."</h2>"; ?>
					
				</div>
				<div class="back face center">
					<?php the_excerpt(); ?>
				</div>
				</a>
			</div>
			</div>
		<?php endwhile; ?>

</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>