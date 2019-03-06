<?php  
	header('Content-Type: application/json'); 
	include 'includes.php';
	
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
	
	if ($subset == 'pending') {
		$page = 'pending';
	} elseif ($subset == 'approved') {
		$page = 'approved';
	}
	
	$href = '';
	
	
	if (isset($_POST['search'])) {
			if ($custid != 'all-dealers' && strlen($custid) > 0) {
			$href = 'ajax/load/load-orders/'.$page.'.php?location='.urlencode($custid).'&search='.$search_type.'&q='.urlencode($q);
		} elseif($rep != 'all-reps' && strlen($rep) > 0) {
			$href = 'ajax/load/load-orders/'.$page.'.php?rep='.urlencode($rep).'&search='.$search_type.'&q='.urlencode($q);
		} else {
			$href = 'ajax/load/load-orders/'.$page.'.php?search='.$search_type.'&q='.urlencode($q);
		}
	} else {
		if ($custid != 'all-dealers' && strlen($custid) > 0) {
			$href = 'ajax/load/load-orders/'.$page.'.php?location='.urlencode($custid)."&";
		} elseif($rep != 'all-reps' && strlen($rep) > 0) {
			$href = 'ajax/load/load-orders/'.$page.'.php?rep='.urlencode($rep)."&";
		} else {
			$href = 'ajax/load/load-orders/'.$page.'.php?';
		}
	}
	
	if (isset($_POST['boats-only'])) {
		$boatsonly = $_POST['boats-only'];
		if ($boatsonly == 'b') {
			$href .= 'boats-only=b';	
		} elseif ($boatsonly == 'y') {
			$href .= 'boats-only=y';
		} else {
			$href = substr($href, 0, -1);
		}
	}
	
	$results = array('href' => $href); 
	
	echo json_encode($results);
	
	
?>