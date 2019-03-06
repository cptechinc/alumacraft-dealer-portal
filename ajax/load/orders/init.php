<?php 
	include '../../../config/config.php';
	include '../../../db/db.php';
	include '../../../db/dbfunctions.php';
	include '../../../functions/functions.php'; 

	if ($_SESSION['login'] == true) {
		$userid = get_userid(session_id());
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
include '../../../logic/role-type-logic.php';