<!-- 
Nama : Raihan Anhar
NRP : 203040113
-->

<?php
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn,"pw_tubes_203040113") or die ("Database salah!");
    $result = mysqli_query($conn, "SELECT * FROM peacerebels");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4a</title>
     <link rel="stylesheet" href="css/sytle.css">
</head>
<body>

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
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
         <tr>
             <td><?=$i; ?></td>
             <td><img src="assets/img/<?=$row["img"]; ?>"></td>
             <td><?=$row["nama"]; ?></td>
             <td><?=$row["harga"]; ?></td>
             <td><?=$row["kategori"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endwhile; ?>

    </table>
</body>
</html> 