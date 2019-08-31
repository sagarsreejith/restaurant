
(function($) {
    "use strict";
     $(document).on('ready', function() {
		
	
		
	
	
		
		//Mobile slider
		$('.mobile-slider')['owlCarousel']({
			loop:true,
			margin:30,
			autoplay:true,
			dots:false,
			items: 1
		});
		var u = $(".mobile-slider"),
			p = $("#next"),
			m = $("#prev");
		p.on("click", function() {
			u.trigger("next.owl.carousel", [400])
		}); m.on("click", function() {
			u.trigger("prev.owl.carousel", [400])
		});
		
		
		
	


	});
	
	/*************************/
    /*       PRELOADER       */
	/*************************/
	//After 2s preloader is fadeOut
	$('.preloader').delay(2000).fadeOut('slow');
	setTimeout(function() {
	//After 2s, the no-scroll class of the body will be removed
	$('body').removeClass('no-scroll');
	}, 2000); //Here you can change preloader time
	
})(jQuery);