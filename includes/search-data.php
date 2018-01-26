<?php
	//Function finds the current page's URL
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
	//Parse Current URL
$parts = parse_url(curPageURL());

//echo $parts['query'];
	//parse_str returns (string, Array)
$str = parse_str($parts['query'], $query);
	// Results in a kay-value pair array that includes [query] => ?gclid(or whatever parameter/query) =aadsfjkdafekre5454h4j 
/*
	//

	//Example Paramaters:
		//In a URL, the G-Click ID is usually ?gclid=aadsfjkdafekre5454h4j
	//To extract, call the name of the value from the key-value pair array found in the earlier parse_str):
<input type="text" name="google-ID" id="google-ID" value="<?php echo $query['gclid']; ?>" readonly>
*/
?>