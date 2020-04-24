<?php
// fungction untuk melakukan koneksi
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gaggal");
    mysqli_select_db($conn, "tubes_193040068") or die("Database salah");

    return $conn;
}
// Function untuk melakukan query
function query($sql)
{

    $conn = koneksi();
    $result = mysqli_query($conn, $sql);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $judul =  htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $stok = htmlspecialchars($data['stok']);

    $query = "INSERT INTO
            buku
            VALUES
            ('','$gambar','$judul','$penulis','$stok')
            ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}
