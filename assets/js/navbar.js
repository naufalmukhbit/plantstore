$(document).ready(function() {
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 60) {
			$('nav').addClass('navbar-shadow');
		}
		else {
			$('nav').removeClass('navbar-shadow');
		}
	});
});
