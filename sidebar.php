
<?php 
	//This sidebar will show the content of the current page
?>
<div id="sidebar" class="<?php the_title(); ?>">

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>
	<div class="post-text">
		<?php the_content(); ?>
	</div>
	<?php if (is_front_page()) : ?>
		<nav id="cat-nav">
		<a><h3>Categories</h3></a>
		<ul>
			<li id="posts"><a >Everything</a></li>
		<?php
			$args=array(
			  'orderby' => 'name',
			  'order' => 'ASC'
			  );
			$categories=get_categories($args);
			foreach($categories as $category) { 
			    echo '<li id="'. $category->category_nicename . '" ><a >' . $category->name.'</a> </li>';
			} 
		?>
		</ul>
		</nav>
	<?php endif; ?>
<?php endwhile; endif; ?>

<?php if ( !function_exists('dynamic_sidebar')  || !dynamic_sidebar() ) : ?>  
<?php endif; ?>  
</div>  <!-- #sidebar -->