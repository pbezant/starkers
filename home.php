<?php
/*
Template Name: Home
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'sidebar') ); ?>

<div id="content-main">
	<?php $archive_query = new WP_Query('showposts=1000');
		while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
			<div id="" <?php post_class('entry-content'); ?>>
			<div class="panel">
				<div id="excerpt" class="back">
					<a href="<?php echo get_permalink(); ?>">
					<?php if ( !has_post_thumbnail() ) {
						the_excerpt(); 
					}else{
						echo "<h2>".get_the_title()."</h2>"; 
					}?>
					 </a>
				</div>
				<div class="front">
				 	
					<?php if ( has_post_thumbnail() ) {
						set_post_thumbnail_size( 300, 300, true );
						the_post_thumbnail();
					}
					else
						echo "<h2>".get_the_title()."</h2>"; ?>
					
				</div>
			</div>
			</div>
		<?php endwhile; ?>

</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>