<?php

require 'functions.php';

$peacerebels = query("SELECT * FROM peacerebels");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="lavender">

    <h1>RebelStore :</h1>
    <a href="php/tambah.php">Tambah data toko</a>
    <br></br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>opsi</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Kategori</th>
        </tr>
        <?php $i = 1; ?>
		<?php foreach ($peacerebels as $pcr) : ?>
         <tr>
             <td><?=$i; ?></td>
             <td>
                <a href="php/ubah.php?id=<?= $pcr['id'] ?>"><button>Ubah</button></a>
                <a href="php/hapus.php?id=<?= $pcr['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
             </td>
             <td><img src="assets/img/<?=$pcr["img"]; ?>"></td>
             <td><?=$pcr["nama"]; ?></td>
             <td><?=$pcr["harga"]; ?></td>
             <td><?=$pcr["kategori"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endforeach; ?>

    </table>
</body>
</html>