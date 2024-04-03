<?php
	session_start();
	include '../../../init2.php';
	include '../../../logic/role-type-logic.php';
	// include 'init.php';

	use Aluma\Datax\Warranty;

	if (isset($_GET['show-sold-unreg'])) {
		switch (urldecode($_GET['show-sold-unreg'])) {
			case 'y':
				$reg = "'Y','S'";
				$addonheader = '';
				break;
			case 's':
				$reg = "'S'";
				$addonheader = 'Unregistered';
				break;
			case 'n':
				$reg = "'Y'";
				$addonheader = 'Registered';
				break;
			default:
				$reg = "'Y','S'";
				$addonheader = 'Both Registered and Unregistered';
				break;
		}
	} else {
		$reg = "'Y','S'";
	}
	$ajaxdir = 'inventory'; $subset = 'registered';
?>

<div id="load-registered">

    <?php include '../../../content/pagination/ajax/pagination-logic.php'; ?>

    <?php include '../../../content/inventory/header-logic/head-logic.php'; ?>

    <div> <?php include '../../../content/pagination/ajax/pagination-links.php'; ?> </div>
    <div class="clear"></div>
    <div style="padding-left:5px; padding-top:10px;">
        <h3>Order History <small>(<?php echo $num_of_results; ?> results)</small></h3>
        <h3> <?php echo $heading.' '.$addonheader; ?></h3>
        <h4>Page <?php echo $this_page; ?> of <?php echo $total_pages; ?></h4>
    </div>
    <p style="padding-left:5px; padding-top:10px;">
        <a href="#inventory-search-modal" rel="modal:open" class="open-mod" data-subset="registered">Search Inventory</a>
        <?php if (isset($_GET['search'])) : ?>
            &nbsp; | <a href="javascript:void(0);" onClick="clearsearch('registered', 'inventory')">Clear Search </a>
        <?php endif; ?>
    </p>

    <?php include '../../../content/inventory/show-unreg-form.php'; ?>

    <table class="sortable_table tablesorter">
        <thead>
            <tr>
                <th class="sortable_table_header">Serial Number</th>
				<th class="sortable_table_header">Item ID</th>
				<th class="sortable_table_header">Boat </th>
                <th class="sortable_table_header" style="width:90px;">Sale Date</th>
				<th style="width:200px;" class="sortable_table_header">Customer</th>
				<th>Warranty Expires</th>
				<th class="sortable_table_header" >Registered</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($num_of_results > 0) : ?>
                <?php include '../../../content/inventory/tbl-query-logic/table-logic.php'; ?>

                <?php foreach ($boats->fetchAll() as $boat) : ?>
                    <?php $date = strtotime($boat['InvoiceDate']); ?>
                    <?php $custname = get_custname_from_dplus($boat['CustId']); ?>
                    <?php $invoicedate = date("m/d/Y", $date);  ?>
                    <tr>
                        <td><?php echo $boat['SerialNbr']; ?></td>
						<td><?php echo $boat['ItemNbr']; ?></td>
						<td><?php echo $boat['ItemDesc1']; ?></td>
                        <td><?php echo $invoicedate; ?></td>
						<td style="text-align:right;"><?php echo $custname; ?> </td>
						<td style="text-align:center;">
							<?= Warranty\Expiration\Library::getWarrantyExpireDate($boat['SerialNbr'], $boat['ItemNbr']); ?>
						</td>
                        <td>
                            <a href="warranty-page.php?edit=<?php echo $boat['SerialNbr']."&itemnbr=".$boat['ItemNbr']; ?>">View / Edit Warranty </a>
                        </td>
                    </tr>
                    <?php $count++; ?>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="7">NO registered Boats Found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php include '../../../content/pagination/ajax/pagination-links.php'; ?>



</div>
