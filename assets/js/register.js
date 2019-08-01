$(document).ready(function() {
	var checked = $('#agreement');
	checked.change(function () {
		$('#signupButton').prop('disabled', checked.filter(':checked').length < 1);
	});
	checked.change();
});