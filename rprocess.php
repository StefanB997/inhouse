<?php

include('includes/general.php');
$err = 0;
if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['firstname']) && isset($_POST['lastname'])
&& isset($_POST['phonenumber']) && isset($_POST['password']) && isset($_POST['cpassword'])) {
    require "gump.class.php";
    $gump = new GUMP();
    $_POST = $gump->sanitize($_POST);

    $gump->validation_rules(array(
        'email' => 'required|valid_email',
        'username' => 'required|alpha_numeric|max_len,20|min_len,2',
        'firstname' => 'required|alpha|max_len,30|min_len,2',
        'lastname' => 'required|alpha|max_len,30|min_len,1',
        'password' => 'required|max_len,50|min_len,6', 
        'phonenumber' => 'required|numeric|max_len,20|min_len,3',
    ));
    $gump->filter_rules(array(
        'email' => 'trim|sanitize_email',
        'username' => 'trim|sanitize_string',
        'firstname' => 'trim|sanitize_string',
        'lastname' => 'trim|sanitize_string',
        'password' => 'trim',
    ));
    $validated_data = $gump->run($_POST);

    if($validated_data === false) {
        ?>
        <center><font color="red" > <?php echo $gump->get_readable_errors(true); ?> </font></center>
        <?php
        include('signup.php');
    }
    else if ($_POST['password'] !== $_POST['cpassword']){
        echo  "<center><font color='red'>Passwords do not match </font></center>";
	    include ('signup.php');
    } else {
        $username = $validated_data['username'];
        $checkusername = "SELECT * FROM users WHERE username = '$username'";
        $run_check = mysqli_query($connection, $checkusername) or die(mysqli_error($connection));
        $count = mysqli_num_rows($run_check);
        if ($count > 0 ) {
            echo  "<center><font color='red'>username already taken! try a different one</font></center>";
            include ('signup.php');
            exit();
    }
    $email = $validated_data['email'];
    $username = $validated_data['username'];
    $firstname = $validated_data['firstname'];
    $lastname = $validated_data['lastname'];
    $phone = $validated_data['phonenumber'];
    $pass = $validated_data['password'];
    $password = password_hash("$pass" , PASSWORD_DEFAULT);
    $query = "INSERT INTO users(email,username,firstname,lastname,phonenumber,password) VALUES ('$email' , '$username', '$firstname' , '$lastname', '$phone', '$password')";
    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    if(mysqli_affected_rows($connection) > 0) {
        echo "<script>alert('SUCCESSFULLY REGISTERED');
      	window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('An error occured, Try again!');
      	window.location.href='signup.php';</script>";
    }
}
} else {
    print_r($_POST);
}

?>

