<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
</head>

<?php 
    $current = "signup";
?>

<body>
    <?php include('includes/header.php'); ?>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="POST" action = "rprocess.php">
                <h2 class="text-center"><strong>Зачлени</strong> Се</h2>
                <div class="form-group"><input class="form-control" type="email" name="email" value = "<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" placeholder="Е-маил" required></div>
                <div class="form-group"><input class="form-control" type="text" name="username" value = "<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>" placeholder="Корисничко Име" required></div>
                <div class="form-group"><input class="form-control" type="text" name="firstname" value = "<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>" placeholder="Име" required></div>
                <div class="form-group"><input class="form-control" type="text" name="lastname" value = "<?php if(isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>" placeholder="Презиме" required></div>
                <div class="form-group"><input class="form-control" type="number" name="phonenumber" value = "<?php if(isset($_POST['phonenumber'])) { echo $_POST['phonenumber']; } ?>" placeholder="Контакт Телефон" required></div>
                <div class="form-group"><input class="form-control" type="password" name="password" value = "<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>" placeholder="Лозинка" required></div>
                <div class="form-group"><input class="form-control" type="password" name="cpassword" value = "<?php if(isset($_POST['cpassword'])) { echo $_POST['cpassword']; } ?>" placeholder="Повтори Лозинка" required></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>Ги прифаќам правата на политика</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Регистрирај</button></div><a href="login.php" class="already">Постоечки корисник? Најавете се тука.</a></form>
        </div>
    </div>
    <div class="footer-clean">
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>