
	<?php wp_footer(); ?>
	</body>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidebar.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>
	<script>
	 jQuery(function($){
		$('#content-main').masonry({
		itemSelector: '.post',
		 isAnimated: !Modernizr.csstransitions,
		 columnWidth: 10,
		});
		}); 
	</script>
</html>