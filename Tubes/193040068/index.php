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
      <li><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li>
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
      <div class="row">
        <?php foreach ($book as $books) : ?>
          <div class="col-6">
            <div class="card">
              <div class="text-center">
                <a href="php/detail.php?id=<?= $books['id'] ?>">
                  <img src="Assets/img/<?= $books['gambar'] ?>" class="img-thumbnail mt-2" width="300px">
                </a>
                <p>
                  <h2> <?= $books['judul'] ?></h2>
                </p>

              </div>

            </div>

          </div>

        <?php endforeach; ?>
      <?php endif ?>
      </div>
  </div>
  <div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
    <footer>
      <div class="row my-5 justify-content-center py-5">
        <div class="col-11">
          <div class="row ">
            <div class="col-xl-10 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
              <h3 class="text-muted mb-md-0 mb-5 bold-text">PEMOGRAMAN WEB 2020</h3>
            </div>
          </div>
        </div>
        <div class="row ">
          <div class="col-xl-4 col-md-3 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
            <p class="social text-muted mb-0 pb-0 bold-text"> <span class="mx-2"><i class="fab fa-github"></i></span> <span class="mx-2"><i class="fab fa-instagram"></i></span> <span class="mx-2"><i class="fab fa-facebook"></i></p><small class="rights"><span>&#174;</span> jangan lupa ;</small>
          </div>
          <div class="col-xl-4 col-md-5 col-sm-4 col-auto order-1 align-self-end ">
            <h6 class="mt-55 mt-2 text-muted bold-text"><b>RIFKY MAULANA</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> 193040068@mail.unpas.ac.id</small>
          </div>
          <div class="col-xl-4 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
            <h6 class="text-muted bold-text"><b>UNIVERAITAS PASUNDAN</b></h6><small></span>TEKNIK INFORMATIKA</small>
          </div>
        </div>
      </div>
  </div>
  </footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>