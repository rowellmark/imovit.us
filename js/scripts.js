(function ($, w, d, h, b) {
	$(document).ready(function () {

		/**
		 * Construct.
		 */
		__construct = () => {
			initNavigation();
			onScrollFixed();
			expandedMenu();

			/// specific for homepage
			if ($(b).hasClass('home')) {
				featuredProperties();
				testiMonials();
			}

			AOS.init({ disable: 'mobile' });
		}

		initNavigation = () => {
			const $nav = $('#nav');
			if ($nav.length > 0) $nav.navTabDoubleTap();
		}
		onScrollFixed = () => {

			this.onScrollFixed = () => {
				const $header = $('.header');

				$(w).on('load scroll', function () {
					let currentScroll = w.pageYOffset || d.documentElement.scrollTop;
					let isDesktop = w.matchMedia('(min-width: 992px)').matches;

					if (isDesktop) {
						if (currentScroll > 0) {
							$header.addClass('header-float');
						}
						else {
							$header.removeClass('header-float');
						}
					}
					else {
						$header.removeClass('header-float');
					}

				});
			}
			this.onScrollFixed();
		}
		expandedMenu = () => {

			const $expandedContainer = $('.expanded-menu-wrap');
			const $expandedButton = $('.expanded-menu-button');
			const $burgerBody = $('.expanded-menu');
			const $expandeClose = $('.expanded-close');

			$(window).on("load", function () {
				$burgerBody.mCustomScrollbar();
			});


			/// open
			$expandedButton.on('click', function () {
				$expandedContainer.addClass('expandedShow');
				$(b).addClass('expandedShow');
			});


			//close
			$expandeClose.on('click', function () {
				$expandedContainer.removeClass('expandedShow');
				$(b).removeClass('expandedShow');
			});

		}
		featuredProperties = () => {

			let fnProperties = new Splide('.fp-lists', {
				type: 'loop',
				perPage: 3,
				perMove: 1,
				pagination: false,
				arrows: false,
				interval: 8000,
				autoplay: true,
				breakpoints: {
					991 : {
						perPage: 1
					},
					
				},
				
			});

			fnProperties.mount();

			$arrowButtons = $('.fp-pagination button');

			$arrowButtons.on('click', function (e) {

				e.preventDefault();
				let $this = jQuery(this);
				let type = $this.attr('data-arrow');

				console.log(type);
				// for prev
				if (type == 'prev') {
					fnProperties.go('<');
				}
				if (type == 'next') {
					fnProperties.go('>');
				}

			});

		}

		testiMonials = () => { 

			let testimonails = new Splide('.testi-lists', {
				type: 'loop',
				perPage: 1,
				perMove: 1,
				pagination: false,
				interval: 8000,
				autoplay: true,

			});

			testimonails.mount();
		}


		/**
		 * Instantiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');
	});

})(jQuery, window, document, 'html', 'body');