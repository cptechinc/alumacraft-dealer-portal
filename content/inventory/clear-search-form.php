<form action="redir/redir.php" method="post">
	<input type="hidden" name="action" value="clearsearch">
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
	<button type="submit" class="aluma-btn">Clear Search</button>
</form>