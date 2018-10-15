<?php
session_start();
include('includes/general.php');
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    mysqli_real_escape_string($connection, $email);
    mysqli_real_escape_string($connection, $password);
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            $email = $row['email'];
            $user = $row['username'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $phone = $row['phonenumber'];
            $pass = $row['password'];
            print_r($row['password']);
            if(password_verify($password, $pass)) {
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $user;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['lastname'] = $lastname;
                $_SESSION['phonenumber'] = $phone;
                echo "<script>alert('Logged in!')</script>";
            } else {
                echo "<script>alert('invalid username/password');
			window.location.href= 'login.php';</script>";
            }
        }
    } else {
        echo "<script>alert('invalid username/password');
			window.location.href= 'login.php';</script>";
    }

} else {
    echo "<script>alert('Something happened!');</script>";
} 

?>

<?php
session_start();
include('includes/general.php');
$err = 0;
if(isset($_POST['email']) && isset($_POST['password'])) {
    require "gump.class.php";
    $gump = new GUMP();
    $_POST = $gump->sanitize($_POST);

    $gump->validation_rules(array(
        'email' => 'required|valid_email',
        'password' => 'required|max_len,50|min_len,6',
    ));
    $gump->filter_rules(array(
        'email' => 'trim|sanitize_email',
        'password' => 'trim',
    ));

    $validated_data = $gump->run($_POST);

    if($validated_data === false) {
        echo "<script>alert('Validation Error!');</script>";
        include('login.php');
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $check_login = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    }
}

?>