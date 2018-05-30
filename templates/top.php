<?php
require_once('config/config.php');
?>
<!Doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Новостной портал Minsk Online</title>
  <meta name="description" content="Name">
  <meta name="keywords" content="Name">
  <meta name="author" content="Name">
  <link type="text/css" rel="stylesheet" href="/media/bootstrap/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="/media/css/style.css">
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="/script.js" async> </script>
</head>

<body>
  <div id="header">
    <h1>НОВОСТНОЙ ПОРТАЛ</h1>
    <img src="media/img/logo.png" id="logo" />
  </div>
  <nav class="topmenu">
    <a href="index.php?url=main">ГЛАВНАЯ</a>
    <a href="#">АФИША</a>
    <a href="index.php?url=Radio">РАДИО</a>
    <a href="#">ОТДЫХ</a>
    <a href="#">ОБЪЯВЛЕИЯ</a>
    <a href="#">ФОРУМ</a>
    <a href="index.php?url=Camera">ВЕБКАМЕРА</a>
    <a href="index.php?url=Contacts">КОНТАКТЫ</a>
    <a href="index.php?url=Rules">ПРАВИЛА</a>

 <?php
 if ($_SESSION ['id']) {
 ?>

  <a href = "logout.php">
  Выход
  </a>

 <?php
 } else {
 ?> 
  <a href = "login.php">
  Войти
  </a>
 <?php
}
?>
  </nav>
  


  <div class="col-md-2">


  </div>

  <div class="col-md-8">