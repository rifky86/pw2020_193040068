<?php
session_start();
require 'functions.php';
// melakukan pengeceka apakah user sudah melakukan login jik suda rederect ke halaman admin
if (isset($_SESSION['username'])) {
  header("location: admin.php");
  exit;
}

// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['passworrd'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencoba USERNAME dan PASSWORD 
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if ($password == $row['password']) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = $row['id'];
    }
    if ($row['id'] == $_SESSION['hash']) {
    }
    header("Location: admin.php");
    die;
  }
  $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="CSS/css.css">
  <title>login</title>
</head>

<body>
  <div class="container-sm">
    <form action="" method="POST">
      <?php if (isset($error)) : ?>
        <p>Username or password it's wrong</p>
      <?php endif; ?>
      <div class="form-group mt-1">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your Username with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">RememberMe</label>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
  </div>


</body>

</html>