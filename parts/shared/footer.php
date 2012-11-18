</div><!--.stickem container -->	
</div><!--main -->
</div><!--page wrap -->
<div id="footer-wrap">
	<footer>
				&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
				<?php if ( !function_exists('dynamic_sidebar')  || !dynamic_sidebar('footer-sidebar') ) : ?>  
				<?php endif; ?>  
				<?php //get_search_form(); ?>
	</footer>
</div><!-- footer-wrap -->

