<?php include '../../config/config.php'; ?>
<?php include '../../db/db.php'; ?>
<?php include '../../db/dbfunctions.php'; ?>
<?php include '../../functions/functions.php'; ?>

<?php 

	if ($_SESSION['login'] == true) {
		$userid = $_SESSION['userID'];
		$login_name = get_login_name($userid);
		$role = get_role($userid);
		$role_type = $roles_array[$role]; 
		$location_id = get_locationid($userid);
		
	} elseif ($script_name != 'login.php' && $script_name != 'test.php') {
		header('location: login.php');
		exit;
	}
	
	switch($role_type) {
		case 'DEALER':
			break;
		case 'SREP':
			break;
		case 'SADMIN':
			break;
	}
include '../../logic/role-type-logic.php';