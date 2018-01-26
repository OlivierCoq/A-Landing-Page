$(document).ready(function() {
 $(window).scroll(function(){
	 if ($(window).scrollTop() > 30 ) {
		$('#royal').addClass('royal-logo-scroll');
	} else {
		$('#royal').removeClass('royal-logo-scroll');
	};
	 
	 if ($(window).scrollTop() > 30 ) {
		$('#nav-section').fadeOut(600);
	 } else {
		 $('#nav-section').fadeIn(600);
	 }
	 
	 if ($(window).scrollTop() > 30 ) {
		$('#nav-title').fadeIn(600);
		$('#nav-title').addClass('nav-title');
	 } else {
		 $('#nav-title').fadeOut(600);
		 $('#nav-title').removeClass('nav-title');
	 }
 }); 
});
 