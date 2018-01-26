           function ctaSubmit() {
                    /*Form Inputs in Variable. Always Keep variables IN SCOPE in function*/
               var letters = /^[A-Za-z]+$/; /*Regex for letters only all the way to end of string*/
			   var emailRegex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;/*Regex (HTML5)*/
               var first = document.getElementById('cta-first').value;
               var last = document.getElementById('cta-last').value;
			   var email = document.getElementById('cta-email').value;
               var phoneReq = document.getElementById('cta-phone').value;
               var themessage = document.getElementById('cta-message').value;

			   if (letters.test(first) == false) {
				  	$('#cta-vdtn-first').fadeIn(500);
                  	$('#cta-vdtn-first').addClass('invalid');
               	} else if (letters.test(last) == false) {
					$('#cta-vdtn-last').fadeIn(500);
					$('#cta-vdtn-last').addClass('invalid');
				} else if (emailRegex.test(email) == false) {
					$('#cta-vdtn-email').fadeIn(500);
                  	$('#cta-vdtn-email').addClass('invalid');
				} else if (phoneReq.length < 9) {
					$('#cta-vdtn-phone').fadeIn(500);
                  	$('#cta-vdtn-phone').addClass('invalid');
				} else if (themessage.length < 2) {
					$('#cta-vdtn-mssg').fadeIn(500);
                  	$('#cta-vdtn-mssg').addClass('invalid');
				} else {
					document.getElementById('cta-form').action = 'http://www.detoxlandingpage.com/includes/cta-process.php';
                    document.getElementById('cta-form').submit();   
				}; 
            };