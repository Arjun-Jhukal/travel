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

		if (newValue > 0) {
			$(this).closest(".extension-item").addClass("active");
		} else {
			$(this).closest(".extension-item").removeClass("active");
		}
	});

	$(".number-controller button.increase").on("click", function (e) {
		e.preventDefault();

		let $input = $(this).siblings("input");

		let currentValue = parseInt($input.val()) || 0;
		let newValue = currentValue + 1;

		if (newValue > 0) {
			$(this).closest(".extension-item").addClass("active");
		} else {
			$(this).closest(".extension-item").removeClass("active");
		}

		$input.val(newValue);
	});

	/* Guest Info Form */
	$(".guest-info-wrapper").on("click", ".remove-guest", function (e) {
		e.preventDefault();
		$(this).closest(".guest-info").remove();
	});

	$(".add-adult").on("click", function (e) {
		e.preventDefault();
		$(".guest-info-wrapper").append(`
      <div class="guest-info">
        <div class="gi-title d-flex justify-content-between">
          <strong>Guest #1 [ADULT]</strong>
          <a href="#" class="bh-btn bh-btn-underlined remove-guest">Remove this Guest</a>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="input-field">
              <label for="start-date">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.0008 7.86385C9.8134 7.86385 11.2829 6.40194 11.2829 4.59856C11.2829 2.79518 9.8134 1.33325 8.0008 1.33325C6.18818 1.33325 4.71875 2.79518 4.71875 4.59856C4.71875 6.40194 6.18818 7.86385 8.0008 7.86385Z" fill="#7FB51F"/>
<path d="M9.7107 9.22437H6.2919C4.309 9.22437 2.66797 10.8571 2.66797 12.8298C2.66797 13.306 2.8731 13.7142 3.28336 13.9183C3.89874 14.2584 5.26626 14.6665 8.0013 14.6665C10.7364 14.6665 12.1038 14.2584 12.7192 13.9183C13.0611 13.7142 13.3346 13.306 13.3346 12.8298C13.3346 10.789 11.6936 9.22437 9.7107 9.22437Z" fill="#7FB51F"/>
</svg>

                Full Name</label>
              <input type="text" placeholder="Enter your full name">
            </div>
          </div>
          <div class="col-md-12">
            <div class="input-field">
              <label for="start-date">
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="fi_126341" clip-path="url(#clip0_228_3982)">
<g id="Group">
<g id="Group_2">
<path id="Vector" d="M15.2051 13.2304C14.5517 12.5853 13.736 12.5853 13.0867 13.2304C12.5915 13.7215 12.0962 14.2126 11.6093 14.712C11.4761 14.8494 11.3638 14.8785 11.2014 14.7869C10.881 14.6121 10.5397 14.4706 10.2317 14.2792C8.79592 13.3761 7.59315 12.2149 6.52773 10.9081C5.99918 10.2589 5.52889 9.56385 5.20011 8.78143C5.13352 8.62328 5.14601 8.51924 5.27502 8.39022C5.77028 7.91162 6.25305 7.42052 6.73998 6.92943C7.41836 6.24689 7.41836 5.44782 6.73582 4.76112C6.34877 4.36991 5.96172 3.98703 5.57467 3.59582C5.17514 3.19628 4.77977 2.79259 4.37607 2.39721C3.72267 1.76046 2.90695 1.76046 2.25771 2.40138C1.75829 2.89247 1.27968 3.39605 0.771944 3.87882C0.301659 4.32413 0.0644358 4.86933 0.014494 5.50609C-0.0645804 6.54238 0.18929 7.5204 0.547206 8.47346C1.27968 10.4462 2.39505 12.1983 3.74764 13.8047C5.57467 15.9772 7.75546 17.696 10.3067 18.9363C11.4553 19.4939 12.6456 19.9226 13.9399 19.9934C14.8305 20.0433 15.6046 19.8186 16.2247 19.1235C16.6493 18.6491 17.1279 18.2163 17.5773 17.7626C18.2432 17.0884 18.2474 16.2727 17.5857 15.6068C16.7949 14.8119 16 14.0212 15.2051 13.2304Z" fill="#7FB51F"/>
<path id="Vector_2" d="M14.4098 9.91346L15.9455 9.65126C15.7042 8.24041 15.0383 6.96273 14.027 5.94725C12.9574 4.87767 11.6048 4.20345 10.1149 3.99536L9.89844 5.53939C11.0513 5.7017 12.1 6.22193 12.9282 7.05013C13.7107 7.83255 14.2226 8.82306 14.4098 9.91346Z" fill="#7FB51F"/>
<path id="Vector_3" d="M16.8124 3.23789C15.0394 1.46496 12.7962 0.34543 10.3199 0L10.1035 1.54403C12.2427 1.84368 14.1821 2.81338 15.7136 4.34077C17.1661 5.79324 18.1192 7.6286 18.4646 9.64708L20.0003 9.38488C19.5966 7.04595 18.4937 4.92342 16.8124 3.23789Z" fill="#7FB51F"/>
</g>
</g>
</g>
<defs>
<clipPath id="clip0_228_3982">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

                Phone Number</label>
              <input type="tel" placeholder="Enter your Phone Number">
            </div>
          </div>
          <div class="col-md-12">
            <div class="input-field">
              <label for="start-date">
               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="fi_11502370">
<path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M1.96372 3.07378L6.28622 7.39816C7.22897 8.33909 8.77003 8.33991 9.71356 7.39816L14.0361 3.07378C14.0796 3.03025 14.0732 2.95856 14.0227 2.92334C13.5819 2.61588 13.0455 2.43359 12.4677 2.43359H3.53216C2.95431 2.43359 2.41791 2.61591 1.97703 2.92334C1.92653 2.95856 1.92019 3.03025 1.96372 3.07378ZM0.808594 5.15712C0.808594 4.70275 0.92125 4.27344 1.11969 3.89609C1.15072 3.83706 1.22938 3.82512 1.27653 3.87228L5.54431 8.14006C6.89578 9.4935 9.10322 9.49428 10.4555 8.14006L14.7233 3.87228C14.7704 3.82512 14.8491 3.83706 14.8801 3.89609C15.0785 4.27344 15.1912 4.70278 15.1912 5.15712V10.8427C15.1912 12.3456 13.9687 13.5662 12.4677 13.5662H3.53216C2.03116 13.5662 0.808594 12.3456 0.808594 10.8427V5.15712Z" fill="#7FB51F"/>
</g>
</svg>

                Email Address</label>
              <input type="email" placeholder="Enter your Email Address">
            </div>
          </div>
        </div>
      </div>`);
	});

	$(".add-child").on("click", function (e) {
		e.preventDefault();

		const baseUrl = window.location;
		console.log(baseUrl);

		$(".guest-info-wrapper").append(`
      <div class="guest-info">
        <div class="gi-title d-flex justify-content-between">
          <strong>Guest #1 [CHILD]</strong>
          <a href="#" class="bh-btn bh-btn-underlined remove-guest">Remove this Guest</a>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="input-field">
              <label for="start-date">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.0008 7.86385C9.8134 7.86385 11.2829 6.40194 11.2829 4.59856C11.2829 2.79518 9.8134 1.33325 8.0008 1.33325C6.18818 1.33325 4.71875 2.79518 4.71875 4.59856C4.71875 6.40194 6.18818 7.86385 8.0008 7.86385Z" fill="#7FB51F"/>
<path d="M9.7107 9.22437H6.2919C4.309 9.22437 2.66797 10.8571 2.66797 12.8298C2.66797 13.306 2.8731 13.7142 3.28336 13.9183C3.89874 14.2584 5.26626 14.6665 8.0013 14.6665C10.7364 14.6665 12.1038 14.2584 12.7192 13.9183C13.0611 13.7142 13.3346 13.306 13.3346 12.8298C13.3346 10.789 11.6936 9.22437 9.7107 9.22437Z" fill="#7FB51F"/>
</svg>

                Full Name</label>
              <input type="text" placeholder="Enter your full name">
            </div>
          </div>
          <div class="col-md-12">
            <div class="input-field">
              <label for="start-date">
               <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="fi_126341" clip-path="url(#clip0_228_3982)">
<g id="Group">
<g id="Group_2">
<path id="Vector" d="M15.2051 13.2304C14.5517 12.5853 13.736 12.5853 13.0867 13.2304C12.5915 13.7215 12.0962 14.2126 11.6093 14.712C11.4761 14.8494 11.3638 14.8785 11.2014 14.7869C10.881 14.6121 10.5397 14.4706 10.2317 14.2792C8.79592 13.3761 7.59315 12.2149 6.52773 10.9081C5.99918 10.2589 5.52889 9.56385 5.20011 8.78143C5.13352 8.62328 5.14601 8.51924 5.27502 8.39022C5.77028 7.91162 6.25305 7.42052 6.73998 6.92943C7.41836 6.24689 7.41836 5.44782 6.73582 4.76112C6.34877 4.36991 5.96172 3.98703 5.57467 3.59582C5.17514 3.19628 4.77977 2.79259 4.37607 2.39721C3.72267 1.76046 2.90695 1.76046 2.25771 2.40138C1.75829 2.89247 1.27968 3.39605 0.771944 3.87882C0.301659 4.32413 0.0644358 4.86933 0.014494 5.50609C-0.0645804 6.54238 0.18929 7.5204 0.547206 8.47346C1.27968 10.4462 2.39505 12.1983 3.74764 13.8047C5.57467 15.9772 7.75546 17.696 10.3067 18.9363C11.4553 19.4939 12.6456 19.9226 13.9399 19.9934C14.8305 20.0433 15.6046 19.8186 16.2247 19.1235C16.6493 18.6491 17.1279 18.2163 17.5773 17.7626C18.2432 17.0884 18.2474 16.2727 17.5857 15.6068C16.7949 14.8119 16 14.0212 15.2051 13.2304Z" fill="#7FB51F"/>
<path id="Vector_2" d="M14.4098 9.91346L15.9455 9.65126C15.7042 8.24041 15.0383 6.96273 14.027 5.94725C12.9574 4.87767 11.6048 4.20345 10.1149 3.99536L9.89844 5.53939C11.0513 5.7017 12.1 6.22193 12.9282 7.05013C13.7107 7.83255 14.2226 8.82306 14.4098 9.91346Z" fill="#7FB51F"/>
<path id="Vector_3" d="M16.8124 3.23789C15.0394 1.46496 12.7962 0.34543 10.3199 0L10.1035 1.54403C12.2427 1.84368 14.1821 2.81338 15.7136 4.34077C17.1661 5.79324 18.1192 7.6286 18.4646 9.64708L20.0003 9.38488C19.5966 7.04595 18.4937 4.92342 16.8124 3.23789Z" fill="#7FB51F"/>
</g>
</g>
</g>
<defs>
<clipPath id="clip0_228_3982">
<rect width="20" height="20" fill="white"/>
</clipPath>
</defs>
</svg>

                Phone Number</label>
              <input type="tel" placeholder="Enter your Phone Number">
            </div>
          </div>
          <div class="col-md-12">
            <div class="input-field">
              <label for="start-date">
               <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<g id="fi_11502370">
<path id="Vector" fill-rule="evenodd" clip-rule="evenodd" d="M1.96372 3.07378L6.28622 7.39816C7.22897 8.33909 8.77003 8.33991 9.71356 7.39816L14.0361 3.07378C14.0796 3.03025 14.0732 2.95856 14.0227 2.92334C13.5819 2.61588 13.0455 2.43359 12.4677 2.43359H3.53216C2.95431 2.43359 2.41791 2.61591 1.97703 2.92334C1.92653 2.95856 1.92019 3.03025 1.96372 3.07378ZM0.808594 5.15712C0.808594 4.70275 0.92125 4.27344 1.11969 3.89609C1.15072 3.83706 1.22938 3.82512 1.27653 3.87228L5.54431 8.14006C6.89578 9.4935 9.10322 9.49428 10.4555 8.14006L14.7233 3.87228C14.7704 3.82512 14.8491 3.83706 14.8801 3.89609C15.0785 4.27344 15.1912 4.70278 15.1912 5.15712V10.8427C15.1912 12.3456 13.9687 13.5662 12.4677 13.5662H3.53216C2.03116 13.5662 0.808594 12.3456 0.808594 10.8427V5.15712Z" fill="#7FB51F"/>
</g>
</svg>

                Email Address</label>
              <input type="email" placeholder="Enter your Email Address">
            </div>
          </div>
        </div>
      </div>
    `);
	});

	/* Extension From */
	$(".view-detail-btn").on("click", function (e) {
		e.preventDefault();
		$(this).closest(".extension-item").find(".ei-content").addClass("active");
		$(this).hide();

		$(".view-less-btn").on("click", function (e) {
			e.preventDefault();

			$(this)
				.closest(".extension-item")
				.find(".ei-content")
				.removeClass("active");
		});
	});

	/* Payment Options */
	$(".po-item input").on("click", function () {
		$(".po-item").removeClass("active");
		$(this).closest(".po-item").toggleClass("active");
	});

	/* Success Form */
	$(".handle-success").on("click", function (e) {
		e.preventDefault();
		$(".overlay").addClass("show");
		$(".booking-confirm").addClass("show");
		$("body").addClass("overflow-hidden");

		$(".close-booking-form").on("click", function () {
			$(".overlay").removeClass("show");
			$(".booking-confirm").removeClass("show");
			$("body").removeClass("overflow-hidden");
		});
	});

	/**
	 *
	 * Plan Trip Form Starts From Here
	 *
	 */

	$(".bh-btn-plan").each(function (item) {
		$(this).on("click", function () {
			$(".plan-a-trip").addClass("show");
			$(".overlay").addClass("show");
			$("body").addClass("overflow-hidden");

			$(".close-pat-btn").on("click", function () {
				$(".plan-a-trip").removeClass("show");
				$(".overlay").removeClass("show");
				$("body").removeClass("overflow-hidden");
				$(".pat-item").first().addClass("show").siblings().removeClass("show");
			});
		});
	});

	$(".pat-destination .patd-item").on("click", function () {
		$(this).toggleClass("selected");
	});

	$(".pat-menu li a ").on("click", (e) => {
		e.preventDefault();
	});

	/* Next and Prev Handler */
	$(".pat-btn-group a").on("click", function (e) {
		e.preventDefault();

		var activateMenu = $(this).attr("href");

		$(`.pat-item${activateMenu}`)
			.addClass("show")
			.siblings()
			.removeClass("show");

		let matchedIndex = -1;
		$(".pat-menu li a").each(function (index) {
			if ($(this).attr("href") === activateMenu) {
				matchedIndex = index;
				return false;
			}
		});

		$(".pat-menu li").each(function (index) {
			if (index <= matchedIndex) {
				$(this).addClass("active");
			} else {
				$(this).removeClass("active");
			}
		});

		// Plan Trip Menu Handler
		$(function () {
			let $totalActive = $(".pat-menu li.active").length;
			let $totalItems = $(".pat-menu li").length;

			let totalParts = $totalItems - 1;
			let percentageIncrease = 100 / totalParts;

			var afterHeight = ($totalActive - 1) * percentageIncrease;

			$(".pat-menu").css("--after-height", `${afterHeight}%`);
		});
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
