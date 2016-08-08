<?php	
if(isset($_GET["ip"])){
    // Declare variables...
    $ip   = $_GET["ip"];
	
    // Call SHA256 function
    sha256($ip);
}

function sha256($ip){
	$hash = hash('sha256', $ip . "lucionhud");
	
	// Echo hash.
	echo $hash;	
}
?>