	<div class="page-section dealer-section dark-grey">
		<div class="row">
			<div class="grid_4">
				<!--<img src="images/home/map.jpg" alt=""/>--></div>
			<!--<div class="grid_4"><strong>YOUR CLOSEST DEALER:</strong><br>DAN’S SOUTHSIDE MARINE (13MI)<br>1900 W 98th Street<br>Bloomington, MN 55431<br>952-881-0077<br><a href="http://www.danssouthsidemarine.com">www.danssouthsidemarine.com</a><br><br><a href="#" class="your-boat-btn" style="color:#e3e3e3;">Find Another Dealer</a><p>&nbsp;</p></div>-->
			<div class="grid_3">
				<p>MINNESOTA
					<br>315 W. Saint Julien St.
					<br>St. Peter, MN 56082
					<br><a href="mailto:customerservice@alumacraft.com">customerservice@alumacraft.com</a></p>
				<!--<a href="tel:5079311050">507.931.1050</a></p>--></div>
			<div class="grid_3">
				<p>ARKANSAS
					<br>1329 N. 10th St.
					<br>Arkadelphia, AR 71923
					<br><a href="mailto:customerservice@alumacraft.com">customerservice@alumacraft.com</a></p>
				<!--<a href="tel:8702465555">870.246.5555</a></p>-->
			</div>
		</div>
	</div>
	<div class="page-section dark-grey-2" style="padding:0">
		<div class="footer">
			<div class="row">
				<div class="grid_5">
					<ul class="footer-links">
						<li><span>© 1946 - 2020 Alumacraft Boat Co</span></li>
						<!--<li><span>Ph: 877-930-9222</span></li>-->
					</ul>
				</div>
				<div class="grid_7">
					<ul class="footer-links right-align">
						<!--<li><a href="#">OWNERS</a></li>-->
						<li><a href="http://alumacraft.com/About-Alumacraft.php?content=privacy_policy">PRIVACY POLICY</a></li>
						<li><a href="http://alumacraft.com/About-Alumacraft.php?content=terms_conditions">TERMS AND CONDITIONS</a></li>
						<!--<li><a href="http://alumacraft.com/admin/Logout.php"><img src="http://alumacraft.com/images/icons/unLock.png" style="height:17px;"/></a></li>-->
						<!--<li><a href="#">SITE MAP</a></li><li><a href="#">FAQs</a></li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="page-section bottom-space"></div>
	<div id="builder_config" class="admin_toolbar_panel g972" style="z-index:1001;width:1000px;"></div>
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
									<li><a href="http://alumacraft.com/admin/Inventory.php">Add New Boat</a></li>
									<li><a href="http://alumacraft.com/Alumacraft-Boat-Search.php?action=list">List Boats</a></li>
									<li><a href="http://alumacraft.com/admin/Builder-Option-Manager.php"> Option Utility </a></li>
									<li><a href="http://alumacraft.com/admin/Builder-Standard-Manager.php"> Standards Utility </a></li>
								</ul>
							</td>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Dealerships</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php?location_id=786#users_tab">Manage Sales Force</a></li>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php"> Add New Dealership </a></li>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php"> Dealership Manager </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">Document Depot</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/Document_Depot/Document-Depot.php">Download Documents</a></li>
									<li><a href="http://alumacraft.com/admin/Dealer-Sales-Tools.php">Boat Builder Printouts</a></li>
									<li><a href="http://alumacraft.com/admin/Training-Tools.php">Website Training Videos</a></li>
								</ul>
							</td>
							<td style="vertical-align:top;">
								<h3 style="margin-bottom:0px;">Utilities</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/admin/File-Manager.php"> File Manager </a></li>
								</ul>
								<h3 style="margin-bottom:0px;">Leads</h3>
								<hr style="margin:0px;">
								<ul>
									<li><a href="http://alumacraft.com/admin/Leads.php"> View Leads </a></li>
									<li><a href="http://alumacraft.com/Lead-Stats.php"> Lead Stats </a></li>
									<li><a href="http://alumacraft.com/admin/Location-Manager.php?action=access_level_check&amp;access_level=8"> Check Lead Users </a></li>
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
					<h4 class="toolbar" style="margin-bottom:0;color:#f6f6f6;">ADMIN TOOLBAR<a href="#admin_toolbar_panel" class="admin_toolbar_toggle" style=""><img src="http://alumacraft.com/images/icons/gear.png" style="margin-left:13px;"></a></h4><span style="">Logged in as: <?php echo $login_name; ?></span></div>
				<div class="grid_1" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="http://alumacraft.com/admin/Leads.php">Leads</a></h4></div>
				<div class="grid_2" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="http://alumacraft.com/admin/Location-Manager.php?location_id=786#users_tab">Salesforce</a></h4></div>
				<div class="grid_3" style="text-align:center;">
					<h4 style="margin-top:13px;color:#f6f6f6;"><a href="http://alumacraft.com/Boat-Builder.php?action=list">Quotes &amp; Orders</a></h4></div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		jQuery(document).ready(function() {


		}); //ready
	</script>

	<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-76627962-1']);
		  _gaq.push(['_setDomainName', '.alumacraft.com']);
		  _gaq.push(['_trackPageview']);


		//_gaq.push(['_setCustomVar',1,'user_id','4189',1]);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

    </script>




	<noscript>
	 &lt;img height="1" width="1" src="https://www.facebook.com/tr?id=1860402154194791&amp;ev=PageView&amp;noscript=1"/&gt;
	</noscript>
