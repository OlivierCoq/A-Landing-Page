<?php   
    if(isset($_POST) && !empty($_POST)){
 
            
            if( 
                isset($_POST['fdtFirstM'], $_POST['fdtLastM']) &&
                strlen($_POST['fdtFirstM']) > 1 &&
                strlen($_POST['fdtLastM']) > 1 &&
                preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $_POST['fdtPhoneM']) &&
                filter_var($_POST['currentPageURL'], FILTER_VALIDATE_URL) == true &&
                strpos($_POST['currentPageURL'], 'detoxlandingpage.com') !== false
            ) {
                
            $fdtFirst =  $_POST['fdtFirstM'];
            $fdtLast = $_POST['fdtLastM'];
            $fdtPhone = $_POST['fdtPhoneM']; 
            $line1 = $_POST['line1M'];
            $line2 = $_POST['line2M'];
            $city = $_POST['cityM'];
            $state = $_POST['stateM'];
            $zip = $_POST['zipM'];
            $currentPageURL = $_POST['currentPageURL'];
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
				
            $sql = "INSERT INTO cupPromo (fdtFirst, fdtLast, fdtPhone, line1, line2, city, state, zip, currentPageURL, googleID) VALUES ('" . $fdtFirst . "','" . $fdtLast . "','" . $fdtPhone . "','" . $line1 . "','" . $line2 . "','" . $city . "','" . $state  . "','" . $zip . "','" . $currentPageURL . "','" . $googleID . "');";

            /*Execute the SQL insertion*/
			$conn->exec($sql);	
				
			}
				
			catch(PDOException $e) {
				echo $sql . "<br>" . $e->getMessage();
			}
			
            
			$conn = null;

            $to = "cuppromo@oliviercoq.online.com"; 
            $subject = "Free Drug Test Order";
            $headers = "From: detox-from-heroin (National/Landing Page) \r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";    
            $headers .= "BCC: formverification@oliviercoq.online.com";                
            $message = '<html><body>';
            $message .= '<table rules="all" style="border-color= #6c8eb1; width: 100%;" cellpadding="10">';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>First Name: </strong></td> <td>' . $fdtFirst . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Last Name: </strong></td> <td>' . $fdtLast . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Phone: </strong></td> <td>' . $fdtPhone . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Address Line 1: </strong></td> <td>' . $line1 . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Address Line 2: </strong></td> <td>' . $line2 . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>City: </strong></td> <td>' . $city . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>State: </strong></td> <td>' . $state . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>ZIP: </strong></td> <td>' . $zip . '</td></tr>';
            $message .= '<tr><td style="background-color: #cee1f5;"><strong>Page: </strong></td> <td>' . $currentPageURL . '</td></tr>';
			$message .= '<tr><td style="background-color: #cee1f5;"><strong>g-ClickID: </strong></td> <td>' . $googleID . '</td></tr>';	
            $message .= '</table>';   
            $message .= '</body><html>';    

            mail($to, $subject, $message, $headers);
            header( "Location: http://www.detoxlandingpage.com/fdt-thank-you.php" );

            } else { 
                header( "Location: http://www.detoxlandingpage.com/403.php" );
                return false; 
                die();
            };
        
    };/*Make sure fields are filled*/ 
?> 

