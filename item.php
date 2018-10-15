<?php 
session_start();
include('includes/general.php');
$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = '$id'";
$query = $db->query($sql);
$po = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/item.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<title></title>
</head>

<?php
    $current = "item";
?>

<body>
    <?php include('includes/header.php'); ?>

	<section>
		<div class="sve-container">
			<div class="prvi-red">
                <?php
                    echo '<div class="main-image">';
                    echo '<div class="main-image-holder">';
                    echo '<a href="/postpics/'.$po['img_1'].'" data-lightbox="list-img" data-title="image-1"><img src="postpics/'.$po['img_1'].'"></a>';
                    echo '</div>';
                    echo '</div>';

                    echo '<div class="item-row">';
                    echo '<div class="item-row-holder">';
                    echo '<div class="ustvari-item">';
                    echo '<div class="ustvari-stvarno-item">';
                    echo '<a href="/postpics/'.$po['img_2'].'" data-lightbox="list-img" data-title="image-1"><img src="postpics/'.$po['img_2'].'"></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="ustvari-item">';
                    echo '<div class="ustvari-stvarno-item">';
                    echo '<a href="/postpics/'.$po['img_3'].'" data-lightbox="list-img" data-title="image-1"><img src="postpics/'.$po['img_3'].'"></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="ustvari-item">';
                    echo '<div class="ustvari-stvarno-item">';
                    echo '<a href="/postpics/'.$po['img_2'].'" data-lightbox="list-img" data-title="image-1"><img src="postpics/'.$po['img_2'].'"></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="ustvari-item">';
                    echo '<div class="ustvari-stvarno-item">';
                    echo '<a href="/postpics/'.$po['img_1'].'" data-lightbox="list-img" data-title="image-1"><img src="postpics/'.$po['img_1'].'"></a>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';

                ?>
			</div>
        </div>

			<div class="vtori-red">
				<div class="item-description">
                    <?php
                    echo '<div class = "vtori-red">';
                    echo '<div class = "item-description">';
                    echo '<h1>';
                    echo $po['title'];
                    echo '</h1>';
                    echo '<ul>';
                    echo '<li><b>Локација:</b> '.$po['address'].'<br></li>';
                    echo '<li><b>Квадратура:</b> '.$po['sqmeter'].'<br></li>';
                    echo '<li><b>Број на Соби:</b> '.$po['num_rooms'].'<br></li>';
                    echo '<li><b>Број на Тоалети:</b> '.$po['num_toilets'].'<br></li>';
                    echo '<li><b>Состојба:</b> '.$po['condition'].'<br></li>';
                    echo '<li><b>Година на Градба:</b> '.$po['year_built'].'<br></li>';
                    echo '<li><p><b>Опис:</b><br>'.$po['description'].'</b><br></p></li>';
                    echo '</ul>';
                    echo '<ul>';
                    echo '<li><h2>Цена: '.$po['price'].'</h2></li>';
                    echo '</ul>';
                    echo '</div>';
                    echo '</div>';
                    ?>
				</div>
			</div>
		</div>	
	</section>
    <section>
        <div class="related-block">
            <h1>Поврзани Постови</h1>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="./media/images/item.jpg">
                    </div>
                    <div class="item-desc">
                        <p><b>Тип: </b>Куќа</p>
                        <p><b>Цена: </b>13.000EU</p>
                        <p><b>Локација: </b> Lorem ipsum dolor sit amet, consectetur.</p>
                        <p><b>Цена: </b> 45000 EU</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="./media/images/stan.jpg">
                    </div>
                    <div class="item-desc">
                        <p><b>Тип: </b>Стан</p>
                        <p><b>Цена: </b>13.000EU</p>
                        <p><b>Локација: </b> Lorem ipsum dolor sit amet, consectetur.</p>
                        <p><b>Цена: </b> 45000 EU</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="./media/images/stan2.jpg">
                    </div>
                    <div class="item-desc">
                        <p><b>Тип: </b>Куќа</p>
                        <p><b>Цена: </b>13.000EU</p>
                        <p><b>Локација: </b> Lorem ipsum dolor sit amet, consectetur.</p>
                        <p><b>Цена: </b> 45000 EU</p>
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="./media/images/item.jpg">
                    </div>
                    <div class="item-desc">
                        <p><b>Тип: </b>Куќа</p>
                        <p><b>Цена: </b>13.000EU</p>
                        <p><b>Локација: </b> Lorem ipsum dolor sit amet, consectetur.</p>
                        <p><b>Цена: </b> 45000 EU</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="footer-clean">
        <?php include('includes/footer.php'); ?>
    </div>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/show-carousel.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/index-counter.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>