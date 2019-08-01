$(document).ready(function() {
	if ($("body").height() > $(window).height()) {
		$(window).scroll(function(){
			if ($(window).scrollTop() >= 60) {
				$('nav').addClass('navbar-shadow');
			}
			else {
				$('nav').removeClass('navbar-shadow');
			}
		});
	} else {
		$('nav').addClass('navbar-shadow');
	}
});