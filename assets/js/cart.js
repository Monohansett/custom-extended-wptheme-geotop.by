$(function () {

	const cartTable = $('tbody')

	const cart = JSON.parse(localStorage.getItem('cartItems'))



	if (cart.length > 0) {
		cart.map((cartItem, index) => {

			cartTable.append('<tr value="' + index + '">' + '<td class="product-col">' + '<img src="' + cartItem.postThumb + '">' + '<div class="pc-title">' + '<h4>' + cartItem.post_title + '</h4>' + '<p>' + (cartItem.price ? cartItem.price : 'price') + '</p>' + '</div>' + '</td>' + '<td class="quy-col">' + '<div class="quantity">' + '<div class="pro-qty">' + '<input type"text" value="1">' + '</div>' + '</div>' + '</td>' + '<td class="total-col">' + '<h4>' + (cartItem.price ? cartItem.price + ' BYN' : '-') + '</h4>' + '</td>' + '<td class="size-col">' + '<h4>' + '<i class="flaticon-garbage remove_btn">' + '</i>' + '</h4>' + '</td>')

		})
	} else {
		$('.cart-table-warp').hide();
		$('div.total-cost').hide();
		$('.contact-form').hide()
		$('.cart-table h3').append('<h4 style="margin-top:50px">' + "Ваша корзина пуста" + '</h4')

	}

	var proQty = $('.pro-qty');
	proQty.prepend('<span class="dec qtybtn">-</span>');
	proQty.append('<span class="inc qtybtn">+</span>');
	proQty.on('click', '.qtybtn', function () {
		var $button = $(this);
		var oldValue = $button.parent().find('input').val();
		if ($button.hasClass('inc')) {
			var newVal = parseFloat(oldValue) + 1;
		} else {
			// Don't allow decrementing below zero
			if (oldValue > 0) {
				var newVal = parseFloat(oldValue) - 1;
			} else {
				newVal = 0;
			}
		}
		$button.parent().find('input').val(newVal);
	});

	$('.remove_btn').on('click', function () {

		if (cart.length > 1) {
			const i = $(this).parent().parent().parent().attr('value')
			$(this).parent().parent().parent().remove()
			cart.splice(i, 1)
			localStorage.setItem('cartItems', JSON.stringify(cart))
			
		} else {
			setTimeout(() => {
				$('.cart-table-warp').hide();
				$('div.total-cost').hide();
				$('.contact-form').hide()
				$('.cart-table h3').append('<h4 style="margin-top:50px">' + "Ваша корзина пуста" + '</h4')
			}, 100)
		}
	})
});