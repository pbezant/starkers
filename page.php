<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="content-main">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<?php if(get_the_ID() != is_page(get_the_ID())): ?>
	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<?php comments_template( '', true ); ?>
	<?php endif ?>
	<?php endwhile; ?>

</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>