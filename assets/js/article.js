$(document).ready(function() {
	$(window).scroll(function(){
		if ($(window).scrollTop() >= 60) {
			$('nav').removeClass('navbar-transparent');
			$('img.navbar-brand').attr('src','http://localhost/plantstore/assets/images/logo.png');
		}
		else {
			$('nav').addClass('navbar-transparent');
			$('img.navbar-brand').attr('src','http://localhost/plantstore/assets/images/logo-white.png');
		}
	});
});