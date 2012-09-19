<div id="page-wrap">
<header>
	<h1 id="logo"><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
	<h2><?php bloginfo( 'description' ); ?></h2>
	<nav>
		<ul id="nav">  
	    <?php wp_list_pages('sort_column=menu_order&title_li='); ?>   
	    </ul>  
	</nav>
</header>
<div id="main">