$(document).ready(function() {
 $(window).scroll(function(){
	 if ($(window).scrollTop() > 300 ) {
		$('#cta-nav-dr-phil').addClass('dr-phil-img');
	} else {
		$('#cta-nav-dr-phil').removeClass('dr-phil-img');
	}
 }); 
});
 