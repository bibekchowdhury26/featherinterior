/**
 * Template Name: Day - v2.2.1
 * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
!(function ($) {
	"use strict";

	// Preloader
	$(window).on("load", function () {
		if ($("#preloader").length) {
			$("#preloader")
				.delay(100)
				.fadeOut("slow", function () {
					$(this).remove();
				});
		}
	});

	// Smooth scroll for the navigation menu and links with .scrollto classes
	var scrolltoOffset = $("#header").outerHeight() - 1;
	$(document).on(
		"click",
		".nav-menu a, .mobile-nav a, .scrollto",
		function (e) {
			if (
				location.pathname.replace(/^\//, "") ==
					this.pathname.replace(/^\//, "") &&
				location.hostname == this.hostname
			) {
				var target = $(this.hash);
				if (target.length) {
					e.preventDefault();

					var scrollto = target.offset().top - scrolltoOffset;

					if ($(this).attr("href") == "#header") {
						scrollto = 0;
					}

					$("html, body").animate(
						{
							scrollTop: scrollto,
						},
						1000,
						"easeInOutExpo"
					);

					if ($(this).parents(".nav-menu, .mobile-nav").length) {
						$(".nav-menu .active, .mobile-nav .active").removeClass("active");
						$(this).closest("li").addClass("active");
					}

					if ($("body").hasClass("mobile-nav-active")) {
						$("body").removeClass("mobile-nav-active");
						$(".mobile-nav-toggle i").toggleClass(
							"icofont-navigation-menu icofont-close"
						);
						$(".mobile-nav-overly").fadeOut();
					}
					return false;
				}
			}
		}
	);

	// Activate smooth scroll on page load with hash links in the url
	$(document).ready(function () {
		if (window.location.hash) {
			var initial_nav = window.location.hash;
			if ($(initial_nav).length) {
				var scrollto = $(initial_nav).offset().top - scrolltoOffset;
				$("html, body").animate(
					{
						scrollTop: scrollto,
					},
					1500,
					"easeInOutExpo"
				);
			}
		}
	});

	// Mobile Navigation
	if ($(".nav-menu").length) {
		var $mobile_nav = $(".nav-menu").clone().prop({
			class: "mobile-nav d-lg-none",
		});
		$("body").append($mobile_nav);
		$("body").prepend(
			'<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>'
		);
		$("body").append('<div class="mobile-nav-overly"></div>');

		$(document).on("click", ".mobile-nav-toggle", function (e) {
			$("body").toggleClass("mobile-nav-active");
			$(".mobile-nav-toggle i").toggleClass(
				"icofont-navigation-menu icofont-close"
			);
			$(".mobile-nav-overly").toggle();
		});

		$(document).on("click", ".mobile-nav .drop-down > a", function (e) {
			e.preventDefault();
			$(this).next().slideToggle(300);
			$(this).parent().toggleClass("active");
		});

		$(document).click(function (e) {
			var container = $(".mobile-nav, .mobile-nav-toggle");
			if (!container.is(e.target) && container.has(e.target).length === 0) {
				if ($("body").hasClass("mobile-nav-active")) {
					$("body").removeClass("mobile-nav-active");
					$(".mobile-nav-toggle i").toggleClass(
						"icofont-navigation-menu icofont-close"
					);
					$(".mobile-nav-overly").fadeOut();
				}
			}
		});
	} else if ($(".mobile-nav, .mobile-nav-toggle").length) {
		$(".mobile-nav, .mobile-nav-toggle").hide();
	}

	// Navigation active state on scroll
	var nav_sections = $("section");
	var main_nav = $(".nav-menu, #mobile-nav");

	$(window).on("scroll", function () {
		var cur_pos = $(this).scrollTop() + 200;

		nav_sections.each(function () {
			var top = $(this).offset().top,
				bottom = top + $(this).outerHeight();

			if (cur_pos >= top && cur_pos <= bottom) {
				if (cur_pos <= bottom) {
					main_nav.find("li").removeClass("active");
				}
				main_nav
					.find('a[href="#' + $(this).attr("id") + '"]')
					.parent("li")
					.addClass("active");
			}
			if (cur_pos < 300) {
				$(".nav-menu ul:first li:first").addClass("active");
			}
		});
	});

	// Toggle .header-scrolled class to #header when page is scrolled
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$("#header").addClass("header-scrolled");
			$("#topbar").addClass("topbar-scrolled");
		} else {
			$("#header").removeClass("header-scrolled");
			$("#topbar").removeClass("topbar-scrolled");
		}
	});

	if ($(window).scrollTop() > 100) {
		$("#header").addClass("header-scrolled");
		$("#topbar").addClass("topbar-scrolled");
	}

	// Back to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$(".btn-contact-form").fadeIn("slow");
			$(".get-consult").fadeIn("slow");
		} else {
			$(".btn-contact-form").fadeOut("slow");
			$(".get-consult").fadeOut("slow");
		}
	});

	$(".back-to-top").click(function () {
		$("html, body").animate(
			{
				scrollTop: 0,
			},
			1500,
			"easeInOutExpo"
		);
		return false;
	});

	// Porfolio isotope and filter
	$(window).on("load", function () {
		var portfolioIsotope = $(".portfolio-container").isotope({
			itemSelector: ".portfolio-item",
		});

		var i = 0;
		var arr = ["*", ".filter-app", ".filter-card", ".filter-web"];
		var initList = setInterval(function () {
			$('#portfolio-flters li[data-filter="' + arr[i] + '"]')
				.addClass("filter-active")
				.siblings()
				.removeClass("filter-active");
			portfolioIsotope.isotope({
				filter: $('#portfolio-flters li[data-filter="' + arr[i] + '"]').data(
					"filter"
				),
			});
			aos_init();
			i++;
			if (i == 4) i = 0;
		}, 5000);

		$(".portfolio-container,#portfolio-flters li")
			.mouseover(function () {
				clearInterval(initList);
			})
			.mouseout(function () {
				initList = setInterval(function () {
					$('#portfolio-flters li[data-filter="' + arr[i] + '"]')
						.addClass("filter-active")
						.siblings()
						.removeClass("filter-active");
					portfolioIsotope.isotope({
						filter: $(
							'#portfolio-flters li[data-filter="' + arr[i] + '"]'
						).data("filter"),
					});
					aos_init();
					i++;
					if (i == 4) i = 0;
				}, 5000);
			});

		$("#portfolio-flters li").on("click", function () {
			$("#portfolio-flters li").removeClass("filter-active");
			$(this).addClass("filter-active");

			portfolioIsotope.isotope({
				filter: $(this).data("filter"),
			});
			aos_init();
		});

		// Initiate venobox (lightbox feature used in portofilo)
		$(document).ready(function () {
			$(".venobox").venobox();
		});
	});

	// Portfolio details carousel
	$(".portfolio-details-carousel").owlCarousel({
		autoplay: true,
		dots: true,
		loop: true,
		items: 1,
	});

	$(".owl-carousel").owlCarousel({
		autoplay: true,
		autoplayHoverPause: true,
		items: 5,
		nav: true,
		dots: true,
		loop: true,
		responsive: {
			0: {
				items: 1,
				dots: false,
			},
			485: {
				items: 2,
				dots: false,
			},
			728: {
				items: 3,
				dots: false,
			},
			960: {
				items: 4,
				dots: false,
			},
			1200: {
				items: 5,
				dots: false,
			},
		},
	});

	// Init AOS
	function aos_init() {
		AOS.init({
			duration: 1000,
			easing: "ease-in-out",
			once: true,
		});
	}
	$(window).on("load", function () {
		aos_init();
	});
	var flavoursContainer = document.getElementsByClassName(
		"auto-scroll-horizontal"
	);
	var flavoursScrollWidth = flavoursContainer.scrollWidth;
	// <?php echo 'ho ho'; ?>
	console.log(flavoursContainer);
	window.addEventListener("load", () => {
		self.setInterval(() => {
			if (flavoursContainer.scrollLeft !== flavoursScrollWidth) {
				// flavoursContainer.scroll(flavoursContainer.scrollLeft +1, 0);
				// flavoursContainer.scrollLeft = 20;
				//       	//make the div slides instead of jumping to the destination
				// flavoursContainer.css( "transform 0.3s ease")	 ;
				// //will slide 30px to the right, can be negative (-100px), percentage (100%)
				// flavoursContainer.css("translateX(30px)");
			}
		}, 15);
	});
})(jQuery);
