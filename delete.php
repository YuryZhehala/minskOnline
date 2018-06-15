<?php
require_once('config/config.php');
$query= "DELETE FROM notes WHERE id = ".$_GET['id'];
$adr = mysqli_query($dbconn,$query);
    if (!$adr) {
      exit($query);
    }
    header('Location: http://minsk.online/cabinet.php');
?>
