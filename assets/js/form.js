jQuery(document).ready(function ($) {
	/*Trip menu active handler */

	$(function () {
		let $totalActive = $(".booking-menu li.active").length;
		let $totalItems = $(".booking-menu li").length;

		let totalParts = $totalItems - 1;
		let percentageIncrease = 100 / totalParts;

		var afterHeight = ($totalActive - 1) * percentageIncrease;

		$(".booking-menu").css("--after-height", `${afterHeight}%`);
	});

	/* Trip General From */
	$(".individual-info-card").on("click", function () {
		$(this).hasClass("active")
			? $(this).removeClass("active")
			: ($(this).addClass("active"),
			  $(this)
					.parent()
					.siblings()
					.find(".individual-info-card")
					.removeClass("active"));
	});

	/* Trip Start Date */

	flatpickr(".start-date", {
		dateFormat: "Y-m-d",
		minDate: "today",
	});

	flatpickr(".end-date", {
		dateFormat: "Y-m-d",
		minDate: "today",
	});

	/* Number increase and decrease */

	$(".number-controller button.decrease").on("click", function (e) {
		e.preventDefault();

		let $input = $(this).siblings("input");

		let currentValue = parseInt($input.val()) || 0;
		let newValue = currentValue > 0 ? currentValue - 1 : 0;

		$input.val(newValue);
	});

	$(".number-controller button.increase").on("click", function (e) {
		e.preventDefault();

		let $input = $(this).siblings("input");

		let currentValue = parseInt($input.val()) || 0;
		let newValue = currentValue + 1;

		$input.val(newValue);
	});

	/* OTP Form */
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
});
