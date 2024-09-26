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
			$(".review-form").removeClass("show");
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
				scrub: 1,
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
				".fa-content-wrapper h2 span",
				{ fontWeight: 200 },
				{ fontWeight: 700 },
				0.2,
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

	/* Dynamic Faqs */
	$(".filter-options .fo-title").on("click", function () {
		$(this).parent().hasClass("expand")
			? $(this).parent().removeClass("expand")
			: $(this).parent().addClass("expand");
	});

	$(".faq-title").on("click", function () {
		$(this)
			.parent()
			.toggleClass("expand")
			.parent()
			.siblings()
			.find(".faq-wrapper")
			.removeClass("expand");
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

	/* Load More Item Or FAQ Client side */
	$(document).ready(function () {
		$(".load-more-block").each(function () {
			var initialItemsToShow = parseInt($(this).attr("data-initial"), 10);
			var itemToShowPerClick = 2;

			var itemList = $(this).find(".item-list").children();
			var loadMoreButton = $(this).find(".load-more-accordion .load-more");

			itemList.each(function (index) {
				if (index >= initialItemsToShow) {
					$(this).css("display", "none");
				}
			});

			if (itemList.length > initialItemsToShow) {
				loadMoreButton.parent().addClass("visible");
			}

			loadMoreButton.on("click", function (e) {
				e.preventDefault();
				var visibleItems = itemList.filter(":visible").length;

				if (visibleItems < itemList.length) {
					itemList.each(function (index) {
						if (
							index >= visibleItems &&
							index < visibleItems + itemToShowPerClick
						) {
							$(this).slideDown();
						}
					});

					if (itemList.filter(":visible").length >= itemList.length) {
						loadMoreButton.find("span").text("Show Less");
						loadMoreButton.addClass("nothing-to-show");
					}
				} else {
					itemList.each(function (index) {
						if (index >= initialItemsToShow) {
							$(this).slideUp();
						}
					});

					loadMoreButton.find("span").text("Load More");
					loadMoreButton.removeClass("nothing-to-show");
				}
			});
		});
	});

	var otp_inputs = document.querySelectorAll(".otp__digit");
	var mykey = "0123456789".split("");
	otp_inputs.forEach((_) => {
		_.addEventListener("keyup", handle_next_input);
	});
	function handle_next_input(event) {
		let current = event.target;
		let index = parseInt(current.classList[1].split("__")[2]);
		current.value = event.key;

		if (event.keyCode == 8 && index > 1) {
			current.previousElementSibling.focus();
		}
		if (index < 6 && mykey.indexOf("" + event.key + "") != -1) {
			var next = current.nextElementSibling;
			next.focus();
		}
		var _finalKey = "";
		for (let { value } of otp_inputs) {
			_finalKey += value;
		}
		if (_finalKey.length == 6) {
			document.querySelector("#_otp").classList.replace("_notok", "_ok");
			document.querySelector("#_otp").innerText = _finalKey;
		} else {
			document.querySelector("#_otp").classList.replace("_ok", "_notok");
			document.querySelector("#_otp").innerText = _finalKey;
		}
	}

	/* Review Form Show and Hide */
	$(".review-block .bh-btn-filled-dark").on("click", function (e) {
		e.preventDefault();
		$("body").addClass("overflow-hidden");
		$(".overlay").addClass("show");
		$(".review-form").addClass("show");

		$(".close-review-form").on("click", function () {
			$("body").removeClass("overflow-hidden");
			$(".overlay").removeClass("show");
			$(".review-form").removeClass("show");
		});
	});

	/* Range Input Slider */

	$(".fo-option.range-value-slider").each(function () {
		var $container = $(this);

		var $durationSlider = $container.find(".price-range").first();
		if ($durationSlider.length) {
			$durationSlider.slider({
				range: true,
				min: 1, // Set min value for duration
				max: 15, // Set max value for duration
				values: [2, 10], // Set initial values for duration
				slide: function (event, ui) {
					$container.find(".price-min-label span").text(ui.values[0]);
					$container.find(".price-max-label span").text(ui.values[1]);
					$container.find(".price-min").val(ui.values[0]);
					$container.find(".price-max").val(ui.values[1]);
				},
			});

			// Set initial values on load
			$container
				.find(".price-min-label span")
				.text($durationSlider.slider("values", 0));
			$container
				.find(".price-max-label span")
				.text($durationSlider.slider("values", 1));
			$container.find(".price-min").val($durationSlider.slider("values", 0));
			$container.find(".price-max").val($durationSlider.slider("values", 1));
		}

		// For the Price Range slider (assuming the second slider is for Price Range)
		var $priceRangeSlider = $container.find(".price-range").last();
		if ($priceRangeSlider.length) {
			$priceRangeSlider.slider({
				range: true,
				min: 1000, // Set min value for price range
				max: 10000, // Set max value for price range
				values: [3000, 8000], // Set initial values for price range
				slide: function (event, ui) {
					$container.find(".price-min-label span").text(ui.values[0]);
					$container.find(".price-max-label span").text(ui.values[1]);
					$container.find(".price-min").val(ui.values[0]);
					$container.find(".price-max").val(ui.values[1]);
				},
			});

			// Set initial values on load
			$container
				.find(".price-min-label span")
				.text($priceRangeSlider.slider("values", 0));
			$container
				.find(".price-max-label span")
				.text($priceRangeSlider.slider("values", 1));
			$container.find(".price-min").val($priceRangeSlider.slider("values", 0));
			$container.find(".price-max").val($priceRangeSlider.slider("values", 1));
		}
	});
});
