<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if (isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $book = query("SELECT * FROM buku 
                    WHERE 
                    gambar LIKE '%$keyword%' OR
                    judul LIKE '%$keyword%' OR
                    penulis LIKE '%$keyword%' OR
                    stok LIKE '%$keyword%'");
} else {
    $book = query("SELECT * FROM buku");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="CSS/css.css">
</head>

<body>
    <div class="container-lg">
        <table border="1px" ; cellpadding=10; cellspacing="1" class="table table-striped">
            <form action="" method="get">
                <div class="form-row align-items-center mb-1">
                    <div class="col-sm-3 my-1">
                        <input type="text" class="form-control" id="inlineFormInputName" placeholder="search" name="keyword" autofocus>
                    </div>
                    <div class="col-auto my-1">
                        <button type="submit" class="btn btn-primary" name="cari">Submit</button>
                    </div>
                </div>
            </form>
            <a href="tambah.php"><button class="btn btn-outline-primary mb-1">TambahData!!</button></a>
            <a href="logout.php"><button class="btn btn-outline-danger mb-1 ml-1">Logout:D</button></a>
            <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Stok</th>
            </tr>
            <?php if (empty($book)) : ?>
                <tr>
                    <td colspan="7">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($book as $books) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td> <button><a href="ubah.php?id=<?= $books['id']; ?>">Ubah</a></button> </li>
                            <button><a href="hapus.php?id=<?= $books['id']; ?>" onclick="return confirm('hapus data?');">Hapus</a></button> </li>
                        </td>
                        <td><img src="../Assets/img/<?= $books['gambar'] ?>" class="img-thumbnail" width="250px"></td>
                        <td><?= $books["judul"]; ?></td>
                        <td><?= $books["penulis"]; ?></td>
                        <td><?= $books["stok"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif ?>
        </table>

    </div>

</body>

</html>