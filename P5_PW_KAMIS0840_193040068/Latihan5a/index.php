<?php
$conn =  mysqli_connect("localhost","root","") or die("koneksi ke DB gaggal");

mysqli_select_db($conn,"tubes_193040068") or die("Database Salah");

$result = mysqli_query($conn, "SELECT * FROM buku");
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
            while ($row = mysqli_fetch_assoc($result)) {
                echo"
                <tr>
                    <td>$row[id]</td>
                    <td><img src ='Assets/img/$row[gambar]'></td>
                    <td> $row[judul] </td>
                    <td> $row[penulis] </td>
                    <td> $row[stok] </td>
                </tr>"; 
            } 
        ?>
     </table>
</body>
</html> 