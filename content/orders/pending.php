<?php $ajaxdir = 'load-orders'; $subset = 'pending';  $approved = 'NO';  ?>
<?php include 'content/pagination/ajax/pagination-logic.php'; ?>
<?php include 'content/orders/header-logic/head-logic.php'; ?>

<div><?php include 'content/pagination/ajax/pagination-links.php'; ?></div>
<div class="clear"></div>
<div style="padding-left:5px; padding-top:10px;">
    <h3>Pending Orders <small>(<?php echo $num_of_results; ?> results)</small></h3>
    <h3> <?php echo $heading; ?></h3>
</div>
<p style="padding-left:5px; padding-top:10px;">
	<a href="#orders-search-modal" rel="modal:open" class="open-mod" data-subset="pending">Search Orders</a>
    <?php if (isset($_GET['search'])) : ?>
    	<?php include 'content/orders/clear-search-form.php'; ?>
    <?php endif; ?>
</p>
<?php include 'content/orders/boats-only-form.php'; ?>

<table class="sortable_table tablesorter">
    <thead>
    	<?php if ($boatsonly) : ?>
            <tr>
                <th class="sortable_table_header">Order #</th> <th class="sortable_table_header">Web #</th>
                <th class="sortable_table_header">Dealer</th> <th class="sortable_table_header">Boat</th>
                <th class="sortable_table_header" >Order Date</th> <th class="sortable_table_header" >Order Accepted</th>
                <th class="sortable_table_header" style="width:90px;">Action</th>
            </tr>
        <?php else : ?>
         	<tr>
                <th class="sortable_table_header">Order #</th> <th class="sortable_table_header">Web #</th>  <th class="sortable_table_header">Dealer</th>
                <th class="sortable_table_header" >Order Date</th> <th class="sortable_table_header" >Order Accepted</th>
                <th class="sortable_table_header" style="width:90px;">Action</th>
            </tr>
        <?php endif; ?>
    </thead>
    <tbody>
    	<?php if ($num_of_results > 0) : ?>
			<?php include 'content/orders/tbl-query-logic/table-logic.php'; ?>
            <?php foreach ($orders->fetchAll() as $order) : ?>
                <?php $date = strtotime($order['OehdOrdrDate']); $orderdate = date("m/d/Y", $date); ?>
                <?php $date = strtotime($order['OehdArrvDate']); $arrvdate = date("m/d/Y", $date);  ?>
                <?php $vieworderlink = "https://www.alumacraft.com/Boat-Builder.php?action=print&pricing=cost&build_id=".$order['OehdUserCode2'].'&'/*.$rustyaddon*/; ?>
                <?php if ($boatsonly) : ?>
                    <tr>
                        <td><?php echo $order['OehdNbr']; ?></td>
                        <td><?php echo $order['OehdUserCode2']; ?></td>
                        <td><?php echo get_custname_from_dplus($order['ArcuCustId']); ?></td>
                        <td><?php echo $order['descr']; ?></td>
                        <td><?php echo $orderdate; ?></td>
                        <td><?php echo $arrvdate; ?></td>
                        <td>
                        	<a href="<?php echo $vieworderlink; ?>" target="_blank">View Order</a>
                        	<?php if (1==2): ?><a href="ajax/load/orders/order-modal.php?ordn=<?php echo $order['OehdNbr']; ?>" rel="modal:open">View Order</a><?php endif; ?>|
                            <a href="#" data-ordn="<?php echo $order['OehdNbr']; ?>" class="get-document">View Acknowledgement</a>
                            <?php if (1==1) : ?>
                            	| <a href="#" class="approve-<?php echo $order['OehdNbr']; ?>  approve-order" data-ordn="<?php echo $order['OehdNbr']; ?>" data-role="<?php echo $role_type; ?>">Approve Order</a>
                            <?php else : ?>
                                | <a href="#" class="approve-<?php echo $order['OehdNbr']; ?>  approve-order hidden" data-ordn="<?php echo $order['OehdNbr']; ?>" data-role="<?php echo $role_type; ?>">Approve Order</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php else : ?>
                	<tr>
                        <td><?php echo $order['OehdNbr']; ?></td>
                        <td><?php echo $order['OehdUserCode2']; ?></td>
                        <td><?php echo get_custname_from_dplus($order['ArcuCustId']); ?></td>
                        <td><?php echo $orderdate; ?></td>
                        <td><?php echo $arrvdate; ?></td>
                        <td>
                        	<a href="<?php echo $vieworderlink; ?>" target="_blank">View Order</a>
                        	<?php if(1==2): ?><a href="ajax/load/orders/order-modal.php?ordn=<?php echo $order['OehdNbr']; ?>" rel="modal:open">View Order</a><?php endif; ?>
                            <a href="#" data-ordn="<?php echo $order['OehdNbr']; ?>" class="get-document">View Acknowledgement</a>
                            <?php // if ($role_type != "DEALER") ?>
                            <?php if (1==1) : ?>
                            	| <a href="#" class="approve-<?php echo $order['OehdNbr']; ?>  approve-order" data-ordn="<?php echo $order['OehdNbr']; ?>" data-role="<?php echo $role_type; ?>">Approve Order</a>
                            <?php else : ?>
                                | <a href="#" class="approve-<?php echo $order['OehdNbr']; ?>  approve-order hidden" data-ordn="<?php echo $order['OehdNbr']; ?>" data-role="<?php echo $role_type; ?>">Approve Order</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; unset($boats); ?>
        <?php else : ?>
        	<tr>
                <td colspan="7">NO Orders Found</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php include 'content/pagination/ajax/pagination-links.php'; ?>
