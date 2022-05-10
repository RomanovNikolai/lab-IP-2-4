<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/style.css"
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Mogo</title>
</head>
<body>


    <header class="header">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo1">Вход</div>
    
                <nav class="nav">
                    <a class="nav__link" href="index.php">Вернуться на главную страницу</a>
                </nav>
                
            </div>
                <div class="container1">
                    <h3 class="section2">Вход</h3>   
                </div>
            
                <form action="auth.php" method="post">
                    <input type="text" class="form-control" name="login"
                    id="login" placeholder="Введите логин"><br>
                    <input type="password" class="form-control" name="pass"
                    id="pass" placeholder="Введите пароль"><br>
                    <button class="btn btn-succes">Войти</button>
                </form>
           
        </div>
    </header>

    <div class="register">
        <div class="container">
           <div class="info">
               
           </div>
        </div>
    </div>

   
</body>
</html>