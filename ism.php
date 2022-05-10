<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);

    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
    $log=$_GET['id'];
    

    if(mb_strlen($login) < 5 || mb_strlen($login) > 15){
        echo "Недопустимая длина логина";
        exit();
    }
    if(mb_strlen($name) < 3 || mb_strlen($name) > 15){
        echo "Недопустимая длина имени";
        exit();
    }
    if(mb_strlen($pass) < 5 || mb_strlen($pass) > 25){
        echo "Недопустимая длина пароля";
        exit();
    }

    $pass = md5($pass."wertfg");

    $mysql= new mysqli('localhost','root','root','register-bd');
 if ($sql=$mysql->query("SELECT * FROM `users` WHERE `login`='$login'") and $sql->num_rows>0 and $login!=$log)
 { 
 echo "Пользователь с таким логином уже существет"; 
 $mysql->close();
 exit();
 } 

 $mysql->query("UPDATE `users` SET `login` = '$login' WHERE `users`.`login` = '$log'");
 $mysql->query("UPDATE `users` SET `name` = '$name' WHERE `users`.`login` = '$log'");
 $mysql->query("UPDATE `users` SET `password` = '$password' WHERE `users`.`login` = '$log'");
 $mysql->query("UPDATE `users` SET `image` = '$image' WHERE `users`.`login` = '$log'");
 
 $mysql->close();

    header('Location: /header.php');
?>