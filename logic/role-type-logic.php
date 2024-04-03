<?php
	 $selected_location_id = '';
	 $repid ='';
	 
	 switch ($role_type) {
		 case 'DEALER':
			if (isset($_GET['location'])) {
				$location_id = urldecode($_GET['location']);
				$selected_location_id = urldecode($_GET['location']);
			}
			$dealer = get_dealer($location_id);
			$dealerid = $dealer['dpluscust'];
			$dealername = $dealer['name'];
		 case 'SREP':
		 		if (isset($_GET['location'])) {
					$location_id = urldecode($_GET['location']);
					$selected_location_id = urldecode($_GET['location']);
					$dealer = get_dealer($location_id);
					$dealerid = $dealer['dpluscust'];
					$dealername = $dealer['name'];
				} else {
					$repid = $userid;
					$repname = get_login_name($repid);
				}
		 	break;
			case 'SADMIN':
		 		if (isset($_GET['location'])) {
					$location_id = urldecode($_GET['location']);
					$selected_location_id = urldecode($_GET['location']);
					$dealer = get_dealer($location_id);
					$dealerid = $dealer['dpluscust'];
					$dealername = $dealer['name'];
				} elseif (isset($_GET['rep'])) {
					$repid = urldecode($_GET['rep']);
					$repname = get_login_name($repid);
				}
		 	break;
	 }
?>
