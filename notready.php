<?php session_start(); ?>
<?php include 'init.php'; ?>
<?php include 'view/header.php'; ?>
<?php include 'logic/role-type-logic.php'; ?>

<div class="page-section white">
    <div class="content-wrapper">
        <div class="wrap">
        	The file or function you have requested is not ready yet.
            Click <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Here</a> to go back.
        </div>
    </div>
</div>


<?php include 'view/footer.php'; ?>