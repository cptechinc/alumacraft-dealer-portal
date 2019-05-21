<?php
	if (isset($_GET['search'])) {
		if ($search == 'all') {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$orders = get_cust_orders_searchall($dealerid, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
						} else {
							$orders = get_orders_searchall($dplus_custs, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
						}
					} else {
						$orders = get_cust_orders_searchall($dealerid, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$orders = get_cust_orders_searchall($dealerid, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					} else {
						$orders = get_orders_searchall($dplus_custs, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$orders = get_cust_orders_searchall($dealerid, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					} elseif($_GET['rep']) {
						$orders = get_orders_searchall($dplus_custs, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					} else {
						$orders = get_orders_searchall($dplus_custs, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);

					}
					break;
			}
		} elseif($search == 'OehdOrdrDate' || $search == 'OehdArrvDate') {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$orders = get_cust_orders_datesearch($dealerid, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
						} else {
							$orders = get_orders_datesearch($dplus_custs, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
						}
					} else {
						$orders = get_cust_orders_datesearch($dealerid, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$orders = get_cust_orders_datesearch($dealerid, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
					} else {
						$orders = get_orders_datesearch($dplus_custs, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$orders = get_cust_orders_datesearch($dealerid, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
					} elseif($_GET['rep']) {
						$orders = get_orders_datesearch($dplus_custs, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
					} else {
						$orders = get_orders_datesearch($dplus_custs, $datecol, $datefrom, $datethrough, $showonpage, $this_page, $approved, $boatsonly, false);
					}
					break;
			}
		} else {
			switch ($role_type) {
				case 'DEALER':
					//$dealerid comes from the role-type-logic script
					if (array_key_exists($role, $dealerroles)) {
						if (isset($_GET['location'])) {
							$orders = get_orders_search($dealerid, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
						} else {
							$orders = get_orders_search($dplus_custs, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
						}
					} else {
						$orders = get_orders_search($dealerid, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					}
					break;
				case 'SREP':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$orders = get_orders_search($dealerid, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					} else {
						$orders = get_orders_search($dplus_custs, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					}
					break;
				case 'SADMIN':
					if (isset($_GET['location'])) {
						//$dealerid comes from the role-type-logic script
						$orders = get_orders_search($dealerid, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
						break;
					} elseif($_GET['rep']) {
						$orders = get_orders_search($dplus_custs, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);
					} else {
						$orders = get_orders_search($dplus_custs, $search, $keyword, $showonpage, $this_page, $approved, $boatsonly, false);

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
						$orders = get_cust_orders($dealerid, $showonpage, $this_page, $approved, $boatsonly, false);
					} else {
						$orders = get_orders($dplus_custs, $showonpage, $this_page, $approved, $boatsonly, false);
					}
				} else {
					$orders = get_cust_orders($dealerid, $showonpage, $this_page, $approved, $boatsonly, false);
				}
				break;
			case 'SREP':
				if (isset($_GET['location'])) {
					//$dealerid comes from the role-type-logic script
					$orders = get_cust_orders($dealerid, $showonpage, $this_page, $approved, $boatsonly, false);
				} else {
					$orders = get_orders($dplus_custs, $showonpage, $this_page, $approved, $boatsonly, false);
				}
				break;
			case 'SADMIN':
				if (isset($_GET['location'])) {
					//$dealerid comes from the role-type-logic script
					$orders = get_cust_orders($dealerid, $showonpage, $this_page, $approved, $boatsonly, false);
				} elseif($_GET['rep']) {
					$orders = get_orders($dplus_custs, $showonpage, $this_page, $approved, $boatsonly, false);
				} else {
					$orders = get_orders($dplus_custs, $showonpage, $this_page, $approved, $boatsonly, false);
				}
				break;
		}
	}


?>
