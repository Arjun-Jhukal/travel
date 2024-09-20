jQuery(document).ready(function ($) {
	/* Destination Slider */
	$(".destinations-slider").slick({
		slidesToShow: 4, // Default slides to show
		slidesToScroll: 1,
		infinite: false,
		dots: false,
		arrows: false,
		appendDots: $(".slider-dots"),

		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
					dots: true,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
					dots: true,
				},
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1.2,
					infinite: false,
					dots: true,
				},
			},
		],
	});

	/* Blog Slider */
	$(".blog-slider").slick({
		slidesToShow: 3.5,
		slidesToScroll: 1,
		infinite: false,
		dots: true,
		arrows: true,
		appendDots: $(".blog-slider-dots"),
		nextArrow: $(".blog-next"),
		prevArrow: $(".blog-prev"),
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				},
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1.2,
					infinite: false,
				},
			},
		],
	});

	/* Footer Animation */
	$(function () {
		gsap.registerPlugin(ScrollTrigger);

		const t1 = gsap.timeline({
			scrollTrigger: {
				trigger: ".footer-animate",
				start: "-150px center",
				end: "bottom center",
				scrub: 1, // Corrected scrub property
				// markers: {
				// 	startColor: "blue",
				// 	endColor: "red",
				// },
			},
		});

		if ($(".animating-section").length > 0) {
			t1.fromTo(
				".fa-content-wrapper h2",
				{ y: "-100px", opacity: 0, visibility: "hidden" },
				{ y: "0px", opacity: 0.2, visibility: "visible" },
				0,
			);
			t1.fromTo(
				".animating-section",
				{ y: "393px", opacity: 0, visibility: "hidden" },
				{ y: "-40px", opacity: 1, visibility: "visible" },
			);
		}
	});
});
