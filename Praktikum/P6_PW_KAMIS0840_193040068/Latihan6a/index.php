<?php
require 'php/functions.php';
$book = query("SELECT * FROM buku");
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
            
        <?php
            foreach ($book as $books) :?> 
                <p class = "nama">
                   <a href="php/detail.php?id=<?=$books['id']?>">
                   <?=$books['judul']?>
                   </a>
                </p>
       <?php endforeach; ?>
</body>
</html> 