<section class="modal fade" id="GHN">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-bg-darkNavy">
            
            
            <div class="modal-header">
                <div class="row ghn-head">
                    
                    <div class="row">
                        <div class="col-xs-10">
                            <div class="inner-center-block">
								<h3 class="white center"><strong>There Is Hope.</strong></h3>
							</div>
                        </div>
                        <div class="col-xs-2">
                            <a data-dismiss="modal" style="color: white;"><p style="font-size: 30px;"><strong>&times;</strong></p></a>
                        </div>
                    </div>            
                    <div class="col-xs-10">
                    
                        <h4 class="RLC-h4-black modalMessage" style="color: white !important;">You've made the right choice. Please complete the form below to contact a caring addiction specialist. Your personal information will <strong>never</strong> be shared, and all information is <strong>confidential.</strong></h4>
                    </div>
                    <div class="col-xs-2"><a class="close" data-dismiss='modal'><p class="close"><strong>&times;</strong></p></a></div>
                </div>
            </div>
            
<div style="margin-left: 15%; margin-right: 15%; margin-top: 5%;">			
<META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>

<form class="form-horizontal" id="admForm" method="POST">
							
							<div class="form-group">
								<div class="row">							
									<div class="col-xs-6">
										<input type="text" class="form-control" id="adm-first" name="adm-first" placeholder="First Name">
										<p id="adm-vdtn-first" style="display: none;">Please enter your first name (no spaces or symbols).</p>
									</div>
									<div class="col-xs-6">
										<input type="text" class="form-control" id="adm-last" name="adm-last" placeholder="Last Name">
										<p id="adm-vdtn-last" style="display: none;">Please enter your last name (no spaces or symbols).</p>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6">
										<input type="email" class="form-control" id="adm-email" name="adm-email" placeholder="Email. (Ex, youremail@domain.com) ">
										<p id="adm-vdtn-email" style="display: none;">Your email is missing an "@." Please enter your email in the proper email@domain format.</p>
									</div>
									<div class="col-xs-6">
										<input type="tel" class="form-control" id="adm-phone" name="adm-phone" placeholder="Phone Number">
										<p id="adm-vdtn-phone" style="display: none;">Please enter a valid phone number.</p>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12">
										<textarea class="form-control" rows="8" name='adm-message' id='adm-message' placeholder="How can we help you? Your message is confidential." required></textarea>
										<p id="adm-vdtn-mssg" style="display: none;">Please enter a full message. Thank you.</p>
									</div>
								</div>
							</div>
	<!--Facility-->
          	<input type="text" style="visibility:hidden" name="adm-facility" value="Detox For Alcoholism (National/General Landing Page)">
							
							<div class="form-group">
								<div class="row">
            						<!--Submit and Reset-->
										<div class="col-xs-11" align="center">
              								<input class="fdt-button-modal" align="center" type="button" value="Reach Out Today" onclick="return admSubmit();">
            							</div>
        						</div>		
							</div>	
							
							<!--Tracking and state Data-->
        
        <!--Current Page URL--> <!--This works as a dynamic URL input, following each page prior to submission.-->
          	<input type="url" name="currentPageURL" id="currentPageURL" value="<?php echo 'http://',$_SERVER['SERVER_NAME'].$_SERVER['ORIG_PATH_INFO'];?>" readonly style="visibility:hidden;">
		<!--Referring Page URL--> <!--This works as a dynamic URL input, following each page prior to submission.-->
           	<input type="url" name="referringPageURL" id="referringPageURL" value="<?php echo "http://",$_SERVER["SERVER_NAME"].$_SERVER["HTTP_REFERER"];?>" readonly style="visibility:hidden;">
		<!--Google Click-ID-->
			<input type="text" name="google-ID" id="google-ID" value="<?php echo $query['gclid']; ?>" style="visibility:hidden;" readonly>
        <!--Date and Time Submitted-->
          	<input type="text" name="dateTime" id="dateTime" value="<?php date_default_timezone_set("America/New_York"); $today = date("Y-m-d H:i:s"); echo $today;?>" readonly style="visibility:hidden;">
        <!--Form Type (To diffirentiate from Callback form)--> 
          	<input type="text" name="formType" id="formType" value="contactForm" readonly style="display:none;">
						
							
							<!--Admissions Validation Script-->
       <script type="text/javascript" src="/JS/adm-submit.min.js"></script>              							
</form>
    </META><!--Meta-->
		</div><!--Block-->                 
                
            
        </div><!--Modal Content-->
    </div><!--Modal Dialog-->
</section><!--#GHN-->