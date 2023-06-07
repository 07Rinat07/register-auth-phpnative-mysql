<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container mt-4">
    <?php
        if ($_COOKIE['user'] ==''):
    ?>
   <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1>
            <form action="validation-form/check.php" method="post">
                <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
                <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success" type="submit">Зарегистрировать</button>
            </form>
        </div>
       <div class="col">
           <h1>Форма авторизации</h1>
           <form action="validation-form/auth.php" method="post">
               <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
               <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
               <button class="btn btn-success" type="submit">Авторизоваться</button>
           </form>
       </div>
       <?php else: ?>
       <p>Привет <?=$_COOKIE['user'] ?>. Что бы выйти нажмите <a href="exit.php">здесь</a>. </p>
       <?php endif;?>

   </div>
</div>


</body>
</html>