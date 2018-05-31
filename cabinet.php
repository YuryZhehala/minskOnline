<?php
require_once('templates/top.php');


if ($_SESSION['id']) {

?>
	<h2> Кабинет пользователя</h2>
	<?php
if ($_POST) {
$name = $_POST['name'];
$body = $_POST['body'];
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
		NULL, '$name', '$body', '$smallbody', '', '0', '$filename', '', 0, 'Y', NOW(), ''
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
    <label for="body">описание</label>
    <textarea class="form-control" name="body" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="catalog_id">Каталог</label>
   <select class="form-control">
  <option value="1">1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
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
  <button type="submit" class="btn btn-default">Submit</button>
</form>
<?php
} else {
	echo "Ошибка входа";
}


require_once('templates/bottom.php');
