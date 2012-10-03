
<?php 
	//This sidebar will show the content of the current page
?>
<?php
function remove_images( $content ) {
   $postOutput = preg_replace('/<img[^>]+./','', $content);
   return $postOutput;
}
add_filter( 'the_content', 'remove_images', 100 );
?>

<div id="sidebar" class="<?php the_title(); ?>  stickem">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
	<div class="post-text">
		<?php the_content(); ?>
	</div>
	<?php if (is_front_page()) : ?>
		<nav id="cat-nav">
		<a><h3>Categories</h3></a>
		<ul>
			<li><a data-filter="*">Everything</a></li>
		<?php
			$args=array(
			  'orderby' => 'date',
			  'order' => 'ASC'
			  );
			$categories=get_categories($args);
			foreach($categories as $category) { 
			    echo '<li><a href="#" data-filter=".category-'. $category->category_nicename .'">' . $category->name.'</a> </li>';
			} 
		?>
		</ul>
		</nav>
	<?php endif; ?>
<?php endwhile; endif; ?>

<?php if ( !function_exists('dynamic_sidebar')  || !dynamic_sidebar() ) : ?>  
<?php endif; ?>  
</div>  
<?php remove_filter( 'the_content', 'remove_images' ); ?>
<!-- #sidebar -->