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


<?php if($_COOKIE['admin']==1):?>
    
    <header class="header">
    <div class="container">
        <div class="header__inner">
       
            <div class="header__logo">Страница Администратора</div>
            <nav class="nav">
                <a class="nav__link" href="index.php">Вернуться на главную страницу</a>
            </nav>
            
        </div>

    </div>

</header>

<div class="register2">
    
        
        <form action="reg.php" method="post">
    
                
                <input type="text" class="form-control1" name="login"
                id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control1" name="name"
                id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control1" name="pass"
                id="pass" placeholder="Введите пароль"><br>
                <button class="nav__link1" type="submit">Зарегистрировать</button>
            </form>
            <?php
            $link= new mysqli('localhost','root','root','register-bd');
                if(isset($_GET['del'])){
                $log=$_GET['del'];
                $query="DELETE FROM `users` WHERE `login`='$log'";
                mysqli_query($link,$query);
                }
                $result=$link->query("SELECT * FROM `users`");
                for($data=[];$row=$result->fetch_assoc();){
                if($row['login']!="admin"){
                $data[]=$row;
                }
                };
             ?>
             
             
    <div class="dcp">
     <div class="fbi">
     Пользователи
    </div>
    <tr>
    <td>Логин</td>
    <td>Имя</td>
     <?php foreach ($data as $user){?>
        <tr>
            <p><td><?=$user['login']?></td>
            <td><?=$user['name']?></td>
            <td><a href="?del=<?=$user['login']?>">Удалить</a></td>
            <td><a class="naq" href="update.php?id=<?=$user['login']?>">Изменить</a></td></p>
        </tr>
        <?php }?>
        </div>
     
     
        
    
</div>


    <?php else:?>
        <header class="header">
    <div class="container">
        <div class="header__inner">
       
            <div class="header__logo">Страница Администратора</div>
            <nav class="nav">
                <a class="nav__link" href="index.php">Вернуться на главную страницу</a>
            </nav>
            
        </div>

    </div>

</header>

<div class="intro">
    <div class="container">
        <div class="intro__inner">

            <h1 class="intro__title">Данный пользователь не является Администратором</h1>
        </div>
    </div>
</div>
    <?php endif;?>
</body>
</html>