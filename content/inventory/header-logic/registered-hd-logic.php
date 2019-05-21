<?php
	$search = '';
	$keyword = '';
	if (isset($_GET['show-sold-unreg'])) {
		switch (urldecode($_GET['show-sold-unreg'])) {
			case 'y':
				$reg = "'Y','S'";
				break;
			case 'n':
				$reg = "'Y'";
				break;
			default:
				$reg = "'Y','S'";
				break;
		}
	} else {
		$reg = "'Y','S'";
	}
	//set_group_concat_limit();
	if (isset($_GET['search'])) {
		$search = urldecode($_GET['search']);
		$keyword = urldecode($_GET['q']);

		if ($search == 'all') {
			$matchingboats = get_itemnbrs_by_options($keyword, false);
			if (strlen($matchingboats) < 1) {$matchingboats = "''";}
			switch ($role_type) {
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					$num_of_results = get_cust_boat_inventory_allsearch_count($dealerid, $keyword, $matchingboats, $reg, false);
					$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_allsearch_count($dealerid, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} else {
						$dplus_custs = get_reps_dplus_custids_list_alt($userid, false);
						$num_of_results =  get_reps_boat_inventory_allsearch_count($dplus_custs, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_allsearch_count($dealerid, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$dplus_custs = get_reps_dplus_custids_list_alt($repid, false);
						$num_of_results = get_reps_boat_inventory_allsearch_count($dplus_custs, $keyword, $matchingboats, $reg, false);
						$heading = " Searching for All boats that have specs that match '".$keyword."' at ".$repname . "'s dealers";
					} else {
						$dplus_custs = get_dplus_custids_list_alt(false);
						$num_of_results = get_boat_inventory_allsearch_count($dplus_custs, $keyword, $matchingboats, $reg, false);
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
					$num_of_results = get_cust_boat_inventory_datesearch_count($dealerid, $datefrom, $datethrough, $reg, false);
					$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dealerid.")";
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_datesearch_count($dealerid, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dealerid.")";
					} else {
						$dplus_custs = get_reps_dplus_custids_list_alt($userid, false);

						$num_of_results = get_reps_boat_inventory_datesearch_count($dplus_custs, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that havean Invoice Date between ".$date_from." and ".$date_through." at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_datesearch_count($dealerid, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$dplus_custs = get_reps_dplus_custids_list_alt($repid, false);
						$num_of_results = get_reps_boat_inventory_datesearch_count($dplus_custs, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through." at ".$repname . "'s dealers";
					} else {
						$dplus_custs = get_dplus_custids_list_alt(false);
						$num_of_results = get_boat_inventory_datesearch_count($dplus_custs, $datefrom, $datethrough, $reg, false);
						$heading = " Searching for All boats that have an Invoice Date between ".$date_from." and ".$date_through;
					}
					break;
			}

		} else {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid, $dealername comes from the role-type-logic script
					$num_of_results = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, false);
					$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, false);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} else {
						$dplus_custs = get_reps_dplus_custids_list_alt($userid, false);
						$num_of_results = get_reps_boat_inventory_search_count($dplus_custs, $search, $keyword, $reg, false);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches'".$keyword."' at ".$repname . "'s dealers";
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_search_count($dealerid, $search, $keyword, $reg, false);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."' at ".$dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$dplus_custs = get_reps_dplus_custids_list_alt($repid, false);
						$num_of_results = get_reps_boat_inventory_search_count($dplus_custs, $search, $keyword, $reg, false);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches'".$keyword."' at ".$repname . "'s dealers";
					} else {
						$dplus_custs = get_dplus_custids_list_alt(false);
						$num_of_results = $num_of_results = get_boat_inventory_count_search($dplus_custs, $search, $keyword, $reg, false);
						$heading = " Searching for All boats that have ".indefinite_article($searchtype[$search])." ". " that matches '".$keyword."'";

					}
					break;

			}
		}
	} else {
		switch ($role_type) {
			case 'DEALER':
				//$dealerid, $dealername comes from the role-type-logic script
				$num_of_results = get_cust_boat_inventory_count($dealerid, $reg, false);
				$heading = " showing results for " . $dealername . " (".$dealerid.")";
				break;
			case 'SREP':
				if (isset($_GET['location'])) {
					//$dealerid, $dealername comes from the role-type-logic script
					$num_of_results = get_cust_boat_inventory_count($dealerid, $reg, false);
					$heading = " showing results for " . $dealername . " (".$dealerid.")";
				} else {
					$dplus_custs = get_reps_dplus_custids_list_alt($userid, false);
					$num_of_results = get_reps_boat_inventory_count($dplus_custs, $reg, false);
					$heading = " showing results for " . $login_name . "'s dealers";
				}
				break;
			case 'SADMIN':
				if (isset($_GET['location'])) {
						//$dealerid, $dealername comes from the role-type-logic script
						$num_of_results = get_cust_boat_inventory_count($dealerid, $reg, false);
						$heading = " showing results for " . $dealername . " (".$dealerid.")";
					} elseif (isset($_GET['rep'])) {
						$dplus_custs = get_reps_dplus_custids_list_alt($repid, false);
						$num_of_results = get_reps_boat_inventory_count($dplus_custs, $reg, false);
						$heading = " showing results for " . $repname . "'s dealers";
					} else {
						$dplus_custs = get_dplus_custids_list_alt(false);
						$num_of_results = get_boat_inventory_count($dplus_custs, $reg, false);
						$heading = " showing results for all orders";
					}
				break;

		}

	}
	$total_pages = ceil($num_of_results / $showonpage);

?>
