<?php
session_start();
include('includes/general.php');
?>
<?php $user_id = $_SESSION['id']; ?>
<?php 

if(!isset($_SESSION['firstname']) && $_SESSION['firstname'] == ""){
    header('location:signup.php'); }
?>
<?php
				$sql = "SELECT * FROM posts WHERE user_id = $user_id";
				$query = $db->query($sql);
				$posts = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
</head>

<?php 
	$current = "user";
?>

<body>
	<?php include('includes/header.php'); ?>
	<section>
		<div class="user-info-container">
			<div class="user-info-holder">
				<div class="user-info-img">
					<div class="user-img">
						<img src="media/images/person.png">
					</div>
				</div>
				<div class="user-information-first">
					<form action="update_info_user.php" method="POST">
						<label>
							<h5>Име и Презиме</h5>
							<input type="text" name="name" placeholder="">
						</label>
						<hr>
						<label>
							<h5>Е-маил</h5>
							<input type="text" name="email" placeholder="">
						</label>
						<hr>
						<label>
							<h5>Контакт Телефон</h5>
							<input type="number" name="contact" placeholder="">
						</label>
					</div>
					<div class="user-information-second">
						<label>
							<h5>Лозинка</h5>
							<input type="password" name="password" placeholder">
						</label>
						<hr>
						<label>
							<h5>Нова Лозинка</h5>
							<input type="password" name="n_password" placeholder="">
						</label>
						<hr>
						<label>
							<h5>Повтори Лозинка</h5>
							<input type="password" name="r_password" placeholder="">
						</label>
						<br>
						<label>
							<button type="submit" id="submit">Промени</button>
						</label>
					</div>
				</form>
			</div>
		</div>	
	</section>
	<section>
		<div class="user-posts-container">
			<h1>Активни Огласи</h1><br>
			<?php 
			$sql = 'SELECT title, id FROM posts';
			$query = $db->query($sql);
			$titles = $query->fetchAll(PDO::FETCH_ASSOC);
				foreach($titles as $key =>$title){
				echo '<div class="list-post-item">';
				echo '<div class="list-title">';
				echo '<h5>';
				echo '<a href = "item.php?id='. $title['id'] .'">'.$title['title'].'</a>';
				echo '</h5>';
				echo '</div>';
				echo '<div class="button-edit">';
				echo '<button type="submit" id="edit">Измени';
				echo '</button>';
				echo '</div>';
				echo '<div class="button-remove">';
				echo '<button type="submit" id="remove">Избриши';
				echo '</button>';
				echo '</div>';
				echo '</div>';
				echo '<hr>';
			}
			?>
		</div>
	</section>

    <div class="footer-clean">
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>