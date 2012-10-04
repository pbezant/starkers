
	<?php wp_footer(); ?>
	</body>
	<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/sidebar.js" type="text/javascript"></script>-->
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.stickem.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.min.js" type="text/javascript"></script>
	<script>
	jQuery(document).ready(function($){
		$('#main').stickem();

		
		if ($(window).width() > 600) {
			$('#mobile-nav').hide();
			$('#sidebar').addClass('stickem');
		}
		$('#mobile-nav').slideToggle(0);
		$('#mobile-button').click(function() {
			$('#mobile-nav').slideToggle(500);
		});
		$('#cat-nav h3').click(function(){
			$('#cat-nav ul').slideToggle();
		});
		$('.panel').click(function(){
			$(this).addClass('flip');
			setTimeout(function(){jQuery('.panel').removeClass('flip');}, 3000);
		});
		
		<?php if (is_front_page()) : ?>
		var $container = $('#content-main');
		$container.isotope({
	  		itemSelector : '.entry-content',
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