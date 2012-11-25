</div><!--.stickem container -->	
</div><!--main -->
</div><!--page wrap -->
<div id="footer-wrap">
	<footer>
				&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
			<div id="footer-sidebar">
				<?php if ( !function_exists('dynamic_sidebar')  || !dynamic_sidebar('footer-sidebar') ) : ?>  
				<?php endif; ?>  
			</div>
	</footer>
</div><!-- footer-wrap -->

