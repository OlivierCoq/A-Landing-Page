<?php   
    if(isset($_POST) && !empty($_POST)){
     
            if( 
                isset($_POST['insFirst'], $_POST['insLast']) &&
                strlen($_POST['insFirst']) > 1 && strlen($_POST['insLast']) > 1 &&
				preg_match('/^[a-zA-Z\s]+$/', $_POST['insFirst']) &&
				preg_match('/^[a-zA-Z\s]+$/', $_POST['insLast']) &&
				preg_match('/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD', $_POST['insEmail']) &&
                preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST['insPhone']) &&
                filter_var($_POST['currentPageURL'], FILTER_VALIDATE_URL) !== false &&
                strpos($_POST['currentPageURL'], 'detoxlandingpage.com') !== false
            ) {
                    /*Patient Information*/    
            $insFirst =  $_POST['insFirst'];
            $insLast  = $_POST['insLast'];
            $insEmail = $_POST['insEmail'];
            $insPhone = $_POST['insPhone']; 
            $insLine1 = $_POST['insLine1'];
            $insLine2 = $_POST['insLine2'];
            $insCity  = $_POST['insCity'];
            $insState = $_POST['insState'];
            $insZIP   = $_POST['insZIP'];
			$insDOB	  = $_POST['insDOB'];	
			$insSSN	  = $_POST['insSSN'];
				
                	/*Policy Holder Information (If Applicable) */
				
			$insPH = $_POST['insPH']; 	/*Checked if Policy Holder*/
				
            $insFirstPH =  $_POST['insFirstPH'];      
            $insLastPH  = $_POST['insLastPH'];
            $insEmailPH = $_POST['insEmailPH'];
            $insPhonePH = $_POST['insPhonePH'];
			$insLine1PH = $_POST['insLine1PH'];
            $insLine2PH = $_POST['insLine2PH'];
            $insCityPH  = $_POST['insCityPH'];
            $insStatePH = $_POST['insStatePH'];
            $insZIPPH 	= $_POST['insZIPPH'];
			$insDOBPH	= $_POST['insDOBPH'];	
			$insSSNPH	= $_POST['insSSNPH'];	
				
					/*Policy Information*/	

			$insCompany = $_POST['insCompany'];
			$insCompanyTel = $_POST['insCompanyTel'];	 
            $insPolNum = $_POST['insPolNum'];
			$insGroupID = $_POST['insGroupID'];
			$insPlanType = $_POST['insPlanType'];	
				
					/*Tracking*/
            $insFacility = $_POST['insFacility'];
            $currentPageURL = $_POST['currentPageURL'];
			$referringPageURL = $_POST['referringPageURL'];	
			$googleID = $_POST['google-ID'];	
            $dateAdded = $_POST['dateTime'];
            $formType = $_POST['formType']; 
                
                
                	/*Additional Comments*/
            $insComments = $_POST['insComments'];    
                
				
				
					/*Connect to MySQL DB*/
            $hostname = '123.45.678.90';
            $username = 'username';
            $thepassword = 'password';
            $dbname = 'oliviercoq.online_contact'; 
				
            try {	
				
            $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $thepassword); 
				
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
            $sql = "INSERT INTO insuranceVerification (insFirst, insLast, insDOB, insSSN, insEmail, insPhone, insLine1, insLine2, insCity, insState, insZIP, insPH, insFirstPH, insLastPH, insDOBPH, insSSNPH, insEmailPH, insPhonePH, insLine1PH, insLine2PH, insCityPH, insStatePH, insZIPPH, insCompany, insCompanyTel, insPolNum, insGroupID, insPlanType, insComments, insFacility, currentPageURL, referringPageURL, googleID, dateAdded, formType) VALUES ('" . $insFirst . "','" . $insLast . "','" . $insDOB . "','" . $insSSN . "','" . $insEmail . "','" . $insPhone . "','" . $insLine1 . "','" . $insLine2 . "','" . $insCity . "','" . $insState . "','" . $insZIP . "','" . $insPH . "','"  . $insFirstPH . "','" . $insLastPH . "','" . $insDOBPH . "','" . $insSSNPH . "','"  . $insEmailPH . "','" . $insPhonePH . "','" . $insLine1PH . "','" . $insLine2PH . "','" . $insCityPH . "','" . $insStatePH . "','" . $insinsZIPPH . "','" . $insCompany . "','" . $insCompanyTel . "','" . $insPolNum . "','" . $insGroupID . "','" . $insPlanType . "','" . $insComments . "','" . $insFacility . "','" . $currentPageURL . "','" . $referringPageURL . "','" . $googleID . "','" . $dateAdded . "','" . $formType . "');";

         			/*Execute the SQL insertion*/
			$conn->exec($sql);	
				
			}
			
			catch(PDOException $e) {
				echo $sql . "<br>" . $e->getMessage();
			}
		
			$conn = null;
				
				
            $to = "contact@oliviercoq.online.com"; /*contact or oliverc*/
				
            $subject = "Insurance Verification Form";
            $headers = "From: detox-from-heroin (National/Landing Page) \r\n"; 
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";    
            $headers .= "BCC: formverification@oliviercoq.online.com";   
				
            $message = '<html><body>';
            $message .= '<table rules="all" style="border: 1px solid #fdfdfd; width: 100%; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.45);" cellpadding="10">';
            $message .= '<tr><td><strong>Time Submitted: </strong></td> <td>' . $dateAdded . '</td></tr>'; 
				
            $message .= '<tr style="background-color: #cee1f5;"><td><h2><strong>Patient Information </strong></h2></td><td style="background-color: #cce5f7;"></td></tr>';
            $message .= '<tr><td><strong>First Name: </strong></td> <td>' . $insFirst . '</td></tr>';
            $message .= '<tr><td><strong>Last Name: </strong></td> <td>' . $insLast . '</td></tr>';
            $message .= '<tr><td><strong>D.O.B.: </strong></td> <td>' . $insDOB . '</td></tr>';
            $message .= '<tr><td><strong>S.S.N.: </strong></td> <td>' . $insSSN . '</td></tr>';
            $message .= '<tr><td><strong>Phone: </strong></td> <td>' . $insPhone . '</td></tr>';
            $message .= '<tr><td><strong>Email: </strong></td> <td>' . $insEmail . '</td></tr>';
			$message .= '<tr><td><strong>Address Line 1: </strong></td> <td>' . $insLine1 . '</td></tr>';
            $message .= '<tr><td><strong>Address Line 2: </strong></td> <td>' . $insLine2 . '</td></tr>';
            $message .= '<tr><td><strong>City: </strong></td> <td>' . $insCity . '</td></tr>';
            $message .= '<tr><td><strong>State: </strong></td> <td>' . $insState . '</td></tr>';
            $message .= '<tr><td><strong>ZIP: </strong></td> <td>' . $insZIP . '</td></tr>';	
            $message .= '<tr><td><br></td></tr>';	
				
			$message .= '<tr><td><strong>Policy Holder?</strong></td><td>' . $insPH . '</td></tr>';		
            $message .= '<tr style="background-color: #cee1f5;"><td><strong><h2>Policy Holder Information</h2></strong></td><td style="background-color: #cce5f7;"></td></tr>';
            $message .= '<tr><td><strong>First Name: </strong></td> <td>' . $insFirstPH . '</td></tr>';
            $message .= '<tr><td><strong>Last Name: </strong></td> <td>' . $insLastPH . '</td></tr>';
			$message .= '<tr><td><strong>D.O.B.: </strong></td> <td>' . $insDOBPH . '</td></tr>';
            $message .= '<tr><td><strong>S.S.N.: </strong></td> <td>' . $insSSNPH . '</td></tr>';	
            $message .= '<tr><td><strong>Phone: </strong></td> <td>' . $insPhonePH . '</td></tr>';    
            $message .= '<tr><td><strong>Email: </strong></td> <td>' . $insEmailPH . '</td></tr>';    
			$message .= '<tr><td><strong>Address Line 1: </strong></td> <td>' . $insLine1PH . '</td></tr>';
            $message .= '<tr><td><strong>Address Line 2: </strong></td> <td>' . $insLine2PH . '</td></tr>';
            $message .= '<tr><td><strong>City: </strong></td> <td>' . $insCityPH . '</td></tr>';
            $message .= '<tr><td><strong>State: </strong></td> <td>' . $insStatePH . '</td></tr>';
            $message .= '<tr><td><strong>ZIP: </strong></td> <td>' . $insZIPPH . '</td></tr>';
				
			$message .= '<tr style="background-color: #cee1f5;"><td><strong>Policy Information</strong></td><td style="background-color: #cce5f7;"></td></tr>';			
			$message .= '<tr><td><strong>Company Name: </strong></td> <td>' . $insCompany . '</td></tr>';	
			$message .= '<tr><td><strong>Company Telephone: </strong></td> <td>' . $insCompanyTel . '</td></tr>';	
			$message .= '<tr><td><strong>Policy/Member Number: </strong></td> <td>' . $insPolNum . '</td></tr>';	
			$message .= '<tr><td><strong>Group ID: </strong></td> <td>' . $insGroupID . '</td></tr>';	
			$message .= '<tr><td><strong>Plan Type: </strong></td> <td>' . $insPlanType . '</td></tr>';	
					
					/*Additional Data*/
            $message .= '<tr><td><strong>Facility: </strong></td> <td>' . $insFacility . '</td></tr>';
            $message .= '<tr><td><strong>Page: </strong></td> <td>' . $currentPageURL . '</td></tr>';
            $message .= '<tr><td><strong>g-ClickID: </strong></td> <td>' . $googleID . '</td></tr>';
				
            $message .= '<tr><td><strong">Additional Comments </strong></td> <td>' . $insComments . '</td></tr>';
            $message .= '</table>';   
            $message .= '</body><html>';    

            mail($to, $subject, $message, $headers);
            header( "Location: http://www.detoxlandingpage.com/ins-thank-you.php" );

            } else { 

                header( "Location: http://www.detoxlandingpage.com/403.php" );
				return false;
                die();
            };
        
    };/*Make sure fields are filled*/
?> 

