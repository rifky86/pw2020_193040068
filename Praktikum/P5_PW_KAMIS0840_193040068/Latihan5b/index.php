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
    <style>
        img{
            height:250px;
            padding: 20px;
        }
        body {
            text-align: center;
        }
    </style>
</head>
<body>
    <table border = "1px"; cellpadding = 10; cellspacing= "1"> 
         <tr>
            <th>NO</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Stok</th>
        </tr>
            
        <?php
            foreach ($book as $books) :?> 
                <tr>
                    <td><?= $books["id"];?></td>
                    <td><img src="Assets/img/<?= $books["gambar"]?>"></td>
                    <td><?= $books["judul"];?></td>
                    <td><?= $books["penulis"];?></td>
                    <td><?= $books["stok"];?></td>
                </tr>
            
       <?php endforeach; ?>
     </table>
</body>
</html> 