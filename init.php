<?php
	include 'vendor/autoload.php';
	include 'config/config.php';
	include 'db/db.php';
	include 'db/dbfunctions.php';
	include 'functions/functions.php';

	Aluma\Datax\Database::setPdo($dbData1);

	session_start();
	
	if (isset($_GET['session'])) {
		/* $login = load_login_session($_GET['session'], false);
		$logins = decrypt_login_session(urldecode(strtoupper($_GET['session'])), urldecode(strtoupper($_GET['userid'])), false);
		$login = $logins->fetch();
		$sessionhex = urldecode($_GET['session']);
		$useridhexed = urldecode($_GET['userid']);
		session_id($login['session']);
		*/

		//session_id($_GET['session']);

		$login = loadsession($_GET['session'], $_GET['userid'], false);

		if (!sessionhasrecord(session_id(), false)) {
			writesessionrecord(session_id(), $login['session'], $login['user_id'], $login['id'], date("Y-m-d H:i:s"));
		}

		$_SESSION['login'] = true;
		$_SESSION['userID'] = $_GET['userid'];
		$_SESSION['session'] = $_GET['session'];
		header('Location: '.$_SERVER['SCRIPT_NAME']);
		exit;
	}


	$login_name = '';
	$role_type = '';

	if (isset($_SESSION['login']) || $_SESSION['login'] == false) {
		if ($_SESSION['login'] == true) {
			//$userid = get_userid(session_id);
			$userid = $_SESSION['userID'];
			$login_name = get_login_name($userid);
			$role = get_role($userid);
			$role_type = $roles_array[$role];
			$location_id = get_locationid($userid);

			//For Communicating with Alumacraft.com needs $userid encrypted sessionid
			//$hexedsession = hexvalue(session_id(), true);
			//$hexeduserid = hexvalue($userid, false);
			//$rustyaddon = "session=".urlencode($hexedsession)."&userid=".urlencode($hexeduserid);
			/*if (!isset($_SESSION['sent-login']) || $_SESSION['sent-login'] == false) {
				send_server_request("location: https://www.alumacraft.com/?session=".urlencode($hexedsession)."&userid=".urlencode($hexeduserid), '');
				$_SESSION['sent-login'] = true;
			}*/

			if (isset($_GET['dplus'])) {
				$q = ltrim($_GET['q'], '00');
				$goto = "index.php?search=all&q=".$q.
				$_SESSION['go-to'] = $goto;
				$_SESSION['hash'] = $_GET['type'];
				header('location: ' . $goto . '#' . $_GET['type']);
				exit;
			}

			if (isset($_SESSION['go-to'])) {
				if ($filename == $_SESSION['go-to']) {
					unset($_SESSION['go-to']);
					unset($_SESSION['hash']);
				}
			}
		} elseif ($script_name != 'login.php' && $script_name != 'test.php') {
			if (isset($_GET['dplus'])) {
				$q = ltrim($_GET['q'], '00');
				$goto = $filename;
				$_SESSION['go-to'] = $goto;
				$_SESSION['hash'] = $_GET['type'];
			}
			header('Location: login.php');
			exit;
		}
	}

	switch($role_type) {
		case 'DEALER':
			break;
		case 'SREP':
			if (in_array($userid, $subreps)) { $issubrep = true; } else {$issubrep = false; }
			break;
		case 'SADMIN':
			break;
	}

$overrideinventory = false;

$urlOrderingSession = $urlOrdering . "?session=".$_SESSION['session']."&userid=$userid";
