<?php $optionarray = array('both' => 'Both', 's' => 'Only Unregistered', 'n' => 'Only Registered'); ?>

<form id="show-unregistered-boats-form" action="ajax/json/get-json-link.php" method="post" style="padding-left: 5px;">
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
	<p><b>Show Unregistered boats</b></p>
    
    <div class="row">
    	<div class="grid_4">
    		<select name="show-unregistered" class="build_list_search_modifier" style="width:300px;">
				<?php foreach ($optionarray as $key => $value) : ?>
					<option value="<?php echo $key; ?>" <?php if ($key == urldecode($_GET['show-sold-unreg'])) {echo 'selected'; } ?>><?php echo $value; ?></option>
				<?php endforeach; ?>
			</select>
    	</div>
    	<div class="grid_1">
    		<input type="submit" value=" GO "></p>
    	</div>
    </div>
</form>