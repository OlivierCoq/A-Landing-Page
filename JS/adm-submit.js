           function admSubmit() {
                    /*Form Inputs in Variable. Always Keep variables IN SCOPE in function*/
               var letters = /^[A-Za-z]+$/; /*Regex for letters only all the way to end of string*/
			   var emailRegex = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;/*Regex (HTML5)*/
               var first = document.getElementById('adm-first').value;
               var last = document.getElementById('adm-last').value;
			   var email = document.getElementById('adm-email').value;
               var phoneReq = document.getElementById('adm-phone').value;
               var themessage = document.getElementById('adm-message').value;

			   
               if (letters.test(first) == false) {
				  	$('#adm-vdtn-first').fadeIn(500);
                  	$('#adm-vdtn-first').addClass('invalid');
               	} else if (letters.test(last) == false) {
					$('#adm-vdtn-last').fadeIn(500);
					$('#adm-vdtn-last').addClass('invalid');
				} else if (emailRegex.test(email) == false) {
					$('#adm-vdtn-email').fadeIn(500);
                  	$('#adm-vdtn-email').addClass('invalid');
				} else if (phoneReq.length < 9) {
					$('#adm-vdtn-phone').fadeIn(500);
                  	$('#adm-vdtn-phone').addClass('invalid');
				} else if (themessage.length < 2) {
					$('#adm-vdtn-mssg').fadeIn(500);
                  	$('#adm-vdtn-mssg').addClass('invalid');
				} else {
					document.getElementById('cta-form').action = 'http://www.detoxlandingpage.com/includes/cta-process.php';
                    document.getElementById('cta-form').submit();    
				};
            };  