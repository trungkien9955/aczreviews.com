$(document).ready(function() {
	var owl_banner = $('.owl-carousel.owl-carousel-banner');
	var owl_new = $('.owl-carousel.owl-carousel-new-flowers');
    var owl_topbar = $('.owl-carousel.owl-carousel-top-bar');
    var owl_home_slider = $('.owl-carousel.owl-carousel-home-slider');
    var owl_wedding = $('.owl-carousel.owl-carousel-wedding-flowers');
    var owl_wedding_trays = $('.owl-carousel.owl-carousel-wedding-trays');
    var owl_meeting_flowers = $('.owl-carousel.owl-carousel-meeting-flowers');
    var owl_cars = $('.owl-carousel.owl-carousel-wedding-cars');


	owl_cars.owlCarousel({
		items: 3,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			575.98: {
				items: 2
			},
			767.98: {
				items: 3
			},
			1199.98: {
				items: 3
			}
		}
	});
	owl_meeting_flowers.owlCarousel({
		items: 6,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			575.98: {
				items: 2
			},
			767.98: {
				items: 4
			},
			1199.98: {
				items: 6
			}
		}
	});
	owl_wedding_trays.owlCarousel({
		items: 5,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			575.98: {
				items: 2
			},
			767.98: {
				items: 3
			},
			1199.98: {
				items: 5
			}
		}
	});
	owl_home_slider.owlCarousel({
		items: 1,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true, 
		autoWidth:true
	});
	owl_wedding.owlCarousel({
		items: 4,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			575.98: {
				items: 2
			},
			767.98: {
				items: 3
			},
			1199.98: {
				items: 4
			}
		}
	});
	owl_new.owlCarousel({
		items: 4,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1
			},
			575.98: {
				items: 2
			},
			767.98: {
				items: 3
			},
			1199.98: {
				items: 4
			}
		}
	});

	owl_home_slider.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
	});
	owl_topbar.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
	});
	owl_banner.owlCarousel({
		items: 1,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 2000,
		autoplayHoverPause: true,
	});


	$('.play').on('click', function() {
		owl.trigger('play.owl.autoplay', [1000])
	})
	$('.stop').on('click', function() {
		owl.trigger('stop.owl.autoplay')
	})

})