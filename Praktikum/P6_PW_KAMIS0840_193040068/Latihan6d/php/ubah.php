<?php
require 'functions.php';

$id = $_GET['id'];
$books = query("SELECT * FROM buku WHERE id = $id")[0];

//Cek apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
    alert('data berhasil ditambahkan');
    document.location.href = 'admin.php';
    </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>
</head>

<body>
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $books['id']; ?>">
    <ul>
      <li>
        <label>Gambar:</label><br>
        <input type="text" name="gambar" required value="<?= $books['gambar']; ?>">
      </li>
      <li><label>Judul:</label><br>
        <input type="text" name="judul" required value="<?= $books['judul']; ?>">

      </li>
      <li><label>Penulis:</label><br>
        <input type="text" name="penulis" required value="<?= $books['penulis']; ?>">
      </li>
      <li><label>Stok:</label><br>
        <input type="text" name="stok" required value="<?= $books['stok']; ?>">
      </li><br>
      <li><button type="submit" name="ubah">TambahData</button>
      </li>

    </ul>

  </form>
</body>

</html>