<?php require_once('templates/top.php');?>
      <h2>Регистрация</h2>
      <?php
      if ($_POST) { 
          // echo "<pre>";
          // print_r ($_POST);
          // echo "</pre>";
          $name = $_POST ['name'];
          $email = $_POST ['email'];
          $password1 = $_POST ['password1'];
          $password2 = $_POST ['password2'];
          $error = [];
      
      if (!$name) {
        $errors[] = 'Укажите имя';
      }
      if (!$email) {
        $errors[] = 'Укажите email';
      }
      $query= "SELECT * FROM users WHERE email='$email'";
      $adr = mysqli_query($dbconn, $query);
      if(!$adr) {
        exit($query);
      }
      $user_test = mysqli_fetch_array($adr);
      if ($user_test['id']) {
        $errors[]= 'Такой пользователь уже есть';
      } 
      if (!$password1) {
        $errors[] = 'Укажите пароль';
      }
      if ($password1 != $password2) {
        $errors[] = 'Пароль не совпадает';
      }
      if (!empty($errors)) {
if (!empty($errors)) {
  foreach($errors as $one) {
    echo "<div class='error'>";
    echo $one;
    echo "</div>";
  }
}
      }
      else {
        $query= "INSERT INTO users VALUES (null, '$name', '$email', '$password1', 'unblock', NOW(), NOW())";
        $adr = mysqli_query($dbconn, $query);
        if (!$adr) {
          exit ($query);
        }
        
    ?>
      <script>
        document.location.href='/';
      </script>
    <?php 
      }
   
}
?>

      <form method="post" action="register.php" class="form-horizontal">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input name='name' type="text" class="form-control" id="name" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input name='email' type="email" class="form-control" id="email" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="password1" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input name='password1' type="password" class="form-control" id="password1" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="password2" class="col-sm-2 control-label">Repeat password</label>
    <div class="col-sm-10">
      <input name='password2' type="password" class="form-control" id="password2" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
      <?php require_once('templates/bottom.php');?>
