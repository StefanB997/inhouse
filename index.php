<?php
    header('Content-Type: text/html; charset=utf-8');
    session_start();
    include('includes/general.php');
    $sql = 'SELECT * FROM posts WHERE id >= (SELECT FLOOR(MAX(id) * RAND()) FROM posts) ORDER BY id';
    $query = $db->query($sql);
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
    $current = "index";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
    <?php include('includes/header.php'); ?>

    <section>
        <div class="background-image">
            <div class="content-container">
                <h1 id="index-heading">Решение за вашиот дом</h1>
                <div class="form-wrapper">
                        <input type="text" id="search" placeholder="Search for..." required>
                          <button type="submit" id="submit"><i class="fa fa-search"></i></button>
                </div>
                <div class="menu-categories-holder">
                    <input name="option" id="kupuvam"class="radio isHidden" value="kupuvam" type="radio">
                    <label for="kupuvam" class="label">КУПУВАМ</label>
                    <input name="option" id ="iznajmuvam"class="radio isHidden" value="iznajmuvam" type="radio">
                    <label for="iznajmuvam" class="label">ИЗНАЈМУВАМ</label>
                    <a href="new-post.php"><label for="prodavam" class="label">ПРОДАВАМ</label></a>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="content-container-new">
            <div class="new-heading">
                <h1>Нови Огласи</h1>
            </div>
            <div class="owl-carousel owl-theme">
            <?php
                foreach($posts as $key => $post){
                    echo '<div class = "item">';
                    echo '<div class = "item-img">';
                    echo '<img src="postpics/'.$post['img_1'].'">';
                    echo '</div>';
                    echo '<div class = "item-desc">';
                    echo '<p><b>Тип: </b>"'.$post['type'].'"</p>';
                    echo '<p><b>Цена: </b>"'.$post['price'].'"</p>';
                    echo '<p><b>Локација: </b>"'.$post['address'].'"</p>';
                    echo '</div>';
                    echo '</div>';
            }?>
            </div>
        </div>
    </section>

    <section>
        <div class="counter-content">
            <div class="icon-content">
                <div class="number">245</div>
                <div class="icon-img-holder">
                <img src="media/images/sell.png">
            </div>
                <h3>ПРОДАЖБИ</h3>
            </div>
            <div class="icon-content">
                <div class="number">487</div>
                <div class="icon-img-holder">
                    <img src="media/images/house.png">
                </div>
                <h3>АКТИВНИ<br>ОГЛАСИ</h3>
            </div>
            <div class="icon-content">
                <div class="icon-img-holder">
                <div class="number">50</div>
                    <img src="media/images/clients.png">
                </div>
                <h3>ЗАДОВОЛНИ<br>КЛИЕНТИ</h3>
            </div>
            <div class="icon-content">
                <div class="number">5000</div>
                <div class="icon-img-holder">
                    <img src="media/images/users.png">
                </div>
                <h3>КОРИСНИЦИ</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="content-container-new">
            <div class="new-heading">
                <h1>Популарни Огласи</h1>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-img">
                        <img src="./media/images/item.jpg">
                    </div>
                    <div class="item-desc">
                        <p><b>Тип: </b>Куќа</p>
                        <p><b>Цена: </b>13.000EU</p>
                        <p><b>Локација: </b> Lorem ipsum dolor sit amet, consectetur.</p>
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
                    </div>
                </div>
                <div class="item">
                    <div class="item-img">
                        <img src="./media/images/stan.jpg">
                    </div>
                    <div class="item-desc">
                        <p><b>Тип: </b>Куќа</p>
                        <p><b>Цена: </b>13.000EU</p>
                        <p><b>Локација: </b> Lorem ipsum dolor sit amet, consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
       <div class="support-content">
            <div class="support-icon">
                <h3>Продавај Едноставно</h3>
                <div class="support-img-holder">
                    <img src="media/images/sell-house.png">
                    <div class="support-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation.</div>
                </div>
            </div>
            <div class="support-icon">
                <h3>Брзо Решение</h3>
                <div class="support-img-holder">
                    <img src="media/images/shake-hands.png">
                    <div class="support-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation.</div>
                </div>
            </div>
            <div class="support-icon">
                <h3>Побарај Помош</h3>
                <div class="support-img-holder">
                    <img src="media/images/support.png">
                    <div class="support-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation.</div>
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
    <script src="assets/js/index-counter.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>