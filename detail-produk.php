<?php
include 'db.php';
$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id'] ."' ");
$p=mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Toko Alief </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- header-->
        <header>
            <div class="container">
            <h1><a href="index.php">Salsa.id</a></h1>
            <ul>
                <li><a href="produk.php">Produk</a></li>
            </ul>
            </div>
        </header>
        <div class="search">
            <div class="container">
                <form action="produk.php">
                    <input type="text" name="search" placeholder="Cari Produk">
                    <input type="submit" name="cari" value="Cari Produk">
                </form>
            </div>
        </div>
        
       <!--produk detail-->
        <div class="section">
            <div class="container">
                <h3>Detail Produk</h3>
                <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image ?>" width="100%">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->product_name ?></h3>
                    <h4>Rp. <?php echo number_format($p->product_price)?></h4>
                    <p>Deskripsi : <br>
                    <?php echo $p-> product_description ?>
                </p>
                <p><a href="https://api.whatsapp.com/send?phone=0859102794221&text=Hai, Saya Tertarik Dengan Produk Anda." target="_blank">
                    Hubungi Via Whatsapp 
                    <img src="img/wa.png" width="50px"></a></p>
                </div>
            </div>
        </div>
        <!--footer-->
        <div class="footer">
            <div class="container">
                <h4>Alamat</h4>
                <p>Jl.Kelinci 1 Kaliabang Tengah Bekasi Utara</p>

                <h4>Email</h4>
                <p>alief.rain00@gmail.com</p>

                <h4>No. Telp</h4>
                <p>+62859102794221</p>
                <small>Copyright &copy; 2024 - Salsa.id.</small>
            </div>
        </div>
    </body>
</html>