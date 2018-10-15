<?php
include('includes/general.php');
if(isset($_POST['submit_password'])) {
    $key = $_POST['key'];
    $pass = $_POST['password'];
    include('includes/general.php');
    $select = "UPDATE users SET password = '$pass' WHERE id = '$key'";
    $query = $db->query($select);

}

?>