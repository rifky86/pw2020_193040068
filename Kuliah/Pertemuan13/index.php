<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// ketika tombol cari diketik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <a href="tambah.php">Tambah Data Mahasiswa</a><br><br>
  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Cari" autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>
  <div class="container">
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>

      <?php if (empty($mahasiswa)) : ?>
        <tr>
          <td colspan="4">
            <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
          </td>
        </tr>
      <?php endif; ?>

      <?php $i = 1;
      foreach ($mahasiswa as $m) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $m['gambar']; ?>" style=" height: 100px; width: 100px;"></td>
          <td><?= $m['nama']; ?></td>
          <td>
            <a href="detail.php?id=<?= $m['id']; ?>">Lihat Detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

<script src="js/script.js"></script>

</html>