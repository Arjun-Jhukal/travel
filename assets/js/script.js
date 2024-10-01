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

	/* Mobile Menu */

	$(function () {
		$(".hamburger-icon").on("click", function () {
			$(".primary-menu").addClass("active");
			$(".overlay").addClass("show");
			$("body").addClass("overflow-hidden");

			$(".close-ham-menu").on("click", function () {
				$(".primary-menu").removeClass("active");
				$(".overlay").removeClass("show");
				$("body").removeClass("overflow-hidden");
			});
		});
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
			$(".popup-form").removeClass("show");
			$(".primary-menu").removeClass("active");
			$(".mm-controller").removeClass("activate-fixed-menu");
			$(".tab-content-wrapper").removeClass("show-tab-content");
			$(".booking-confirm").removeClass("show");
			$(".plan-a-trip").removeClass("show");
			$(".pat-item").first().addClass("show").siblings().removeClass("show");
			$(".auth-module-wrapper").removeClass("show");
		});

		$(".back-to-mobile-menu").on("click", function (e) {
			$(".mm-controller").removeClass("activate-fixed-menu");
			$(".mega-menu-wrapper").removeClass("show");
			$(".primary-menu").addClass("active");
			$(".mega-menu").removeClass("active");
		});
	});

	$(function () {
		/* Show and Hide Mega Menu */
		$(".mega-menu a").on("click", function (e) {
			e.preventDefault();
			$(this).parent("li").addClass("active").siblings().removeClass("active");
			$(".overlay").addClass("show");
			$("body").addClass("overflow-hidden");

			/* For Mobile */
			$(".mm-controller").addClass("activate-fixed-menu");
			$(".primary-menu").removeClass("active");

			/* For Desktop */
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

			/* For Mobile*/
			$(".tab-content-wrapper").addClass("show-tab-content");
			$(".mm-controller").removeClass("activate-fixed-menu");

			/* For Desktop */
			$(".tc-list-box ").each(function () {
				$(this)
					.find(".inner-tab-content")
					.removeClass("active")
					.eq(0)
					.addClass("active");
			});

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

		/* Mobile Tab Back */
		$(".tc-header .dropdown-menu-item").on("click", function () {
			console.log("clicked");
			$(".tab-content-wrapper").removeClass("show-tab-content");
			$(".mm-controller").addClass("activate-fixed-menu");
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

	/* Testimonial Slider */
	$(".testimonial-slider").each(function () {
		var $slider = $(this);

		$slider.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			infinite: true,
			dots: true,
			arrows: true,
			appendDots: $(this).parent().find(".testimonial-slider-dots"),
			nextArrow: $(this).parent().find(".testimonial-next"),
			prevArrow: $(this).parent().find(".testimonial-prev"),
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
	});

	/* Testimonial slider Tab */
	$(".testimonial-tab li a").on("click", function (e) {
		e.preventDefault();

		$(this).parent().addClass("active").siblings().removeClass("active");

		var tabIndex = $(this).parent().index();

		$(".platform-info")
			.eq(tabIndex - 1)
			.addClass("active")
			.removeClass("active")
			.siblings(".platform-info")
			.removeClass("active")
			.addClass("active");

		$(".platform-testimonial-wrapper")
			.eq(tabIndex - 1)
			.addClass("active")
			.removeClass("active")
			.siblings(".platform-testimonial-wrapper")
			.removeClass("active")
			.addClass("active");
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
				{ y: "0px", opacity: 1, visibility: "visible" },
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

	/* Attraction Modal */
	$(".popular-destination-item a").each(function () {
		$(this).on("click", function () {
			$(".attraction-modal").addClass("show");
			$(".overlay").addClass("show");
		});
	});

	/* Dynamic Rating */
	$(".review-rating").each(function () {
		var currentRating = $(this).attr("data-rating");
		var ratingValue = parseFloat(currentRating);
		var ratingBeforeDecimal = Math.floor(ratingValue);
		var ratingAfterDecimal = ratingValue - ratingBeforeDecimal;

		var widthPercentage = ratingAfterDecimal * 100;

		if (ratingAfterDecimal >= 0) {
			$(this)
				.find("li")
				.eq(ratingBeforeDecimal)
				.find(".filled-star")
				.css("width", widthPercentage + "%");
		}

		$(this)
			.find("li")
			.each(function (index) {
				if (index > ratingBeforeDecimal) {
					$(this).find(".filled-star").css("width", "0%");
				}
			});

		console.log({ currentRating, ratingBeforeDecimal, widthPercentage }); // Log the details
	});

	/* Group Discount */
	$(".group-discount-btn.show-hide-btn").on("click", (e) => {
		e.preventDefault();

		$(".group-discount-table").toggleClass("active");
	});

	/**
	 *
	 * Availability Dates Functionality Start from here
	 *
	 */
	$(function () {
		const disabledDates = [
			"2024-12-20",
			"2024-12-31",
			{ from: "2024-12-20", to: "2025-01-01" },
			{ from: "2025-01-12", to: "2025-01-16" },
		];

		let tripDates = []; // Store the trip dates globally
		let startDate = null; // Store the selected start date

		// Initialize flatpickr
		var flatpickrInstance = flatpickr(".available-dates", {
			dateFormat: "Y-m-d",
			minDate: "today",
			inline: true,
			showMonths: 2,
			disable: disabledDates,
			onChange: (selectedDates, dateStr, instance) => {
				const availabilityBlock = document.querySelector(".availability-block");
				const tripDuration =
					parseInt(availabilityBlock.getAttribute("trip-duration"), 10) || 10;

				// Clear previous trip-day and trip-end-day classes
				document
					.querySelectorAll(
						".flatpickr-day.trip-day, .flatpickr-day.trip-end-day",
					)
					.forEach((day) => {
						day.classList.remove("trip-day", "trip-end-day");
					});

				// If a date is selected
				if (selectedDates.length > 0) {
					startDate = selectedDates[0];
					tripDates = [];

					// Generate an array of dates for the trip duration
					for (let i = 0; i < tripDuration; i++) {
						const date = new Date(startDate);
						date.setDate(startDate.getDate() + i);
						// Push the date to tripDates in "Y-m-d" format
						tripDates.push(date.toISOString().split("T")[0]);
					}

					// Highlight trip days in the current view
					highlightTripDays();
				}
			},
			onMonthChange: () => {
				// When the month changes, re-highlight the trip days
				if (startDate) {
					highlightTripDays();
				}
			},
		});

		// Function to highlight trip days
		function highlightTripDays() {
			// Clear previous trip-day and trip-end-day classes
			document
				.querySelectorAll(
					".flatpickr-day.trip-day, .flatpickr-day.trip-end-day",
				)
				.forEach((day) => {
					day.classList.remove("trip-day", "trip-end-day");
				});

			// Get the last trip date for trip-end-day class
			const lastTripDate = tripDates[tripDates.length - 1];

			// Loop over each flatpickr-day element
			document.querySelectorAll(".flatpickr-day").forEach((day) => {
				const dayLabel = day.getAttribute("aria-label");

				// Convert dayLabel to "Y-m-d" format
				const parsedDate = new Date(dayLabel);
				const formattedDayLabel = parsedDate.toISOString().split("T")[0];

				// Add 'trip-day' class to all trip dates
				if (tripDates.includes(formattedDayLabel)) {
					day.classList.add("trip-day");

					// Add 'trip-end-day' class to the last date
					if (formattedDayLabel === lastTripDate) {
						day.classList.add("trip-end-day");
					}
				}
			});
		}

		$(".date-field-wrapper select").on("change", function () {
			console.log($(this).val());
			var selectedYear = $(this).val();
			flatpickrInstance.jumpToDate(new Date(selectedYear, 0, 1));
		});

		// Functionality To Clear tripDates
		$(".clear-dates").on("click", function (e) {
			e.preventDefault();

			flatpickrInstance.clear();
			flatpickrInstance.setDate(new Date());
			flatpickrInstance.jumpToDate(new Date());

			$(".date-field-wrapper select").val(new Date().getFullYear());
		});
	});

	/**
	 *
	 * Availability Dates Functionality Ends Here
	 *
	 */

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
				console.log("clicked");
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

	/* Review Comment And Inquiry Form Show and Hide */
	$(".close-review-form").on("click", function () {
		$("body").removeClass("overflow-hidden");
		$(".overlay").removeClass("show");
		$(".popup-form").removeClass("show");
	});

	$(".review-block .bh-btn-filled-dark").on("click", function (e) {
		e.preventDefault();
		$("body").addClass("overflow-hidden");
		$(".overlay").addClass("show");
		$(".review-form").addClass("show");
	});

	$(".write-comment").on("click", function (e) {
		e.preventDefault();
		$("body").addClass("overflow-hidden");
		$(".overlay").addClass("show");
		$(".comment-form").addClass("show");
	});

	$(".inquiry-btn").on("click", function (e) {
		e.preventDefault();
		$("body").addClass("overflow-hidden");
		$(".overlay").addClass("show");
		$(".quick-inquiry").addClass("show");
	});

	/* Range Input Slider */
	$(".fo-option.range-value-slider").each(function () {
		var $container = $(this);

		// Find the range slider container
		var $sliderContainer = $container.find(".range-slider-container");

		if ($sliderContainer.length) {
			// Retrieve initial min and max values from the input fields
			var initialMin = parseInt($sliderContainer.find(".price-min").val()) || 1; // Default to 1 if not set
			var initialMax =
				parseInt($sliderContainer.find(".price-max").val()) || 15; // Default to 15 if not set

			// Initialize the slider
			$sliderContainer.find(".price-range").slider({
				range: true,
				min: parseInt($sliderContainer.find(".price-min").attr("min")) || 1, // Set min value from the min attribute
				max: parseInt($sliderContainer.find(".price-max").attr("max")) || 15, // Set max value from the max attribute
				values: [initialMin, initialMax], // Set initial values from the input fields
				slide: function (event, ui) {
					// Update the labels and hidden inputs on slide
					$container.find(".price-min-label span").text(ui.values[0]);
					$container.find(".price-max-label span").text(ui.values[1]);
					$sliderContainer.find(".price-min").val(ui.values[0]);
					$sliderContainer.find(".price-max").val(ui.values[1]);
				},
			});

			// Set initial values on load
			$container
				.find(".price-min-label span")
				.text($sliderContainer.find(".price-range").slider("values", 0));
			$container
				.find(".price-max-label span")
				.text($sliderContainer.find(".price-range").slider("values", 1));
		}
	});

	/* Like Dislike Active */

	$(".reaction-wrapper a").on("click", function (e) {
		e.preventDefault();

		$(this).hasClass("active")
			? $(this).removeClass("active")
			: $(this).addClass("active").siblings().removeClass("active");
	});

	let toastTimeout; // Declare a variable to store the timeout ID

	/* Temporary for wishlist */
	// $(".package-item .wishlist").on("click", function () {
	// 	$(this).toggleClass("added");

	// 	$(".bh-toast.success").addClass("active");

	// 	clearTimeout(toastTimeout);

	// 	toastTimeout = setTimeout(() => {
	// 		$(".bh-toast.success").removeClass("active");
	// 	}, 3000);
	// });

	// Close button functionality
	$(".toast-close-btn").on("click", function () {
		clearTimeout(toastTimeout);
		$(".bh-toast").removeClass("active");
	});

	//contact form 7 popup message
	document.addEventListener(
		"wpcf7invalid",
		function (event) {
			event.preventDefault();
			var form = event.target;
			$(form).find(".wpcf7-response-output").addClass("custom active error");
			setTimeout(function () {
				$(form)
					.find(".wpcf7-response-output")
					.removeClass("custom active error");
			}, 10000);
		},
		false,
	);
	document.addEventListener(
		"wpcf7spam",
		function (event) {
			event.preventDefault();
			var form = event.target;
			$(form).find(".wpcf7-response-output").addClass("custom active warning");
			setTimeout(function () {
				$(form)
					.find(".wpcf7-response-output")
					.removeClass("custom active warning");
			}, 10000);
		},
		false,
	);
	document.addEventListener(
		"wpcf7mailfailed",
		function (event) {
			event.preventDefault();
			var form = event.target;
			$(form).find(".wpcf7-response-output").addClass("custom active error");
			setTimeout(function () {
				$(form)
					.find(".wpcf7-response-output")
					.removeClass("custom active error");
			}, 10000);
		},
		false,
	);
	document.addEventListener(
		"wpcf7mailsent",
		function (event) {
			event.preventDefault();
			var form = event.target;
			$(form).find(".wpcf7-response-output").addClass("custom active success");
			setTimeout(function () {
				$(form)
					.find(".wpcf7-response-output")
					.removeClass("custom active success");
			}, 3000);
		},
		false,
	);
	//contact form 7 popup message
});

jQuery(document).ready(function ($) {
	$(".wishlist").click(async function () {
		var packageId = $(this).data("id");
		var icon = $(this);
		var countElement = $(".wishlist-count");

		try {
			const response = await $.ajax({
				url: my_ajax_object.ajax_url,
				type: "POST",
				data: {
					action: "toggle_wishlist",
					package_id: packageId,
				},
			});

			if (response.success) {
				icon.toggleClass("added");
				countElement.text(response.data.count);
			} else {
				console.error("AJAX Error:", response.data);
			}
		} catch (jqXHR) {
			console.error("AJAX Error:", jqXHR.statusText);
		}
	});
	$(".remove-from-wishlist").click(async function (e) {
		e.preventDefault();
		var packageId = $(this).data("id");
		var countElement = $(".wishlist-count");

		try {
			const response = await $.ajax({
				url: my_ajax_object.ajax_url,
				type: "POST",
				data: {
					action: "toggle_wishlist",
					package_id: packageId,
				},
			});

			if (response.success) {
				$(this).closest(".wl-item").remove(); // Adjust selector as needed
				countElement.text(response.data.count);
			} else {
				console.error("AJAX Error:", response.data);
			}
		} catch (jqXHR) {
			console.error("AJAX Error:", jqXHR.statusText);
		}
	});
});
