
jQuery(document).ready(function($) {
	
	// Set up
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	var sidebarStart = $('#main').offset().top - 70;
	var sidebarHeight = $('#sidebar').height();
	var arrowPos = ((windowWidth - $('#main').width()) * .5) - 70;
	$('#mobile-nav').slideToggle(0);
	followSwitch();
	iframeResize();
	
	// Mobile stuff
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i) ? true : false;
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i) ? true : false;
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i) ? true : false;
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i) ? true : false;
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Windows());
	    }
	};
	
	// Bind event handlers
	$('#mobile-button').click(function() {
		$('#mobile-nav').slideToggle(500);
		});
	$(window).scroll(function () {
		if(!isMobile.iOS()) {
			animateBox();
		} else {
			iOSAnimate();
			}
		});
	$(window).resize(function() {
		windowWidth = $(document).width();
		windowHeight = $(window).height();
		followSwitch();
		iframeResize();
		});
	window.onorientationchange = function() {
		clearMargins();
		iframeResize();
		};
	
	
	// Do stuff
	function followSwitch() {
		$('#sidebar, #showcase-nav, #showcase-nav-right').addClass('follow');

		arrowPos = ((windowWidth - $('#main').width()) * .5) - 35;
		if (windowWidth < 600) {
			$('#sidebar').removeClass('follow');
		} 
		if (windowHeight < (sidebarHeight + 100)) {
			$('#sidebar').removeClass('follow');
			}
		if (windowWidth > 600) {
			$('#mobile-nav').hide();
			}
		};
	function animateBox() {  
	    var pos = $(window).scrollTop();
	  	if (pos > sidebarStart) {
			//var newTop = pos - sidebarStart;
			$('.follow').addClass('fixed');
			$('#showcase-nav').css('left', arrowPos);
			$('#showcase-nav-right').css('right', arrowPos);
		} else {
			$('.follow').removeClass('fixed');
			$('#showcase-nav').css('left', -35);
			$('#showcase-nav-right').css('right', -35);
			}
		};
	function iOSAnimate() {
		var pos = $(window).scrollTop();
		if (pos > sidebarStart) {
			var newTop = pos - sidebarStart;
			$('.follow, #showcase-nav, #showcase-nav-right').animate({'margin-top': newTop}, 500);
		} else {
			$('.follow, #showcase-nav, #showcase-nav-right').animate({'margin-top': 0}, 500);
			}
		}
	function clearMargins() {
		$('.follow, #showcase-nav, #showcase-nav-right').css('margin-top', 0);
		}
	function iframeResize() {
			$('iframe').each(function () {
				var ratio = $(this).attr('height') / $(this).attr('width');
				var contentWidth = $(this).parent().width();
				$(this).attr('width', contentWidth).attr('height', contentWidth * ratio);
				});
			}
		
});




