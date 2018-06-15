<?php
$scripts = [];
$scripts[]= "/media/ckeditor/ckeditor.js";

require_once('templates/top.php');


if ($_SESSION['id']) {

?>
	<h2> Кабинет пользователя</h2>
	<?php
if ($_POST) {
$name = $_POST['name'];
$body = $_POST['body'];
$catalog_id = $_POST['catalog_id'];
$smallbody = $_POST['smallbody'];
	if (! empty($errors)){
		foreach($errors as $arr){
			echo "<div class='error'>";
			echo $arr;
			echo "</div>";
		}
	}else{
		//echo "<pre>";
		//print_r($_FILES);
		//echo "</pre>";
		$filename=$_FILES['picture']['name'];
		$tmp=$_FILES['picture']['tmp_name'];
		$dir=__DIR__.'/media/uploads/';
		if (is_uploaded_file($tmp)){
		move_uploaded_file($tmp, $dir.$filename);
		
		
		}else{
		echo "Ошибка загрузки файла";
		}
		$query="INSERT INTO notes VALUES(
		NULL, '$name', '$body', '$smallbody', '', '$catalog_id', '$filename', '', 0, 'Y', NOW(), ''
		)";
$adr = mysqli_query($dbconn, $query);
        if (!$adr) {
          exit ($query);
        }
        
    ?>
      <script>
        document.location.href='/cabinet.php';
      </script>
    <?php 
	}
}
?>
	
	
	<form method="post" action="cabinet.php" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Название</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="name">
  </div>
  <div class="form-group">
    <label for="smallbody">Короткое описание</label>
    <input type="text" class="form-control" id="smallbody" name="smallbody" placeholder="small body">
  </div>
  <div class="form-group">
    <label for="body">Описание</label>
    <textarea class="form-control ckeditor" name="body" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="catalog_id">Каталог</label>
   <select class="form-control" name='catalog_id'>
     <? $query = "SELECT * FROM categories WHERE showhide = 'show'";
     $adr = mysqli_query($dbconn,$query);
     if (!$adr) {
       exit('error');
     }?>
 <option value = "">Выберите параметр</option>   
 <? while ($arr=mysqli_fetch_array($adr)) {
   ?>
 
  <option value="<?=$arr['id'];?>">
  <?=$arr['name'];?>
  <?php
}
?>

</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" name="picture" id="picture">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default" style="margin-bottom:100px;">Submit</button>
</form>
<?php
$query = "SELECT * FROM notes ";
$adr = mysqli_query($dbconn,$query);
    if (!$adr) {
      exit($query);
    }
    while ($product=mysqli_fetch_array($adr)) {
      ?>
 <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="<?=(isset($product['picture'])?"media/uploads/".$product['picture']:'/media/no_photo.jpeg') ?>" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/delete.php?id=<?=$product['id'];?>">&times;</a>
                  </h4>
                  <h5>$<?=$product['price'];?></h5>
                  
                </div>

              </div>
            </div>
      <?
    }
} else {
	echo "Ошибка входа";
}
require_once('templates/bottom.php');
?>



