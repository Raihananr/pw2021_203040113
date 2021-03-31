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
    <title>latihan4B</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body bgcolor="lavender">

    <h1>RebelStore :</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>Harga</th>
          <th>Kategori</th>
        </tr>
        <?php $i = 1; ?>
		<?php foreach ($peacerebels as $pcr) : ?>
         <tr>
             <td><?=$i; ?></td>
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