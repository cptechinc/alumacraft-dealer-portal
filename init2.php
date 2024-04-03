<?php
	include 'vendor/autoload.php';
	include 'config/config.php';
	include 'db/db.php';
	include 'db/dbfunctions.php';
	include 'functions/functions.php';

	use Aluma\Sdr;
	use Aluma\Util;

	Aluma\Datax\Database::setPdo($dbData1);
	Aluma\Sdr\Database::setPdo($dba);

	session_start();

	// if (Sdr\Session::isLoggedIn() === false) {
	// 	echo 'not logged in';
	// }

	if (Util\PhpCookie::has('session') && Sdr\Session::isLoggedIn() === false) {
		Util\PhpInputGet::set('session', Util\PhpCookie::get('session'));
	}

	if (Sdr\Session::isLoggedIn()) {
		$user = Sdr\Session::getUser();

		if (Util\PhpCookie::has('session') && Util\PhpCookie::get('email') != $user->email) {
			Util\PhpInputGet::set('session', Util\PhpCookie::get('session'));
		}
	}

	if (Util\PhpInputGet::has('session')) {
		$login = new Util\Data();
		$login->sessionid = $_GET['session'];
		$login->userid    = isset($_GET['userid']) ? $_GET['userid'] : '';

		Sdr\Session::process($login);
		header('Location: '.$_SERVER['SCRIPT_NAME']);
		exit;
	}

	// Redirect to login
	if (Sdr\Session::isLoggedIn() === false && $script_name != 'login.php' && $script_name != 'test.php' && $script_name != 'testing.php') {
		if (Util\PhpInputGet::has('dplus')) {
			$q = ltrim(Util\PhpInputGet::get('q'), '00');
			$goto = $filename;
			$_SESSION['go-to'] = $goto;
			$_SESSION['hash']  = Util\PhpInputGet::get('type');
		}
		header('Location: login.php');
		exit;
	}

	// Redirect to page if needed after login
	if (Sdr\Session::isLoggedIn()) {
		if (Util\PhpInputGet::has('dplus')) {
			$q = ltrim(Util\PhpInputGet::get('q'), '00');
			$goto = "index.php?search=all&q=".$q.
			$_SESSION['go-to'] = $goto;
			$_SESSION['hash'] = Util\PhpInputGet::get('type');
			header('location: ' . $goto . '#' . Util\PhpInputGet::get('type'));
			exit;
		}

		if (Util\PhpSession::has('go-to')) {
			if ($filename == Util\PhpSession::get('go-to')) {
				Util\PhpSession::remove('go-to');
				Util\PhpSession::remove('hash');
			}
		}
	}

/** @var Sdr\User */
$user = Sdr\Session::getUser();
$overrideinventory = false;
// TODO: HANDLE SWITCH TO ORDERING
$urlOrderingSession = $urlOrdering . "?session=".$user->sessionid."&userid=$user->userid";
// $urlOrderingSession = $urlOrdering . "?session=".$_SESSION['session']."&userid=$userid";

// Backwards compatibility
$issubrep = $user->isSubRep();
$userid = $user->userid;
$login_name = $user->name;
$role = $user->roleid;
$role_type = $roles_array[$role];
$location_id = $user->locationid;






	