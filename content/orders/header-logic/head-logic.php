<?php
	$search = '';
	$keyword = '';
	$boatsonly = true;
	$orderdesc = 'boat ';

	//load cust lists
	switch ($role_type) {
		case 'DEALER':
			if (array_key_exists($role, $dealerroles)) {
				$clientid = get_dealer_clientid($location_id);
				$dplus_custs = get_dplus_custids_by_clientid($clientid, false);
			}
			break;
		case 'SREP':
				if ($issubrep) {
					$dplus_custs = get_reps_dplus_custids_by_id($subreplocations[$userid], false);
				} else {
					$dplus_custs = get_reps_dplus_custids_list_alt($userid, false);
				}
			break;
		case 'SADMIN':
			if (isset($_GET['rep'])) {
				if ($issubrep) {
					$dplus_custs = get_reps_dplus_custids_by_id($subreplocations[$userid], false);
				} else {
					$dplus_custs = get_reps_dplus_custids_list_alt($repid, false);
				}
			} else {
				$dplus_custs = get_dplus_custids_list_alt(false);
			}
			break;

	}


	if (isset($_GET['boatsonly'])) {
		if ($_GET['boatsonly'] == 'y') {
			$boatsonly = true;
			$orderdesc = '';
		} else {
			$boatsonly = false;
		}
	}
	if (isset($_GET['search'])) {
		$search = urldecode($_GET['search']);
		$keyword = strval(urldecode($_GET['q']));

		if ($search == 'all') {

			$matchingboats = get_itemnbrs_by_options($keyword, false);

			if (strlen($matchingboats) < 1) {$matchingboats = "''";}
			switch ($role_type) { //ALL SEARCH
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$num_of_results = get_cust_orders_searchall_count($dealerid, $keyword, $matchingboats, $approved, $boatsonly, false);
							$heading = " Searching for All $orderdesc orders that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
						} else {
							$num_of_results = get_orders_searchall_count($dplus_custs, $keyword, $approved, $boatsonly, false);
							$heading = " Searching for All $orderdesc orders that have specs that match '".$keyword."' at ".$dealername . " (".$dplus_custs.")";
						}
					} else {
						$num_of_results = get_cust_orders_searchall_count($dealerid, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_orders_searchall_count($dealerid, $keyword, $matchingboats, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} else {
						$num_of_results = get_orders_searchall_count($dplus_custs, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have specs that match '".$keyword."' at ".$repname . "'s dealers";

					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script

						$num_of_results = get_cust_orders_searchall_count($dealerid, $keyword, $matchingboats, $approved, $boatsonly, false);
						// echo get_cust_orders_searchall_count($dealerid, $keyword, $approved, $boatsonly, true);
						$heading = " Searching for All $orderdesc orders that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$num_of_results = get_orders_searchall_count($dplus_custs, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have specs that match '".$keyword."' at ".$repname . "'s dealers";
					} else {
						$dplus_custs = get_dplus_custids_list_alt(false);
						$num_of_results = get_orders_searchall_count($dplus_custs, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that match '".$keyword."'";
					}
					break;
			}
		} elseif ($search == 'OehdOrdrDate' || $search == 'OehdArrvDate') { //DATE SEARCH
			$datesarray = explode("|", $keyword);
			$datefrom = $datesarray[0];
			$datethrough = $datesarray[1];
			$datecol = $search;

			//FOR DISPLAY
			$date_from = date("m/d/Y", strtotime($datefrom));
			$date_through = date("m/d/Y", strtotime($datethrough));

			switch ($role_type) {
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$num_of_results = get_cust_orders_datesearch_count($dealerid, $datecol, $datefrom, $datethrough, $approved, $boatsonly, false);
							$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from." and " . $date_through . " at ".$dealername . " (".$dealerid.")";
						} else {
							$num_of_results = get_orders_datesearch_count($dplus_custs, $datecol, $datefrom, $datethrough, $approved, $boatsonly, false);
							$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from." and " . $date_through . " at ".$dealername . " (".$dplus_custs.")";
						}
					} else {
						$num_of_results = get_cust_orders_datesearch_count($dealerid, $datecol, $datefrom, $datethrough, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from." and " . $date_through . " at ".$dealername . " (".$dealerid.")";
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_orders_search_count($dealerid, $searchcol, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from." and " . $date_through . " at ".$dealername . " (".$dealerid.")";
					} else {
						$num_of_results = get_orders_datesearch_count($dplus_custs, $datecol, $datefrom, $datethrough, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from." and " . $date_through . " at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_orders_datesearch_count($dealerid, $datecol, $datefrom, $datethrough, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from." and " . $date_through . " at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$num_of_results = get_orders_datesearch_count($dplus_custs, $datecol, $datefrom, $datethrough, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from." and " . $date_through . " at ".$repname . "'s dealers";
					} else {
						$num_of_results = get_orders_datesearch_count($dplus_custs, $datecol, $datefrom, $datethrough, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." between " .$date_from . " and ".$date_through;
					}
					break;
			}
		} else {
			switch ($role_type) { //SEARCH BY COLMNN
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$num_of_results = get_cust_orders_search_count($dealerid, $search, $keyword, $approved, $boatsonly, false);
							$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dplus_custs.")";
						} else {
							$num_of_results = get_orders_search_count($dplus_custs, $search, $keyword, $approved, $boatsonly, false);
							$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$repname . "'s dealers";
						}
					} else {
						$num_of_results = get_cust_orders_search_count($dealerid, $search, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					}

					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_orders_search_count($dealerid, $search, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} else {
						$num_of_results = get_orders_search_count($dplus_custs, $search, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_orders_search_count($dealerid, $search, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$num_of_results = get_orders_search_count($dplus_custs, $search, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$repname . "'s dealers";
					} else {
						$num_of_results = get_orders_search_count($dplus_custs, $search, $keyword, $approved, $boatsonly, false);
						$heading = " Searching for All $orderdesc orders that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."'";
					}
					break;
			}
		}
	} else {
		switch ($role_type) {
			case 'DEALER':
				//$dealerid, $dealername comes from the role-type-logic script
				if (array_key_exists($role, $dealerroles)) {
					if (isset($_GET['location'])) {
						$num_of_results = get_cust_orders_count($dealerid, $approved, $boatsonly, false);
						$heading = " showing $orderdesc orders for " . $dealername . " (".$dealerid.")";
					} else {
						$num_of_results = get_orders_count($dplus_custs, $approved, $boatsonly, false);
						$heading = " showing $orderdesc orders for " . $dealername . " (".$dplus_custs.")";
					}
				} else {
					$num_of_results = get_cust_orders_count($dealerid, $approved, $boatsonly, false);
					$heading = " showing $orderdesc orders for " . $dealername . " (".$dealerid.")";
				}

				break;
			case 'SREP':
				if (isset($_GET['location'])) {
					//$dealerid, $dealername comes from the role-type-logic script
					$num_of_results = get_cust_orders_count($dealerid, $approved, $boatsonly, false);
					$heading = " showing $orderdesc orders for " . $dealername . " (".$dealerid.")";
				} else {
					$num_of_results = get_orders_count($dplus_custs, $approved, $boatsonly, false);
					$heading = " showing $orderdesc orders for " . $repname . "'s dealers";
				}
				break;
			case 'SADMIN':
				if (isset($_GET['location'])) {
					//$dealerid, $dealername comes from the role-type-logic script
					$num_of_results = get_cust_orders_count($dealerid, $approved, $boatsonly, false);
					$heading = " showing $orderdesc orders for " . $dealername . " (".$dealerid.")";
				} elseif (isset($_GET['rep'])) {
					$num_of_results = get_orders_count($dplus_custs, $approved, $boatsonly, false);
					$heading = " showing $orderdesc orders for " . $repname . "'s dealers";
				} else {
					$sql = get_orders_count($dplus_custs, $approved, $boatsonly, true);
					$num_of_results = get_orders_count($dplus_custs, $approved, $boatsonly, false);
					$heading = " showing all $orderdesc orders";
				}
				break;

		}
	}
	$total_pages = ceil($num_of_results / $showonpage);
?>
