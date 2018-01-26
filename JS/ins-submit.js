		function insSubmit() { 
                    /*Form Inputs in Variable. Always Keep variables IN SCOPE in function*/
               var lettersINS = /^[A-Za-z]+$/; /*Regex for letters only all the way to end of string*/
               var firstINS = document.getElementById('insFirst').value;
               var lastINS = document.getElementById('insLast').value;
               var phoneReqINS = document.getElementById('insPhone').value;
               var dob = document.getElementById('insDOB').value;
			   
			   var line1 = document.getElementById('insLine1').value;
			   var city = document.getElementById('insCity').value;
			   var zipCode = document.getElementById('insZIP').value;
			   
               var insCompany = document.getElementById('insCompany').value;
               
               
                          if (lettersINS.test(firstINS) == false) {
							  	alert('Please enter your first name.');
				  				$('#ins-vdtn-first').fadeIn(800);
                  				$('#ins-vdtn-first').addClass('invalid');
							  
							  	$("body, html").animate({ 
            						scrollTop: $('#err-1').offset().top 
								}, 1000);
							  	
               				} else if(firstINS.length < 2) {
								alert('Please enter your first name.');
							  	
							  	$('#ins-vdtn-first').fadeIn(800);
                  				$('#ins-vdtn-first').addClass('invalid');
								$("body, html").animate({ 
            						scrollTop: $('#err-1').offset().top 
								}, 1000);
							} else if (lettersINS.test(lastINS) == false) {
							  	alert('Please enter your last name.');
				  				$('#ins-vdtn-last').fadeIn(800);
                  				$('#ins-vdtn-last').addClass('invalid');
							  
							  	$("body, html").animate({ 
            						scrollTop: $('#err-2').offset().top 
								}, 1000);
							  	
               				} else if(lastINS.length < 2) {
								alert('Please enter your last name.');
							  	
							  	$('#ins-vdtn-last').fadeIn(800);
                  				$('#ins-vdtn-last').addClass('invalid');
								$("body, html").animate({ 
            						scrollTop: $('#err-2').offset().top 
								}, 1000);
							} else if (phoneReqINS.length < 2 ) {
								$('#ins-vdtn-phone').fadeIn(800);
								$('#ins-vdtn-phone').addClass('invalid');
								alert('Please enter a valid Phone Number.');
								$("body, html").animate({ 
            						scrollTop: $('#err-3').offset().top 
								}, 1000);
							} else if (dob.length < 2 ) {
								$('#ins-vdtn-dob').fadeIn(800);
								$('#ins-vdtn-dob').addClass('invalid');
								alert('Please enter a valid Date of Birth.');
								$("body, html").animate({ 
            						scrollTop: $('#err-4').offset().top 
								}, 1000);
							} else if (line1.length < 2 ) {
								$('#ins-vdtn-line1').fadeIn(800);
								$('#ins-vdtn-line1').addClass('invalid');
								alert('Line 1 of your address is required.');
								$("body, html").animate({ 
            						scrollTop: $('#err-10').offset().top 
								}, 1000);
							} else if (city.length < 2 ) {
								$('#ins-vdtn-city').fadeIn(800);
								$('#ins-vdtn-city').addClass('invalid');
								alert('Your City name is required.');
								$("body, html").animate({ 
            						scrollTop: $('#err-14').offset().top 
								}, 1000);
							} else if (zipCode.length < 2 ) {
								$('#ins-vdtn-zip').fadeIn(800);
								$('#ins-vdtn-zip').addClass('invalid');
								alert('Your Zip code is required.');
								$("body, html").animate({ 
            						scrollTop: $('#err-14').offset().top 
								}, 1000);
							} else if (insCompany.length < 2 ) {
								$('#ins-vdtn-company').fadeIn(800);
								$('#ins-vdtn-company').addClass('invalid');
								alert('Please enter your Insurance Company Name.');
							} else {
								document.getElementById('insForm').action = 'http://www.detoxlandingpage.com/includes/ins-process-PDO.php';
								
								document.getElementById('insForm').submit();
								$('#ins-submit-button').disabled = true;
								$('#ins-submit-button').value = "Submitting. Please Wait."
							};
						};