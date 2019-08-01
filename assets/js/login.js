$(document).ready(function() {
	$.getJSON('data.json', function(user) {
		console.log(user);
		$('#email-user').html('<p> username: ' + user.username + '</p>');
		$('#password-user').append('<p> password: ' + user.password+ '</p>');
	});
});