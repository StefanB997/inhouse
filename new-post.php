<?php
session_start();
?>
<?php if(!isset($_SESSION['firstname']) && $_SESSION['firstname'] == ""){ ?>
    <?php header('location:signup.php'); }?>
<!DOCTYPE html>
<html>
<head>
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
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/new-post.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>New Item</title>
</head>

<?php 
    $current = "newPost";
?>
<body>

<?php if(isset($_SESSION['firstname']) && $_SESSION['firstname'] != "") { ?>
    <?php include('includes/header.php'); ?>

    <section>
        <div class="user-info-container">
            <div class="user-info-holder">
                <h1>Нов Оглас</h1>
                <div class="user-information-first">
                <form method = "post" action = "vpost.php" enctype="multipart/form-data">
                    <label>
                        <h5>Наслов</h5>
                        <input type="text" name="title" placeholder="Enter title" value = "<?php if(isset($_POST['title'])) { echo $post_title; } ?>" required>
                    </label>
                    <hr>
                    <label>
                        <h5>Адреса</h5>
                        <input type="text"  name="address" placeholder="Enter address" value = "<?php if(isset($_POST['address'])) { echo $post_address; } ?>" required>
                    </label>
                    <hr>
                    <label>
                        <h5>Цена</h5>
                        <input type="number" name="price" placeholder="Enter price" value = "<?php if(isset($_POST['price'])) { echo $post_price; } ?>" required>
                    </label>
                    <hr>
                    <label>
                        <h5>Тип</h5>
                        <input type="text" name="type" placeholder="Enter type" value = "<?php if(isset($_POST['type'])) { echo $post_type; } ?>" required>
                    </label>
                </div>
                <hr>
                <div class="user-information-second">
                    <label>
                        <h5>Година на градба</h5>
                        <input type="number" name="year_built" placeholder="Year Built" value = "<?php if(isset($_POST['year_built'])) { echo $post_yearbt; } ?>" required>
                    </label>
                    <hr>
                    <label>
                        <h5>Паркинг</h5>
                        <input type="text" name="parking" placeholder="parking" value = "<?php if(isset($_POST['parking'])) { echo $post_parking; } ?>" required>
                    </label>
                    <hr>
                    <label>
                        <h5>Квадратура</h5>
                        <input type="number" name="sqmeter" placeholder="sqmeter" value = "<?php if(isset($_POST['sqmeter'])) { echo $post_sqmeter; } ?>" required>
                    </label>
                    <br>
                   <hr>
                    <label>
                        <h5>Греење/Ладење</h5>
                        <input type="text" name="heat" placeholder="Heating" value = "<?php if(isset($_POST['heat'])) { echo $post_heat; } ?>" required>
                    </label>
                    <br>
                   <hr>
                    <label>
                        <h5>Галерија</h5>
                        <div class="file">
                                <input type="file" name="files[]" multiple >
                        </div>
                    </label>
                    <br>
                    <hr>
                    <label>
                        <button type="submit" id="submit" value="UPLOAD">Внеси Оглас</button>
                    </label>
                    </form>
                </div>
            </div>
        </div>  
    </section>


    <div class="footer-clean">
        <?php include('includes/footer.php'); ?>
    </div>
<?php }else{header('location:signup.php');} ?>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/show-carousel.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/index-counter.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>