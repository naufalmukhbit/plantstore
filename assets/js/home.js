$(document).ready(function() {
	var minSlider = document.getElementById("min-price");
	var maxSlider = document.getElementById("max-price");
	var minInfo = document.getElementById("min-price-info");
	var maxInfo = document.getElementById("max-price-info");
	minInfo.innerHTML = minSlider.value;
	maxInfo.innerHTML = maxSlider.value;

	minSlider.oninput = function() {
		minInfo.innerHTML = this.value;
		if (parseInt(maxSlider.value) < parseInt(this.value)) {
			maxSlider.value = this.value;
			maxInfo.innerHTML = maxSlider.value;
		}
	/* Hide cards below minimum price (not working yet)

	var card = document.getElementByClassName('card-item');
	var price = card.getElementByClassName('fixed-price').innerHTML;
	if (parseInt(price) < parseInt(this.value)) {
	}

	*/
	}
	maxSlider.oninput = function() {
		maxInfo.innerHTML = this.value;
		if (parseInt(minSlider.value) > parseInt(this.value)) {
			minSlider.value = this.value;
			minInfo.innerHTML = minSlider.value;
		}
	}
});
