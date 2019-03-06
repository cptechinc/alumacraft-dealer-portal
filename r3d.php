<?php 

	session_start();
	include 'init.php';
	$L = $_SESSION['loc'];
	if (isset($_SESSION['stage'])) {
		switch($_SESSION['stage']) {
			case 'login':
				$vl = get_login_status(session_id());
				 $error = '';
				 if ($vl != 'Y') {
					 $L = 'login.php';
				 } else {
					$_SESSION['logintype'] = 'rep'; 
					 if (isset($_SESSION['go-to'])) {
						
							$L = $_SESSION['go-to'];
					
					}
				 }
				break;	
			
		}
		unset($_SESSION['stage']);
	} else {
		if ($L == "") {
			$L = "index.php";
		} 
		if (isset($_SESSION['go-to'])) {
						
			$L = $_SESSION['go-to'];

		}
	}
	header("location: ". $L);
	exit;





?>