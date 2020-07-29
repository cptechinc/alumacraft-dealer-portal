<?php
	$search = '';
	$keyword = '';
	//$stuff = set_group_concat_limit();

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

	if (isset($_GET['search'])) {
		$search = urldecode($_GET['search']);
		$keyword = strval(urldecode($_GET['q']));

		if ($search == 'all') {
			$matchingboats = get_itemnbrs_by_options($keyword, false);
			if (strlen($matchingboats) < 1) {$matchingboats = "''";}
			switch ($role_type) {
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$num_of_results = get_cust_boat_inventory_allsearch_count($dealerid, $keyword, $matchingboats, $reg, false);
							$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
						} else {
							$num_of_results = get_boat_inventory_allsearch_count($dplus_custs, $keyword, $matchingboats, $reg, false);
							$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dplus_custs.")";
						}
					} else {
						$num_of_results = get_cust_boat_inventory_allsearch_count($dealerid, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_allsearch_count($dealerid, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} else {
						$num_of_results = get_boat_inventory_allsearch_count($dplus_custs, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_allsearch_count($dealerid, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$num_of_results = get_boat_inventory_allsearch_count($dplus_custs, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$repname . "'s dealers";
					} else {
						// SKIP customer validation
						$dplus_custs = '';

						if ($overrideinventory) {
							$num_of_results = get_boat_inventory_allsearch_count_override($keyword, $matchingboats, $reg, false);
						} else {
							$num_of_results = get_boat_inventory_allsearch_count($dplus_custs, $keyword, $matchingboats, $reg, false);
						}
						$heading = " Searching for All boats that have specs that match '".$keyword."'";
					}
					break;
			}
		} elseif ($search == 'InvoiceDate') {
			$datesarray = explode("|", $keyword);
			$datefrom = $datesarray[0];
			$datethrough = $datesarray[1];

			//FOR DISPLAY
			$date_from = date("m/d/Y", strtotime($datefrom));
			$date_through = date("m/d/Y", strtotime($datethrough));

			switch ($role_type) {
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$num_of_results = get_cust_boat_inventory_datesearch_count($dealerid, $datefrom, $datethrough, $reg, false);
							$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dealerid.")";
						} else {
							$num_of_results = get_boat_inventory_datesearch_count($dplus_custs, $datefrom, $datethrough, $reg, false);
							$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dplus_custs.")";
						}
					} else {
						$num_of_results = get_cust_boat_inventory_datesearch_count($dealerid, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dealerid.")";
					}

					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_datesearch_count($dealerid, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dealerid.")";
					} else {
						$num_of_results = get_boat_inventory_datesearch_count($dplus_custs, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that havean Invoice Date between ".$date_from." and ".$date_through." at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_datesearch_count($dealerid, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$num_of_results = get_boat_inventory_datesearch_count($dplus_custs, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$repname . "'s dealers";
					} else {
						if ($overrideinventory) {
							$num_of_results = get_boat_inventory_datesearch_count_override($datefrom, $datethrough, $reg, false);
						} else {
							$num_of_results = get_boat_inventory_datesearch_count($dplus_custs, $datefrom, $datethrough, $reg, false);
						}
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through;
					}
					break;
			}
		} else {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$num_of_results = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, false);
							$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
						} else {
							$num_of_results = get_boat_inventory_search_count($dplus_custs, $search, $keyword, $reg, false);
							$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dplus_custs.")";
						}
					} else {
						$num_of_results = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, false);
						$sql = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, true);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, false);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$repname . "'s dealers";
					} else {
						$num_of_results = get_boat_inventory_search_count($dplus_custs, $search, $keyword, $reg, false);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, false);
						$sql = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, true);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$num_of_results = get_boat_inventory_search_count($dplus_custs, $search, $keyword, $reg, false);
						$sql = get_boat_inventory_search_count($dplus_custs, $search, $keyword, $reg, true);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$repname . "'s dealers";
					} else {
						if ($overrideinventory) {
							$num_of_results = get_boat_inventory_search_count_override($search, $keyword, $reg, false);
						} else {
							$num_of_results = get_boat_inventory_search_count($dplus_custs, $search, $keyword, $reg, false);
						}
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."'";
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
						$num_of_results = get_cust_boat_inventory_count($dealerid, $reg, false);
						$heading = " showing results for " . $dealername . " (".$dealerid.")";
					} else {
						$num_of_results = get_boat_inventory_count($dplus_custs, $reg, false);
						$sql = get_boat_inventory_count($dplus_custs, $reg, true);
						$heading = " showing results for " . $dealername . " (".$dplus_custs.")";
					}
				} else {
					$num_of_results = get_cust_boat_inventory_count($dealerid, $reg, false);
					$heading = " showing results for " . $dealername . " (".$dealerid.")";
				}

				break;
			case 'SREP':
				if (isset($_GET['location'])) {
					//$dealerid, $dealername comes from the role-type-logic script
					$num_of_results = get_cust_boat_inventory_count($dealerid, $reg, false);
					$heading = " showing results for " . $dealername . " (".$dealerid.")";
				} else {
					$num_of_results = get_boat_inventory_count($dplus_custs, $reg, false);
					$heading = " showing results for " . $login_name . "'s dealers";
				}
				break;
			case 'SADMIN':
				if (isset($_GET['location'])) {
					//$dealerid, $dealername comes from the role-type-logic script
					$num_of_results = get_cust_boat_inventory_count($dealerid, $reg, false);
					$heading = " showing results for " . $dealername . " (".$dealerid.")";
				} elseif (isset($_GET['rep'])) {
					$num_of_results = get_boat_inventory_count($dplus_custs, $reg, false);
					$heading = " showing results for " . $repname . "'s dealers";
				} else {
					if ($overrideinventory) {
						$num_of_results = get_boat_inventory_count_override($reg, false);
					} else {
						$num_of_results = get_boat_inventory_count($dplus_custs, $reg, false);
					}
					$heading = " showing results for all boats";
				}
				break;

		}
	}

	$total_pages = ceil($num_of_results / $showonpage);
?>
