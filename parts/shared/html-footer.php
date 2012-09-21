
	<?php wp_footer(); ?>
	</body>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidebar.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>
	<script>
	jQuery(window).load()(function($) {
   // put all your jQuery goodness in here.
   		var entryContent = $('#entry-content').width();
   		$(function(){
			$('#content-main').masonry({
			  itemSelector: '#entry-content',
			  columnWidth: entryContent
			});
		});

 	});
	</script>
</html>