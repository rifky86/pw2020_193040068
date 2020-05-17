<?php
require '../php/functions.php';
$book = cari($_GET['keyword']);
?>
<?php if (empty($book)) : ?> <tr>
    <td colspan="7">
      <h1>Data tidak ditemukan</h1>
    </td>
  </tr>
<?php else : ?>
  <?php
  foreach ($book as $books) : ?>

    <div class="text-center">
      <h2>DAFTAR BUKU</h2>
      <a href="php/detail.php?id=<?= $books['id'] ?>">
        <img src="Assets/img/<?= $books['gambar'] ?>" class="img-thumbnail mt-2" width="350px">
      </a>
      <p>
        <h2> <?= $books['judul'] ?></h2>
      </p>
    </div>

  <?php endforeach; ?>
<?php endif ?>