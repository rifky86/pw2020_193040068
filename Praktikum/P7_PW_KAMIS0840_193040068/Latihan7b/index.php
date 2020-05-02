<?php
require 'php/functions.php';
// tombol cari di click
if (isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $book = query("SELECT * FROM buku 
                    WHERE    LIKE '%$keyword%'");
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

    <div class="container-md">

        <a href="php\login.php"><button type="button" class="btn btn-danger mb-3 mt-2">Admin!!</button></a>

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
                <p>
                    <a href="php/detail.php?id=<?= $books['id'] ?>">
                        <?= $books['judul'] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        <?php endif ?>

    </div>

</body>

</html>