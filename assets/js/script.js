jQuery(document).ready(function ($) {
	/* Sticky Header */

	var scrollPosition = $(window).scrollTop();
	if (scrollPosition >= 150) {
		$(".header").addClass("sticky");
	} else {
		$(".header").removeClass("sticky");
	}

	$(window).on("scroll", function () {
		var scrollPosition = $(window).scrollTop();

		if (scrollPosition >= 150) {
			$(".header").addClass("sticky");
		} else {
			$("header").removeClass("sticky");
		}
	});

	/* Menu */
	$(function () {
		$(".overlay").on("click", function (e) {
			e.preventDefault();
			$("body").removeClass("overflow-hidden");
			$(".mega-menu-wrapper").removeClass("show");
			$(this).removeClass("show");
			$(this).removeClass("dark");
			$(".primary-menu li").removeClass("active");
			$(".team-popup").removeClass("show");
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
		$(".menu-has-children a").on("click", function (e) {
			e.preventDefault();
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

	/* Blog Slider */
	$(".testimonial-slider").slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		infinite: true,
		dots: true,
		arrows: true,
		appendDots: $(".testimonial-slider-dots"),
		nextArrow: $(".testimonial-next"),
		prevArrow: $(".testimonial-prev"),
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
					arrows: false,
				},
			},
		],
	});

	/* Testimonial slider Tab */
	$(".testimonial-tab li a ").on("click", function (e) {
		e.preventDefault();

		$(this).parent().addClass("active").siblings().removeClass("active");
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
	$(".certificate-light-gallery").lightGallery({
		selector: ".cli-image a",
	});

	$(".gb-items").lightGallery({
		selector: ".gb-item a",
	});

	// $(".gb-item a").on("click", function () {
	// 	$(".gb-items").addClass("show-all");
	// });

	/* Dynamic Faqs */
	$(".filter-options .fo-title").on("click", function () {
		$(this).parent().hasClass("expand")
			? $(this).parent().removeClass("expand")
			: $(this).parent().addClass("expand");
	});

	$(".faq-title").on("click", function () {
		const $parent = $(this).parent();
		$(".faq-wrapper").not($parent).removeClass("expand");
		$parent.toggleClass("expand");
	});

	/* Dark Popup */
	$(".team-member .bh-btn-underlined").on("click", function (e) {
		e.preventDefault();
		$(".team-popup").addClass("show");
		$(".overlay").addClass("show");
		$(".overlay").addClass("dark");
		$("body").addClass("overflow-hidden");

		$(".close-team-popup").on("click", function () {
			$(".team-popup").removeClass("show");
			$(".overlay").removeClass("show");
			$(".overlay").removeClass("dark");
			$("body").removeClass("overflow-hidden");
		});
	});

	/* client Load More Functionality */
	$(function () {
		var maxInitialHeight = 144;
		var content = $(".text-wrapper .text-read-more");
		var contentHeight = content.length > 0 && content[0].scrollHeight;

		if (contentHeight <= maxInitialHeight) {
			$(".handle-client-read-more").addClass("d-none");
		}

		$(".handle-client-read-more").on("click", function (e) {
			e.preventDefault();
			$(this).addClass("d-none");
			$(this).siblings(".text-wrapper").removeClass("text-expandable");
		});
	});

	/* Single Destination Sticky Tab */
	$(".sticky-tab li a").on("click", function (e) {
		e.preventDefault();
		$(this).parent("li").addClass("active").siblings().removeClass("active");

		var currentActive = $(this).attr("href");
		var targetOffset = $(currentActive).offset().top - 180;

		$("html, body").animate(
			{
				scrollTop: targetOffset,
			},
			300,
		);
	});

	const destinationInfoObserver = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const currentInView = entry.target.id;
				console.log(currentInView);

				$(".sticky-tab li a")
					.filter(`[href="#${currentInView}"]`)
					.parent("li")
					.addClass("active")
					.siblings()
					.removeClass("active");
			}
		});
	});

	$(".sticky-tab")
		.siblings("section")
		.each(function () {
			destinationInfoObserver.observe(this);
		});

	/* Places to visit Tab */

	$(".ptv-tab li a").on("click", function (e) {
		e.preventDefault();
		$(this).parent("li").addClass("active").siblings().removeClass("active");
		var currentActive = $(this).attr("href");

		var targetOffset = $(currentActive).offset().top - 180;

		$("html, body").animate(
			{
				scrollTop: targetOffset,
			},
			300,
		);
	});

	const options = {
		threshold: 0.2,
	};

	const placeToVisitObserver = new IntersectionObserver((entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				const currentInView = entry.target.id;

				$(".ptv-tab li a")
					.filter(`[href="#${currentInView}"]`)
					.parent("li")
					.addClass("active")
					.siblings()
					.removeClass("active");
			}
		});
	}, options);

	// Observe each section
	$(".ptv-tab-content").each(function () {
		placeToVisitObserver.observe(this);
	});

	/* Dynamic Rating */
	$(".review-rating").each(function () {
		var currentRating = $(this).attr("data-rating");
		var ratingValue = parseFloat(currentRating);
		var ratingBeforeDecimal = Math.floor(ratingValue);
		var ratingAfterDecimal = ratingValue - ratingBeforeDecimal;
		$(this)
			.find("li")
			.each(function (index) {
				if (index < ratingBeforeDecimal) {
					$(this).find(".filled-star").css("width", "100%");
				} else if (index === ratingBeforeDecimal && ratingAfterDecimal > 0) {
					var widthPercentage = ratingAfterDecimal * 100;
					$(this)
						.find(".filled-star")
						.css("width", widthPercentage + "%");
				} else {
					$(this).find(".filled-star").css("width", "0%");
				}
			});
	});

	/* Group Discount */
	$(".group-discount-btn.show-hide-btn").on("click", (e) => {
		e.preventDefault();

		$(".group-discount-table").toggleClass("active");
	});

	/* Print  */
	$(".download-pdf").on("click", function (e) {
		e.preventDefault();
		window.print();
	});
});
