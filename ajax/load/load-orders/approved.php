<?php session_start(); ?>
<?php include 'init.php'; ?>
<?php $ajaxdir = 'load-orders'; $subset = 'approved'; $approved = 'YES';  ?>

<?php include '../../../content/pagination/ajax/pagination-logic.php';  ?>
<?php include '../../../content/orders/header-logic/head-logic.php'; ?>

<div id="load-approved">


<div><?php include '../../../content/pagination/ajax/pagination-links.php'; ?></div>
<div class="clear"></div>
<div style="padding-left:5px; padding-top:10px;">
	<h3>Approved Orders <small>(<?php echo $num_of_results; ?> results)</small></h3>
	<h3> <?php echo $heading; ?></h3>
</div>
<p style="padding-left:5px; padding-top:10px;">
	<a href="#orders-search-modal" rel="modal:open" class="open-mod" data-subset="approved">Search Orders</a>
	<?php if (isset($_GET['search'])) : ?>
		<?php include '../../../content/orders/clear-search-form.php'; ?>
	<?php endif; ?>
</p>
<?php include '../../../content/orders/boats-only-form.php'; ?>

<table class="sortable_table tablesorter">
	<thead>
		<?php if ($boatsonly) : ?>
			<tr>
				<th class="sortable_table_header">Order #</th> <th class="sortable_table_header">Web #</th> <th class="sortable_table_header">Dealer</th>
				<th class="sortable_table_header">Boat</th> <th class="sortable_table_header">PO</th> <th class="sortable_table_header">Status</th>
				<th class="sortable_table_header" >Order Date</th> <th class="sortable_table_header" >Acknowledge Date</th>
				<?php //if (is_user_alumacraft_admin($userid)) : ?>
					<th class="sortable_table_header" >Est. PROD FINISH / INV</th> <th class="sortable_table_header">Est. LOAD # / WEEK OF</th>
				<?php //endif; ?>
				<th class="sortable_table_header" style="width:90px;">Action</th>
			</tr>
		<?php else : ?>
			<tr>
				<th class="sortable_table_header">Order #</th> <th class="sortable_table_header">Web #</th> <th class="sortable_table_header">Dealer</th>
				<th class="sortable_table_header">PO</th> <th class="sortable_table_header">Status</th>
				<th class="sortable_table_header" >Order Date</th> <th class="sortable_table_header">Acknowledge Date</th>
				<?php //if (is_user_alumacraft_admin($userid)) : ?>
					<th class="sortable_table_header" >Est. PROD FINISH / INV</th> <th class="sortable_table_header">Est. LOAD # / WEEK OF</th>
				<?php //endif; ?>
				<th class="sortable_table_header" style="width:90px;">Action</th>
			</tr>
		<?php endif; ?>
	</thead>
	<tbody>
		<?php if ($num_of_results > 0) : ?>
			<?php include '../../../content/orders/tbl-query-logic/table-logic.php'; ?>
			<?php foreach ($orders->fetchAll() as $order) : ?>
				<?php $date = strtotime($order['OehdOrdrDate']); $orderdate = date("m/d/Y", $date); ?>
				<?php $date = strtotime($order['OehdArrvDate']); $arrvdate = date("m/d/Y", $date);  ?>
				<?php $vieworderlink = "http://alumacraft.com/Boat-Builder.php?action=print&pricing=cost&build_id=".$order['OehdUserCode2'].'&'/*.$rustyaddon */; ?>
				<?php
					$prodfinish = $requestrelease = '';
					$wipcomplete = get_wip_complete_date($order['OehdNbr'], $order['itemid'], false);
					$sql = get_wip_complete_date($order['OehdNbr'], $order['itemid'], true);

					if ($wipcomplete < 1) {
						if (is_in_inv_lot($order['OehdNbr'], $order['itemid'], false)) {
							$prodfinish = 'INVENTORY';
						} else {
							$prodfinish = '';
						}
					} else {
						$prodfinish = date("m/d/Y", strtotime($wipcomplete));
					}

					if ($order['OehdReleaseNbr'] != '' && $prodfinish != '') {
						$requestrelease = $order['OehdReleaseNbr'] . ' <b>Date:</b> ' . date("m/d/Y", strtotime($order['OehdRqstDate']));
					} elseif ($order['OehdReleaseNbr'] == '') {
						//$prodfinish = '';
					}

					$ackdatestamp = get_order_acknowledge_date($order['OehdNbr']);

					if ($ackdatestamp != '') {
						$ackdate = date("m/d/Y", strtotime($ackdatestamp));
					} else {
						$ackdate = '';
					}


					// if (get_partnumber_productionlocation($order['itemid']) != 'MN' && $requestrelease != '') {
					// 	$requestrelase = '';
					// 	$prodfinish = '';
					// }

				?>
				<?php if ($boatsonly) : ?>
					<tr>
						<td><?php echo $order['OehdNbr']; ?></td>
						<td><?php echo $order['OehdUserCode2']; ?></td>
						<td><?php echo get_custname_from_dplus($order['ArcuCustId']); ?></td>
						<td><?php echo $order['descr']; ?></td>
						<td><?php echo $order['OehdCustPo']; ?></td>
						<td><?php echo $order['OehdUserCode1']; ?></td>
						<td><?php echo $orderdate; ?></td>
						<td><?php echo $ackdate; ?></td>
						<?php //if (is_user_alumacraft_admin($userid)) : ?>
							<td><?php echo $prodfinish ?></td>
							<td><?php echo $requestrelease; ?></td>
						<?php //endif; ?>
						<td>
							<a href="<?php echo $vieworderlink; ?>" target="_blank">View Order</a>
							<?php if (1==2): ?><a href="ajax/load/orders/order-modal.php?ordn=<?php echo $order['OehdNbr']; ?>" rel="modal:open">View Order</a><?php endif; ?> |
							<a href="#" data-ordn="<?php echo $order['OehdNbr']; ?>" class="get-document">View Acknowledgement</a>
						</td>
					</tr>
				<?php else : ?>
					<tr>
						<td><?php echo $order['OehdNbr']; ?></td>
						<td><?php echo $order['OehdUserCode2']; ?></td>
						<td><?php echo get_custname_from_dplus($order['ArcuCustId']); ?></td>
						<td><?php echo $order['OehdCustPo']; ?></td>
						<td><?php echo $order['OehdUserCode1']; ?></td>
						<td><?php echo $orderdate; ?></td>
						<td><?php echo $ackdate; ?></td>
						<?php //if (is_user_alumacraft_admin($userid)) : ?>
							<?php if ($requestrelease != '') : ?>
								<td><?php echo $prodfinish ?></td>
								<td><?php echo $requestrelease; ?></td>
							<?php else : ?>
								<td></td>
								<td></td>
							<?php endif; ?>
						<?php //endif; ?>
						<td>
							<a href="<?php echo $vieworderlink; ?>" target="_blank">View Order</a>
							<?php if (1==2): ?><a href="ajax/load/orders/order-modal.php?ordn=<?php echo $order['OehdNbr']; ?>" rel="modal:open">View Order</a><?php endif; ?> |
							<a href="#" data-ordn="<?php echo $order['OehdNbr']; ?>" class="get-document">View Acknowledgement</a>
						</td>
					</tr>
				<?php endif; ?>
			<?php endforeach; unset($boats); ?>
		<?php else : ?>
			<tr>
				<td colspan="11">NO Orders Found</td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>
<?php include '../../../content/pagination/ajax/pagination-links.php'; ?>
</div>
