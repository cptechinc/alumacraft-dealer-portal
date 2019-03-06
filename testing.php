<?php session_start(); ?>
<?php include 'init.php'; ?>
<?php include 'view/header.php'; ?>
<?php include 'logic/role-type-logic.php'; ?>

<div class="page-section white">
    <div class="content-wrapper">
        <div class="wrap">
        <?php echo $_SESSION['sql']."<br>"; ?>
        
   		<?php 
			$response = json_decode($_SESSION['arrowhead'], true);
			$errormessage = '';
			if ($response['errorOccurred']) {
				$error = 'Y';
				echo 'error occured <br>';
				if (is_array($response['resultMessage'])) {
					foreach ($response['resultMessage'] as $key => $value) {
						$errormessage .= 'Apfco: '.$value.' ';
					}

				} else {
					$errormessage = $response['resultMessage'];
				}
			} else {echo 'Boat was able to be registered to arrowhead'; }
			echo var_dump($response);
			echo '<br>'.$errormessage;
			?>
    </div>
</div>


<?php include 'view/footer.php'; ?>