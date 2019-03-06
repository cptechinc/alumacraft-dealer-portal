<?php  
	session_start();
	include 'includes.php';
	$ordn = $_GET['ordn'];
?>
<div>
	<h2>Are you sure you want to Approve #<?php echo $ordn; ?></h2>
    
    <form action="redir/redir.php" method="post" id="admin-approve-order-form" class="">
    <h3>Type in yes to approve, No to Revise</h3>
    <p>&nbsp;</p>
    	<input type="hidden" name="action" class="action" value="approve-order">
        <input type="hidden" name="ordn" value="<?php echo $ordn; ?>">
        <input type="text" class="required" name="approve-order" id="approve-order"><br>

        <br>
        <button type="submit">Submit</button>
    </form>
</div>