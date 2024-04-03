	<div class="page-section dealer-section dark-grey">
		<div class="row">
			
		</div>
	</div>
	<div class="page-section dark-grey-2" style="padding:0">
		<div class="footer">
			<div class="row">
				<div class="grid_5">
					<ul class="footer-links">
						<li><span>© 1946 - <?= date('Y'); ?> Alumacraft Boat Co</span></li>
						<?php if ($role_type === 'SADMIN') : ?>
							<li><span><a href="<?= $urlOrderingSession; ?>">View Order Docs</a></span></li>
						<?php endif; ?>
					</ul>
				</div>
				<div class="grid_7">
					<ul class="footer-links right-align">
						<!--<li><a href="#">OWNERS</a></li>-->
						<li><a href="https://www.alumacraft.com/About-Alumacraft.php?content=privacy_policy">PRIVACY POLICY</a></li>
						<li><a href="https://www.alumacraft.com/About-Alumacraft.php?content=terms_conditions">TERMS AND CONDITIONS</a></li>
						<!--<li><a href="https://dealer.alumacraft.com/admin/Logout.php"><img src="https://www.alumacraft.com/images/icons/unLock.png" style="height:17px;"/></a></li>-->
						<!--<li><a href="#">SITE MAP</a></li><li><a href="#">FAQs</a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="page-section bottom-space"></div>
	<div id="admin_toolbar_panel" class="admin_toolbar_panel g972" style="z-index:1001;width:1000px;display:none;">
		<div style="position:absolute;top:0;right:0;border:1px solid #cccccc;background-color:#F5F5ED;padding-top:3px;"><a href="#admin_toolbar_panel" class="admin_toolbar_toggle" style="padding:3px 4px;">X</a></div>
		<div style="position:relative;margin:0 20px 20px 20px;">
			<!-- here holds the margins -->
			<div class="admin_toolbar_div_holder">
				<table style="width:100%;">
					<tbody>
						<tr>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Product</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="https://dealer.alumacraft.com/admin/Inventory.php">Add New Boat</a></li>
									<li><a href="https://www.alumacraft.com/Alumacraft-Boat-Search.php?action=list">List Boats</a></li>
									<li><a href="https://dealer.alumacraft.com/admin/Builder-Option-Manager.php"> Option Utility </a></li>
									<li><a href="https://dealer.alumacraft.com/admin/Builder-Standard-Manager.php"> Standards Utility </a></li>
								</ul>
							</td>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Dealerships</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="https://dealer.alumacraft.com/admin/Location-Manager.php?location_id=786#users_tab">Manage Sales Force</a></li>
									<li><a href="https://dealer.alumacraft.com/admin/Location-Manager.php"> Add New Dealership </a></li>
									<li><a href="https://dealer.alumacraft.com/admin/Location-Manager.php"> Dealership Manager </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">Document Depot</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="https://www.alumacraft.com/Document_Depot/Document-Depot.php">Download Documents</a></li>
									<li><a href="https://dealer.alumacraft.com/admin/Dealer-Sales-Tools.php">Boat Builder Printouts</a></li>
									<li><a href="https://dealer.alumacraft.com/admin/Training-Tools.php">Website Training Videos</a></li>
								</ul>
							</td>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Utilities</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="https://dealer.alumacraft.com/admin/File-Manager.php"> File Manager </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">Leads</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="https://dealer.alumacraft.com/admin/Leads.php"> View Leads </a></li>
									<li><a href="https://www.alumacraft.com/Lead-Stats.php"> Lead Stats </a></li>
									<li><a href="https://dealer.alumacraft.com/admin/Location-Manager.php?action=access_level_check&amp;access_level=8"> Check Lead Users </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">User Info</h3>
								<hr style="margin:0px;">
								<ul>
									<li>Logged in as: <?php echo $login_name; ?></li>
									<li>User ID: <?php echo $userid; ?></li>
									<li>Dealership: -- <?php echo $location_id; ?></li>
									<li>Terms Code: <?php echo get_termscode($location_id); ?></li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div style="text-align:right;">
				<!-- this is where the buttons were -->
			</div>
		</div>
		<!-- end g972 -->
	</div>
	<div class="footer-wrapper">
		<div class="page-section black">
			<div class="row">
				<div class="grid_3">
					<h4 class="toolbar" style="margin-bottom:0;color:#f6f6f6;">ADMIN TOOLBAR<a href="#admin_toolbar_panel" class="admin_toolbar_toggle" style=""><img src="https://dealer.alumacraft.com/images/icons/gear.png" style="margin-left:13px;"></a></h4><span style="">Logged in as: <?php echo $login_name; ?></span></div>
				<div class="grid_1" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="https://dealer.alumacraft.com/admin/Leads.php">Leads</a></h4></div>
				<div class="grid_2" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="https://dealer.alumacraft.com/admin/Location-Manager.php?location_id=786#users_tab">Salesforce</a></h4></div>
				<div class="grid_3" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="https://dealer.alumacraft.com/Boat-Builder.php?action=list">Quotes &amp; Orders</a></h4></div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function() {


		}); //ready
	</script>
