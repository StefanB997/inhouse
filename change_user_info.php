<?php 
session_start();
include('includes/general.php');

$user_id = $_SESSION['id'];


// Check if all fields are filled
if(isset($_POST['password']) && isset($_POST['n_password']) && isset($_POST['r_password'])){

// Prepare Data From DB For Comparation Purposes
	$sql = "SELECT * FROM users WHERE id = $user_id";
	$query = $db->query($sql);
	$result = $query->fetch(PDO::FETCH_ASSOC);

// Sanitize Input Data
	require "gump.class.php";
	$gump = new GUMP();
	$_POST =$gump->sanitize($_POST);

	$gump->validation_rules(array(
		'password' => 'required|max_len,50|min_len,6',
		'n_password' => 'required|max_len,50|min_len,6',
		'r_password' => 'required|max_len,50|min_len,6',
	));

	$gump->filter_rules(array(
		'password' => 'trim',
		'n_password' => 'trim',
		'r_password' => 'trim',
	));

// Run Sanitizer And Store Sanitized Data In Array $validated_password
	$validated_password = $gump->run($_POST);

// Check If Sanitizer Suspects Something Suspicious
	if($validated_password === false){
		echo $gump->get_readable_errors(true);
        include('user.php');

// Check If Current Password Is Same As Password In DB 
	}else if($validated_password['n_password'] == $validated_password['password']){
		echo '<div class="msg" style="width: 100%;text-align: center; background-color: #ef3221; color:white; opacity: 0.9;">You entered old password!';
		echo '</div>';
		include('user.php');
	}else if(password_verify($validated_password['password'], $result['password']) == false){
		// echo $validated_password['password'], "<br>";
		// echo $result['password'];
		echo '<div class="msg" style="width: 100%;text-align: center; background-color: #ef3221; color:white; opacity: 0.9;">Invalid Password!';
		echo '</div>';
	    include ('user.php');

// If We Get So Far, Then Update The Password In The DB
	}else if($validated_password['n_password'] !== $validated_password['r_password']){
		echo '<div class="msg" style="width: 100%;text-align: center; background-color: #ef3221; color:white; opacity: 0.9;">Password Dont match';
		echo '</div>';
		include('user.php');
	}else{
		$new_password = $validated_password['r_password'];
		$new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);
		$sql = "UPDATE users SET password = '$new_password_hashed' WHERE id = '$user_id'";
		$query = $db->query($sql);
		echo '<div class="msg" style="width: 100%;text-align: center; background-color: #f1f7fc; color:#007bff;">Password Changed Successfully!';
		echo '</div>';
		include('user.php');
	}	
}

?>