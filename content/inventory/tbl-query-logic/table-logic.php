<?php 
	if (isset($_GET['search'])) {	
		if ($search == 'all') {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$boats = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
						} else {
							$boats = get_boat_inventory_allsearch($dplus_custs, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
						}
					} else {
						$boats = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);	
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
					} else {
						$boats = get_boat_inventory_allsearch($dplus_custs, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_boat_inventory_allsearch($dplus_custs, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
					} elseif($_GET['rep']) {
						$boats = get_boat_inventory_allsearch($dplus_custs, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
					} else {
						if ($overrideinventory) {
							$boats = get_boat_inventory_allsearch_override($showonpage, $this_page, $keyword, $matchingboats, $reg, false);
						} else {
							$boats = get_boat_inventory_allsearch($dplus_custs, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
						}	
					}
					break;
			}
		} elseif($search == 'InvoiceDate') {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$boats = get_cust_boat_inventory_allsearch($dealerid, $showonpage, $this_page, $keyword, $matchingboats, $reg, false);
						} else {
							$boats = get_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
						}
					} else {
						$boats = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					} else {
						$boats = get_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_datesearch($dealerid, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					} elseif($_GET['rep']) {
						$boats = get_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
					} else {
						if ($overrideinventory) {
							$boats = get_boat_inventory_datesearch_override($showonpage, $this_page, $datefrom, $datethrough, $reg, false);
						} else {
							$boats = get_boat_inventory_datesearch($dplus_custs, $showonpage, $this_page, $datefrom, $datethrough, $reg, false);
						}
					}
					break;
			}
		} else {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$boats = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, false);
						} else {
							$boats = get_boat_inventory_search($dplus_custs, $showonpage, $this_page, $search, $keyword, $reg, false);
						}
					} else {
						$boats = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, false);
					}
					
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, false);
					} else {
						$boats = get_boat_inventory_search($dplus_custs, $showonpage, $this_page, $search, $keyword, $reg, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$boats = get_cust_boat_inventory_search($dealerid, $showonpage, $this_page, $search, $keyword, $reg, false);
						break;
					} elseif(isset($_GET['rep'])) {
						$boats = get_boat_inventory_search($dplus_custs, $showonpage, $this_page, $search, $keyword, $reg, false);
					} else {
						if ($overrideinventory) {
							$boats = get_boat_inventory_search_override($showonpage, $this_page, $search, $keyword, $reg, false);
						} else {
							$boats = get_boat_inventory_search($dplus_custs, $showonpage, $this_page, $search, $keyword, $reg, false);
						}
					}
					break;
			}
		}
	} else {
		switch ($role_type) {
			case 'DEALER':
				//$dealerid comes from the role-type-logic script
				if (array_key_exists($role, $dealerroles)) {
					if (isset($_GET['location'])) {
						$boats = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, false);
					} else {
						$boats = get_boat_inventory($dplus_custs, $showonpage, $this_page, $reg, false);
					}
				} else {
					$boats = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, false);
				}
				break;
			case 'SREP':
				if (isset($_GET['location'])) {
					//$dealerid comes from the role-type-logic script
					$boats = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, false);
				} else {
					$boats = get_boat_inventory($dplus_custs, $showonpage, $this_page, $reg, false);
				}
				break;
			case 'SADMIN':
				if (isset($_GET['location'])) {
					//$dealerid comes from the role-type-logic script
					$boats = get_cust_boat_inventory($dealerid, $showonpage, $this_page, $reg, false);
				} elseif(isset($_GET['rep'])) {
					$boats = get_boat_inventory($dplus_custs, $showonpage, $this_page, $reg, false);
				} else {
					if ($overrideinventory) {
						$boats = get_boat_inventory_override($showonpage, $this_page, $reg, false);
					} else {
						$boats = get_boat_inventory($dplus_custs, $showonpage, $this_page, $reg, false);
					}
					
				}
				break;

		}
	}
?>