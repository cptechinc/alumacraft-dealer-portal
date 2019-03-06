<?php $optionarray = array('Both' => 'b', 'Only Boats' => 'y'); ?>

<form id="boats-only-form" action="ajax/json/get-orders-link.php" method="post" style="padding-left: 5px;">
	<?php if (isset($_GET['location']) || $role_type == 'DEALER') : ?>
        <input type="hidden" name="custid" value="<?php echo $location_id; ?>">
    <?php else : ?>
        <input type="hidden" name="custid" value="">
    <?php endif; ?>
    <?php if (isset($_GET['rep']) || $role_type == 'SREP') : ?>
        <input type="hidden" name="rep" value="<?php echo $repid; ?>">
    <?php else : ?>
        <input type="hidden" name="rep" value="">
    <?php endif; ?>
    <input type="hidden" name="subset" value="<?php echo $subset; ?>">
	<p><b>Show Only Boat Orders</b></p>
    
    <select name="boats-only" class="build_list_search_modifier" style="width:300px;">
    	<?php foreach ($optionarray as $key => $value) : ?>
			<option value="<?php echo $value; ?>" <?php if ($value == urldecode($_GET['boats-only'])) {echo 'selected'; } ?>><?php echo $key; ?></option>
    	<?php endforeach; ?>
	</select>
    <input type="submit" value=" GO "></p>
</form>