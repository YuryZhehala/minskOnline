<?php
require_once('config/config.php');
?>
<!Doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Магазин ноутбуков</title>
  <meta name="description" content="Name">
  <meta name="keywords" content="Name">
  <meta name="author" content="Name">
  <link type="text/css" rel="stylesheet" href="/media/bootstrap/css/bootstrap.min.css">
  <link type="text/css" rel="stylesheet" href="/media/css/style.css">
  <script src="/media/js/jquery.js"></script>
  <script src="/media/js/main.js"></script>
  <script src="/script.js" async> </script>
</head>

<body>
  <div id="header">                                                           
    <h1 id="data-body"></h1>
    <img src="media/img/logo.png" id="logo" />
    <a href="#" data.src = 'media/img/logo.png' data.body = 'Описание'></a>
  </div>
  <nav class="topmenu">
    <a href="index.php?url=catalog">КАТАЛОГ</a>
    <a href="index.php?url=aboutus">О МАГАЗИНЕ</a>
    <a href="index.php?url=delivery">ДОСТАВКА</a>
    <a href="index.php?url=guaranty">ГАРАНТИЯ</a>
    <a href="index.php?url=credit">КРЕДИТ</a>
    <a href="index.php?url=cashfree">БЕЗНАЛ</a>
    <a href="index.php?url=rebates">АКЦИИ</a>
    <a href="index.php?url=contacts">КОНТАКТЫ</a>

 <?php
 if ($_SESSION ['id']) {

  echo '<a href = "logout.php">
  Выход
  </a>
  <a href = "cabinet.php">
  Кабинет
  </a>';

 } else {

  echo '<a href = "login.php">
  Войти
  </a>';

}
?>
  </nav>
  


  <div class="col-md-2">
  <h1>КАТЕГОРИИ</h1>
  <nav class="sidemenu">
  <?php $query="SELECT*FROM categories WHERE showhide='show'";
    $adr = mysqli_query($dbconn,$query);
    if (!$adr) {
      exit('error');
    }
while ($arr=mysqli_fetch_array($adr)) {
  ?>
     <a data-body = "<?=$arr['body'];?>" data-src = "media/img/<?=$arr['url'];?>.jpg" href="catalog.php?url=<?=$arr['url'];?>"><?=$arr['name'];?></a>
 <?php
}
?>

    
  </nav>

  </div>

  <div class="col-md-8">