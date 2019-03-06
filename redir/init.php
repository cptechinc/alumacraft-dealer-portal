<?php include '../config/config.php'; ?>
<?php include '../db/db.php'; ?>
<?php include '../db/dbfunctions.php'; ?>
<?php include '../functions/functions.php'; ?>

<?php 

	if (isset($_SESSION['login']) || $_SESSION['login'] == false) {
		if ($_SESSION['login'] == true) {
			$userid = get_userid(session_id()); 
			$userid = $_SESSION['userID'];
			$login_name = get_login_name($userid);
			$role = get_role($userid);
			$role_type = $roles_array[$role]; 
			$location_id = get_locationid($userid);
			
			//For Communicating with Alumacraft.com needs $userid encrypted sessionid
			/*$hexedsession = hexvalue(session_id(), true);
			$hexeduserid = hexvalue($userid, false);
			$rustyaddon = "session=".urlencode($hexedsession)."&userid=".urlencode($hexeduserid); 
			if (!isset($_SESSION['sent-login'])) {
				send_server_request("alumacraft.com/?session=".urlencode($hexedsession)."&userid=".urlencode($hexeduserid), '');
				$_SESSION['sent-login'] = true;
			}*/
		} 
	}
	
?>


