<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<?php 
    $current = "login";
?>
<style>
    .login-logo-holder{
        width: 100%;
    }

    .login-logo-holder img{
        width: 100%;
    }
</style>

<body>
    <?php include('includes/header.php'); ?>
    <div class="login-clean">
        <form method="post" action = 'plogin.php'>
            <div class="illustration">
                <div class="login-logo-holder">
                    <img src="media/images/logo.png">
                </div>
            </div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Е-маил"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Лозинка"></div>
            <div class="form-group"><button name = "login" class="btn btn-primary btn-block" type="submit">Најава</button></div><a href="reset_pass.html" class="forgot">Ја заборавивте лозинката? Кликнете овде.</a>
            </form>
    </div>
    <div class="footer-clean">
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

