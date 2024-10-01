jQuery(document).ready(function ($) {
	/* View Detail Tab */
	$(".overlay").on("click", function () {
		$(".trip-detail-modal").removeClass("show");
	});

	$(function () {
		$(".view-detail").on("click", function (e) {
			e.preventDefault();

			$(".trip-detail-modal").addClass("show");
			$(".overlay").addClass("show");
		});
		$(".td-tab-controller li a").on("click", function (e) {
			e.preventDefault();

			$(this).parent().addClass("active").siblings("li").removeClass("active");
			var currentActive = $(this).attr("href");

			$(`.td-tab-content+${currentActive}`)
				.addClass("active")
				.siblings()
				.removeClass("active");
		});
	});
});
