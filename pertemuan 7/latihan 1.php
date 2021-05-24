<?php 
// Raihan anhar - 203040113
// $_GET
$mahasiswa = [
	[	
		"nrp" => "203040113",
		"nama" => "Raihan anhar",
		"email" => "raihannr@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "raihan.png"
	],
	[
		"nrp" => "201020004",
		"nama" => "Farhat Fahrezi Muntaha",
		"email" => "fhrtzh@gmail.com",
		"jurusan" => "Teknik Informatika",
		"gambar" => "farhat.png"
	]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan 2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>