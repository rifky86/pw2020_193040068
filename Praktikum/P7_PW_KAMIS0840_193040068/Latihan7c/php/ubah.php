<?php
if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET['id'];
$books = query("SELECT * FROM buku WHERE id = $id")[0];

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil diubah');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo "data gagal diubah!";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>

  <!-- boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="CSS/css.css">
</head>

<body>
  <div class="container">
    <h3>Form Ubah Data Buku</h3>
    <form action="" method="POST">
      <input type="hidden" name="id" id="id" value="<?= $books['id']; ?>">
      <div class="form-group">
        <label for="exampleFormControlFile1">PILIH GAMBAR</label>
        <input type="file" name="gambar" value="<?= $books['gambar']; ?> class=" form-control-file" id="exampleFormControlFile1">
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
        <div class="col-sm-10">
          <input type="text" name="judul" required value="<?= $books['judul']; ?>" class=" form-control" id="inputEmail3">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Penulis</label>
        <div class="col-sm-10">
          <input type="text" name="penulis" required value="<?= $books['penulis']; ?>" class=" form-control" id="inputEmail3">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Stok</label>
        <div class="col-sm-10">
          <input type="text" name="stok" required value="<?= $books['stok']; ?>" class=" form-control" id="inputEmail3">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" name="ubah" class="btn btn-primary">UbahData!!</button>
        </div>
      </div>
    </form>
  </div>
  </div>

</body>

</html>