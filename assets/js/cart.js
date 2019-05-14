$(function () {

	// on load check and display cart items

	const cartTable = $('tbody')
	const cart = JSON.parse(localStorage.getItem('cartItems'))



	if (cart.length > 0) {
		cart.map((cartItem, index) => {
			cartTable.append('<tr class="cart-row" value="' + index + '">' + '<td class="product-col">' + '<img src="' + cartItem.postThumb + '">' + '<div class="pc-title">' + '<h4>' + cartItem.post_title + '</h4>' + '</div>' + '</td>' + '<td class="quy-col">' + '<div class="quantity">' + '<div class="pro-qty">' + '<input type="number" value="1">' + '</div>' + '</div>' + '</td>' + '<td class="total-col">' + '<h4>' + (cartItem.price ? cartItem.price : '-') + '</h4>' + '<span>' + ' BYN' + '</span>' + '</td>' + '<td class="size-col">' + '<h4>' + '<i class="flaticon-garbage remove_btn">' + '</i>' + '</h4>' + '</td>')

		})
		sumTotalPrice()
	} else {
		$('.cart-table-warp').hide();
		$('div.total-cost').hide();
		$('#wpcf7-f766-o1').hide()
		$('.cart-table h3').append('<h4 style="margin-top:50px">' + "Ваша корзина пуста" + '</h4')

	}

	// Delete cart item

	$('.remove_btn').on('click', removeCartItem)

	function removeCartItem() {
		const i = $(this).parent().parent().parent().attr('value')
		$(this).parent().parent().parent().remove()
		cart.splice(i, 1)
		localStorage.setItem('cartItems', JSON.stringify(cart))

		updateTotalPrice()

		if (cart.length === 0) {
			updateCart()
		}
	}

	// clean html if cart array.length < 0

	function updateCart() {

		setTimeout(() => {
			$('.cart-table-warp').hide();
			$('div.total-cost').hide();
			$('#wpcf7-f766-o1').hide()
			$('.cart-table h3').append('<h4 style="margin-top:50px">' + "Ваша корзина пуста" + '</h4')
		}, 100)

	}

	//updating total price

	function updateTotalPrice() {
		const cartItemContainer = $('.cart-table-warp table tbody')

		const cartRows = $(cartItemContainer).children()
		let totalPrice = 0;


		for (let i = 0; i < cartRows.length; i++) {
			const cartRow = cartRows[i];
			const priceElement = $(cartRow).find('.total-col h4')[0]
			const quantityElement = $(cartRow).find('.pro-qty input')[0]
			const price = parseFloat(priceElement.innerText)
			const quantity = quantityElement.value

			totalPrice += (price * quantity)
		}

		$('.total-cost span').text(totalPrice + ' BYN')
	}

	// change price by quantity

	$('.pro-qty input').on('change', updateTotalPrice);

	// sum total cost after loading page

	function sumTotalPrice() {
		var totalSumPrice = 0;
		$('.total-col h4').each(function () {
			var priceVal = $(this).text()
			totalSumPrice += parseFloat(priceVal)
		})

		$('.total-cost span').text(totalSumPrice + ' BYN')
	}

});