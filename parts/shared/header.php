<div id="page-wrap">
<header>
	<h1 id="logo"><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
	<h2><?php bloginfo( 'description' ); ?></h2>
	
	<nav id="main-nav">
		<ul id="nav">  
	    <?php wp_list_pages('sort_column=menu_order&title_li='); ?>   
	    </ul>  
	</nav>
	<div id="mobile-button">
		<a class="mobile-menu" href="#">Menu</a>
	</div>	
	<div id="header-sidebar">
	<?php if ( !function_exists('dynamic_sidebar')  || !dynamic_sidebar('header-sidebar') ) : ?>  
<?php endif; ?> 
	</dvi> 
</header>
<div id="main" >
	<div class="stickem-container">