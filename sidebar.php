
<?php 
	//This sidebar will show the content of the current page
?>
<div id="sidebar" class="<?php the_title(); ?>">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
	<div class="post-text">
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>

<?php if ( !function_exists('dynamic_sidebar')  || !dynamic_sidebar() ) : ?>  
<?php endif; ?>  
</div>  <!-- #sidebar -->