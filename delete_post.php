<?php
	session_start();

	include('includes/general.php');

	$delete_post_id = $_GET['id'];
	$sql = "DELETE FROM posts WHERE id = $delete_post_id";
	$query = $db->query($sql);

	echo '<div class="msg" style="width: 100%;text-align: center; background-color: #f1f7fc; color:#007bff;">Post Deleted Successfully';
	echo '</div>';
	include("user.php");

?>