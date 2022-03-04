<?php
	use atk4\dsql\Query_MySQL as Query;
/* =============================================================
  	INVENTORY FUNCTIONS
 ============================================================ */

	function get_boat_inventory($allowedcusts, $limit, $page, $registered, $debug) { //ADD ADMIN CHECK
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE Registered IN ($registered) AND CustId IN ($allowedcusts) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_boat_inventory_override($limit, $page, $registered, $debug) { //ADD ADMIN CHECK
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE Registered IN ($registered) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_boat_inventory_count($allowedcusts, $registered, $debug) { //ADD ADMIN CHECK
		global $db;
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE Registered IN ($registered) AND CustId IN ($allowedcusts)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_boat_inventory_count_override($registered, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE Registered IN ($registered)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_boat_inventory_search($allowedcusts, $limit, $page, $searchcol, $keyword, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE UCASE($searchcol) LIKE UCASE('$search') AND Registered IN ($registered) AND CustId IN ($allowedcusts) LIMIT ".$start_point.",".$limit;

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_boat_inventory_search_override($limit, $page, $searchcol, $keyword, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE UCASE($searchcol) LIKE UCASE('$search') AND Registered IN ($registered) LIMIT ".$start_point.",".$limit;

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_boat_inventory_search_count($allowedcusts, $searchcol, $keyword, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE UCASE($searchcol) LIKE UCASE('$search') AND Registered IN ($registered) AND CustId IN ($allowedcusts) ";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_boat_inventory_search_count_override($searchcol, $keyword, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE UCASE($searchcol) LIKE UCASE('$search') AND Registered IN ($registered)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_boat_inventory_datesearch($allowedcusts, $limit, $page, $datefrom, $datethrough, $registered, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE Registered IN ($registered) AND CustId IN ($allowedcusts) AND (STR_TO_DATE(InvoiceDate, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d')) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_boat_inventory_datesearch_override($limit, $page, $datefrom, $datethrough, $registered, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE Registered IN ($registered) AND (STR_TO_DATE(InvoiceDate, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d')) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_boat_inventory_datesearch_count($allowedcusts, $datefrom, $datethrough, $registered, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE Registered IN ($registered) AND CustId IN ($allowedcusts) AND (STR_TO_DATE(InvoiceDate, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_boat_inventory_datesearch_count_override($datefrom, $datethrough, $registered, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE Registered IN ($registered) AND (STR_TO_DATE(InvoiceDate, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_boat_inventory_allsearch($custlist, $limit, $page, $keyword, $itemlist, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }

		if ($custlist) {
			$sql = "SELECT * FROM (SELECT * FROM boat_inventory WHERE CustId IN ($custlist) AND Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist) LIMIT ".$start_point.",".$limit;
		} else {
			$sql = "SELECT * FROM (SELECT * FROM boat_inventory WHERE Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist) LIMIT ".$start_point.",".$limit;
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_boat_inventory_allsearch_override($limit, $page, $keyword, $itemlist, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM (SELECT * FROM boat_inventory WHERE Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_boat_inventory_allsearch_count($custlist, $keyword, $itemlist, $registered, $debug) {
		global $db; $count = '';
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($custlist) {
			$sql = "SELECT COUNT(*) AS count FROM (SELECT * FROM boat_inventory WHERE CustId IN ($custlist) AND Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist)";
		} else {
			$sql = "SELECT COUNT(*) AS count FROM (SELECT * FROM boat_inventory WHERE Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist)";
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_boat_inventory_allsearch_count_override($keyword, $itemlist, $registered, $debug) {
		global $db; $count = '';
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		$sql = "SELECT COUNT(*) AS count FROM (SELECT * FROM boat_inventory WHERE Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_cust_boat_inventory($custID, $limit, $page, $registered, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_cust_boat_inventory_count($custID, $registered, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_cust_boat_inventory_search($custID, $limit, $page, $searchcol, $keyword, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered) AND UCASE($searchcol) LIKE UCASE('$search') LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_cust_boat_inventory_search_count($custID, $searchcol, $keyword, $registered, $debug) {
		global $db; $count = '';
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered) AND UCASE($searchcol) LIKE UCASE('$search')";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_cust_boat_inventory_datesearch($custID, $limit, $page, $datefrom, $datethrough, $registered, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered) AND (STR_TO_DATE(InvoiceDate, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d')) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_cust_boat_inventory_datesearch_count($custID, $datefrom, $datethrough, $registered, $debug) {
		global $db; $count = '';
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered) AND (STR_TO_DATE(InvoiceDate, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_cust_boat_inventory_allsearch($custID, $limit, $page, $keyword, $itemlist, $registered, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * FROM (SELECT * FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_cust_boat_inventory_allsearch_count($custID, $keyword, $itemlist, $registered, $debug) {
		global $db; $count = '';
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		$sql = "SELECT COUNT(*) AS count FROM (SELECT * FROM boat_inventory WHERE CustId = '$custID' AND Registered IN ($registered)) t WHERE UCASE(CONCAT(SerialNbr, ' ', ItemNbr, ' ', ItemDesc1, ' ', OrderNbr, ' ', DATE_FORMAT(STR_TO_DATE(InvoiceDate,'%Y%m%d'), '%m/%d/%Y'))) LIKE UCASE('$search') OR ItemNbr IN ($itemlist)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_boat_ordernumber($serial, $debug) {
		global $db; $count = '';
		$sql = "SELECT OrderNbr AS count FROM boat_inventory WHERE SerialNbr = '$serial'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

/* =============================================================
  	ORDERS FUNCTIONS
 ============================================================ */
	function get_orders($custlist, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		if ($boatsonly) {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' LIMIT ".$start_point.",".$limit;
		} else {
			$sql = "SELECT SO_HEADER.* FROM SO_HEADER WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' LIMIT ".$start_point.",".$limit;
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' LIMIT ".$start_point.",".$limit;
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_orders_count($custlist, $approved, $boatsonly, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		if ($boatsonly) {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' ";
		} else {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' ";
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;

		}
	}

	function get_orders_search($custlist, $searchcol, $keyword, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		//if ($boatsonly) {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search') LIMIT ".$start_point.",".$limit;
		/*} else {
			$sql = "SELECT SO_HEADER.* FROM SO_HEADER WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search') LIMIT ".$start_point.",".$limit;
		}*/

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_orders_search_count($custlist, $searchcol, $keyword, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		//if ($boatsonly) {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search')";
		//} else {
		//	$sql = "SELECT COUNT(*) AS count FROM SO_HEADER WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search')";
		//}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;

		}
	}

	function get_orders_searchall($custlist, $keyword, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		//if ($boatsonly) {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate, ' ', OehdUserCode2) LIKE '$search' LIMIT $start_point,$limit";
		// } else {
			//$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate, ' ', OehdUserCode2) LIKE '$search' LIMIT ".$start_point.",".$limit;
		//}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_orders_searchall_count($custlist, $keyword, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($boatsonly) {
			$sql = "SELECT COUNT(*) as count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved'  AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate, ' ', OehdUserCode2) LIKE '$search' ";
		} else {
			$sql = "SELECT COUNT(*) as count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate, ' ', OehdUserCode2) LIKE '$search' ";
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;

		}
	}




	//AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))
	function get_orders_datesearch($custlist, $datecol, $datefrom, $datethrough, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		//if ($boatsonly) {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d')) LIMIT ".$start_point.",".$limit;
		//} else {
		//	$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d')) LIMIT ".$start_point.",".$limit;
		//}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_orders_datesearch_count($custlist, $datecol, $datefrom, $datethrough, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		//if ($boatsonly) {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))";
		//} else {
			//$sql = "SELECT COUNT(*) AS count FROM SO_HEADER WHERE ArcuCustId IN ($custlist) AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))";
		//}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;

		}
	}

	function get_cust_orders($custid, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }

			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_DETAIL.InitItemNbr, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' LIMIT ".$start_point.",".$limit;

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_cust_orders_count($custid, $approved, $boatsonly, $debug) {
		global $db;
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }

			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' ";


		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;

		}
	}

	function get_cust_orders_search($custid, $searchcol, $keyword, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		if ($boatsonly) {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search') LIMIT ".$start_point.",".$limit;
		} else {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search') LIMIT ".$start_point.",".$limit;
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_cust_orders_search_count($custid, $searchcol, $keyword, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		if ($boatsonly) {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search')";
		} else {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND UCASE($searchcol) LIKE UCASE('$search')";
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;

		}
	}

	function get_cust_orders_datesearch($custid, $datecol, $datefrom, $datethrough, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		if ($boatsonly) {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d')) LIMIT ".$start_point.",".$limit;
		} else {
			$sql = "SELECT SO_HEADER.* FROM SO_HEADER WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))LIMIT ".$start_point.",".$limit;
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_cust_orders_datesearch_count($custid, $datecol, $datefrom, $datethrough, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		if ($boatsonly) {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))";
		} else {
			$sql = "SELECT COUNT(*) AS count FROM SO_HEADER WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND (STR_TO_DATE($datecol, '%Y%m%d') BETWEEN STR_TO_DATE('$datefrom', '%Y%m%d') AND STR_TO_DATE('$datethrough', '%Y%m%d'))";
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;

		}
	}

	function get_cust_orders_searchall($custid, $keyword, $matchingboats, $limit, $page, $approved, $boatsonly, $debug) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		if ($boatsonly) {
			if ($matchingboats != "''") {
				$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND InitItemNbr IN ($matchingboats) AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate) LIKE '$search' LIMIT ".$start_point.",".$limit;
			} else {
				$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr JOIN boat_master ON SO_DETAIL.InitItemNbr = ItemNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate) LIKE '$search' LIMIT ".$start_point.",".$limit;
			}
		} else {
			$sql = "SELECT OedtDesc AS descr, InitItemNbr AS itemid, SO_HEADER.* FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate) LIKE '$search' LIMIT ".$start_point.",".$limit;
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_cust_orders_searchall_count($custid, $keyword, $matchingboats, $approved, $boatsonly, $debug = false) {
		global $db;
		$search = '%'.str_replace(' ', '%', $keyword).'%';

		if ($boatsonly) {
			if ($matchingboats != "''") {
				$sql = "SELECT COUNT(*) as count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND InitItemNbr IN ($matchingboats) AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate) LIKE '$search' ";
			} else {
				$sql = "SELECT COUNT(*) as count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate) LIKE '$search' ";
			}

		} else {
			$sql = "SELECT COUNT(*) as count FROM SO_HEADER JOIN SO_DETAIL ON SO_DETAIL.OehdNbr = SO_HEADER.OehdNbr WHERE ArcuCustId = '$custid' AND OehdUserCode3 = '$approved' AND CONCAT(SO_DETAIL.OehdNbr, ' ', OedtDesc, ' ', InitItemNbr, ' ', ArcuCustId, ' ', ArstShipId, ' ', OehdStLastName, ' ', OehdStZipCode, ' ', OehdCustPo, ' ', OehdOrdrDate, ' ', OehdArrvDate) LIKE '$search' ";
		}

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			return $count;
		}
	}

	function get_orderhead($ordn, $debug) {
		global $db;
		$sql = "SELECT SO_HEADER.* FROM SO_HEADER WHERE OehdNbr = '$ordn'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function get_order_boat_itemid($ordn, $debug = false) {
		global $db;
		$sql = "SELECT InitItemNbr FROM ac_ecomm.SO_DETAIL WHERE OehdNbr = '$ordn' AND InitItemNbr IN (SELECT ItemNbr FROM boat_master) LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_order_acknowledge_date($ordn, $debug = false) {
		global $db;

		$orderno = substr($ordn, 0, 6);

		$sql = "SELECT date FROM approved_log WHERE ordn LIKE '%$orderno%' ORDER BY DATE DESC LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function approve_order($ordn) {
		global $db;
		$sql = "UPDATE SO_HEADER SET OehdUserCode3 = 'YES' WHERE OehdNbr = '$ordn'";
		$db->exec($sql);
		return $sql;
	}

	function log_approve_order($ordn, $userid, $repid, $approved, $reason) {
		global $db;
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO approved_log (ordn, userid, date, approved, ordrsalesrep, reason) VALUES ('$ordn', '$userid', '$date', '$approved', '$repid', '$reason')";
		$db->exec($sql);
		return $sql;

	}

	function log_acknowledgement_view($ordn, $userid, $doc, $custid) {
		global $db;
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO acknowledgment_viewed_log (ordn, userid, custid, date, docviewed) VALUES ('$ordn', '$userid', '$custid', '$date', '$doc')";
		$db->exec($sql);
		return $sql;

	}

	function get_orderdetails($ordn, $debug) {
		global $db;
		$sql = "SELECT SO_DETAIL.* FROM SO_DETAIL WHERE OehdNbr = '$ordn'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;

		}
	}

	function is_order_approved($ordn, $debug) {
		global $db; $approved = '';
		$sql = "SELECT OehdUserCode3 AS approved FROM SO_HEADER WHERE OehdNbr = '$ordn'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$approved = $result['approved'];
			}
			if ($approved == 'YES') {
				return true;
			} else {
				return false;
			}
		}

	}

	function get_order_salesrep($ordn, $debug) {
		global $db;
		$sql = "SELECT ArspSalePer2 FROM SO_HEADER WHERE OehdNbr = '$ordn'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_order_cust_salesrep2($ordn, $debug = false) {
		global $db;
		$sql = "SELECT AR_CUST_MAST.ArspSalePer2 FROM AR_CUST_MAST JOIN ac_ecomm.SO_HEADER on AR_CUST_MAST.ArcuCustId = SO_HEADER.ArcuCustId WHERE OehdNbr = '$ordn'";

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function is_in_inv_lot($ordn, $itemid, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) FROM INV_INV_LOT JOIN SERIAL_MAST ON left(INV_INV_LOT.InltLotSer, 6) = left(SERIAL_MAST.SermSerNbr, 6)  WHERE INV_INV_LOT.InltOnHand = 1 AND INV_INV_LOT.InitItemNbr = '$itemid' AND SermAcAllocOrdr = left('$ordn', 6)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}


/* =============================================================
  	WARRANTY FUNCTIONS
 ============================================================ */
	function does_boat_exist($serial, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) AS count FROM boat_inventory WHERE SerialNbr = '$serial';";
		if ($debug) {
			return $sql;
		} else {
			$count = 0;
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$count = $result['count'];
			}
			if ($count > 0 ) {
				return true;
			} else {
				return false;
			}

		}
	}

	function is_registered($serial, $itemnbr, $returnfalse, $debug) {
		global $db;
		$sql = "SELECT Registered FROM boat_inventory WHERE SerialNbr = '$serial' AND ItemNbr = '$itemnbr'";
		if ($debug) {
			return $sql;
		} else {
			$registered = '';
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$registered = $result['Registered'];
			}
			if ($registered == 'Y' && $returnfalse != true) {
				return true;
			} else {
				return false;
			}
		}
	}

	function get_boat_custid($serial, $debug) {
		global $db;
		$sql = "SELECT CustId FROM boat_inventory WHERE SerialNbr = '$serial'";
		if ($debug) {
			return $sql;
		} else {
			$cust = '';
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$cust = $result['CustId'];
			}
			return $cust;
		}
	}

	function get_boat_itemid($serial, $debug) {
		global $db;
		$sql = "SELECT ItemNbr FROM boat_inventory WHERE SerialNbr = '$serial'";
		if ($debug) {
			return $sql;
		} else {
			$cust = '';
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$cust = $result['ItemNbr'];
			}
			return $cust;
		}
	}

	function check_if_boat_got_registered($serial, $itemnbr, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) as count FROM WARRANTY WHERE SermSerNbr = '$serial' AND InitItemNbr = '$itemnbr'";
		if ($debug) {
			return $sql;
		} else {
			$registered = '';
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$registered = $result['count'];
			}
			if (intval($registered) > 0 ) {
				return true;
			} else {
				return false;
			}

		}
	}

	function get_boat_info($serial, $debug) {
		global $db;
		$sql = "SELECT boat_inventory.*, ItemDesc1 FROM boat_inventory WHERE boat_inventory.SerialNbr = '$serial' LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetch(PDO::FETCH_ASSOC);
		}
	}

	function getregistrationinfo($serial, $itemnbr, $debug = false) {
		global $db;
		$sql = "SELECT * FROM WARRANTY WHERE SermSerNbr = '$serial' AND InitItemNbr = '$itemnbr' ORDER BY WarmEntryDate DESC, WarmSeq DESC LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetch(PDO::FETCH_ASSOC);
		}
	}

	function get_warranty_register_recnbr($serial, $itemid, $debug) {
		global $db;
		$sql = "SELECT Recnbr FROM warranty_register WHERE SerialNbr = '$serial' AND ItemNbr = '$itemid'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function getWarrantyRegisterRecord($serial, $itemid, $debug = false) {
		global $db;
		$params = array(':serialnbr' => $serial, ':itemid' => $itemid);
		$sql = "SELECT * FROM warranty_register WHERE SerialNbr = :serialnbr AND ItemNbr = :itemid";
		$query = $db->prepare($sql);

		if ($debug) {
			return str_replace(array_keys($params), array_values($params), $sql);
		} else {
			$query->execute($params);
			return $query->fetch(PDO::FETCH_ASSOC);
		}
	}

	function hasWarrantyRecord($serial, $itemid) {
		global $db;
		$params = array(':serialnbr' => $serial, ':itemid' => $itemid);
		$sql = "SELECT COUNT(*) FROM WARRANTY WHERE SermSerNbr = :serialnbr AND InitItemNbr = :itemid";
		$query = $db->prepare($sql);

		if ($debug) {
			return str_replace(array_keys($params), array_values($params), $sql);
		} else {
			$query->execute($params);
			return intval($query->fetchColumn()) > 0;
		}
	}

	function copyWarrantyRegisterIntoWarranty($serial, $itemid, $debug = false) {
		$r = getWarrantyRegisterRecord($serial, $itemid, false);
		$boat = get_boat_info($serial, false);
		$custid = $boat['CustId'];
		$salesrep = $boat['SalespersonId'];

		$warranty = array(
			'InitItemNbr' => $r['ItemNbr'], 'SermSerNbr' => $r['SerialNbr'], 'WarmSaleDate' => $r['InvoiceDate'],
			'WarmOwnFname' => $r['FirstName'], 'WarmOwnMname' => $r['MiddleName'], 'WarmOwnLname' => $r['LastName'],
			'WarmOwnAdr1' => $r['Adr1'], 'WarmOwnAdr2' => $r['Adr2'], 'WarmOwnCity' => $r['City'], 'WarmOwnStat' => $r['State'], 'WarmOwnZip' => $r['Zip'],
			'WarmSordNbr' => $r['InvoiceNbr'], 'WarmInvcDate' => $r['InvoiceDate'], 'WarmCustId' => $custid, 'WarmSpId' => $salesrep, 'WarmEntryDate' => $r['Date'],
			'WarmEngSerNbr' => $r['EngSerialNbr'], 'WarmEngHorse' => $r['EngHorsePower'], 'WarmEngModelYear' => $r['EngModelYear'], 'WarmEngDesc' => $r['EngDesc'],
			'WarmPhone1' => $r['Phone'], 'WarmEmail' => $r['Email'], 'DateUpdtd' => $r['Date'], 'TimeUpdtd' => $r['Time'], 'WarmDelvDate' => 0, 'RegisterMotor' => $r['RegisterMotor']
		);

		return registerWarrantyMaster($warranty, $debug);
	}



	function remove_warranty_register($warrec) {
		global $db;
		$sql = "DELETE FROM warranty_register WHERE Recnbr = '$warrec'";
		$db->exec($sql);
		return $sql;
	}

	function insertcountry($recnbr, $country) {
		global $db;
		$sql = "UPDATE WARRANTY set WarmOwnAdr3 as = '$country' WHERE WarmSeq = '$recnbr'";
		$db->exec($sql);
		return $sql;
	}

	function get_item_from_basepn($itemnbr, $debug) {
		global $dba;
		$sql = "SELECT item_id FROM boat_build_base_part_numbers WHERE base_part_number = '$itemnbr'";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			return $results->fetchColumn();
		}

	}

	function get_gift_amount($itemid, $debug) {
		global $db;
		$sql = "SELECT clothing_gift_amounts FROM SDR_build_id_categories WHERE item_id = '$itemid'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function get_states($country, $debug) {
		global $db;
		$sql = "SELECT * FROM state WHERE abbreviation != '' AND country = '$country' AND type IN ('state', 'province')";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_other_countries($area) {
		global $db;
		$sql = "SELECT * FROM country WHERE area = '$area'";
		$results = $db->query($sql);
		return $results;
	}

	function get_countries($continent) {
		global $db;
		$sql = "SELECT * FROM countries WHERE continent = '$continent'";
		$results = $db->query($sql);
		return $results;
	}

	function get_next_warrant_rec() {
		global $db;
		$sql = "SELECT MAX(Recnbr) AS count from warranty_register";
		$results = $db->query($sql);
		foreach ($results->fetchAll() as $result) {
			$count = $result['count'];
		}
		return intval($count) + 1;
	}

	function get_next_warrantylog_rec() {
		global $db;
		$sql = "SELECT MAX(WarmSeq) AS count from WARRANTY";
		$results = $db->query($sql);
		foreach ($results->fetchAll() as $result) {
			$count = $result['count'];
		}
		return intval($count) + 1;
	}

	function get_itemnbrs_by_options($keyword, $debug) {
		global $db; $items = '';
		$search = '%'.str_replace(' ', '%', $keyword).'%';
		$sql = "SELECT GROUP_CONCAT(\"'\", itemnbr, \"'\" SEPARATOR ', ') as itemnbrs FROM (SELECT DISTINCT(initItemNbr) itemnbr FROM OPTNS WHERE UCASE(CONCAT(initItemNbr, ' ', optn_code, ' ', optn_id, ' ', optn_iddesc)) LIKE UCASE('$search')) d";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			foreach ($results->fetchAll() as $result) {
				$items = $result['itemnbrs'];
			}
			return $items;
		}
	}

	function update_boat_registry($serial, $register, $debug) {
		global $db;
		$sql = "UPDATE boat_inventory SET Registered = '$register' WHERE SerialNbr = '$serial'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->exec($sql);
			return $sql;
		}
	}


	function register_warranty($date, $time, $recnbr, $serial, $itemid, $invoicenbr, $invoicedate, $registermotor, $firstname, $middlename, $lastname, $adr1, $adr2, $city, $state, $zip, $email, $phone, $datesold, $engsn, $enghp, $engyr, $engdesc) {
		global $db;
		$sql = "INSERT INTO warranty_register (Date, Time, Recnbr, SerialNbr, ItemNbr, InvoiceNbr, InvoiceDate, RegisterMotor, FirstName, MiddleName, LastName, Adr1, Adr2, City, State, Zip, Email, Phone, SaleDate, EngSerialNbr, EngHorsePower, EngModelYear, EngDesc) VALUES ($date, $time, $recnbr, $serial, $itemid, $invoicenbr, $invoicedate, $registermotor, $firstname, $middlename, $lastname, $adr1, $adr2, $city, $state, $zip, $email, $phone, $datesold, $engsn, $enghp, $engyr, $engdesc)";
		$query = $db->prepare("INSERT INTO warranty_register (Date, Time, Recnbr, SerialNbr, ItemNbr, InvoiceNbr, InvoiceDate, RegisterMotor, FirstName, MiddleName, LastName, Adr1, Adr2, City, State, Zip, Email, Phone, SaleDate, EngSerialNbr, EngHorsePower, EngModelYear, EngDesc) VALUES (:date, :time, :recnbr, :serial, :itemid, :invoicenbr, :invoicedate, :registermotor, :firstname, :middlename, :lastname, :adr1, :adr2, :city, :state, :zip, :email, :phone, :datesold, :engsn, :enghp, :engyr, :engdesc)");
		$query->bindParam(':date', $date); $query->bindParam(':time', $time); $query->bindParam(':recnbr', $recnbr);
		$query->bindParam(':serial', $serial); $query->bindParam(':itemid', $itemid); $query->bindParam(':invoicenbr', $invoicenbr);
		$query->bindParam(':invoicedate', $invoicedate, PDO::PARAM_INT);
		$query->bindParam(':registermotor', $registermotor);
		$query->bindParam(':firstname', $firstname); $query->bindParam(':middlename', $middlename); $query->bindParam(':lastname', $lastname);
		$query->bindParam(':adr1', $adr1); $query->bindParam(':adr2', $adr2);
		$query->bindParam(':city', $city); $query->bindParam(':state', $state); $query->bindParam(':zip', $zip);
		$query->bindParam(':email', $email); $query->bindParam(':phone', $phone);
		$query->bindParam(':datesold', $datesold);
		$query->bindParam(':engsn', $engsn); $query->bindParam(':enghp', $enghp); $query->bindParam(':engyr', $engyr); $query->bindParam(':engdesc', $engdesc);
		$query->execute();
		return $sql;
	}

	function register_into_warrantyperm($date, $time, $serial, $itemid, $invoicenbr, $invoicedate, $registermotor, $firstname, $middlename, $lastname, $adr1, $adr2, $city, $state, $zip, $email, $phone, $datesold, $engsn, $enghp, $engyr, $engdesc, $custid, $salespersonid, $deliverdate, $debug = false) {
		global $db;

		$sql = "INSERT INTO WARRANTY (InitItemNbr, SermSerNbr, WarmSaleDate, WarmOwnFname, WarmOwnMname, WarmOwnLname, WarmOwnAdr1, WarmOwnAdr2, WarmOwnCity, WarmOwnStat, WarmOwnZip, WarmSordNbr, WarmInvcDate, WarmCustId, WarmSpId, WarmEntryDate, WarmEngSerNbr, WarmEngHorse, WarmEngModelYear, WarmEngDesc, WarmPhone1, WarmEmail, DateUpdtd, TimeUpdtd, WarmDelvDate, RegisterMotor) VALUES ('$itemid', '$serial', $datesold, '$firstname', '$middlename', '$lastname', '$adr1', '$adr2', '$city', '$state', '$zip', '$invoicenbr', $invoicedate, '$custid', '$salespersonid', $date, '$engsn', $enghp, $engyr, '$engdesc', '$phone', '$email', $date, $time, $deliverdate, '$registermotor')";

		if ($debug) {

		} else {
			$db->exec($sql);
		}

		return $sql;

	}

	function registerWarrantyMaster($r, $debug = false) {
		global $db;

		$sql = "INSERT INTO WARRANTY (InitItemNbr, SermSerNbr, WarmSaleDate, WarmOwnFname, WarmOwnMname, WarmOwnLname, WarmOwnAdr1, WarmOwnAdr2, WarmOwnCity, WarmOwnStat, WarmOwnZip, WarmSordNbr, WarmInvcDate, WarmCustId, WarmSpId, WarmEntryDate, WarmEngSerNbr, WarmEngHorse, WarmEngModelYear, WarmEngDesc, WarmPhone1, WarmEmail, DateUpdtd, TimeUpdtd, WarmDelvDate, RegisterMotor) VALUES (:itemid, :serial, :datesold, :firstname, :middlename, :lastname, :adr1, :adr2, :city, :state, :zip, :invnbr, :invdate, :custid, :salesrep, :entrydate, :engsn, :enghp, :engyr, :engdesc, :phone, :email, :date, :time, :deliverdate, :registermotor)";

		$params = array(
			':itemid'    => $r['InitItemNbr'],   ':serial'     => $r['SermSerNbr'],   ':datesold' => $r['WarmSaleDate'],
			':firstname' => $r['WarmOwnFname'],  ':middlename' => $r['WarmOwnMname'], ':lastname' => $r['WarmOwnLname'],
			':adr1'      => $r['WarmOwnAdr1'],   ':adr2'       => $r['WarmOwnAdr2'],  ':city'     => $r['WarmOwnCity'],      ':state'    => $r['WarmOwnStat'], ':zip'         => $r['WarmOwnZip'],
			':invnbr'    => $r['WarmSordNbr'],   ':invdate'    => $r['WarmInvcDate'], ':custid'   => $r['WarmCustId'],       ':salesrep' => $r['WarmSpId'],    ':entrydate'   => $r['WarmEntryDate'],
			':engsn'     => $r['WarmEngSerNbr'], ':enghp'      => $r['WarmEngHorse'], ':engyr'    => $r['WarmEngModelYear'], ':engdesc'  => $r['WarmEngDesc'],
			':phone'     => $r['WarmPhone1'],    ':email'      => $r['WarmEmail'],    ':date'     => $r['DateUpdtd'],        ':time'     => $r['TimeUpdtd'],   ':deliverdate' => $r['WarmDelvDate'], ':registermotor' => $r['RegisterMotor']
		);

		$query = $db->prepare($sql);

		if ($debug) {
			return str_replace(array_keys($params), array_values($params), $sql);
		} else {
			return $query->execute($params);
		}
	}

	function log_warranty($itemnbr, $serial, $recnbr, $datesold, $firstname, $middlename, $lastname, $addr1, $addr2, $addr3, $city, $state, $zip, $ordn, $invoicedate, $custid, $salesperson, $date, $engine_serial, $eng_hp, $eng_year, $eng_desc, $phone, $phone2, $email, $dateupdated, $time) {
		global $db;
		$sql = $db->prepare("INSERT INTO WARRANTY (InitItemNbr, SermSerNbr, WarmSeq, WarmSaleDate, WarmOwnFname, WarmOwnMname, WarmOwnLname, WarmOwnAdr1, WarmOwnAdr2, WarmOwnAdr3, WarmOwnCity, WarmOwnStat, WarmOwnZip, WarmSordNbr, WarmInvcDate, WarmCustId, WarmSpId, WarmEntryDate, WarmEngSerNbr, WarmEngHorse, WarmEngModelYear, WarmEngDesc, WarmPhone1, WarmPhone2, WarmEmail, DateUpdtd, TimeUpdtd) VALUES (:itemnbr, :serial, :recnbr, :datesold, :firstname, :middlename, :lastname, :addr1, :addr2, :addr3, :city, :state, :zip, :ordn, :invoicedate, :custid, :salesperson, :date, :engine_serial, :eng_hp, :eng_year, :eng_desc, :phone, :phone2, :email, :dateupdated, :time)");

		$sql->bindParam(':serial', $serial); $sql->bindParam(':recnbr', $recnbr); $sql->bindParam(':datesold', $datesold); $sql->bindParam(':firstname', $firstname);
		$sql->bindParam(':middlename', $middlename); $sql->bindParam(':lastname', $lastname); $sql->bindParam(':addr1', $addr1); $sql->bindParam(':addr2', $addr2);
		$sql->bindParam(':addr3', $addr3); $sql->bindParam(':city', $city); $sql->bindParam(':state', $state); $sql->bindParam(':zip', $zip); $sql->bindParam(':ordn', $ordn);
		$sql->bindParam(':invoicedate', $invoicedate, PDO::PARAM_INT); $sql->bindParam(':custid', $custid); $sql->bindParam(':salesperson', $salesperson);
		$sql->bindParam(':date', $date);
		$sql->bindParam(':engine_serial', $engine_serial); $sql->bindParam(':eng_hp', $eng_hp); $sql->bindParam(':eng_year', $eng_year); $sql->bindParam(':eng_desc', $eng_desc);
		$sql->bindParam(':phone', $phone); $sql->bindParam(':phone2', $phone2); $sql->bindParam(':email', $email); $sql->bindParam(':dateupdated', $dateupdated);
		$sql->bindParam(':time', $time); $sql->bindParam(':itemnbr', $itemnbr);
		$sql->execute();
		$results = $sql->fetchAll(PDO::FETCH_ASSOC);
		return $sql;
	}

	function log_registration($serialnbr, $userid) {
		global $db;
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO register_log (serialnbr, userid, date) VALUES ('$serialnbr', '$userid', '$date')";
		$db->exec($sql);
		return $sql;

	}

	function log_apfco_send($serialnbr, $itemid, $userid, $error, $errormessage) {
		global $db;
		$date = date("Y-m-d H:i:s");
		$sql = "INSERT INTO apfco_register (date, serial, itemid, userid, error, error_message) VALUES ('$date', '$serialnbr',  '$itemid', '$userid', '$error', '$errormessage')";
		$db->exec($sql);
		return $sql;

	}

	function does_serial_exist($serialnbr) {
		global $db; $count = '';
		$sql = "SELECT COUNT(*) as count FROM SERIAL_MAST WHERE SermSerNbr = '$serialnbr'";
		$results = $db->query($sql);
		foreach ($results->fetchAll() as $result) {
			$count = $result['count'];
		}

		if ($count > 0) {
			return true;
		} else {
			return false;
		}

	}

	function get_boat_year($itemid) {
		global $db; $year = '';
		$sql = "SELECT optn_iddesc AS year FROM OPTNS WHERE initItemNbr = '$itemid' AND optn_code = 'YEAR'";
		$results = $db->query($sql);
		foreach ($results->fetchAll() as $result) {
			$year = $result['year'];
		}
		return $year;
	}

	function get_boat_optncodes($itemid, $debug) {
		global $db; $year = ''; global $optncodes;
		$sql = "SELECT optn_code_desc AS optioncode, optn_iddesc AS description FROM OPTNS WHERE initItemNbr = '$itemid' AND optn_code_desc IN ($optncodes)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_horsepowers($debug) {
		global $db;
		$sql = "SELECT * FROM horsepower ORDER BY horsepower ASC;";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_cust_name($custID) {
		global $db; $name = '';
		$sql = "SELECT ArcuName FROM AR_CUST_MAST WHERE ArcuCustId = '$custID'";
		$results = $db->query($sql);
		foreach ($results->fetchAll() as $result) {
			$name = $result['ArcuName'];
		}
		return $name;
	}

	function get_docs($session, $ordn, $debug) {
		global $db;
		$sql = "SELECT * FROM orddocs WHERE sessionid = '$session' AND orderno = '$ordn'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_most_recent_docs($session, $ordn, $debug) {
		global $db;
		$sql = "SELECT * FROM orddocs WHERE sessionid = '$session' AND orderno = '$ordn' AND recno = (SELECT MAX(recno) FROM orddocs WHERE orderno = '$ordn' AND sessionid = '$session' AND title = 'Sales Order Acknowledgements')";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function get_sales_acknowledgements($session, $ordn, $debug) {
		global $db;
		$sql = "SELECT * FROM orddocs WHERE sessionid = '$session' AND orderno = '$ordn' AND recno = (SELECT recno FROM orddocs WHERE orderno = '$ordn' AND sessionid = '$session' AND title = 'Sales Order Acknowledgements' ORDER BY pathname DESC LIMIT 1)";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}

	function sessionhasrecord($session, $debug) {
		global $db;
		$sql = "SELECT COUNT(*) FROM sessions WHERE sessionid = '$session'";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}

	function writesessionrecord($session, $externalsession, $userid, $externalrecnbr, $date) {
		global $db;
		$sql = "INSERT INTO sessions (sessionid, externalsessionid, externalrecord, userid, date) VALUES ('$session', '$externalsession', '$externalrecnbr', '$userid', '$date')";
		if ($debug) {
			return $sql;
		} else {
			$results = $db->exec($sql);
			return $sql;
		}
	}

/* =============================================================
  	ORDERS FUNCTIONS
 ============================================================ */
	/*function get_orders($allowedcusts, $page, $limit, $approved, $debug) {
		$start_point = "";
		if ($page > 1) { $start_point = ($page * $limit) - $limit; } else if ($page == 1) { $start_point = 0; } else { $start_point = 0; }
		$sql = "SELECT * ordrhed WHERE type = 'O' AND custid IN ($allowedcusts) LIMIT ".$start_point.",".$limit;
		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results;
		}
	}*/



/* =============================================================
  	ALUMACRAFT RUSTY DB
 ============================================================ */

	function check_login($email, $password) {
		global $dba; $count = '';
		$sql = "SELECT COUNT(*) as count FROM view_users WHERE email = '$email' AND pass_encrypted = AES_ENCRYPT('$password', salt)";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$count = $result['count'];
		}
		if (intval($count) > 0) {
			return true;
		} else {
			return false;
		}
	}

	function get_userid_from_login($email, $password) {
		global $dba; $user = '';
		$sql = "SELECT user_id FROM view_users WHERE email = '$email' AND pass_encrypted = AES_ENCRYPT('$password', salt)";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$user = $result['user_id'];
		}
		return $user;

	}

	function insert_login_record($userid, $session) {
		global $dba; $user = '';
		$sql = "INSERT INTO view_sessions (user_id, session, updated) VALUES ('$userid', '$session', now())";
		$results = $dba->query($sql);
		return $sql;
	}

	function get_userid($session) {
		global $dba; $user = '';
		$sql = "SELECT user_id FROM view_sessions WHERE session = '$session' ORDER BY updated DESC LIMIT 1";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$user = $result['user_id'];
		}
		return $user;
	}

	function get_termscode($location_id) {
		global $dba; $user = '';
		$sql = "SELECT terms_code FROM dealer_brands WHERE location_id = '$location_id' LIMIT 1";
		$results = $dba->query($sql);
		return $results->fetchColumn();
	}

	function get_login_name($userid) {
		global $dba; $user = '';
		$sql = "SELECT name FROM view_users WHERE user_id = '$userid' LIMIT 1";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$user = $result['name'];
		}
		return $user;
	}

	function get_login_email($userid) {
		global $dba; $user = '';
		$sql = "SELECT email FROM view_users WHERE user_id = '$userid' LIMIT 1";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$user = $result['email'];
		}
		return $user;
	}

	function get_locationid($userid) {
		global $dba; $location = '';
		$sql = "SELECT location_id FROM view_users WHERE user_id = '$userid' LIMIT 1";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$location = $result['location_id'];
		}
		return $location;
	}

	function get_role($userid) {
		global $dba; $role = '';
		$sql = "SELECT MAX(role_id) as role_id FROM users_SDR_roles WHERE user_id = '$userid' LIMIT 1";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$role = $result['role_id'];
		}
		return $role;
	}

	function has_role($userid, $role, $debug) {
		global $dba;
		$sql = "SELECT COUNT(*) FROM users_SDR_roles WHERE user_id = '$userid' AND role_id IN ($role)";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			if ($results->fetchColumn() > 0) {
				return true;
			} else {
				return false;
			}
		}
	}

	function get_repid_from_dplus($repid) {
		global $dba;
		$sql = "SELECT user_id FROM reps WHERE dplus_sales_rep_id = '$repid' LIMIT 1";
		$results = $dba->query($sql);
		return $results->fetchColumn();
	}

	function get_rep_email($repid) {
		global $dba; $role = '';
		$sql = "SELECT email FROM view_users WHERE user_id = '$repid' LIMIT 1";
		$results = $dba->query($sql);
		return $results->fetchColumn();
	}

	function get_rep_name($repid) {
		global $dba;
		$sql = "SELECT name FROM view_users WHERE user_id = '$repid' LIMIT 1";
		$results = $dba->query($sql);
		return $results->fetchColumn();
	}

	function get_reps() {
		global $dba;
		$sql = "SELECT * FROM view_users WHERE user_id IN (SELECT user_id FROM reps) ORDER BY name";
		$results = $dba->query($sql);
		return $results;
	}

	function get_all_dealers_admin() {
		global $dba;
		$sql = "SELECT view_locations.location_id, view_locations.name, view_locations.city, dealer_brands.status, mfg_dealer_number as dpluscust FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE dealer_brands.status > 0  ORDER BY name ";
		$results = $dba->query($sql);
		return $results;
	}

	function get_reps_dealers($repid) {
		global $dba;
		$sql = "SELECT dealer_brands.location_id, view_locations.name, view_locations.city, dealer_brands.status FROM dealer_brands LEFT JOIN view_locations ON dealer_brands.location_id = view_locations.location_id WHERE dealer_brands.status > 0 AND view_locations.name != '' AND dealer_brands.rep_id = '$repid' ORDER BY view_locations.name";
		$results = $dba->query($sql);
		return $results;
	}

	function get_dealers_by_dealerid($dealers, $debug) {
		global $dba;
		$sql = "SELECT dealer_brands.location_id, view_locations.name, view_locations.city, dealer_brands.status, mfg_dealer_number as dpluscust FROM dealer_brands LEFT JOIN view_locations ON dealer_brands.location_id = view_locations.location_id WHERE dealer_brands.status > 0 AND view_locations.name != '' AND dealer_brands.location_id IN ($dealers) ORDER BY view_locations.name";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			return $results;
		}

	}

	function get_reps_dealers_ids($repid) {
		global $dba;
		$sql = "SELECT dealer_brands.location_id, view_locations.name, view_locations.city, dealer_brands.status FROM dealer_brands LEFT JOIN view_locations ON dealer_brands.location_id = view_locations.location_id WHERE dealer_brands.status > 0 AND view_locations.name != '' AND dealer_brands.rep_id = '$repid' ORDER BY view_locations.location_id";
		$results = $dba->query($sql);
		return $results;
	}

	function get_dplus_custids_list_alt($debug) {
		global $dba; $dealerlist = '';
		$sql = "SELECT dealer_brands.mfg_dealer_number as dealer FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			foreach ($results->fetchAll() as $result) {
				$dealerlist .= "'".addslashes($result['dealer'])."'" . ",";
			}
			if (substr($dealerlist, -1) == ",") {$dealerlist = rtrim($dealerlist, ",");}
			return $dealerlist;
		}
	}

	function get_reps_dplus_custids_list_alt($repid, $debug) {
		global $dba; $dealerlist = '';
		$sql = "SELECT dealer_brands.mfg_dealer_number as dealer FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE rep_id = '$repid'";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			foreach ($results->fetchAll() as $result) {
				$dealerlist .= "'".addslashes($result['dealer'])."'" . ",";
			}
			if (substr($dealerlist, -1) == ",") {$dealerlist = rtrim($dealerlist, ",");}
			return $dealerlist;
		}
	}

	function get_dplus_custids_by_clientid($clientid, $debug) {
		global $dba; $dealerlist = '';
		$sql = "SELECT dealer_brands.mfg_dealer_number as dealer FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE view_locations.client_id = '$clientid'";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			foreach ($results->fetchAll() as $result) {
				$dealerlist .= "'".addslashes($result['dealer'])."'" . ",";
			}
			if (substr($dealerlist, -1) == ",") {$dealerlist = rtrim($dealerlist, ",");}
			return $dealerlist;
		}
	}

	function get_reps_dplus_custids_by_id($dealers, $debug) {
		global $dba; $dealerlist = '';
		$sql = "SELECT dealer_brands.mfg_dealer_number as dealer FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE view_locations.location_id IN ($dealers)";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			foreach ($results->fetchAll() as $result) {
				$dealerlist .= "'".addslashes($result['dealer'])."'" . ",";
			}
			if (substr($dealerlist, -1) == ",") {$dealerlist = rtrim($dealerlist, ",");}
			return $dealerlist;
		}
	}

	function get_dealer_clientid($dealerid) {
		global $dba;
		$sql = "SELECT client_id FROM view_locations WHERE location_id = '$dealerid' ";
		$results = $dba->query($sql);
		return $results->fetchColumn();
	}

	function get_dealer_by_clientid($clientid) {
		global $dba;
		$sql = "SELECT view_locations.location_id, view_locations.name, view_locations.city, dealer_brands.status, mfg_dealer_number as dpluscust FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE view_locations.client_id = '$clientid' ";
		$results = $dba->query($sql);
		return $results;
	}

	function get_dealer($dealerid) {
		global $dba;
		$sql = "SELECT view_locations.location_id, view_locations.name, view_locations.city, dealer_brands.status, mfg_dealer_number as dpluscust FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE dealer_brands.location_id = '$dealerid' ";
		$results = $dba->query($sql);
		return $results->fetch();
	}

	function get_dealer_info($dplusdealerid) {
		global $dba;
		$sql = "SELECT view_locations.*, dealer_brands.status, mfg_dealer_number as dpluscust FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE mfg_dealer_number = '$dplusdealerid' ";
		$results = $dba->query($sql);
		return $results;
	}

	function get_dealer_name_from_dplus($dealerid) {
		global $dba; $name = '';
		$sql = "SELECT view_locations.name FROM view_locations JOIN dealer_brands ON view_locations.location_id = dealer_brands.location_id WHERE mfg_dealer_number = '$dealerid' ";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$name = $result['name'];
		}
		return $name;
	}

	function does_user_have_access($userid, $accessid) {
		global $dba; $count = '';
		$sql = "SELECT COUNT(*) as count FROM users_SDR_access WHERE user_id = '$userid' AND access_id = '$accessid'";
		$results = $dba->query($sql);
		$count = $results->fetchColumn();
		if (intval($count) > 0 ) {
			return true;
		} else {
			return false;
		}
	}

	function get_state_from_code($stateid) {
		global $dba; $count = '';
		$sql = "SELECT abbrev FROM view_states WHERE id = '$stateid'";
		$results = $dba->query($sql);
		return $results->fetchColumn();
	}

	function is_user_alumacraft_admin($userid) {
		global $dba; $count = '';
		$sql = "SELECT COUNT(*) FROM view_users WHERE location_id = '786' AND user_id IN (SELECT user_id FROM users_SDR_roles WHERE role_id = '37') AND user_id = '$userid'";
		$results = $dba->query($sql);
		$count = $results->fetchColumn();
		if (intval($count) > 0 ) {
			return true;
		} else {
			return false;
		}
	}

	function get_custname_from_dplus($dpluscust) {
		global $dba; $name = '';
		$sql = "SELECT name FROM view_locations JOIN alumacraft.dealer_brands ON dealer_brands.location_id = view_locations.location_id WHERE mfg_dealer_number = '$dpluscust'";
		$results = $dba->query($sql);
		foreach ($results->fetchAll() as $result) {
			$name = $result['name'];
		}
		return $name;
	}

	function decrypt_login_session($sessionhexed, $userid, $debug) {
		global $dba;
		$sql = "SELECT user_id, session FROM view_sessions WHERE HEX(session) = '$sessionhexed' AND HEX(view_sessions.user_id) = '$userid' LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			return $results;
		}
	}

	function load_login_session($session, $debug) {
		global $dba;
		$sql = "SELECT user_id, session FROM view_sessions WHERE session = '$session' LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			return $results->fetch();
		}
	}

	function loadsession($session, $userid, $debug) {
		global $dba;
		$sql = "SELECT user_id, session, id FROM view_sessions WHERE session = '$session' and user_id = '$userid' LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			return $results->fetch();
		}
	}


	function hexvalue($str, $withquotes) {
		global $dba; $hexed = '';
		if ($withquotes) {
			$sql = "SELECT HEX('$str') as hexvalue";
		} else {
			$sql = "SELECT HEX($str) as hexvalue";
		}
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			foreach ($results->fetchAll() as $result) {
				$hexed = $result['hexvalue'];
			}
			return $hexed;
		}
	}

	function get_partnumber_productionlocation($itemID, $debug = false) {
		global $dba;
		$sql = "SELECT production_location FROM boat_build_base_part_numbers WHERE base_part_number = '$itemID' LIMIT 1";
		if ($debug) {
			return $sql;
		} else {
			$results = $dba->query($sql);
			return $results->fetchColumn();
		}
	}

/* =============================================================
	DSQL FUNCTIONS
============================================================ */
	function getQuery() {
		global $dbData1;
		return new Query(['connection' => $dbData1]);
	}

	function getSalesRepEmail($id) {
		$q = getQuery();
		$q->table('ar_saleper1');
		$q->field('ArspEmailAddr');
		$q->where('ArspSalePer1', $id);
		return $q->getOne();
	}

	function getExternalSessionid($sessionid) {
		global $db;
		$q = new Query(['connection' => $db]);
		$q->table('sessions');
		$q->field('externalsessionid');
		$q->where('sessionid', $sessionid);
		return $q->getOne();
	}

	function get_wip_complete_date2($ordn, $itemid, $debug = false) {
		global $db;
		$q = new Query(['connection' => $db]);
		$q->table('WIP_HEADER');
		$q->field('WiphCmpltdDate');
		$q->where('OehdNbr', rtrim($ordn, '00'));
		$q->where('InitItemNbr', $itemid);
		return $q->getOne();
	}

	function get_wip_complete_date($ordn, $itemid, $debug = false) {
		global $db;
		$ordn = rtrim($ordn, '00');
		$sql = "SELECT WIP_HEADER.WiphCmpltdDate FROM WIP_HEADER WHERE OehdNbr = '$ordn' AND InitItemNbr = '$itemid' LIMIT 1";

		if ($debug) {
			return $sql;
		} else {
			$results = $db->query($sql);
			return $results->fetchColumn();
		}
	}
