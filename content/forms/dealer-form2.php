<form action="redir/redir.php" method="post" id="dealer-form">
    <input type="hidden" name="action" value="choose-customer" />
	<input type="hidden" name="subset" value="inventory" />
    <input type="hidden" name="page" value="<?php echo $page; ?>" />
    <p class="m20">
    <div class="row">
    	<div class="grid_3">
    		<select name="custid" id="location_select" class="build_list_search_modifier" >
				<option value="all-dealers">All Dealers</option>
				<?php foreach ($dealers as $dealer) : ?>
					<?php if ($dealer['location_id'] == $selected_location_id) : ?>
						<option value="<?php echo $dealer['location_id']; ?>" selected><?php echo $dealer['name']; ?> ---- <?php echo $dealer['city']; ?></option>
					<?php else : ?>
						<option value="<?php echo $dealer['location_id']; ?>"><?php echo $dealer['name']; ?> ---- <?php echo $dealer['city']; ?></option>
					<?php endif; ?>
				<?php endforeach; unset($dealers);  ?>
			</select>
    	</div>
    	<div class="grid_1">
    		<input type="submit" value=" GO " />
    	</div>
    </div>

    </p>
</form>


<script>
	jQuery('#dealer-form').submit(function(e) {
        e.preventDefault();
		var form = jQuery(this);
		var index = '<?php echo $script_name; ?>';
		var destination = '';
		var location = jQuery('#location_select').val();
		var subset = form.find('input[name=subset]').val();
		if (location == 'all-dealers') {
			destination = index;
		} else {
			destination = index + "?location=" + encodeURIComponent(location) + '#' + subset;
		}
		window.location.href = destination;
    });
</script>
