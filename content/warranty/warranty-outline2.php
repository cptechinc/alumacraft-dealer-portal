
<?php if ($user->hasAccessLevel($permissions['register-inventory'])) : ?>
	<?php if (isset($_GET['register'])) : ?>
        <?php if (strlen($_GET['register']) > 0) : ?>
            <?php $serial = urldecode($_GET['register']); ?>
            <?php if (does_boat_exist($serial, false)) : ?>
            	<?php $itemnbr = urldecode($_GET['itemnbr']);?>
                <?php if (is_registered($serial, $itemnbr, false, false)) : //secondparameter is return false automatically, for debugging?>
                    This boat has been registered
                <?php else : ?>
                	<div class="row"> <div class="grid_12 grid"> <h2>Register Your Boat</h2> </div> </div>
					<?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']); ?>
					<div class="row"> <div class="grid_12 grid"> <a href="<?php echo $url; ?>#inventory" class="aluma-btn">Back to Inventory</a> </div> </div>
					<?php include 'content/warranty/warranty-form.php'; ?>
                <?php endif; ?>
            <?php else : ?>
                Boat Doesn't Exist
            <?php endif; ?>
        <?php else : ?>
            Not a valid thing to register
        <?php endif; ?>
    <?php elseif (isset($_GET['edit'])) : ?>
    	<?php if (is_user_alumacraft_admin($userid) || $user->hasAccessLevel($permissions['register-inventory'])) : ?>
			<div class="row"> <div class="grid_12 grid"> <h2>Edit Boat Registration</h2> </div> </div>
			<?php $url = htmlspecialchars($_SERVER['HTTP_REFERER']); ?>
			<div class="row"> <div class="grid_12 grid"> <a href="<?php echo $url; ?>#inventory" class="aluma-btn">Back to Inventory</a> </div> </div>
			<?php include 'content/warranty/edit-warranty2.php'; ?>
    	<?php else : ?>
    		You don't have access to edit registration.  <br>
    		<?php if ($user->hasAccessLevel($permissions['view-registered'])) : ?>
				<a href="<?php echo 'warranty-card.php?view='.$_GET['edit'].'&itemnbr='.$_GET['itemnbr']; ?>" target="_blank">View Card</a>
    		<?php endif; ?>
    	<?php endif; ?>
    <?php else : ?>
        Nothing to Register
    <?php endif; ?>
<?php else : ?>
  You don't have access to register boats.
<?php endif; ?>
