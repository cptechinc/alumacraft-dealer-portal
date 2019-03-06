
<?php include 'init.php'; ?>
<?php include 'view/header.php'; ?>
<?php include 'logic/role-type-logic.php'; ?>

<div class="page-section white">
	<?php echo session_id();?>
		<div class="content-wrapper">
		<div class="wrap"> <?php echo $_SESSION['sql']."<br>"; ?>
			<?php echo $userid; ?>
		</div>
	</div>
</div>


<?php include 'view/footer.php'; ?>