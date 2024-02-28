<?php
include 'db.php';
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
        <div class="section">
            <div class="container">
                <h3>Kategori</h3>
                <div class="box">
                    <?php
                    $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC ");
                    if(mysqli_num_rows($kategori)>0){
                        while($k = mysqli_fetch_array($kategori)){
                    ?>
                    <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                <div class="col-5">
                    <img src="img/kategori.png" width="50px" style="margin-bottom:5px;">
                    <p><?php echo $k['category_name'] ?></p>
                </div>
                </a>
                <?php }}else{?>
                    <p>Kategori Tidak Tersedia</p>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!--new produk-->
        <div class="section">
            <div class="container">
                    <h3>Produk Terbaru</h3>
                <div class="box">
                    <?php
                    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1  ORDER BY product_id DESC    ");
                    if (mysqli_num_rows($produk) > 0){
                        while($p = mysqli_fetch_array($produk)){
                    ?>
                    <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                    <div class="col-4">
                        <img src="produk/<?php echo $p['product_image'] ?>">
                        <p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
                        <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
                    </div>
                        </a>
                    <?php }}else{ ?>
                        <p>Produk Tidak Ada</p>
                        <?php } ?>
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