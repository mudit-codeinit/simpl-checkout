<?php
	$status = 'danger';
	//$conn = mysqli_connect('balncepurecbd-db.cakak8fuxpy0.us-east-2.rds.amazonaws.com', 'usr_db_api_pages', 'txzsbcE84rX>C]ptgbGUdv&W7vW^vuA3', 'balncePureCBD-db');
	// $conn = mysqli_connect('localhost', 'root', '', 'simpl-checkout');
	$conn = mysqli_connect('localhost', 'ubuntu', 'devops@345', 'simpl_checkout');

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	else{
		$select_sql = 'SELECT id FROM unsubscribed_users WHERE email = "'.$_POST['email'].'"';
		$result = mysqli_query($conn, $select_sql);

		if (mysqli_num_rows($result) == 0) {
			$sql = 'INSERT INTO unsubscribed_users (email, ip_address) VALUES ("'.$_POST['email'].'", "'.$_SERVER['REMOTE_ADDR'].'")';
			if ($conn->query($sql) === TRUE) {
				$status = 'success';
				$message = 'New record created successfully';
			}
			else {
				$message = 'Error: '.$sql.'<br>'.$conn->error;
			}
		}
		else {
			$status = 'info';
			$message = 'Already exist';
		}
	}
	$conn->close();
	echo json_encode(['status' => $status, 'message' => $message]);
?>