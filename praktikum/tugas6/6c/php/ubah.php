<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
    
$id = $_GET['id'];
$pcr = query("SELECT * FROM peacerebels WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Ubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Ubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data toko</title>
</head>
<body>
    <h1>Ubah data toko</h1>
    <form action="" medhod="post">
        <ul>
            <li>
            <input type="hidden" name="id" id="id" value="<?= $pcr['id']; ?>">
            </li>
            <li>
                <label for="img">Gambar :</label><br>
                <input type="file" name="img" id="img" ><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $pcr['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $pcr['harga']; ?>"><br><br>
            </li>
            <li>
                <label for="kategori">Kategori :</label><br>
                <select name="kategori" id="kategori" required value="<?= $pcr['kategori']; ?>">
                    <option value="">--------------- Pilih Kategori ---------------</option>
                    <option value="HOODIE">Hoodie</option>
                    <option value="CREWNECK">Crewneck</option>
                    <option value="T-SHIRT">T-shirt</option>
                    <option value="WAISTBAG">Waistbag</option>
                    <option value="CAP">Cap</option>
                </select>
            </li>
            <br>
            <button type="submit" name="Ubah">Ubah Data!</button>
            <button type="sumbit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>