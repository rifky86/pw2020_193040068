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
    <!-- boostrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><span> Rifky</span> Mualana</a>
            <div class="navbar-nav ml-3 mt-2">
                <a href=""><img src="assets/logo/icons8-facebook-old-24 (1).png"></a>
                <a href=""><img src="assets/logo/icons8-twitter-24.png"></a>
                <a href=""><img src="assets/logo/icons8-instagram-24.png"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#aboutme">About Me</a>
                    <a class="nav-item nav-link" href="#portofolio">Portofolio</a>
                    <a class="nav-item nav-link" href="#skill">Skill</a>
                    <a class="nav-item nav-link" href="#contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir nav -->
    <!-- jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">
                <div class="font">IMAGINATION</div> IS MORE IMPORTENT <br> THAN KNOWLEDGE
            </h1>
            <p class="lead"></p>
        </div>
    </div>
    <!-- akhir jumbotron -->

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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>