<?php
/**
 *	Template Name: Gallery Page 
 * Template Name Posts: gallery
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header', 'sidebar' ) ); ?>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="showcase-nav" class="showcase-nav previous">
	<?php previous_post_link(); ?>
</div>

<div id="showcase-nav-right" class="showcase-nav next" >
	<?php next_post_link(); ?> 
</div>



<article>
	<?php
    $gallery_shortcode = '[gallery id="' . intval( $post->post_parent ) . '" link="file"]';
    print apply_filters( 'the_content', $gallery_shortcode );
 ?>
	
</article>

<?php endwhile; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>