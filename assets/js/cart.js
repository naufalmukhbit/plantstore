$(document).ready(function() {
	var totalProduct  = parseInt($('#item-table tr').length)-1;
	document.getElementById('cart-badge').innerHTML = totalProduct;
	$('.remove-product').click(function() {
		$(this).parent().parent().parent().remove();
		totalProduct = parseInt($('#item-table tr').length)-1;
		document.getElementById('cart-badge').innerHTML = totalProduct;
	});
	$('.product').each(function() {
		var productPrice = $(this).find('.product-price').text();
		var amount = $(this).find('.numOfProduct').val();
		var totalPrice = parseInt(productPrice)*parseInt(amount);
		$(this).find('.product-line-price').text(totalPrice);
	});

	function countSub() {
		$('.product').each(function() {
			var totalPrice = $(this).find('.product-line-price').text();
			var subPrice = (parseInt($('#cart-subtotal').text()) || 0) + parseInt(totalPrice);
			$('#cart-subtotal').text(subPrice);
		});	
	}
	function resetSub() {
		$('#cart-subtotal').text('');
	}
	function countGrand() {
		var subPrice = $('#cart-subtotal').text();
		var shipPrice = $('#cart-shipping').text();
		$('#cart-total').text(parseInt(subPrice) + parseInt(shipPrice));
	}
	countSub();
	countGrand();
	$('.numOfProduct').change(function() {
		var productPrice = $(this).parent().parent().parent().find('.product-price').text();
		var amount = $(this).parent().parent().parent().find('.numOfProduct').val();
		var totalPrice = parseInt(productPrice)*parseInt(amount);
		$(this).parent().parent().parent().find('.product-line-price').text(totalPrice);
		resetSub();
		countSub();
		countGrand();
	});
});