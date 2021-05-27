<?php 
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peace rebels</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="index.php">RebelStore</a></h1>
            <ul>
                <li><a href="produk.php"><h4>Produk</h4></a></li>
                <li><a href="login.php"><h4>Login</h4></a></li>
            </ul>
        </div>
    </header>
    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>

    <!-- category -->
    <div class="section">
        <div class="container">
            <h3 class="bug">KATEGORI</h3>
            <div class="box ">
                <?php
                    $kategori = mysqli_query($conn, "SELECT *FROM tb_category ORDER BY category_id DESC");
                    if(mysqli_num_rows($kategori) > 0){
                        while($k = mysqli_fetch_array($kategori)){

                ?>
                    <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                        <div class="col-5">
                            
                            <p><?php echo $k['category_name'] ?></p>
                        </div>   
                    </a>
                <?php }}else{ ?>
                    <p>Kategori tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Produk -->
    <div class="section">
        <div class="container">
            <h3>Produk Terbaru</h3>
            <div class="box">
                <?php
                    $produk = mysqli_query($conn, "SELECT * FROM tb_product ORDER BY product_id DESC LIMIT 8");
                    if(mysqli_num_rows($produk) > 0){
                        while($p = mysqli_fetch_array($produk)){
                ?>
                    <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                        <div class="col-4">
                            <img src="produk/<?php echo $p['product_image'] ?>" >
                            <p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
                            <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
                        </div>
                    </a>
                <?php }}else{ ?>
                    <p>produk tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Alamat</h4>
                    <p><?php echo $a->admin_address ?></p>
                </div>
                <div class="footer-col">
                    <h4>Email</h4>
                    <p><?php echo $a->admin_email ?></p>
                </div>
                <div class="footer-col">
                    <h4>No. Handpone</h4>
                    <p><?php echo $a->admin_telp ?></p>
                </div>
                
                <div class="footer-col">
                    <h4>Sosial Media</h4>
                    <div class="sosial-link">
                        <a href="https://www.instagram.com/raihan.anr/" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, Raihan saya tertarik dengan produk Anda." target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
             <small>Copyright &copy;2021 - PeaceRebels.</small>
        </div>
    </div>

</body>
</html>