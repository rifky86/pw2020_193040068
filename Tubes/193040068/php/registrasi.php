<?php
require 'functions.php';

if (isset($_POST["register"])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
    alert('Registrasi Berhasil');
    document.location.href = 'login.php';
    </script>";
  } else {
    echo "<script>
    alert('Registrasi gagal');
    </script>";
  }
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
  <title>registrasi</title>
</head>

<body>

  <div class="container-sm">
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>REGISTER</h2>
          <form action="" method="post">
            <div class="underline-title"></div>
            <label for="user-email" style="padding-top:13px">&nbsp;Username</label>
            <input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required />
            <div class="form-border"></div>
            <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
            <input id="user-password" class="form-content" type="password" name="password" required />
            <div class="form-border"></div>
            <button type="submit" name="register" id="submit-btn">REGISTRASI</button>
          </form>
        </div>
</body>

</html>