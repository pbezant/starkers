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
    $gallery_shortcode = '[gallery id="' . intval( $post->post_parent ) . '"]';
    print apply_filters( 'the_content', $gallery_shortcode );
 ?>
	<!--
	<?php  
    $args = array(  
        'numberposts' => -1, // Using -1 loads all posts  
        'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager  
        'order'=> 'ASC',  
        'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos  
        'post_parent' => $post->ID, // Important part - ensures the associated images are loaded 
        'post_status' => null, 
        'post_type' => 'attachment'  
    );  
    $images = get_children( $args );  
    if($images){ ?>  
		<div id="slider">  
	    <?php foreach($images as $image){ ?>  
	    <img src="<?php echo $image->guid; ?>" alt="<?php echo $image->post_title; ?>" title="<?php echo $image->post_title; ?>" />  
	    <?php    } ?>  
	</div>  
    <?php } ?>    	

	<?php if ( get_the_author_meta( 'description' ) ) : ?>
	<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
	<h3>About <?php echo get_the_author() ; ?></h3>
	<?php the_author_meta( 'description' ); ?>
	<?php endif; ?>

	<?php comments_template( '', true ); ?>
-->
</article>

<?php endwhile; ?>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>