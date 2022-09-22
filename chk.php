<?php
	session_start();
	
	$admins = array("ahmed", "imad");
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$user = $_POST['username'];
		
		if (in_array($user, $admins)) {
			
			$_SESSION['user'] = $user;
			
			echo 'Welcome ' . $_SESSION['user'] . ' You Will Be Redirected To Control Pannel Area';
			
			header('REFRESH:5;URL=control.php');
		
	 	} else {
		
		echo 'Sorry You Are Not Permitted To Access';
		
		}

	} else {
		
		echo 'You Cant Browse This Page Directly';
		
	}