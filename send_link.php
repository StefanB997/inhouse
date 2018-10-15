<?php
include('includes/general.php');

if(isset($_POST['submit_email']) && $_POST['email']) {
    $email = $_POST['email'];
    $select = "SELECT id FROM users WHERE email = '$email' ";
    $query = $db->query($select);
    $res = $query->fetch(PDO::FETCH_ASSOC);
    $id2 = $res['id'];
    $length = 20;
    $token = bin2hex(random_bytes($length));
    $link="<a href='localhost/alpha/reset_pass.php?key=".$id2."&reset=".$token."'>Click To Reset password</a>";
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); 
    $mail->CharSet = "utf-8";
    $mail->IsSMTP();    
    $mail->SMTPAuth = true;
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = "macefromtheleaf@gmail.com";
        $mail->Password = "Danevi1234567";
        $mail->SMTPSecure = "ssl";
        $mail->Port = "465";
        $mail->From = "macefromtheleaf@gmail.com";
        $mail->FromName = "Martin Danev";
        $mail->AddAddress($_POST['email'], 'Name');
        $mail->Subject = "Reset Password";
        $mail->IsHTML(true);
        $mail->Body = "Click on this link to reset Password ".$link."";
        if($mail->Send()) {
            $sql = "UPDATE users SET token = '$token' WHERE email = '$email'";
            $query = $db->query($sql);
            echo "Check your mail";
        } else {
            echo "Mail Err: ->".$mail->ErrorInfo;
        }
    }

?>