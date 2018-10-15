<?php
    session_start();
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
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Контакт</title>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <section>
        <div class="contact-container">
            <div class="info-block">
                <h3>Адреса</h3>
                <hr>
                <p>Street Adress No.46</p>
                <h3>Емаил</h3>
                <hr>
                <p>contact@inhouse.com</p>
            </div>
            <div class="info-block">
                <h3>Телефон</h3>
                <hr>
                <p>+389/72-253-312</p>
                <h3>Работни Часови</h3>
                <hr>
                <p>Пон - Пет / 08:00 - 16:00</p>
                <p>Сабота / 08:00 - 14:00</p>
            </div>
            <div class="info-block" id="contact-block">
                <h3>Прашање?</h3>
                <hr>
                <form>
                    <h5>Вашиот Емаил</h5>
                    <input type="email">
                    <h5>Телефон</h5>
                    <input type="number">
                    <h5>Порака</h5>
                    <textarea></textarea>
                    <button type="submit">Испрати</button>
                </form>
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