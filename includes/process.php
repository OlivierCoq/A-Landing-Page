<?php     
    if(isset($_POST) && !empty($_POST)){
        
        if(isset($_POST['cb-name'], $_POST['cb-phone']) && !empty($_POST['cb-name']) && !empty($_POST['cb-phone']) ) {
         
            $admFirst =  $_POST['cb-name'];
            $admPhone = $_POST['cb-phone'];    
            $currentPageURL = $_POST['currentURL'];
			$googleID = $_POST['google-ID'];
			
            $formType = $_POST['formType'];
			
            /*Connect to MySQL DB*/
            $hostname = '123.45.678.90';
            $username = 'username';
            $thepassword = 'password';
            $dbname = 'oliviercoq.online_contact'; 
				
            try {	
				
            $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $thepassword); 
				
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

            $sql = "INSERT INTO contactFormData (admFirst, admPhone, currentPageURL, googleID, formType) VALUES ('" . $admFirst . "','" . $admPhone . "','" . $currentPageURL . "','" . $googleID . "','" . $formType . "');";

            		/*Execute the SQL insertion*/
			$conn->exec($sql);	
				
			}
			
			catch(PDOException $e) {
				echo $sql . "<br>" . $e->getMessage();
			}
		
			$conn = null;
				

            
            $to = "5615773679@txt.att.net";/*(<--To Phone)*/
            
            $subject = "Call-Back request";
            
            $message = "This is a call back request from detox-from-heroin (National/Landing Page) ";
			$message.= "Name: $admFirst and Phone: $admPhone.";
			$message.= "The request was submitted at: $currentPageURL";
			$message.= "g-ClickID: $googleID";
            
            $headers = "From: detoxlandingpage.com\r\n";
            $headers .= "CC: contact@oliviercoq.online.com\r\n";

            
            mail($to, $subject, $message, $headers);
            header( "Location: http://www.detoxlandingpage.com/cb-thank-you.php" );
   
      }  
        else {
           
            return false;
            header( "Location: http://www.detoxlandingpage.com/403.php" );
        };
    };
 
?> 