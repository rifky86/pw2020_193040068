<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040068") or die("Database salah");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

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



function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $gambar = htmlspecialchars($data['gambar']);
    $judul =  htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $stok = htmlspecialchars($data['stok']);

    $queryubah = "UPDATE 
            buku
            SET
            gambar = '$gambar',
            judul = '$judul',
            penulis = '$penulis',
            stok = '$stok'
            WHERE id = '$id'";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM buku 
            where
            gambar LIKE '%$keyword%' OR
                    judul LIKE '%$keyword%' OR
                    penulis LIKE '%$keyword%' OR
                    stok LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script> 
                alert(username sudah digunakan');
                </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query_tambah = "INSERT INTO user VALUES('','$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
