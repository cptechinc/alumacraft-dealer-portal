<?php include 'init.php'; ?>
<?php include 'view/header.php'; ?>
<?php include 'logic/role-type-logic.php'; ?>

<?php
	use Aluma\Datax\Warranty;
	$serial = 'ACBF1650A121';
	$itemID = '1-21-255-9674';
?>

<div class="page-section white">
		<div class="content-wrapper">
		<div class="wrap">
			<?= Warranty\Expiration\Library::getWarrantyExpireDate($serial, $itemID) ?></p>
		</div>
	</div>
</div>


<?php include 'view/footer.php'; ?>
