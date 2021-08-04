<?php include 'init.php'; ?>
<?php include 'view/header-new.php'; ?>
<?php include 'logic/role-type-logic.php'; ?>

<div class="page-section white">
	<div class="row">
		<div class="grid_12">
			<h3 style="color:#000;">Welcome, <?php echo $login_name; ?></h3>
		   <div class="row">
			<div class="grid_4"><h5>Select a Dealer or Rep To Narrow Search:</h5></div>
				<?php
					switch($role_type) {
						case 'DEALER':
							if (array_key_exists($role, $dealerroles)) {
								$clientid = get_dealer_clientid($location_id);
								$dealers = get_dealer_by_clientid($clientid);
							} else {
								$locations = "'$location_id'";
								$dealers = get_dealers_by_dealerid($locations, false);
							}

							echo '<div class="grid_4">';
							include 'content/forms/dealer-form.php';
							echo '</div>';
							break;
						case 'SREP':
							if ($issubrep) {
								$dealers = get_dealers_by_dealerid($subreplocations[$userid], false);

							} else {
								$dealers = get_reps_dealers($userid);
							}
							echo '<div class="grid_4">';
							include 'content/forms/dealer-form.php';
							echo '</div>';
							break;
						case 'SADMIN':
							$dealers = get_all_dealers_admin();
							echo '<div class="grid_4">';
							include 'content/forms/dealer-form.php';
							echo '</div>';
							$reps = get_reps();
							echo '<div class="grid_4">';
							include 'content/forms/rep-form.php';
							echo '</div>';
							break;
					}
				 ?>

		   </div>

			<div class="clear"></div>
			<div>
				<input type="hidden" name="action" id="bulk_print_download_action" value="print_batch">
				<input type="hidden" name="pricing" id="" value="cost"><div>
				<div class="invisibleTabs ui-tabs ui-corner-all ui-widget ui-widget-content">
					<ul class="tabs ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header" id="list_build_tab_headers" role="tablist">
						<li role="tab" tabindex="0" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-selected="true" >
							<a href="http://alumacraft.com/Boat-Builder.php?action=list#internet_quotes" onClick="window.location='http://alumacraft.com/Boat-Builder.php?action=list&<?php //echo $rustyaddon; ?>#internet_quotes'" role="presentation" tabindex="-1" class="ui-tabs-anchor">Internet Leads</a>
						</li>
						<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="dealer_quotes" >
							<a href="http://alumacraft.com/Boat-Builder.php?action=list&<?php //echo $rustyaddon; ?>#dealer_quotes" id="dealer-quotes-link2" data-addon="&<?php //echo $rustyaddon; ?>"  onClick="window.location='http://alumacraft.com/Boat-Builder.php?action=list&<?php //echo $rustyaddon; ?>#dealer_quotes'" >Dealer/Rep Quotes</a>
						</li>
						<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="orders">
							<a href="http://alumacraft.com/Boat-Builder.php?action=list&<?php //echo $rustyaddon; ?>#orders" onClick="window.location='http://alumacraft.com/Boat-Builder.php?action=list&<?php //echo $rustyaddon; ?>#orders'" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-3">Pending Orders</a>
						</li>
						<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="approved">
							<a href="#pending" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-4">Pending Acknowledgement</a>
						</li>
						<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="received">
							<a href="#approved" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-5">Acknowledged</a>
						</li>
						<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active" aria-controls="dealer_inventory">
							<a href="#inventory" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-6">Dealer Inventory</a>
						</li>
						<li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="warrantied">
							<a href="#registered" role="presentation" tabindex="-1" class="ui-tabs-anchor" id="ui-id-7">Registered</a>
						</li>
					</ul>
					<div class="clearFloat"></div>
					<div id="dealer_quotes" class="transparentBackground blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;"></div>
					<div id="orders" class="transparentBackground blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;"></div>
					<div id="pending" class="transparentBackground blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;">

						<?php if (does_user_have_access($userid, $permissions['view-orders'])) : ?>
							<?php include 'content/orders/pending.php'; ?>
						<?php else : ?>
							You don't have access to this function.
						<?php endif; ?>
					</div>
					<?php if (100 === 100) :?>
						<div id="approved" class="blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;">

	                		<?php if (does_user_have_access($userid, $permissions['view-orders'])) : ?>
								<?php include 'content/orders/approved.php'; ?>
	                        <?php else : ?>
	                            You don't have access to this function.
	                        <?php endif; ?>
	                    </div>
	                    <div id="inventory" class="blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;">
	                        <?php if (does_user_have_access($userid, $permissions['view-inventory'])) : ?>
	                            <?php include 'content/inventory/unregistered-boats.php'; ?>
	                        <?php else : ?>
	                            You don't have access to this function.
	                        <?php endif; ?>
	                    </div>
	                    <div id="registered" class="blueLinks ui-tabs-panel ui-corner-bottom ui-widget-content" style="display: none;">
	                        <?php if (does_user_have_access($userid, $permissions['view-inventory'])) : ?>
	                            <?php include 'content/inventory/registered-boats.php'; ?>
	                        <?php else : ?>
	                            You don't have access to this function.
	                        <?php endif; ?>
	                    </div>
					<?php endif; ?>
				</div> <!-- end addressTabs -->
				<div class="hidden">
					<input type="submit" action="print_batch" class="update_form_action" value=" Print Order Form Batch " style="margin-top:20px;margin-left:20px;">
				<input type="submit" action="print_csv_batch" class="update_form_action" value=" Download CSV Batch " style="margin-top:20px;margin-left:20px;">
				<input type="submit" action="approve_order_batch" class="update_form_action" value=" Bulk Pending Approval " style="margin-top:20px;margin-left:20px;">
				<input type="submit" action="receive_order_batch" class="update_form_action" value=" Bulk Approve " style="margin-top:20px;margin-left:20px;">
				</div>
				<div class="page-section bottom-space" style="height: 100px;"></div>
				</div>

			</div>
			<div class="row"><div class="grid_3"></div><div class="grid_3"></div><div class="grid_3"></div><div class="grid_3"></div></div>
			<div id="inventory-search-modal" style="display:none;">
				<?php include 'content/inventory/inventory-search-form.php'; ?> <a href="#" rel="modal:close">Close</a> or press ESC
			</div>

			<div id="orders-search-modal" style="display:none;">
				<?php include 'content/orders/order-search-form.php'; ?> <a href="#" rel="modal:close">Close</a> or press ESC
			</div>
			<div id="documents-modal" style="display:none;">

			</div>
			<div id="order-approve-modal" style="display:none;"></div>
			<div class="blocker" id="loading"><div id="spinner"><img src="assets/images/loader.gif"></div></div>

		</div>

	</div>
</div>


<?php include 'view/footer-new.php'; ?>
