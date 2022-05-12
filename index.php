<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css"
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
    <title>Mogo</title>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__inner">
       
            <div class="header__logo">Сайт обо мне</div>
            <nav class="nav">
                <a class="nav__link" href="aboutme.php">Информация обо мне</a>
                <a class="nav__link" href="gallery.php">Фотогалерея</a>
                <a class="nav__link" href="contacts.php">Контактные данные</a>
                <a class="nav__link" href="mlidm.php">МЛИДМ</a>
                <?php
                    if($_COOKIE['user'] == ''):
                ?>
                <a class="nav__link" href="registration.php">Регистрация</a>
                <a class="nav__link" href="entrance.php">Вход</a>
                <?php else: ?>
                    <div class="nav__link">
                     <?=$_COOKIE['user']?>  <a href="/exit.php">Выход</a> <a href="/header.php">Админ</a>
                    </div>
                <?php endif;?>
                
            </nav>
            
        </div>

    </div>

</header>

<div class="intro">
    <div class="container">
        <div class="intro__inner">

            <h1 class="intro__title">Welcome to my site</h1>
        </div>
    </div>
</div>


</body>
</html>