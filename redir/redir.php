<?php

	session_start();
	$A = session_id();
	include 'init.php';
	if (isset($_POST['action'])) {
		$action = $_POST['action'];
	} else {
		$action = $_GET['action'];
	}

	switch ($action) {
		case 'login':
			$email = $_POST['email'];
			$pass = $_POST['pass'];
			$islogin = check_login($email, $pass);
			if ($islogin) {
				$userid = get_userid_from_login($email, $pass);
				//$_SESSION['sql'] = insert_login_record($userid, session_id());
				$_SESSION['loc'] = 'index.php';
				$_SESSION['login'] = true;
				$LO = "LOGIN SUCCESSFUL";
				if (isset($_SESSION['go-to'])) {
					$_SESSION['loc'] = $_SESSION['go-to'] . "#".$_SESSION['hash'];
				}
			} else {
				$_SESSION['login-error'] = 'Incorrect Email or Password';
				$_SESSION['loc'] = 'login.php';
				$LO = "LOGIN UNSUCCESSFUL";
			}
			break;
		case 'dealer-login':
			$dealer = $_GET['dealer'];
			$_SESSION['logintype'] = 'dealer';
			$_SESSION['dealer'] = urldecode($dealer);
			header('location: ../index.php?dealer=' . $dealer);
			exit;
			break;
		case 'choose-customer':
			$custid = $_POST['custid'];
			if ($custid == 'all-dealers') {
				$_SESSION['loc'] = '../index.php';
			} else {
				$_SESSION['loc'] = '../index.php?dealer='.urlencode($custid);
			}

			header('Location: '.$_SESSION['loc']);
			exit;
			break;
		case 'search-inventory':
			$custid = $_POST['custid'];
			$rep = $_POST['rep'];
			$search_type = $_POST['search-type'];
			$q = $_POST['search'];
			$subset = $_POST['subset']; //Inventory or Order History  #inventory #order-hist
			if ($search_type == 'InvoiceDate') {
				$date_from = $_POST['date-from'];
				$date_through = $_POST['date-through'];
				$q = $date_from . "|" . $date_through;
			}

			if ($subset == 'inventory') {
				$page = 'inventory';
			} elseif ($subset == 'order-hist') {
				$page = 'registered-boats';
			}

			if ($custid != 'all-dealers' && strlen($custid) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?location='.urlencode($custid).'&search='.$search_type.'&q='.urlencode($q);
			} elseif($rep != 'all-reps' && strlen($rep) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?rep='.urlencode($rep).'&search='.$search_type.'&q='.urlencode($q);
			} else {
				$_SESSION['loc'] = '../'.$page.'.php?search='.$search_type.'&q='.urlencode($q);
			}


			header('Location: '.$_SESSION['loc']); exit;
			break;
		case 'search-orders':
			$custid = $_POST['custid'];
			$rep = $_POST['rep'];
			$search_type = $_POST['search-type'];
			$q = $_POST['search'];
			$subset = $_POST['subset']; //Inventory or Order History  #inventory #order-hist
			if ($search_type == 'OehdArrvDate' || $search_type == 'OehdOrdrDate') {
				$date_from = $_POST['date-from'];
				$date_through = $_POST['date-through'];
				$q = $date_from . "|" . $date_through;
			}

			if ($subset == 'pending-approval') {
				$page = 'pending-approval';
			} elseif ($subset == 'approved') {
				$page = 'approved';
			}

			if ($custid != 'all-dealers' && strlen($custid) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?location='.urlencode($custid).'&search='.$search_type.'&q='.urlencode($q);
			} elseif($rep != 'all-reps' && strlen($rep) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?rep='.urlencode($rep).'&search='.$search_type.'&q='.urlencode($q);
			} else {
				$_SESSION['loc'] = '../'.$page.'.php?search='.$search_type.'&q='.urlencode($q);
			}


			header('Location: '.$_SESSION['loc']); exit;
			break;
		case 'clearsearch':
			$custid = $_POST['custid'];
			$rep = $_POST['rep'];
			$subset = $_POST['subset']; //Inventory or Order History
			if ($subset == 'inventory') {
				$page = 'inventory';
			} elseif ($subset == 'order-hist') {
				$page = 'registered-boats';
			} else if ($subset == 'pending-approval')  {
				 $page = 'pending-approval';
			} else if ($subset == 'approved') {
				$page = 'approved';
			}
			$page = 'index';
			if ($custid != 'all-dealers' && strlen($custid) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?location='.urlencode($custid).'#'.$subset;
			} elseif($rep != 'all-reps' && strlen($rep) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?rep='.urlencode($rep).'#'.$subset;
			} else {
				$_SESSION['loc'] = '../'.$page.'.php#'.$subset;
			}
			header('Location: '.$_SESSION['loc']);
			exit;
		case 'show-unregistered':
			$custid = $_POST['custid'];
			$rep = $_POST['rep'];
			$subset = 'order-hist'; //Inventory or Order History
			if ($subset == 'inventory') {
				$page = 'inventory';
			} elseif ($subset == 'order-hist') {
				$page = 'registered-boats';
			}
			$show_unreg = $_POST['show-unregistered'];
			if ($show_unreg == 'both') {
				$reg = '';
			} else {
				$reg = "show-sold-unreg=". $show_unreg;
			}

			if ($custid != 'all-dealers' && strlen($custid) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?location='.urlencode($custid)."&".$reg.'#'.$subset;
			} elseif($rep != 'all-reps' && strlen($rep) > 0) {
				$_SESSION['loc'] = '../'.$page.'.php?rep='.urlencode($rep)."&".$reg.'#'.$subset;
			} else {
				$_SESSION['loc'] = '../'.$page.'.php'."?".$reg.'#'.$subset;
			}
			header('Location: '.$_SESSION['loc']); exit;
			break;
		case 'register-warranty':
			$soldunreg = false;
			$withmotor = 'Y';
			$custid = strtoupper($_POST['custid']);
			$firstname = strtoupper($_POST['firstname']); $middlename = strtoupper($_POST['middlename']);
			$lastname = strtoupper($_POST['lastname']);
			$email = strtoupper($_POST['email']); $phone = $_POST['phone'];
			$adr1 = strtoupper($_POST['address']); $adr2 = strtoupper($_POST['address2']);
			$city = strtoupper($_POST['city']); $zip = $_POST['zip']; $state = $_POST['state'];
			$datesold = str_replace("/",'',$_POST['saledate']);
			$deliverdate = $_POST['delivery-date'];
			$serial = strtoupper($_POST['boat-serial']);
			$invoicedate = $_POST['invoice-date'];
			$invoicenbr = $_POST['order-nbr'];
			$itemid = $_POST['itemid'];
			$country = $_POST['country'];
			$motorserial = strtoupper($_POST['motor-serial-number']); $motorhp = $_POST['motor-hp']; $motoryear = $_POST['model-year']; $motordesc = strtoupper($_POST['motor-desc']);

			if (sizeof($_POST['with-motor']) > 0 ) { $withmotor = 'N'; $_SESSION['with-motor'] = 'N'; }

			if ($deliverdate == '') {
				$deliverdate = date('Ymd');
			}
			if ($datesold == '') {
				$datesold = date('Ymd');
			}
			if (sizeof($_POST['sold-unreg']) > 0 ) { $soldunreg = true; }
			if ($soldunreg) { $firstname = "Sold, but Unregistered"; }
			$date = intval(date("Ymd")); $time = intval(date("gis"));

			if ($soldunreg) {
				$_SESSION['sql'] = update_boat_registry($serial, 'S', false);
			}  else {
				$_SESSION['sql'] = update_boat_registry($serial, 'Y', false);
			}

			$recnbr = get_next_warrant_rec();
			$motoryear = intval($motoryear);

			$_SESSION['sql'] .= register_warranty($date, $time, $recnbr, $serial, $itemid, $invoicenbr, $invoicedate, $withmotor, $firstname, $middlename, $lastname, $adr1, $adr2, $city, $state, $zip, $email, $phone, $datesold, $motorserial, $motorhp, $motoryear, $motordesc);

			$boat = get_boat_info($serial, false);
			$ordn = $boat['OrderNbr'];
			$salesrep = $boat['SalespersonId'];


			$_SESSION['sql'] .= "<br>" . register_into_warrantyperm($date, $time, $serial, $itemid, $invoicenbr, $invoicedate, $withmotor, $firstname, $middlename, $lastname, $adr1, $adr2, $city, $state, $zip, $email, $phone, $datesold, $motorserial, $motorhp, $motoryear, $motordesc, $custid, $salesrep , $deliverdate, false);
			if ($country != 'USA' && $country != 'Canada') {
				$reg = getregistrationinfo($serial, $itemid, false);
				$_SESSION['sql'] .= "<br>" .insertcountry($reg['WarmSeq'], $country);

			}

			$fields = array();
			$fields['action'] = 'register-warranty';
			$fields['sessionid'] = session_id();
			$fields['boat-serial'] = $serial;
			$fields['custid'] = $custid;
			$fields['itemid'] = $itemid;

			//$userid = get_userid(session_id());

			send_server_request($alumadplusip."/reg/redir/remote-redir.php", $fields);
			$_SESSION['sql2'] .= "<br>". log_registration($serial, $userid);

			if (validate_email($email)) {

				$rustypn = get_item_from_basepn($itemid, false);
				$registration = array();
				$registration['accessToken'] = 'abcd1234';
				$registration['ship_company'] = '';
				$registration['ship_name'] = $firstname . ' '. $lastname;
				$registration['ship_address'] = $adr1;
				$registration['ship_state'] = $state;
				$registration['ship_zip'] = $zip;
				$registration['bill_company'] = '';
				$registration['bill_name'] = $firstname . ' '. $lastname;
				$registration['bill_address'] = $adr1;
				$registration['bill_state'] = $state;
				$registration['bill_zip'] = $zip;
				$registration['phone'] = $phone;
				$registration['email'] = $email;
				$registration['boat_id'] = $serial;
				$registration['opt_in'] = 'true';
				$registration['dealer_name'] = get_dealer_name_from_dplus($custid);
				$registration['amount'] = get_gift_amount($rustypn, false);

				if ($userid == '4189' || $registration['email'] == 'lhecker@alumacraft.com'|| $registration['email'] == 'bbaron@alumacraft.com') {
					if (strlen($rustypn) < 1) {
						$error = 'Y';
						$errormessage = "Alumacraft: itemid not found from pase part #";
					} else {
						$json = send_arrowhead_registration($registration);
						$_SESSION['arrowhead'] = $json;
						$response = json_decode($json, true);
						$errormessage = '';
						if ($response['errorOccurred']) {
							$error = 'Y';
							echo 'error occured <br>';
							if (is_array($response['resultMessage'])) {
								foreach ($response['resultMessage'] as $key => $value) {
									$errormessage .= 'Apfco: '.$value.' ';
								}

							} else {
								$errormessage = $response['resultMessage'];
							}
						} else {$error = 'N'; }
					}



					log_apfco_send($registration['boat_id'], $itemid, $userid, $error, $errormessage);
				}



			} else {
				// FAIL WRITE THAT EMAIL DOESN'T MATCH
			}




			if ($_SESSION['logintype'] == 'dealer') {
				$_SESSION['loc'] = 'inventory.php'.urlencode($custid).'#inventory';
			} else {
				$_SESSION['loc'] = 'inventory.php#inventory';
			}
			break;
		case 'edit-warranty':
			$soldunreg = false;
			$withmotor = 'Y';
			$custid = strtoupper($_POST['custid']);
			$firstname = strtoupper($_POST['firstname']); $middlename = strtoupper($_POST['middlename']);
			$lastname = strtoupper($_POST['lastname']);
			$email = strtoupper($_POST['email']); $phone = $_POST['phone'];
			$adr1 = strtoupper($_POST['address']); $adr2 = strtoupper($_POST['address2']);
			$city = strtoupper($_POST['city']); $zip = $_POST['zip']; $state = $_POST['state'];
			$datesold = str_replace("/",'',$_POST['saledate']);
			$deliverdate = $_POST['delivery-date'];
			$serial = strtoupper($_POST['boat-serial']);
			$invoicedate = $_POST['invoice-date'];
			$invoicenbr = $_POST['order-nbr'];
			$itemid = $_POST['itemid'];
			$motorserial = strtoupper($_POST['motor-serial-number']); $motorhp = $_POST['motor-hp']; $motoryear = $_POST['model-year']; $motordesc = strtoupper($_POST['motor-desc']);

			if ($deliverdate == '') {
				$deliverdate = date('Ymd');
			}
			if ($datesold == '') {
				$datesold = date('Ymd');
			}

			if (sizeof($_POST['with-motor']) > 0 ) { $withmotor = 'N'; $_SESSION['with-motor'] = 'N'; }

			if (sizeof($_POST['sold-unreg']) > 0 ) { $soldunreg = true; }


			if ($_POST['sold-unreg'] == 'Y') { $soldunreg = true; }

			if ($_POST['unregister'] == 'Y') { $unreg = true; }

			if ($soldunreg) { $firstname = "Sold, but Unregistered"; }
			if ($unreg) {
				$soldunreg = false;
				$firstname = 'Unregstered';

			}
			$date = intval(date("Ymd")); $time = intval(date("gis"));

			if ($soldunreg) {update_boat_registry($serial, 'S', false);} elseif ($unreg) {update_boat_registry($serial, 'N', false);} else {update_boat_registry($serial, 'Y', false); }
			$recnbr = get_next_warrant_rec();
			$motoryear = intval($motoryear);

			$warrec = get_warranty_register_recnbr($serial, $itemid, false);
			if ($warrec != '') {
				remove_warranty_register($warrec);
			}

			$_SESSION['sql'] = register_warranty($date, $time, $recnbr, $serial, $itemid, $invoicenbr, $invoicedate, $withmotor, $firstname, $middlename, $lastname, $adr1, $adr2, $city, $state, $zip, $email, $phone, $datesold, $motorserial, $motorhp, $motoryear, $motordesc);

			$boat = get_boat_info($serial, false);

			$ordn = $boat['OrderNbr'];
			$salesrep = $boat['SalespersonId'];

			$_SESSION['sql'] .= "<br>" . register_into_warrantyperm($date, $time, $serial, $itemid, $invoicenbr, $invoicedate, $withmotor, $firstname, $middlename, $lastname, $adr1, $adr2, $city, $state, $zip, $email, $phone, $datesold, $motorserial, $motorhp, $motoryear, $motordesc, $custid, $salesrep , $deliverdate, false);

			$fields = array();

			$fields['action'] = 'register-warranty';
			$fields['sessionid'] = session_id();
			$fields['boat-serial'] = $serial;
			$fields['custid'] = $custid;
			$fields['itemid'] = $itemid;

			//$userid = get_userid(session_id());

			send_server_request($alumadplusip."/reg/redir/remote-redir.php", $fields);
			$_SESSION['sql'] .= "<br>". log_registration($serial, $userid);

			if ($_SESSION['logintype'] == 'dealer') {
				$_SESSION['loc'] = 'inventory.php'.urlencode($custid).'#inventory';
			} else {
				$_SESSION['loc'] = 'inventory.php#inventory';
			}
			break;
		case 'reregister':
			$fields = array();
			//$userid = get_userid(session_id());

			$serial = urldecode($_GET['serial']);
			$custid = get_boat_custid($serial, false);
			$itemid = get_boat_itemid($serial, false);

			$fields['action'] = 'register-warranty';
			$fields['sessionid'] = session_id();
			$fields['boat-serial'] = $serial;
			$fields['custid'] = $custid;
			$fields['itemid'] = $itemid;

			send_server_request($alumadplusip."/reg/redir/remote-redir.php?action=force-register&sessionid=".session_id()."&serial=".$serial."&custid=".$custid."&itemid=".$itemid, $fields);
			//$_SESSION['sql'] = "<br>". log_registration($serial, $userid);
			$_SESSION['sql'] = "<br>". "?action=force-register&sessionid=".session_id()."&serial=".$serial."&custid=".$custid."&itemid=".$itemid;
			$_SESSION['loc'] = 'index.php';
			$_SESSION['loc'] = "warranty-page.php?register=$serial&itemnbr=$itemid";
			break;
		case 'update-register':
			$date = intval(date("Ymd")); $time = intval(date("gis"));
			$fields = array();
			//$userid = get_userid(session_id());

			$serial = urldecode($_GET['serial']);
			$custid = get_boat_custid($serial, false);
			$itemid = get_boat_itemid($serial, false);

			$fields['action'] = 'register-warranty';
			$fields['sessionid'] = session_id();
			$fields['boat-serial'] = $serial;
			$fields['custid'] = $custid;
			$fields['itemid'] = $itemid;
			$reg = getregistrationinfo($serial, $itemid, false);
			$warrec = get_warranty_register_recnbr($serial, $itemid, false);
			if ($warrec != '') {
				remove_warranty_register($warrec);
			}
			register_warranty($date, $time, $recnbr, $serial, $itemid, $reg['WarmSordNbr'], $reg['WarmInvcDate'], $reg['RegisterMotor'], $reg['WarmOwnFname'], $reg['WarmOwnMname'], $reg['WarmOwnLname'], $reg['WarmOwnAdr1'], $reg['WarmOwnAdr2'], $reg['WarmOwnCity'], $reg['WarmOwnStat'], $reg['WarmOwnZip'], $reg['WarmEmail'], $reg['WarmPhone1'], $reg['WarmSaleDate'], $reg['WarmEngSerNbr'], $reg['WarmEngHorse'], $reg['WarmEngModelYear'], $reg['WarmEngDesc']);

			send_server_request($alumadplusip."/reg/redir/remote-redir.php?action=force-register&sessionid=".session_id()."&serial=".$serial."&custid=".$custid."&itemid=".$itemid, $fields);
			//$_SESSION['sql'] = "<br>". log_registration($serial, $userid);
			$_SESSION['sql'] = "<br>". "?action=force-register&sessionid=".session_id()."&serial=".$serial."&custid=".$custid."&itemid=".$itemid;
			$_SESSION['loc'] = 'index.php';
			break;
		case 'load-orders':
			$LO = "DBNAME=" . $DB . "\nREPORDRHED\nTYPE=O";
			$_SESSION['loc'] = "index.php";
			$_SESSION['last-order-load-time'] = date("Y-m-d H:i:s");
			break;
		case 'load-document':
			//$doctype = $_GET['doctype'];
			$ordn = $_GET['ordn'];
			$fields = array();
			$fields['action'] = 'get-order-docs'; $fields['sessionid'] = session_id(); $fields['ordn'] = $ordn;
			send_server_request($alumadplusip."/reg/redir/remote-redir.php", $fields);
			$_SESSION['sql'] = get_docs(session_id(), str_pad($ordn, 10, "0", STR_PAD_LEFT), true);
			$docs = get_docs(session_id(), str_pad($ordn, 10, "0", STR_PAD_LEFT), false);
			$_SESSION['doc'] = '';
			foreach ($docs->fetchAll() as $doc) {
				file_put_contents("../../docs/".$doc['pathname'], fopen("http://".$alumadplusip."/orderfiles/".$doc['pathname'], 'r'));
				$_SESSION['doc'] .= "<br>"."http://".$alumadplusip."/orderfiles/".$doc['pathname'];
			}
			$_SESSION['loc'] = "index.php";

			break;
		case 'approve-order':
			$fields = array();
			if (isset($_POST['ordn'])) {
				$ordn = $_POST['ordn'];
			} else {
				$ordn = $_GET['ordn'];
			}

			$fields['action'] = 'approve-order';
			$fields['sessionid'] = session_id();
			$fields['ordn'] = str_pad($ordn, 10, "0", STR_PAD_LEFT);
			$url = $alumadplusip."/reg/redir/remote-redir.php";
			approve_order($ordn);
			$repid = get_order_salesrep($ordn, false);
			send_server_request($url, $fields);
			log_approve_order($ordn, $userid, $repid, 'Y', '');
			$_SESSION['order-approved'] = $ordn;
			break;
		case 'log-acknowledge-view':
			$ordn = $_GET['ordn'];
			$doc = $_GET['doc'];
			$_SESSION['sql'] = log_acknowledgement_view($ordn, $userid, $doc, $location_id);
			$_SESSION['loc'] = "index.php";
			break;
		case 'email-approval-cancellation':
			$message = $_POST['reason'];
			$ordn = $_POST['ordn'];
			$repid = get_order_salesrep($ordn, false);
			$alumarep = get_repid_from_dplus($repid);
			$email = getSalesRepEmail($alumarep);
			$loginemail = get_login_email($userid);

			$rep2 = get_order_cust_salesrep2($ordn);
			$alumarep2 = getSalesRepEmail($rep2);
			$rep2email = getBrpRepEmail($alumarep2);

			$fields = array();
			$fields['action'] = 'email-decline-approval';
			$fields['ordn'] = $ordn;
			$fields['email'] = $email;
			$fields['repemail'] = $rep2email;
			$fields['message'] = $message;
			$fields['login-name'] = $login_name;
			$fields['sessionid'] = session_id();
			$url = $alumadplusip."/reg/redir/remote-redir.php";
			send_server_request($url, $fields);
			log_approve_order($ordn, $userid, $repid, 'N', $message);

			break;
		case 'cancel-approval':
			$ordn = $_POST['ordn'];
			$repid = get_order_salesrep($ordn, false);
			$alumarep = get_repid_from_dplus($repid);
			$email = getBrpRepEmail($alumarep);
			$loginemail = get_login_email($userid);

			$rep2 = get_order_cust_salesrep2($ordn);
			$alumarep2 = get_repid_from_dplus($rep2);
			$rep2email = getBrpRepEmail($alumarep2);
			$fields = array();
			$fields['action'] = 'email-decline-approval';
			$fields['ordn'] = $_POST['ordn'];

			$fields['email'] = getBrpRepEmail($alumarep);
			$fields['repemail'] = $rep2email;
			$fields['message'] = $_POST['reason'];
			$fields['login-name'] = $login_name;
			$fields['sessionid'] = session_id();
			$url = $alumadplusip."/reg/redir/remote-redir.php";
			send_server_request($url, $fields);
			log_approve_order($ordn, $userid, $repid, 'N', $message);

			break;
		case 'get-email-approval-cancellation':
			$message = $_GET['reason'];
			$ordn = $_GET['ordn'];
			$repid = get_order_salesrep($ordn, false);
			$alumarep = get_repid_from_dplus($repid);
			$email = getBrpRepEmail($alumarep);
			$loginemail = get_login_email($userid);
			$_SESSION['email'] = $email.",paul@cptechinc.com";
			$_SESSION['from-email'] = ",paul@cptechinc.com";
			//$email = 'paul@cptechinc.com';
			email_declined_approval("paul@cptechinc.com", "orders@alumacraft.com", $message.$userid, $ordn, $login_name);
			log_approve_order($ordn, $userid, $repid, 'N', $message);

			break;
		case 'logout':
			session_regenerate_id(true);
			$_SESSION['login'] = false;
			$_SESSION['sent-login'] = false;
			//header('location: https://www.alumacraft.com/admin/Logout.php');
			//exit;
			$_SESSION['loc'] = 'index.php?#inventory';
			break;
		default:
			$custid = $_GET['custid'];
			$_SESSION['loc'] = 'index.php?#inventory';
			$LO = "DBNAME=".$DB."\nLISTBOATS\nCUSTID=".$custid;
			break;
	}


	header('Location: ../'.$_SESSION['loc']);

 	exit;
?>
