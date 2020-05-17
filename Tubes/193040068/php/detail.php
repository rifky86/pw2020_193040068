<?php
// mengecek apakaha ada id yang dikirim
// jika tidak ada maka akan dikembalikan ke halaman index

if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

// mengambil id dari url

$id = $_GET['id'];
// melakukan query dengaan menggunakan id  yang diambil dari url
$book = query("SELECT * FROM buku WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../Assets/css/css.css">
</head>

<body>
    <div class="card w-25" style="width: 18rem;">
        <img class="card-img-top" src="../Assets/img/<?= $book["gambar"] ?>" alt="Card image cap">
        <div class="card-body">
            <h3>Judul : <?= $book['judul'] ?></h3>
            <h3>Penulis : <?= $book['penulis'] ?></h3>
            <button><a href="../index.php"> kembali</a></button>
        </div>
    </div>


</body>

</html>