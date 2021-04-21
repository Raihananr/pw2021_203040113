<?php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';
    $id = $_GET ['id'];
    $peacerebels = query("SELECT * FROM peacerebels WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PeaceRebels</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="lavender">
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $peacerebels["img"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $peacerebels["nama"]; ?></p>
        <p><?= $peacerebels["harga"]; ?></p>
        <p><?= $peacerebels["kategori"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>

</body>
</html