<?php

require_once('config/config.php');
if ($_POST) {
  $email = $_POST ['email'];
  $password = $_POST ['password'];
  $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

  $adr = mysqli_query($dbconn, $query);
  if (!$adr) {
    exit ($query);
  }
$user = mysqli_fetch_array ($adr);
if(!$user['id']) {
  echo "error auth";
} else {
  $_SESSION ['id']=$user['id'];
  header('location:/');
}
}
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8" />
        <link href="media/css/layout.css" rel="stylesheet" type="text/css" />
        <link href="media/css/modal.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <header>
            <h2>Добро пожаловать</h2>
            <a href="http://www.script-tutorials.com/css3-modal-popups/" class="stuts">Назад на <span>Главную</span> страницу</a>
        </header>

        <!-- panel with buttons -->
        <div class="main">
            <div class="panel">
                <a href="#login_form" id="login_pop">Вход</a>
                <a href="register.php" id="join_pop">Регистрация</a>
            </div>

        </div>

        <!-- popup form #1 -->
        <a href="#x" class="overlay" id="login_form"></a>
        <div class="popup">
            <h2>Welcome Guest!</h2>
            <p>Введите Ваш логин и пароль</p>
            <form action='login.php' method='post'>
            <div>
                <label for="login">Логин</label>
                <input name="email" type="email" id="login" value="" />
            </div>
            <div>
                <label for="password">Пароль</label>
                <input name="password" type="password" id="password" value="" />
            </div>
            <input class="last" type="submit" value="Войти" />

            <a class="close" href="#close"></a>
        </div>

        <!-- popup form #2 -->
        <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
            <h2>Регистрация</h2>
            <p>Введите Ваши данные</p>
            <div>
                <label for="email">Логин (Email)</label>
                <input type="text" id="email" value="" />
            </div>
            <div>
                <label for="pass">Пароль</label>
                <input type="password" id="pass" value="" />
            </div>
            <div>
                <label for="firstname">Имя</label>
                <input type="text" id="firstname" value="" />
            </div>
            <div>
                <label for="lastname">Фамилия</label>
                <input type="text" id="lastname" value="" />
            </div>
            <input type="button" value="Sign Up" />&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;<a href="#login_form" id="login_pop">Войти</a>

            <a class="close" href="#close"></a>
        </div>
    </body>
</html>