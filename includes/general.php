<?php
// MySQLi
$connection = mysqli_connect("127.0.0.1", "groove", "groove", "inhouse") or die ('error' . mysqli_error($connection));
mysqli_autocommit($connection, True);
mysqli_set_charset($connection, "utf8"); /* Procedural approach */
$connection->set_charset("utf8");
// PDO
$db = new PDO("mysql:host=127.0.0.1;dbname=inhouse", "groove", "groove");
$sql = "SET NAMES UTF8";
$query = $db->query($sql);
?>