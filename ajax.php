<?php
require_once('config/config.php');
// print_r($_POST);
$id=(int)$_POST['id'];
$query= "SELECT * FROM notes WHERE id=$id";
$adr = mysqli_query($dbconn, $query);
$arr = mysqli_fetch_array($adr);
?>
<a href="#"><img class="card-img-top" src="<?=(isset($arr['picture'])?"media/uploads/".$arr['picture']:'/media/no_photo.jpeg') ?>" alt=""></a>
<div><?=$arr['name'];?></div>
<div><?=$arr['body'];?></div>


