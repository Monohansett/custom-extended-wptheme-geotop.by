'use strict';


// $(window).on('load', function() {

// 	------------------
// 		Preloader
// 	--------------------
// 	$(".loader").fadeOut();
// 	$("#preloder").delay(400).fadeOut("slow");

// });

(function ($) {

	// Init cart storage

	cartItemsInit()

	/*------------------
		Navigation
	--------------------*/
	$('.main-menu').slicknav({
		prependTo: '.main-navbar',
		closedSymbol: '<i class="flaticon-right-arrow"></i>',
		openedSymbol: '<i class="flaticon-down-arrow"></i>'
	});

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function () {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});



	/*------------------
		Hero Slider
	--------------------*/
	var hero_s = $(".hero-slider");
	hero_s.owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		items: 1,
		dots: true,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		navText: ['<i class="flaticon-left-arrow-1"></i>', '<i class="flaticon-right-arrow-1"></i>'],
		smartSpeed: 1200,
		autoHeight: false,
		autoplay: false,
		onInitialized: function () {
			var a = this.items().length;
			$("#snh-1").html("<span>1</span><span>" + a + "</span>");
		}
	}).on("changed.owl.carousel", function (a) {
		var b = --a.item.index, a = a.item.count;
		$("#snh-1").html("<span> " + (1 > b ? b + a : b > a ? b - a : b) + "</span><span>" + a + "</span>");

	});

	hero_s.append('<div class="slider-nav-warp"><div class="slider-nav"></div></div>');
	$(".hero-slider .owl-nav, .hero-slider .owl-dots").appendTo('.slider-nav');

	/*------------------
		Accordions
	--------------------*/
	$('.panel-link').on('click', function (e) {
		$('.panel-link').removeClass('active');
		var $this = $(this);
		if (!$this.hasClass('active')) {
			$this.addClass('active');
		}
		e.preventDefault();
	});

	/*------------------
		Single Product
	--------------------*/
	$('.product-thumbs-track > .pt').on('click', function () {
		$('.product-thumbs-track .pt').removeClass('active');
		$(this).addClass('active');
		var imgurl = $(this).data('imgbigurl');
		var bigImg = $('.product-big-img').attr('src');
		if (imgurl != bigImg) {
			$('.product-big-img').attr({ src: imgurl });
			$('.zoomImg').attr({ src: imgurl });
		}
	});


	$('.product-pic-zoom').zoom();

	$('.add-to-cart_btn').on('click', addToCart)

	$('.to-cart_btn').on('click', goToCartPage)

	$('.to-catalog_btn').on('click', goToCatalogPage)

	function goToCartPage() {
		window.location.href = "/cart";
	}

	function goToCatalogPage() {
		window.location.href = "/catalog";
	}


	function addToCart() {

		const posts = JSON.parse(localStorage.getItem('cartItems'))
		posts.push(postObject);
		localStorage.setItem('cartItems', JSON.stringify(posts));

		$('.go-to-cart_block span').text(posts.length)

		$(this).hide()
		$('.panel-header').first().notify(
			'Товар добавлен в корзину',
			{ position: 'top center', className: "info", gap: 10, arrowShow: false, showDuration: 200, autoHideDelay: 3000 }
		)

		$('.checkout__block').css('display', 'inline');
		$('.checkout__block').show('slow')

	}


	function cartItemsInit() {
		if (localStorage.getItem('cartItems')) {
			const cart = JSON.parse(localStorage.getItem('cartItems'))
			$('.go-to-cart_block span').text(cart.length)
		}
		else {

			$('.go-to-cart_block span').text('0')
			const cartItems = [];

			localStorage.setItem('cartItems', JSON.stringify(cartItems))
		}

	}


})(jQuery);
