<?php header('Content-Type: text/html; charset=utf-8');?>

<div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="index.php"><img src="media/images/logo.png"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a <?php if($current == "index"){echo 'id="active"';} ?>class="nav-link" href="index.php">Почетна</a></li>
                        <li class="nav-item" role="presentation"><a <?php if($current == "search"){echo 'id="active"';}?>class="nav-link" href="search.php">Пребарувај</a></li>
                        <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="about.php">За Нас </a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="contact.php">Контакт</a><a class="dropdown-item" role="presentation" href="terms.php">Правила на Користење</a>
                        </li>
                    </ul>
                    <?php if(isset($_SESSION['id']) && $_SESSION['id'] != 0) { ?>
                    <ul class="nav navbar-nav mr-auto" id="profile">
<!--                         <li class="nav-item" role="presentation"><a <?php if($current == "newPost"){echo 'id="active"';} ?>class="nav-link" href="new-post.php">Додади пост</a></li>
                        <li class="nav-item" role="presentation"><a<?php if($current == "profile"){echo 'id="active"';} ?> class="nav-link" href="user.php">Профил</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href = "logout.php">Одлогирај се</a></li> -->
                      <li><div class="dropdown">
                        <a href="user.php"><img src="media/images/user.png"></a>
                        <div class="dropdown-content">
                            <p><a href="new-post.php">Нов Оглас</a></p>
                            <p><a href="logout.php">Одјави Се</a></p>
                        </div>
                      </div>
                     </li>
                    </ul>    

                    <?php }else{ ?>
                        <span class="navbar-text actions"> <a <?php if($current == "login"){echo 'id=""';} ?>href="login.php" class="login">Најава</a><a <?php if($current == "signup"){echo 'id=""';} ?>class="btn btn-light action-button" role="button" href="signup.php">Зачлени Се</a></span></div>
                    <?php }?>
            </div>
        </nav>
    </div>