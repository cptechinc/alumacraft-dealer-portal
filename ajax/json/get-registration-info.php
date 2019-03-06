<?php  
	header('Content-Type: application/json'); 
	include 'includes.php';
	
	$serial = $_GET['serialnbr'];
	$itemnbr = $_GET['itemnbr'];
	$registration = getregistrationinfo($serial, $itemnbr, false);
	//echo getregistrationinfo($serial, $itemnbr, true);
	echo json_encode($registration);
?>