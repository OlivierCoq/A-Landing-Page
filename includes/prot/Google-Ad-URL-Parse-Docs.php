<?php

//Grab the final, full URL in a variable:

//$finalURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	//Example: http://floridanegligencefirm.com/free-attorney-consultation?_visit=cdb075f1-5a68-451b-aad9-92696d61ab3d&gclid=CjwKCAiAr_TQBRB5EiwAC_QCq1qI5uFUUsA_rwXvNor6H09kMUfE1z0X2To9sPcE_h_Z306Nrzh_lhoCWqQQAvD_BwE

//Parse the parameters from the URL:

//$param = parse_url($finalURL);

//Parse the URL for specific componants (Such as matchtype={matchtype})



/*$finalURL = 'http://',$_SERVER[REQUEST_URI];

$parsed = parse_url($finalURL);*/

/*parse_str($parsed['query'], $query);*/

/*echo "<br>";
echo $query['gclid'];*/

?>

<?php

function curPageURL() {
	
 $pageURL = 'http';
	
 if ($_SERVER["http"] == "on") {
	 $pageURL .= "s";
 }
	
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}



$parts = parse_url(curPageURL());

echo "<br>";

//echo $parts['query'];
	//parse_str returns (string, Array)
$str = parse_str($parts['query'], $query);

/*
echo "<br>";
	//Isolate each parameter at will from the $strArray[]. Example: a gclid: 
echo $query['gclid'];

echo "<br>";
	//Any other parameter:
echo $query['blib'];

echo "<br>";
*/

?>


<!DOCTYPE html>
<html>
	<body>
	<br><br>	
	<input type="text" name="google-ID" id="google-ID" value="<?php echo $query['gclid']; ?>" readonly>
	<input type="text" name="google-ID" id="google-ID" value="<?php echo $query['blib']; ?>" readonly>
		
	</body>
</html>