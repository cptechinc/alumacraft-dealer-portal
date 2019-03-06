<?php if ($_SERVER['REMOTE_ADDR'] == '70.99.180.218') {header('location: http://alumacraft.com/admin/Login.php'); exit; } ?>
<?php include 'init.php'; ?>

<?php include 'view/login/header.php'; ?>

<div id="login">
    <div id="class" style="text-align:center;">
        <a href="http://alumacraft.com/" target="_blank">
            <img id="imgLogo" src="http://alumacraft.com/images/styleElements/Alumacraft-Logo.png" style="border-width:0px;width:200px;">
        </a>
    </div>
    <?php if (isset($_SESSION['login-error'])) : ?>
        <div class="form-error"> <h2><?php echo $_SESSION['login-error']; ?></h2> </div>
    <?php endif; unset($_SESSION['login-error']); ?>
    <div id="panelLogin">
        <form id="Form1" action="redir/redir.php" method="post">
            <input type="hidden" name="action" value="login">
            <p><label for="email">Email Address:</label><br><input class="wide textbox340" type="text" name="email" id="email" value=""></p>
            <p><label for="pass">Password:</label><br><input class="wide textbox340" type="password" name="pass" id="pass" value=""></p>
            <div class="buttons"><input type="submit" alt="Login" value=" Login " name="btnLogin" id="btnLogin"></div>
        </form>
    </div>
</div>




	
<?php include 'view/login/footer.php'; ?>