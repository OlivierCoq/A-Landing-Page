<section class="modal fade" id="FDT" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        
            <div class="col-xs-12">
                <div class="fdt-form-box">

                    <form class="form-horizontal" id='fdtFormM' method="POST">
                            <div class="row">
                                <div class="col-xs-10">
                                     <legend><h3 class="RLC-h3-darkNavy center"><strong>Get Your Free Drug Testing Kit Today.</strong></h3></legend>
                                </div>
                                <div class="col-xs-2">
                                    <a data-dismiss="modal"><p style="font-size: 25px;"><strong>&times;</strong></p></a>
                                </div>
                            </div>
                 <!--           <input id='antispam' type="text" name="firstname">-->
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <label for='fdtFirstM'>Name&nbsp;&nbsp;</label>
                                    </div>
                                    <div class="col-xs-3">
                                        <input class="form-control input-sm" type="text" name='fdtFirstM' id='fdtFirstM' placeholder="First" required>
                                    </div>
                                    <div class="col-xs-2">
                                        <label for='fdtLastM'></label>
                                    </div>
                                    <div class="col-xs-3">
                                        <input class="form-control input-sm" type="text" name='fdtLastM' id='fdtLastM' placeholder="Last" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <label for='fdtPhoneM'>Phone</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input class="form-control input-sm" type="text" name='fdtPhoneM' id='fdtPhoneM' required>
                                    </div>
                                </div>
                            </div>
                            <legend><h4 class="RLC-h4-darkNavy center">Your Address</h4></legend>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <label for='line1M'>Line 1</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input class="form-control input-sm" type="text" name='line1M' id='line1M' required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <label for='line2M'>Line 2</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input class="form-control input-sm" type="text" name='line2M' id='line2M' placeholder="*Optional">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-2">
                                        <label for='cityM'>&nbsp;&nbsp;&nbsp;City</label>
                                    </div>
                                    <div class="col-xs-8">
                                        <input class="form-control input-sm" type="text" name='cityM' id='cityM' required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">    
                                    <div class="col-xs-2">
                                           <label for='stateM'>&nbsp;&nbsp;State*</label>
                                    </div>
                                    <div class="col-xs-3">
                                        <fieldset>
                                            <select style="width: 50px; height: 29px; width: 100px; margin-top: 1px;" id='stateM' name='stateM'><option value="---">---</option><option value="Alabama">Alabama</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option>
                                            </select>
                                        </fieldset>    
                                    </div><!--/stateM-->
                                    <div class="col-xs-2">
                                        <label for='zip'></label>
                                    </div>
                                    <div class="col-xs-3">
                                        <input class="form-control input-sm" type="text" name='zipM' id='zipM' placeholder="ZIP" required>
                                    </div>
                                </div>
                            </div>

                        <!--Submit and Reset-->
                       <div class="row">
                          <div class="">
                              <p>*A Drug Detox Center currently only ships to continental states.</p>
                              <input class="btn fdt-button-modal" type="button" value="Get My Free Drug Test Kit Today" onclick="return fdtSubmitM();">
                              <!--Current Page URL--> <!--This works as a dynamic URL input, following each page prior to submission.-->
                          <input type="url" name="currentPageURL" id="currentPageURL" value="<?php echo "http://",$_SERVER["SERVER_NAME"].$_SERVER["ORIG_PATH_INFO"];?>" readonly style="visibility:hidden;">
                          </div>
                       </div>


                                <!--Admissions Validation Script-->
                       <script type="text/javascript">     



                           function fdtSubmitM() {
                                    /*Form Inputs in Variable. Always Keep variables IN SCOPE in function*/
                               var lettersM = /^[A-Za-z]+$/; /*Regex for letters only all the way to end of string*/
                               var firstM = document.getElementById('fdtFirstM').value;
                               var lastM = document.getElementById('fdtLastM').value;
                               var honM = document.getElementById('antispam');
                               var phoneReqM = document.getElementById('fdtPhoneM').value;


                               if ( lettersM.test(firstM.value) == true && 
                                    lettersM.test(lastM.value) == true && 
                                    phoneReqM.length > 9 

                                  ) {

                                        document.getElementById('fdtFormM').action = 'http://www.detoxlandingpage.com/includes/fdt-process-mobile.php';
                                        document.getElementById('fdtFormM').submit();       
                                } else {
                                   alert("Please enter contact information and full address before submitting. Thank you.");
                                   return false;
                               };
                            };
                       </script>                           

                    </form><!--/form-->       
                    
                </div><!--Box-->
            </div>  <!--col-12-->  
        </div>
    </div>
</section>