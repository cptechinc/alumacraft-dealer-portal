<?php 
	if (100 == 1) {
		if ($user->hasAccessLevel($permissions['view-registered']) || has_role($userid, "'28','37'", false) == true)  {
			if (isset($_GET['view'])) {
				if (strlen($_GET['view']) > 0) {
					$serial = urldecode($_GET['view']);
					if (does_boat_exist($serial, false)) {
						$itemnbr = urldecode($_GET['itemnbr']);

						include 'content/warranty-card/card.php';
					} else {
						echo 'Serial Doesn\'t match any boats';
					}
				} else {
					echo 'Not a valid Serial Number';
				}
			} else {
				echo 'Nothing to view';
			}
		} else {
			echo $userid . " You don't have access to register boats.";
		}
	} else {
		include 'content/warranty-card/card.php';
	}
	



?>
