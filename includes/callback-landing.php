<!--Call-Back-Modal-->
<section class="modal fade" id="SAC">
    <div class="modal-dialog" role="document">
        <div class="modal-content callBackBG">
            
            
            <div class="modal-header">
                <div class="row">
                    <div class="col-xs-11">
                        <h2 class="center RLC-h1-black"><strong>Build A New Life Today.</strong></h2>
                    </div>
                    <div class="col-xs-1">
                        <a data-dismiss="modal" style="color: black"><p style="font-size: 30px;"><strong>&times;</strong></p></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-10">        
                        <p class="modalMessage"><strong>You've made the right choice. Please leave your name and phone number below to schedule a call with a caring addiction specialist. Your personal information will never be shared, and all information is confidential.</strong></p>
                    </div>
                </div>
            </div>        
        
       
	<div style="margin-left: 15%; margin-right: 15%; margin-top: 5%;">
        <form class="form-horizontal" method="POST" id="callback-form"> 
			
			<div class="form-group">
				<div class="row">							
					<div class="col-xs-6">
						<input type="text" class="form-control" id="cb-name" name="cb-name" placeholder="First and Last Name">
					</div>
					<div class="col-xs-6">
						<input type="text" class="form-control" id="phoneCB" name="cb-phone" placeholder="Phone Number">
					</div>
				</div>
			</div>
                    
            <div class="form-group">
				<div class="row">							
					<div class="col-xs-12">
						<input class="btn admSubmit" type="button" id="cb-submit" name="cb-submit" value='Schedule a Call' style="width:100%;" onClick="return cbSubmit();">
					</div>
				</div>
			</div> 
			
            <div class="form-group">
                <div class="row">
                    <br>
                    <div class="col-xs-4">
                        
                    </div>
                </div>
        <!--URL Location at time of submit-->
             <input type="url" name="currentURL" id="currentURL" value="<?php echo 'http://',$_SERVER['SERVER_NAME'].$_SERVER['ORIG_PATH_INFO'];?>" readonly style="display:none;">   
		<!--Referring Page URL--> <!--This works as a dynamic URL input, following each page prior to submission.-->
           	<input type="url" name="referringPageURL" id="referringPageURL" value="<?php echo "http://",$_SERVER["SERVER_NAME"].$_SERVER["HTTP_REFERER"];?>" readonly style="visibility:hidden;">
        <!--Date and Time Submitted-->
          	<input type="text" name="dateTime" id="dateTime" value="<?php date_default_timezone_set("America/New_York"); $today = date("Y-m-d H:i:s"); echo $today;?>" readonly style="visibility:hidden;">
		<!--Form Type(To diffirentiate from regular form)--> 
            <input type="text" name="formType" id="formType" value="callbackForm" readonly style="display:none;">    
        <!--Google Click-ID-->
			<input type="text" name="google-ID" id="google-ID" value="<?php echo $query['gclid']; ?>" style="visibility:hidden;" readonly>                           
				
				<!--Submission Script-->    
            <script type="text/javascript">
                
                
                function cbSubmit() {
                    
                    var letters = /^[A-Za-z]*$/; /*Regex for letters only all the way to end of string (Spaces between first and last ok)*/                    
                    var cbName = document.getElementById("cb-name").value;
                    var cbPhone =document.getElementById("phoneCB").value;
                    
                    if ( letters.test(cbName.value) == true && cbPhone.length == 12) {
                        
                        document.getElementById("callback-form").action = "http://www.detoxlandingpage.com/includes/process.php";
                        document.getElementById("callback-form").submit();   
                        
                    } else {
                        alert("Please enter your first name, last name, and phone number. Thank you.");
                        return false;
                    };       
                };
                </script>    
                
            </div>    
                <noscript>
                    <p>JavaScript is Disabled. Please fill out all form fields. If possible, please enable JavaScript. Thank you!</p>
                </noscript>                 
            </form>
			</div><!--Block-->
        </div>
    </div>
</section>