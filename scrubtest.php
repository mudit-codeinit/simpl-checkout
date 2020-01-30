<?php require __DIR__ . '/__admin/Scrub.php';
	  $scrub = new Scrub();
    $data = $scrub->selectData();
echo "<pre>";
    	print_r($data);
