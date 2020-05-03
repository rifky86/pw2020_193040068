<?php
require 'php/functions.php';
// tombol cari di click
if (isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $book = query("SELECT * FROM buku 
                      WHERE 
                      judul LIKE '%$keyword%'
                      ");
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
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <a href="php\admin.php"><button>Go to Admin!</button></a><br><br>
    <form action="" method="get">
        <input type="text" name="keyword" autofocus>
        <button type="submit" name="cari">Cari!</button>
    </form>
    <?php if (empty($book)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data tidak ditemukan</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php
        foreach ($book as $books) : ?>
            <p class="nama">
                <a href="php/detail.php?id=<?= $books['id'] ?>">
                    <?= $books['judul'] ?>
                </a>
            </p>
        <?php endforeach; ?>
    <?php endif ?>
</body>

</html>