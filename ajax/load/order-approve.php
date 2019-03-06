<?php  
	session_start();
	include 'includes.php';
	$ordn = $_GET['ordn'];
?>
<div>
	<h2>Are you sure you want to Approve #<?php echo $ordn; ?></h2>
	<h3>Click the Links Below to View Web Order and Acknowledgement</h3>
	<p> <input type="checkbox" name="viewed-weborder" id="viewed-web-order" value="Y" class="unhide-approve-form">View Web Order</p>
    <p> <input type="checkbox" name="viewed-ack" id="viewed-ack" value="Y" class="unhide-approve-form">Viewed Acknowledgement</p>
	
    
    <form action="redir/redir.php" method="post" id="approve-order-form" class="hidden">
    <h3>Type in yes to approve, No to Revise</h3>
    	<input type="hidden" name="action"class="action" value="approve-order">
        <input type="hidden" name="ordn" value="<?php echo $ordn; ?>">
        <input type="text" class="required" name="approve-order" id="approve-order"><br>
        <div id="not-approved-reason" class="hidden">
        	<h4>Reason this order is not confirmed</h4>
        	<textarea name="reason" class="reason" style="height:150px; width: 40%;"></textarea>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>