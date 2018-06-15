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
$query2 = "SELECT * FROM categories WHERE url = '$url'";
$adr2 = mysqli_query($dbconn, $query2);
$arr2 = mysqli_fetch_array($adr2);
// PR($arr);
//print_r($arr);
//exit ();

//<?php echo ['name'];\

?>

<h2><?php echo $arr['name'];?></h2>
    <?=$arr ['body'];?>
    
    <h2><?php echo $arr2['name'];?></h2>
	<?=$arr2 ['body'];?>






<?php require_once('templates/bottom.php');?>
