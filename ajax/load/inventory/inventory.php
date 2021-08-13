<?php session_start(); ?>
<?php include 'init.php'; ?>
<?php $ajaxdir = 'inventory'; $subset = 'inventory'; $reg = "'N'"; ?>

<?php
	$overridelink = $filename;
	if (!strpos('override=', $overridelink) !== false) {
		$overridelink .= '&override=inventory';
	}
	if (isset($_GET['override'])) {
		if ($_GET['override'] == 'inventory') {
			$overrideinventory = true;
		}
	}
?>


<div id="load-inventory">
	<?php include '../../../content/pagination/ajax/pagination-logic.php';  ?>
    <?php include '../../../content/inventory/header-logic/head-logic.php'; ?>
	<div><?php include '../../../content/pagination/ajax/pagination-links.php'; ?></div>
    <div class="clear"></div>
    <div style="padding-left:5px; padding-top:10px;">
        <h3>Inventory <small>(<?php echo $num_of_results; ?> results)</small></h3>
        <h3> <?php echo $heading; ?></h3>
        <h4>Page <?php echo $this_page; ?> of <?php if ($total_pages) {echo $total_pages; } else { echo '1'; } ?></h4>
    </div>
    <p style="padding-left:5px; padding-top:10px;">
        <a href="#inventory-search-modal" rel="modal:open" class="open-mod" data-subset="inventory">Search Inventory</a>
        <?php if (isset($_GET['search'])) : ?>
            &nbsp; | <a href="javascript:void(0);" onClick="clearsearch('inventory', 'inventory')">Clear Search </a>
        <?php endif; ?>
        <?php if (!($overrideinventory)) : ?>
        	&nbsp; | <a href="javascript:void(0);" onClick="loadpage('inventory', '<?php echo $overridelink; ?>')"> Check Inventory </a>
        <?php endif; ?>
    </p>
    <table class="sortable_table tablesorter">
        <thead>
            <tr>
                <th class="sortable_table_header">Serial Number</th> <th class="sortable_table_header">Item ID</th>
                <th class="sortable_table_header">Boat</th> <th class="sortable_table_header" style="width:90px;">Sale Date</th><th>Print</th>
                <th class="sortable_table_header" style="width:200px;">Register Boat</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($num_of_results > 0) : ?>
                <?php include '../../../content/inventory/tbl-query-logic/table-logic.php'; ?>
                <?php foreach ($boats->fetchAll() as $boat) : ?>
                    <?php $date = strtotime($boat['InvoiceDate']); ?>
                    <?php $invoicedate = date("m/d/Y", $date);  ?>
                    <tr>
                        <td><?php echo $boat['SerialNbr']; ?></td><td><?php echo $boat['ItemNbr']; ?></td>
                        <td><?php echo $boat['ItemDesc1']; ?></td><td><?php echo $invoicedate; ?></td>
                        <td>
                        	<?php if (strlen($boat['OehdUserCode2']) > 0) : ?>
                    	<div>
							<a href="#" class="t_icon t_print drop_down_menu" title="print">print</a>
							<div class="submenu" style="display: none;">
								<fieldset style="margin:0;">
									<legend>Order Forms</legend>
									<a class="submenu_link" target="_blank" href="https://www.alumacraft.com/Boat-Builder.php?action=print&amp;build_id=<?php echo $boat['OehdUserCode2']; ?>&amp;pricing=cost">Dealer Cost</a><br>
									<a class="submenu_link" target="_blank" href="https://www.alumacraft.com/Boat-Builder.php?action=print&amp;build_id=<?php echo $boat['OehdUserCode2']; ?>&amp;pricing=msrp">MSRP</a><br>
								</fieldset>
								<fieldset style="margin:0;">
								<legend>Retail Forms</legend>
									<a class="submenu_link" target="_blank" href="https://www.alumacraft.com/Boat-Builder.php?action=print_consumer&amp;build_id=<?php echo $boat['OehdUserCode2']; ?>&amp;pricing=msrp&amp;format=pdf">MSRP</a><br>
								</fieldset>
								<fieldset style="margin:0;">
									<legend>Window Stickers</legend>
									<a class="submenu_link" target="_blank" href="https://www.alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=<?php echo $boat['OehdUserCode2']; ?>&amp;pricing=msrp">MSRP</a><br>
									<a class="submenu_link" target="_blank" href="https://www.alumacraft.com/Boat-Builder.php?action=window_sticker&amp;build_id=<?php echo $boat['OehdUserCode2']; ?>&amp;pricing=none">No Price</a><br>
								</fieldset>
							</div>
							<a href="https://www.alumacraft.com/Boat-Builder.php?action=edit&amp;build_id=<?php echo $boat['OehdUserCode2']; ?>" class="t_icon t_edit" title="edit">edit</a><a href="https://www.alumacraft.com/Boat-Builder.php?action=delete&amp;build_id=<?php echo $boat['OehdUserCode2']; ?>#internet_quotes" class="t_icon t_delete delete_build_confirm" title="delete">delete</a>
						</div>
                   <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($boat['Registered'] == 'N') : ?>
                                <a href="warranty-page.php?register=<?php echo $boat['SerialNbr']."&itemnbr=".$boat['ItemNbr']; ?>">Register Now </a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; unset($boats); ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">NO Boats Found <?php echo $dealerid; ?></td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <?php include '../../../content/pagination/ajax/pagination-links.php'; ?>

    </div>
