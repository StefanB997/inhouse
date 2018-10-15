<?php
include('includes/general.php');
if($_GET['reset']) {
    $token = $_GET['reset'];
    $id = $_GET['key'];
    $select = "SELECT token FROM users WHERE id = '$id'";
    $query = $db->query($select);
    $res = $query->fetch(PDO::FETCH_ASSOC);
    $c_token = $res['token'];
    if($c_token == $token){
        include('fp_form.php');
    } else {
        echo "Invalid token";
        include('index.php');
    }
}
        ?>
