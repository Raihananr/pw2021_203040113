<?php
//Raihan Anhar
//203040113
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040113");

    return $conn;
}

function query ($sql)
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

    $nama = htmlspecialchars($data['nama']);
    $harga = htmlspecialchars($data['harga']);
    $kategori = htmlspecialchars($data['kategori']);
    $img = htmlspecialchars($data['img']);

    $query = "INSERT INTO peacerebels
                    VALUES
                    ('', '$img', '$nama', '$harga', '$kategori')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}