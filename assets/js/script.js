jQuery(document).ready(function ($) {
	/* Menu */
	$(function () {
		$(".overlay").on("click", function (e) {
			e.preventDefault();
			$("body").removeClass("overflow-hidden");
			$(".mega-menu-wrapper").removeClass("show");
			$(this).removeClass("show");
			$(".primary-menu li").removeClass("active");
		});
	});
	$(function () {
		/* Show and Hide Mega Menu */
		$(".mega-menu a").on("click", function (e) {
			e.preventDefault();
			$(this).parent("li").addClass("active").siblings().removeClass("active");
			$(".overlay").addClass("show");
			$("body").addClass("overflow-hidden");

			if ($(this).parent("li").hasClass("mega-destinations")) {
				$(".mega-menu-wrapper#mega-destinations")
					.addClass("show")
					.siblings()
					.removeClass("show");
			} else if ($(this).parent("li").hasClass("mega-activities")) {
				$(".mega-menu-wrapper#mega-activities")
					.addClass("show")
					.siblings()
					.removeClass("show");
			} else {
				return;
			}
		});
		/* Main Tab in Mega Menu */
		$(".mm-controller li a").on("click", function (e) {
			e.preventDefault();
			var currentValue = $(this).attr("href");
			$(this).parent("li").addClass("active").siblings().removeClass("active");

			$(".tab-content-wrapper .tab-content" + currentValue)
				.addClass("active")
				.siblings()
				.removeClass("active");
		});

		/* Inner Tab in Mega Menu */
		$(".inner-tab li a").on("click", function (e) {
			e.preventDefault();
			var currentValue = $(this).attr("href");

			$(this).parent("li").addClass("active").siblings().removeClass("active");

			$(".inner-tab-content" + currentValue)
				.addClass("active")
				.siblings()
				.removeClass("active");
		});

		/* Dropdown Menu */
		$(".menu-has-children a").on("click", function () {
			$(this).parent("li").addClass("active").siblings().removeClass("active");
			$(".mega-menu-wrapper").removeClass("show");

			$(this).closest(".dropdown-items").addClass("active");
		});
	});

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

	/* Light Gallery */
	$(".light-gallery").lightGallery({
		selector: ".cli-image a",
	});

	/* Dynamic Faqs */
	$(".faq-title").on("click", function () {
		$(this).parent().hasClass("expand")
			? $(this).parent().removeClass("expand")
			: $(this).parent().addClass("expand");
	});
});
