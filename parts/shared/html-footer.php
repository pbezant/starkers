
	<?php wp_footer(); ?>
	</body>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidebar.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.masonry.min.js" type="text/javascript"></script>
	<script>
	jQuery(function($){
		$('#content-main').masonry({
			itemSelector: '#entry-content',
			isAnimated: !Modernizr.csstransitions,
			columnWidth: 10,
		});
		$('#cat-nav h3').click(function(){
			$('#cat-nav ul').slideToggle();
		});

		$('#cat-nav ul li').click(function(){
			$('#cat-nav ul li').removeClass('active');
			$(this).addClass('active');

			var cat = $(this).attr('id');
			$('#entry-content.category-'+ cat +'').removeClass('hidden');
			$('#entry-content:not(.category-'+ cat +')').addClass('hidden');
			$('#content-main').masonry('reload');

			//$('#content-main').masonry('layout', $('#entry-content.category-'+ cat +''), true).masonry('reload');
			
		});

	});
	</script>
</html>