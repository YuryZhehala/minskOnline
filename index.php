<?php 
require_once('templates/top.php');
if(isset($_GET['url'])) {
    $url=$_GET['url'];
}else{
    $url='index';
}

$query = "SELECT * FROM maintexts WHERE url = '$url'";

$adr = mysqli_query($dbconn, $query);
$arr = mysqli_fetch_array($adr);

//print_r($arr);
//exit ();

//<?php echo ['name'];\

?>

<h2><?=$arr['name'];?></h2>
	<?=$arr ['body'];?>



<?php
error_reporting(0);
foreach ($_POST as $key => $val) { $k = trim($_POST[$key]); $_POST[$key] = addslashes($k); }
$filename = 'msg.html';
$somecontent = '<div>' . $_POST['name'] . '->' . $_POST['phone'] . '</div>';
$handle = fopen($filename, 'a'); fwrite($handle, $somecontent); fclose($handle);
?>


<?php require_once('templates/bottom.php');?>
