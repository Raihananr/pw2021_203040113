<?php
require 'functions.php';
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal ditambahkan!');
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
    <title>Tambah data toko</title>
</head>
<body>
    <h1>Tambah data toko</h1>
    <form action="" medhod="post">
        <ul>
            <li>
                <label for="img">Gambar :</label><br>
                <input type="file" name="img" id="img" ><br><br>
            </li>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="harga" required><br><br>
            </li>
            <li>
                <label for="kategori">Kategori :</label><br>
                <select name="kategori" id="kategori" required>
                    <option value="">--------------- Pilih Kategori ---------------</option>
                    <option value="HOODIE">Hoodie</option>
                    <option value="CREWNECK">Crewneck</option>
                    <option value="T-SHIRT">T-shirt</option>
                    <option value="WAISTBAG">Waistbag</option>
                    <option value="CAP">Cap</option>
                </select>
            </li>
            <br>
            <button type="submit" name="tambah">Tambah Data!</button>
            <button type="sumbit">
                <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>

