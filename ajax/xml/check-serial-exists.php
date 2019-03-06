<?php header('Content-Type: application/xml'); ?>
<?php session_start(); ?>
<?php include 'includes.php'; ?>
<?php $serialnbr = urldecode($_GET['serialnbr']); ?>

<?php $serialexists = does_serial_exist($serialnbr); ?>
<response>
	<?php if ($serialexists) : ?>
    	<status>true</status>
    <?php else : ?>
    	<status>false</status>
    <?php endif; ?>
    <serialnbr><?php echo $serialnbr; ?></serialnbr>
</response>