
(function($) {
    "use strict";
     $(document).on('ready', function() {
		
	
		
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('.header .main-menu').addClass("sticky");
			} else {
				$('.header .main-menu').removeClass("sticky");
			}
			});
			
			// Mobile Menu JS  //
			$('.mobile-menu').slicknav({
				prependTo:".mobile-nav",
			});
	

	
			var typed = $(".typed");
			$(function() {
				typed.typed({
					strings: ["Zalatimo provides.", "Best Offer.", "Valuable Price.", "Best Quality"],
					typeSpeed: 150,
					loop: true
				});
			});
	

		
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