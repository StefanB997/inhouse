<?php

require('includes/general.php');
session_start();

if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $email = mysqli_real_escape_string($connection, $email);
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($connection,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($rows == 1 && password_verify($password, $data['password'])){
                $_SESSION['email'] = $email;
                $_SESSION['firstname'] = $data['firstname'];
                $_SESSION['lastname'] = $data['lastname'];
                $_SESSION['id'] = $data['id'];
                header('location: index.php');
        } else {
                header('location: login.php');
        }
} else {
        header('location: login.php');
}

?>