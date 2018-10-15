<?php
include('includes/general.php');
$key = $_GET['key'];



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
        <form method = "post" action = "submit_new.php">
            <p>Enter New Password</p>
            <input type = "hidden" name = "key" value = "<?php echo $key; ?>">
            <input type = "password" name = "password">
            <input type = "submit" name = "submit_password">
        </form>    
</body>
</html>