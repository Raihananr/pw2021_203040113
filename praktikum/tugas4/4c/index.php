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
    <title>latihan4c</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
		<?php foreach ($peacerebels as $pcr) : ?>
                <p class="nama">
                    <a href="php/detail.php?id=<?= $pcr['id'] ?>">
                        <?= $pcr["nama"] ?>
                    </a>
                </p>
        <?php endforeach; ?>

    </table>
</body>
</html>