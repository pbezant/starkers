<?php
/*
Template Name: Home
*/
?>

<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'sidebar') ); ?>

<div id="content-main">
	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args= array(
		'category_name' => 'Posts, Uncategorized', // Change these category SLUGS to suit your use.
		'paged' => $paged
	);
	query_posts($args);
	if( have_posts() ) :?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="entry-content">
		<a href="<?php the_title();?>"><h2><?php the_title(); ?></h2></a>
		<?php the_excerpt(); ?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>