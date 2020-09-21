<form action="" method="post" id="rep-form">
    <input type="hidden" name="action" value="choose-customer" />
	<input type="hidden" name="subset" value="inventory" />
    <input type="hidden" name="page" value="<?php echo $page; ?>" />
    <p class="m20">
    <div class="row">
    	<div class="grid_3">
			<select name="custid" id="rep_select" class="build_list_search_modifier">
				<option value="all-reps">-- All --</option>
				<?php foreach ($reps->fetchAll() as $rep) : ?>
					<?php if ($rep['user_id'] == $repid) : ?>
						<option value="<?php echo $rep['user_id']; ?>" selected><?php echo $rep['name']; ?></option>
					<?php else : ?>
						<option value="<?php echo $rep['user_id']; ?>"><?php echo $rep['name']; ?></option>
					<?php endif; ?>
				<?php endforeach; unset($reps);  ?>
			</select>
		</div>
		<div class="grid_1">
			<input type="submit" value=" GO " /></p>
		</div>
   </div>

</form>

<br /> <!-- </form>  -->


<script>
	jQuery('#rep-form').submit(function(e) {
        e.preventDefault();
		var index = '<?php echo $script_name; ?>'; var destination = '';
		var location = jQuery('#rep_select').val();
		if (location == 'all-reps') {
			destination = index;
		} else {
			destination = index + "?rep=" + encodeURIComponent(location);
		}
		window.location.replace(destination);
    });
</script>
