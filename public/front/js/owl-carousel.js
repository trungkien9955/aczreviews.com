$(document).ready(function() {
	var owl_banner = $('.owl-carousel.owl-carousel-banner');
	var owl_learners = $('.owl-carousel.owl-carousel-learners');
    var owl_topbar = $('.owl-carousel.owl-carousel-top-bar');
    var owl_home_slider = $('.owl-carousel.owl-carousel-slider-top-left');
    var owl_top_teachers = $('.owl-carousel.owl-carousel-top-teachers');
    var owl_courses = $('.owl-carousel.owl-carousel-courses');
    var owl_certificates = $('.owl-carousel.owl-carousel-certificates');


	owl_certificates.owlCarousel({
		items: 4,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 5000,
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
	owl_courses.owlCarousel({
		items: 5,
		loop: true,
		nav:true,
		margin: 10,
		autoplay: false,
		autoplayTimeout: 5000,
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
	owl_top_teachers.owlCarousel({
		items: 3,
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 5000,
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

	owl_learners.owlCarousel({
		loop: true,
		margin: 10,
		autoplay: true,
		autoplayTimeout: 4000,
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
				items: 6
			}
		}
	});
	$('.play').on('click', function() {
		owl.trigger('play.owl.autoplay', [1000])
	})
	$('.stop').on('click', function() {
		owl.trigger('stop.owl.autoplay')
	})

})