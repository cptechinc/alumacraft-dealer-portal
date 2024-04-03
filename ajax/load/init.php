<?php 
	include '../../vendor/autoload.php';
	include '../../config/config.php';
	include '../../db/db.php';
	include '../../db/dbfunctions.php';
	include '../../functions/functions.php'; 

	use Aluma\Sdr;
	use Aluma\Util;

	Aluma\Datax\Database::setPdo($dbData1);
	Aluma\Sdr\Database::setPdo($dba);

	/** @var Sdr\User */
$user = Sdr\Session::getUser();

// Backwards compatibility
$issubrep = $user->isSubRep();
$userid = $user->userid;
$login_name = $user->name;
$role = $user->roleid;
$role_type = $roles_array[$role];
$location_id = $user->locationid;

include '../../logic/role-type-logic.php';