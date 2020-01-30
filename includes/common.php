<?php
	require __DIR__ . '/../core/helper.php';

	if(checkDevice()==1){
		  	$query_string = isset($_SERVER["QUERY_STRING"]) ?  $_SERVER["QUERY_STRING"]:'';
		header('Location: mobile/index.php?'.$query_string);
	}
?>
