<?php
require_once('templates/top.php');
$scripts[]= "/media/js/ajax.js";

if (isset($_GET['url'])) {
  $url = $_GET['url'];
} else {
  $url = '';
}

$query = "SELECT * FROM categories WHERE  url='$url'";
$adr = mysqli_query($dbconn,$query);
    if (!$adr) {
      exit($query);
    }
$catalog=mysqli_fetch_array($adr);
$query = "SELECT * FROM notes WHERE catalog=".$catalog['id'];
$adr = mysqli_query($dbconn,$query);
    if (!$adr) {
      exit($query);
    }
?>
<div class = "row">
<?
while ($product=mysqli_fetch_array($adr)) {
?>
  <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?=(isset($product['picture'])?"media/uploads/".$product['picture']:'/media/no_photo.jpeg') ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?=$product['row'];?></a>
                  </h4>
                  <h5>$<?=$product['price'];?></h5>
                  <p class="card-text"><a class = 'prod' data-id = "<?=$product['id'];?>" href=product.php?id=<?=$product['id'] ?>><?=$product['name'];?>
                  </a></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
  <?
}
?>
</div>
<?
require_once('templates/bottom.php');
?>


