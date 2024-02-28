<?php
session_start(); 
if ($_SESSION['status_login'] != true){
    echo '<script>window.location="login.php"</script>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Salsa.id </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- header-->
        <header>
            <div class="container">
            <h1><a href="dashboard.php">Salsa.id</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </div>
        </header>
        <!--content-->
        <div class="section">
            <div class="container">
                <h3>Dashboard</h3>
                <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION ['a_global']-> admin_name ?> Di Toko Kami</h4>
                </div>
            </div>
        </div>
        <!-- footer -->
        <footer>
            <div class="container">
                <small>copyright &copy; 2024 - Toko Alief. </small>
            </div>
        </footer>
        </class>
    </body>
</html>