<?php
// koneksi ke db & pilih db
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040068');

// query isi tabel
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data kedalam array
// $row = mysqli_fetch_row($result); array numerik
// $row = mysqli_fetch_assoc($result); array associative
// $row = mysqli_fetch_array($result); kedua-duanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// tampung ke variabel
$mahasiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasisa</title>
</head>

<body>
  <h3>Daftar Mahasisa</h3>

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $mhs['gambar']; ?>" style=" height: 100px; width: 100px;"></td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td>
          <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>