<?php
session_start();
require 'functions.php';

if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  if ($hash === hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);

      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: ../index.php");
      die;
    }
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
  <link rel="stylesheet" href="../Assets/css/css.css">
  <title>login</title>
</head>

<body>
  <div class="container-sm">
    <form action="" method="post">
      <?php if (isset($error)) : ?>
        <script>
          alert("password atau username anda salah");
        </script>
      <?php endif; ?>
      <div id="card">
        <div id="card-content">
          <div id="card-title">
            <h2>LOGIN</h2>
            <form action="" method="post">
              <div class="underline-title"></div>
              <label for="user-email" style="padding-top:13px">&nbsp;Username</label>
              <input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required />
              <div class="form-border"></div>
              <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
              <input id="user-password" class="form-content" type="password" name="password" required />
              <div class="form-border"></div>
              <div class="remember">
                <input type="checkbox" name="remember">
                <label for="remember">Remember Me</label>
              </div>
              <button type="submit" name="submit" id="submit-btn">LOGIN</button>
              <div id="signup">
                <p> belum punya akun? registrasi
                  <a href="registrasi.php">Disini</a>
                </p>
              </div>
          </div>
        </div>
      </div>
  </div>
  </form>
</body>

</html>