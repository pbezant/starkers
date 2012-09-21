
	<?php wp_footer(); ?>
	</body>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidebar.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>
	<script>
	jQuery(document).load(function($) {
   // put all your jQuery goodness in here.
 

			$('#content-main').masonry({
			  itemSelector: '#entry-content',
			   columnWidth: function( containerWidth ) {
    			return containerWidth / 5;
  			}
			});

 	});
	</script>
</html>