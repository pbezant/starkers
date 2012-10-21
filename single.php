<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header') );?>

<div id="showcase-nav" class="stickem previous ">
	<?php previous_post_link('%link', ' '); ?>
	<?//php previous_post_link('%link','<img src="'.get_template_directory_uri().'/images/nav-left.png" width="30px" height="30px"/>'); ?>
</div>

<div id="showcase-nav" class="stickem next" >
	<?php next_post_link('%link', ' '); ?>
	<?php // next_post_link('%link', '<img src="'.get_template_directory_uri().'/images/nav-right.png" width="30px" height="30px"/>'); ?> 
</div>

<?php 
	$format = get_post_format();
	if($format == 'gallery'){
		get_template_part('sidebar');
	}
	
?>
<div id="content-main" class="<?php echo $format ?>">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	<?php
	
	if($format == 'gallery'){
	get_template_part( 'single', $format ); 
	}else{
	?>
	<article>
		<h2><?php the_title(); ?></h2>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> 
		<div id="comment"><?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?></div>
		<?php the_content(); ?>			

		<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
		<h3>About <?php echo get_the_author() ; ?></h3>
		<?php the_author_meta( 'description' ); ?>
		<?php endif; ?>

		<?php comments_template( '', true ); ?>

	</article>
	<?php }endwhile; ?>

</div>

<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>