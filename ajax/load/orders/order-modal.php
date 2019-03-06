<?php 
session_start();
include 'init.php'; 
$ordn = $_GET['ordn']; 


?>
<div>
    <table class="sortable_table tablesorter">
        <thead>
            <tr>
                <th class="sortable_table_header">Order #</th> <th class="sortable_table_header">Dealer</th>
                <th class="sortable_table_header" >Order Date</th> <th class="sortable_table_header" >Order Accepted</th>
                <th class="sortable_table_header" style="width:90px;">Action</th>
            </tr>
        </thead>
        
        <tbody>	
            <?php $orders = get_orderhead($ordn, false); ?>
            <?php foreach ($orders->fetchAll() as $order) : ?>
                <?php $date = strtotime($order['OehdOrdrDate']); $orderdate = date("m/d/Y", $date); ?>
                <?php $date = strtotime($order['OehdArrvDate']); $arrvdate = date("m/d/Y", $date);  ?>
                <tr>
                    <td><?php echo $order['OehdNbr']; ?></td>
                    <td><?php echo get_custname_from_dplus($order['ArcuCustId']); ?></td>
                    <td><?php echo $orderdate; ?></td>
                    <td><?php echo $arrvdate; ?></td>
                    <td>
                        
                    </td>

                </tr>
            <?php endforeach; unset($order); ?>
            <tr class="detail-heading">
            	<td></td>
            	<td>Item Nbr</td>
            	<td>Description</td>
            	<td>Qty</td>
            	<td></td>
            	
            </tr>
            <?php $details = get_orderdetails($ordn, false); ?>
            <?php foreach ($details->fetchAll() as $detail) : ?>
                <tr>
                <td></td>
                    <td><?php echo $detail['InitItemNbr']; ?></td>
                    <td><?php echo $detail['OedtDesc']; ?></td>
                    <td><?php echo $detail['OedtQtyOrd'] ?></td>
                    
                    <td>
                        
                    </td>

                </tr>
            <?php endforeach; unset($detail); ?>
        </tbody>
    </table>
</div>