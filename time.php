<?php 
	date_default_timezone_set('Asia/Dhaka');
	
	$timestamp=time()+(60*60*6);
	//if($timestamp==)
	$a=gmstrftime("%d %m %y %H:%M:%S",$timestamp);
	echo $a;

?>