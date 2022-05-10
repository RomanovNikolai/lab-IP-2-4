<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/pov.css"
    
</head>

<body>
<div class="head">
     
    <div class="Text">
        Изменить пользователя с логином <?=$_GET['id'];?>
<div class="yept">

<?php if($_COOKIE['admin']==1):?>
    <div class="nel">
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
             <header class="header">
    <div class="container">
        <div class="header__inner">
       
            <div class="header__logo">Редактор пользователя</div>
            <nav class="nav">
                <a class="nav__link" href="index.php">Вернуться на главную страницу</a>   
            </nav>
            
        </div>

    </div>
    
</div>
</header>
            <form action="ism.php?id=<?=$_GET['id'];?>" method="post" enctype="multipart/form-data" class="admininput">  
           <p> <input type="text"  placeholder="Новый логин" class="textarea" name="login" id="login"/></p>
           <p><input type="text"  placeholder="Новое имя" class="textarea" name="name" id="name"/></p>
           <p><input type="pass"  placeholder="Новый пароль" class="textarea" name="pass" id="pass"/></p>
            
           <p><button class="addbutton" type="submit" id="add" name="add">Изменить пользователя</button></p>
        </form>
       
        <?php else:?>
        Данный пользователь не является админом
        <?php endif;?>
    </div>
    </div>
</body>

</html>