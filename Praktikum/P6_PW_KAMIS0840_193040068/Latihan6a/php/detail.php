<?php 
// mengecek apakaha ada id yang dikirim
// jika tidak ada maka akan dikembalikan ke halaman index

if (!isset($_GET['id'])){
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
   <link rel="stylesheet" href="../css/css.css">
</head>
<body>
    <img src="../Assets/img/<?= $book["gambar"]?>">
    <h3 class = "nama">Judul : <?= $book['judul']?></h3>
    <h3 class = "nama">Penulis : <?= $book['penulis']?></h3>
    <button><a href="../index.php"> kembali</a></button>
</body>
</html>