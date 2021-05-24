<?php
// $mahasiswa = [
//     ["Raihan Anhar", "203040113", "raihananrr@gmail.com", "Teknik Informatika"],
//     ["Bondan Tri wibowo", "201000455", "Bondangans@gmail.com", "Teknik Management Informatika"],
//     ["farhat fahrezi muntaha", "209006782", "fhtfrzm@gmail.com", "Management Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Raihan Anhar",
        "nrp" => "203040113",
        "email" => "raihananrr@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "raihan.png"
    ],
    [
        "nama" => "Bondan Tri wibowo",
        "nrp" => "201000455",
        "email" => "Bondangans@gmail.com",
        "jurusan" => "Teknik Management Informatika",
        "gambar" => "bondan.png"
    ],
    [
        "nama" => "Farhat Fahrezi Muntaha ",
        "nrp" => "209006782",
        "email" => "fhtfrzm@gmail.com",
        "jurusan" => "Management Informatika",
        "gambar" => "farhat.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>