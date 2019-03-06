<?php  
	header('Content-Type: application/json'); 
	include 'includes.php';
	
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
	} elseif ($subset == 'registered') {
		$page = 'registered';
	}
	
	if (isset($_POST['search'])) {
		if ($custid != 'all-dealers' && strlen($custid) > 0) {
			$href = 'ajax/load/inventory/'.$page.'.php?location='.urlencode($custid).'&search='.$search_type.'&q='.urlencode($q);
		} elseif($rep != 'all-reps' && strlen($rep) > 0) {
			$href = 'ajax/load/inventory/'.$page.'.php?rep='.urlencode($rep).'&search='.$search_type.'&q='.urlencode($q);
		} else {
			$href = 'ajax/load/inventory/'.$page.'.php?search='.$search_type.'&q='.urlencode($q);
		}
	} else {
		if ($custid != 'all-dealers' && strlen($custid) > 0) {
			$href = 'ajax/load/inventory/'.$page.'.php?location='.urlencode($custid)."&";
		} elseif($rep != 'all-reps' && strlen($rep) > 0) {
			$href = 'ajax/load/inventory/'.$page.'.php?rep='.urlencode($rep)."&";
		} else {
			$href = 'ajax/load/inventory/'.$page.'.php?';
		}
	}
	
	if (isset($_POST['show-unregistered'])) {
		$show_unreg = $_POST['show-unregistered'];
		if ($show_unreg == 'both') {
			$reg = '';
		} else {
			$reg = "show-sold-unreg=". $show_unreg;
		}
		$href .= $reg;
	}
	
	
	$results = array('href' => $href); 
	
	echo json_encode($results);
