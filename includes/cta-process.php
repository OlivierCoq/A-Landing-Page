<?php   
    if(isset($_POST) && !empty($_POST)){
     
            if( 
                isset($_POST['cta-first'], $_POST['cta-last']) &&
                strlen($_POST['cta-first']) > 1 &&
                strlen($_POST['cta-last']) > 1 &&
				preg_match('/^[a-zA-Z\s]+$/', $_POST['cta-first']) &&
				preg_match('/^[a-zA-Z\s]+$/', $_POST['cta-last']) &&
				preg_match('/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD', $_POST['cta-email']) &&
                preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST['cta-phone']) &&
                filter_var($_POST['currentPageURL'], FILTER_VALIDATE_URL) !== false &&
                strpos($_POST['currentPageURL'], 'detoxlandingpage.com') !== false
            ) {
                        
            $admFirst =  $_POST['cta-first'];
            $admLast = $_POST['cta-last'];
            $admEmail= $_POST['cta-email'];
            $admPhone = $_POST['cta-phone']; 
            $admMessage = $_POST['cta-message'];
            $admFacility = $_POST['cta-facility'];
            $currentPageURL = $_POST['currentPageURL'];
            $dateAdded = $_POST['dateTime'];
            $formType = $_POST['formType']; 
			$referringPageURL = $_POST['referringPageURL'];
			$googleID = $_POST['google-ID'];	
				
            /*Connect to MySQL DB*/
            $hostname = '123.45.678.90';
            $username = 'username';
            $thepassword = 'password';
            $dbname = 'oliviercoq.online_contact'; 
                
            $conn = mysql_connect($hostname,$username,$thepassword);  
            
            try {	
				
            $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $thepassword); 
				
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO contactFormData (admFirst, admLast, admEmail, admPhone, admMessage, admFacility, currentPageURL, referringPageURL, googleID, dateAdded, formType) VALUES ('" . $admFirst . "','" . $admLast . "','" . $admEmail . "','" . $admPhone . "','" . $admMessage . "','" . $admFacility . "','" . $currentPageURL . "','" . $referringPageURL . "','" . $googleID . "','" . $dateAdded . "','" . $formType . "');";

            /*Execute the SQL insertion*/
			$conn->exec($sql);	
				
			}
				
			catch(PDOException $e) {
				echo $sql . "<br>" . $e->getMessage();
			}
			
            
			$conn = null;
				
            $to = "contact@oliviercoq.online.com"; /*contact | oliverc*/
            $subject = "Admissions Internet Form";
            $headers = "From: $admEmail\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";    /*ISO-8859-1*/
            $headers .= "BCC: formverification@oliviercoq.online.com";                
            $message = '<html><body style="padding: 2%; box-shadow: 0px 0px 5px black;">';
            $message .= '<table rules="all" style="border: 1px solid #f5f5f5; border-radius: 3px; width: 100%; box-shadow: 0px 0px 5px black;" cellpadding="10">';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Time Submitted: </strong></td> <td>' . $dateAdded . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>First Name: </strong></td> <td>' . $admFirst . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Last Name: </strong></td> <td>' . $admLast . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Phone: </strong></td> <td>' . $admPhone . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Facility: </strong></td> <td>' . $admFacility . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Page: </strong></td> <td>' . $currentPageURL . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Referrer: </strong></td> <td>' . $referringPageURL . '</td></tr>';
			$message .= '<tr><td style="background-color: #cee1f5;"><strong>g-ClickID: </strong></td> <td>' . $googleID . '</td></tr>';	
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>How may we help you? </strong></td> <td>' . $admMessage . '</td></tr>';
            $message .= '</table>';   
            $message .= '</body><html>';    

            mail($to, $subject, $message, $headers);
            header( "Location: http://www.detoxlandingpage.com/thank-you.php" );

            } else { 
				header( "Location: http://www.detoxlandingpage.com/403.php" );
				return false; };

        
    };/*Make sure fields are filled*/
?> 

