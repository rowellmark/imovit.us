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

		/**
		 * Instantiate
		 */
		__construct();

	});

	$(window).on('load', function () {
		$('body').addClass('site-loaded');
	});

})(jQuery, window, document, 'html', 'body');