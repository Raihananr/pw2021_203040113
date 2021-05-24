<!-- 
Nama : Raihan Anhar
NRP : 203040113
-->

<?php
require 'php/functions.php';
$peacerebels = query("SELECT * FROM peacerebels")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6c</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <button class="btn btn-info" style="background-color: #dbff14;"><a href="php/login.php" style="text-decoration: none; color: #000000;">Masuk ke halaman admin</a></button>
    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #000000;">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>#</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($peacerebels as $pcr) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="assets/img/<?= $pcr["img"]; ?>"></td>
                <td><?= $pcr["nama"]; ?></td>
                <td><?= $pcr["harga"]; ?></td>
                <td><?= $pcr["kategori"]; ?></td>
                <td>
                    <a href="php/detail.php?id=<?= $pcr['id'] ?>" style="text-decoration: none; color: white;">Lihat</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>