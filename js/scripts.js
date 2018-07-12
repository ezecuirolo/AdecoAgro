$(document).ready(function () {
	/* if ($(document).scrollTop() > 200) {
		$('header').toggleClass('white');
	} */

	// Hamburguer & Linking behavior
	$('.hamburger').click(function () {
		$('.menu.mobile-only').slideToggle();
		$('.menu.mobile-only').toggleClass('active');
		/* if ($(document).scrollTop() > 200) {
			$('header').toggleClass('white');
		} */
	});
	
	$('.navbar-nav.desktop-only .nav-item > #sub1').click( function(){
		$('#submenu1').siblings('.sub').slideUp();
		$('#submenu1').slideToggle();
	});
	
	$('.navbar-nav.desktop-only .nav-item > #sub2').click( function(){
		$('#submenu2').siblings('.sub').slideUp();
		$('#submenu2').slideToggle();
	});
	
	$('.navbar-nav.desktop-only .nav-item > #sub3').click( function(){
		$('#submenu3').siblings('.sub').slideUp();
		$('#submenu3').slideToggle();
	});
	
	$('.navbar-nav.mobile-only li > a').click( function(){
		$('.navbar-nav .mobile-only li > .submenu').hide();
		$('.navbar-nav .mobile-only li > .submenu').removeClass('active');
		$(this).children('.submenu').slideToggle();
		$(this).toggleClass('active');
	});
	

	// Scroll top header behaviour
	/* $(window).scroll(function () {
		if ($(document).scrollTop() > 200) {
			$('header').addClass('white');
		} else {
			$('header').removeClass('white');
		}
	}); */


	// Smooth scroll
	// Select all links with hashes
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')

		.click(function (event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function () {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
					});
				}
			}
		});

	$('#unit_converter').click(function(ev){
		ev.preventDefault();

		$('.modal_converter').fadeIn();
		$('.modal_converter').css('display', 'flex');

		$(document).keyup(function(ev){
			if(ev.which == 27){
				$('.modal_converter').fadeOut();
			}
		});	
	});
});
