<?php
require 'functions.php';

$book = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>

<body>
    <table border="1px" ; cellpadding=10; cellspacing="1">
        <div class="tambah"><a href="tambah.php"><button>Tambah</button></a></div>
        <tr>
            <th>#</th>
            <th>Opsi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($book as $books) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><a href="#"><button>Ubah</button></a>
                    <a href="hapus.php?id=<? $books['id'] ?>"><button>Hapus</button></a>
                </td>
                <td><img src="../Assets/img/<?= $books['gambar'] ?>"></td>
                <td><?= $books["judul"]; ?></td>
                <td><?= $books["penulis"]; ?></td>
                <td><?= $books["stok"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>