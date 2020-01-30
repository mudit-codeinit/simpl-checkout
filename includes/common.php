<?php
	require __DIR__ . '/../core/helper.php';

	if(checkDevice()==1){
		header('Location: mobile/index.php');
	}
?>
