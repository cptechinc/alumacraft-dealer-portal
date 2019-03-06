<?php 
	$registration = getregistrationinfo($_GET['view'], $_GET['itemnbr'], false);
	//$registration = getregistrationinfo('ACBV5248G213', '1-13-233-6071', false);
	$boat = get_boat_info($_GET['view'], false);
	$dealername = get_dealer_name_from_dplus($boat['CustId']);
	$dealers = get_dealer_info($boat['CustId']);
	$dealer = $dealers->fetch(PDO::FETCH_ASSOC);
	if ($registration['WarmDelvDate']) {
		$deliverydate = date("m/d/Y", strtotime($registration['WarmDelvDate']));
	} else {
		$deliverydate = '';
	} 
	
	if ($registration['WarmEngHorse'] == 0) {
		$registration['WarmEngHorse'] = 'N/A';
	}

	if ($registration['WarmEngSerNbr'] == '') {
		$registration['WarmEngSerNbr'] = 'N/A';
	}

	if ($registration['WarmEngModelYear'] == 0) {
		$registration['WarmEngModelYear'] = 'N/A';
	}

?>

<div class="row">
	<div class="col-xs-12">
		<form action="">
			<div class="row">
				<div class="col-xs-5">
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['SermSerNbr']; ?></p> <label>Serial Nbr</label>
					</div>
				</div>
				<div class="col-xs-7">
					<div class="form-group">
						<p class="form-control-static"><?php echo $boat['ItemDesc1']; ?></p> <label>Boat Model Year / Description</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmEngSerNbr']; ?></p> <label>Engine Serial Nbr</label>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmEngHorse'];?></p> <label>HORSE POWER</label>
					</div>
				</div>
				<div class="col-xs-4">
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmEngModelYear']. ' ' . $registration['WarmEngDesc']; ?></p>
						<label>ENGINE YEAR / DESCRIPTION</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-7">
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmOwnFname']. ' ' . $registration['WarmOwnMname']. ' ' .$registration['WarmOwnLname']; ?></p>
						<label>OWNER'S NAME</label>
					</div>
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmOwnAdr1']; ?></p> <label>ADDRESS</label>
					</div>
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmOwnCity']; ?></p> <label>CITY</label>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<div class="form-group">
								<p class="form-control-static"><?php echo $registration['WarmOwnStat']; ?></p> <label>STATE</label>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<p class="form-control-static"><?php echo $registration['WarmOwnZip']; ?></p> <label>ZIP</label>
							</div>
						</div>
					</div>


					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmPhone1']; ?></p> <label>PHONE</label>
					</div>
					<div class="form-group">
						<p class="form-control-static"><?php echo $registration['WarmEmail']; ?></p> <label>EMAIL</label>
					</div>
				</div>
				<div class="col-xs-5">
					<div class="form-group">
						<p class="form-control-static"><?php echo date("m/d/Y", strtotime($registration['WarmSaleDate'])); ?></p>
						<label>DATE OF SALE</label>
					</div>
					<div class="form-group">
						<p class="form-control-static"><?php echo $deliverydate; ?></p> <label>DATE OF DELIVERY</label>
					</div>
					<div class="form-group">
						<p class="form-control-static"><?php echo $dealername; ?></p> <label>DEALER NAME</label>
					</div>
					<div class="form-group">
						<p class="form-control-static"><?php echo $dealer['address']; ?></p> <label>ADDRESS</label>
					</div>
					<div class="form-group">
						<p class="form-control-static"><?php echo $dealer['city'] . ', '.get_state_from_code($dealer['state']).' '.$dealer['zip'];  ?></p>
						<label>CITY/STATE/ZIP</label>
					</div>
					<div class="form-group">
						<img src="assets/img/logo.png">
					</div>
					<div class="form-group">
						<p>Deep V</p>
						<p>315 W. St. Julien, St. Peter, Minnesota 56082-1800</p>
						<p><b>Phone: </b>507-931-1050</p>
						<p>AW / Riveted Jon Boats</p>
						<p>1329 N. 10th Street, Arkadelphia, Arkansas</p>
						<p><b>Phone: </b>870-246-5555 </p>
					</div>
				</div>
			</div>					





		</form>
	</div>
</div>