<?php  
	header('Content-Type: application/json'); 
	include 'includes.php';

	//$serialnumber = $_GET['serial'];
	$serialnumber = 'ACBL6028G617';

	//$itemnbr = $_GET['itemnbr'];
	$itemnbr = '1-17-201-6778';
	$warrantyrecord = getregistrationinfo($serialnumber, $itemnbr, false);
	//echo json_encode($warrantyrecord);
	//echo get_item_from_basepn($itemnbr, true);	
	$dplus_partno = get_item_from_basepn($itemnbr, false);	
	//echo var_dump($dplus_partno);
	$giftamount = get_gift_amount($dplus_partno, false);
	$dealername = get_dealer_name_from_dplus($warrantyrecord['WarmCustID']); 
	$information = array (
		"accessToken"=> "abcd1234", 
		"ship_company "=> "",
		"ship_name"=> $warrantyrecord['WarmOwnFname'] . ' ' . $warrantyrecord['WarmOwnLname'],
		"ship_address"=> $warrantyrecord['WarmOwnAdr1'] . ' ' . $warrantyrecord['WarmOwnAdr2'],
		"ship_city"=> $warrantyrecord['WarmOwnCity'],
		"ship_state"=> $warrantyrecord['WarmOwnStat'],
		"ship_zip"=> $warrantyrecord['Zip'],
		"bill_company"=> "",
		"bill_name"=> "Alumacraft",
		"bill_address"=> "315 West St. Julien Street",
		"bill_city"=> "St. Peter",
		"bill_state"=> "MN",
		"bill_zip"=> "56082",
		"phone"=> $warrantyrecord['WarmPhone1'],
		"email"=> $warrantyrecord['WarmEmail'],
		"boat_id"=> $serialnumber,
		"opt_in"=> "Y",
		"dealer_name"=> $dealername,
		"amount"=> $giftamount
	);  

echo json_encode($information);