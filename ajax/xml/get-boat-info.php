<?php header('Content-Type: application/xml'); ?>
<?php session_start(); ?>
<?php include 'includes.php'; ?>
<?php $serialnbr = urldecode($_GET['serialnbr']); $boats = get_boat_info($serialnbr, false); $boat_array = array(); ?>


<boats>
	<?php foreach($boats->fetchAll() as $boat) : ?>
        <boat>
        	<itemnbr><![CDATA[<?php echo $boat['ItemNbr']; ?>]]></itemnbr>
            <serialnbr><![CDATA[<?php echo $boat['SerialNbr']; ?>]]></serialnbr>
            <desc><![CDATA[<?php echo $boat['ItemDesc']; ?>]]></desc>
            
        </boat>
    <?php endforeach; ?>
</boats>