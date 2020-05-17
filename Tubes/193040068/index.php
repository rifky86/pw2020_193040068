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
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TUBES2020</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="Assets/css/css.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

</head>

<body>
  <nav>
    <ul>
      <li><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i><span>Twitter</span></a></li>
      <li><a href="#"><i class="fab fa-instagram"></i><span>Instagram</span></a></li>
      <li><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
      <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
      <li><a href="#"><i class="fab fa-youtube"></i><span>Youtube</span></a></li>
    </ul>
  </nav>
  <div class="box">
    <div class="container-1">
      <form action="" method="GET">
        <input type="text" id="search" name="keyword" placeholder="Search..." class="keyword">
        <button type="submit" name="cari" class="tombol-cari">Cari!</button>
      </form>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-md-6">
        <a href="php\login.php">
          <button type="button">Admin</button>
        </a>
      </div>
    </div>
  </div>
  <div class="container">
    <h2>DAFTAR BUKU</h2>
    <?php if (empty($book)) : ?> <tr>
        <td colspan="7">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php
      foreach ($book as $books) : ?>

        <div class="text-center">
          <a href="php/detail.php?id=<?= $books['id'] ?>">
            <img src="Assets/img/<?= $books['gambar'] ?>" class="img-thumbnail mt-2" width="350px">
          </a>
          <p>
            <h2> <?= $books['judul'] ?></h2>
          </p>
        </div>

      <?php endforeach; ?>
    <?php endif ?>
  </div>
  <script src="js/script.js"></script>
</body>

</html>