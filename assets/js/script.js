jQuery(document).ready(function ($) {
	console.log("js is loading..");

	$(".destinations-slider").slick({
		slidesToShow: 4, // Default slides to show
		slidesToScroll: 1,
		infinite: false,
		dots: true,
		arrows: false,
		appendDots: $(".slider-dots"),
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
});
