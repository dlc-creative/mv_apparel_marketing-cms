jQuery(document).ready(function() {
	var open = false;
	jQuery('.scroll-down').click(function(e) {
		e.preventDefault();
		jQuery('html,body').animate({
			scrollTop: (jQuery('#main-container').offset().top)
		}, 1000);
	});
	jQuery('.toggler').click(function(e) {
		open = true;
		jQuery('#mobile-navigation').animate({'right':'0'});
	});	
	jQuery('.menu-close').click(function(e) {
		open = false;
		jQuery('#mobile-navigation').animate({'right':'-300px'});
	});
});