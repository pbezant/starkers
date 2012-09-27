
	<?php wp_footer(); ?>
	</body>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidebar.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js" type="text/javascript"></script>
	<script>
	jQuery(document).ready(function($){
		
		$('#cat-nav h3').click(function(){
			$('#cat-nav ul').slideToggle();
		});
		<?php if (is_front_page()) : ?>
		var $container = $('#content-main');
		$container.isotope({
	  		itemSelector : '#entry-content',
	  		masonry: {
    			columnWidth: 10
  			}
		});
		$('#cat-nav ul a').click(function(){
			$('#cat-nav ul li').removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$container.isotope({ filter: selector });
			return false;
		});
		<?php endif; ?>
	});
	</script>
</html>