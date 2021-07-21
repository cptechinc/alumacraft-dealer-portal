<?php
	if (isset($_GET['search'])) {
		if ($search == 'all') {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					$boats = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
					$sql = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, true);
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
						$sql = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, true);
					} else {
						$boats = get_reps_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
						$sql = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, true);
					} elseif($_GET['rep']) {
						$boats = get_reps_boat_inventory_allsearch($dplus_custs, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
					} else {
						$boats = get_boat_inventory_allsearch($dplus_custs, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
					}
					break;
			}
		} elseif($search == 'InvoiceDate') {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					$boats = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					$sql = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, true);
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
						$sql = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, true);
					} else {
						$boats = get_reps_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
						$sql = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, true);
					} elseif($_GET['rep']) {
						$boats = get_reps_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					} else {
						$boats = get_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					}
					break;
			}
		} else {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					$boats = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, false);
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, false);
						$sql = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, true);
					} else {
						$boats = get_reps_boat_inventory_search($dplus_custs, $showonpage, $this_page, $search, $keyword, $reg, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, false);
						$sql = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, true);
					} elseif(isset($_GET['rep'])) {
						$boats = get_reps_boat_inventory_search($dplus_custs, $showonpage, $this_page, $search, $keyword, $reg, false);
					} else {
						$boats = get_boat_inventory_search($dplus_custs, $showonpage, $this_page, $search, $keyword, $reg, false);
					}
					break;
			}
		}
	} else {
		switch ($role_type) {
			 case 'DEALER':
				//$dealerid comes from the role-type-logic script
				$boats = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, false);
				break;
			 case 'SREP':
				if (isset($_GET['location'])) {
					//$dealerid comes from the role-type-logic script
					$boats = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, false);
				} else {
					$boats = get_reps_boat_inventory($dplus_custs, $showonpage, $this_page, $reg, false);
				}
				break;
			case 'SADMIN':
				if (isset($_GET['location'])) {
					//$dealerid comes from the role-type-logic script
					$boats = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, false);
					$sql = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, true);
				} elseif(isset($_GET['rep'])) {
					$boats = get_reps_boat_inventory($dplus_custs, $showonpage, $this_page, $reg, false);
				} else {
					$boats = get_boat_inventory($dplus_custs, $showonpage, $this_page, $reg, false);
				}
				break;
		 }
	}

?>
