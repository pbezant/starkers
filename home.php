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
			<h2><a href="<?php echo get_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
					set_post_thumbnail_size( 150, 150, true );
					the_post_thumbnail();
				}
				else
				the_title(); ?></a>
			</h2>
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>

	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args= array(
		'category_name' => 'posts', // Change these category SLUGS to suit your use.
		'paged' => $paged
	);
	query_posts($args);
	if( have_posts() ) :?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="entry-content" <?php post_class(); ?>>
			<h2><a href="<?php echo get_permalink(); ?>">
				<?php if ( has_post_thumbnail() ) {
					set_post_thumbnail_size( 150, 150, true );
					the_post_thumbnail();
				}
				else
				the_title(); ?></a>
			</h2>
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>