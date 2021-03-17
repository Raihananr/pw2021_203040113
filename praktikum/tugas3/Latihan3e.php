<!-- 
Nama : Raihan Anhar
NRP  : 203040113
Shift: Kamis pukul 08:00
-->
<?php 
$barang = [
    [
        "nama"=>"Iphone 12 Pro Max",
        "spesifikasi barang"=>"Dimensi: 160,8 × 78,1 × 7,4 mm.
        Berat : 226 gram. 
        Layar : 6,7 inch   Super Retina XDR (OLED)   Resolusi 2278 × 1284 piksel   458 ppi   HDR   True Tone   Terproteksi Ceramic Shield. 
        Tahan Air : dan Debu IP68 (kedalaman maksimum 6 meter hingga selama 30 menit).   
        Chip : A14 Bionic Neural Engine generasi berikutnya.  
        Koneksi : 5G, WiFi 6, Bluetooth,NFS.  
        Sensor : Face ID.   
        Port : Lightning.   
        SIM Card : Nano SIM dan Esim.  
        Warna : White, Black, Blue, Green, (Product) Red White, Black, Blue, Green, (Product) Red Graphite, Silver, Gold, Pacific Blue Graphite, Silver, Gold, Pacific Blue",
        "harga"=>20499900,
        "stokBarang"=>2,
        "category"=>"Barang Elektronik",
        "foto"=>"iphone12.png"
    ],
   
];

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iAnn Color</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Spesifikasi Barang</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Category</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang["nama"]; ?></td>
                    <td><?= $barang["spesifikasi barang"]; ?></td>
                    <td><?= rupiahIDR($barang["harga"]) ?></td>
                    <td><?= $barang["stokBarang"]; ?></td>
                    <td><?= $barang["category"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang["foto"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>