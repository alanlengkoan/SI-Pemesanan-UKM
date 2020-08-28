<?php
// koneksi ke database
include 'configs/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-12">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | UKM Desa Tritiro</title>

    <!-- core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/css/icomoon.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/images/ico/bulkum.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head>
<!--/head-->
<label>Realtime</label>
<script type="text/javascript">
    function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
        var waktu = new Date(); //membuat object date berdasarkan waktu saat 
        var sh = waktu.getHours() +
            ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
        var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
        var ss = waktu.getSeconds() +
            ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" +
            sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
    }
</script>

<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
    <span id="clock"></span>
    &nbsp;
    <?php
    $hari = date('l');
    /*$new = date ('l, F d, Y', strtotime($Today));*/
    if ($hari == "Sunday") {
        echo "Minggu";
    } elseif ($hari == "Monday") {
        echo "Senin";
    } elseif ($hari == "Tuesday") {
        echo "Selasa";
    } elseif ($hari == "Wednesday") {
        echo "Rabu";
    } elseif ($hari == "Thursday") {
        echo ("Kamis");
    } elseif ($hari == "Friday") {
        echo "Jum'at";
    } elseif ($hari == "Saturday") {
        echo "Sabtu";
    }
    ?>
    <?php
    $tgl = date('d');
    echo $tgl;
    $bulan = date('F');
    if ($bulan == "January") {
        echo " Januari ";
    } elseif ($bulan == "February") {
        echo " Februari ";
    } elseif ($bulan == "March") {
        echo " Maret ";
    } elseif ($bulan == "April") {
        echo " April ";
    } elseif ($bulan == "May") {
        echo " Mei ";
    } elseif ($bulan == "June") {
        echo " Juni ";
    } elseif ($bulan == "July") {
        echo " Juli ";
    } elseif ($bulan == "August") {
        echo " Agustus ";
    } elseif ($bulan == "September") {
        echo " September ";
    } elseif ($bulan == "October") {
        echo " Oktober ";
    } elseif ($bulan == "November") {
        echo " November ";
    } elseif ($bulan == "December") {
        echo " Desember ";
    }
    $tahun = date('Y');
    echo $tahun;
    ?>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="top-number">
                            <center>
                                <p><strong>SISTEM INFORMASI PEMASARAN USAHA KECIL DAN MENENGAH (UKM) </strong></p>
                                <p><strong>DESA TRITIRO KABUPATEN BULUKUMBA </strong></p>
                            </center>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social" navbar-form navbar-right>
                            <ul class="social-share">
                                <li>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-whatsapp"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-phone-square"></i></a>
                                </li>
                            </ul>
                            <br /> <br />
                            <div class="row">
                                <div class="col-sm-13 col-xs-12">
                                    <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                                        <input type="text" class="form-control" name="keyword" placeholder="Pencarian">
                                        <button class="btn btn-primary">Cari </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- begin:: nav -->
            <nav class="navbar navbar-inverse" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><img src="assets/images/ico/bulkum.ico" width="90" height="85" alt="logo" class="img-responsive"></a>
                    </div>
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="berita.php">Berita Desa UKM</a>
                            </li>
                            <li>
                                <a href="profilukm.php">Profil UKM</a>
                            </li>
                            <li>
                                <a href="keranjanguser.php">Belanja</a>
                            </li>
                            <li>
                                <a href="login.php">Login </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end:: nav -->

            <strong>
                <marquee> Selamat Datang di Sistem Informasi Pemasaran Usaha Kecil dan Menengah (UKM) Desa TritiroKabupaten Bulukumba </marquee>
            <strong>
    </header>

    <!-- untuk konten -->
    <section class="konten">
        <div class="container">
            <h1>Keranjang Belanja Pelanggan</h1>
            <div class="row" width="40" height="35">

                <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
                <?php while ($perproduk = $ambil->fetch_assoc()) { ?>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="pictures/foto_produk/<?= $perproduk['foto_produk']; ?>" alt="">
                        <div class="caption">
                            <h3><?= $perproduk['nama_produk']; ?></h3>
                            <h5>Rp. <?= number_format($perproduk['harga_produk']); ?></h5>
                            
                            <a href="beli.php?id=<?= $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
                            <a href="detail.php?id=<?= $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-11">
                    <center> &copy; 2019 <a target="_blank" href="http://shapebootstrap.net/"
                            title="Free Twitter Bootstrap WordPress Themes and HTML templates">Sistem Informasi
                            Pemasaran UKM Desa Tritiro</a>. All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>