<?php header('Content-Type: application/xml'); ?>
<?php session_start(); ?>
<?php include 'includes.php'; ?>
<?php $serialnbr = urldecode($_GET['serialnbr']); ?>
<?php $itemnbr = urldecode($_GET['itemnbr']); ?>
<?php $serialexists = check_if_boat_got_registered($serialnbr, $itemnbr, false)  ?>
<response>
	<?php if ($serialexists) : ?>
    	<status>true</status>
    <?php else : ?>
    	<status>false</status>
    <?php endif; ?>
    <serialnbr><?php echo $serialnbr; ?></serialnbr>
    <itemnbr><?php echo $itemnbr; ?></itemnbr>
</response>