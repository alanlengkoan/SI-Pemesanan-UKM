<?php
// untuk memulai session
session_start();
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
    $hari  = date('l');
    $tgl   = date('d');
    $bulan = date('F');
    $tahun = date('Y');

    if ($hari == "Sunday") {
        echo "Minggu";
    } else if ($hari == "Monday") {
        echo "Senin";
    } else if ($hari == "Tuesday") {
        echo "Selasa";
    } else if ($hari == "Wednesday") {
        echo "Rabu";
    } else if ($hari == "Thursday") {
        echo ("Kamis");
    } else if ($hari == "Friday") {
        echo "Jum'at";
    } else if ($hari == "Saturday") {
        echo "Sabtu";
    }
    if ($bulan == "January") {
        echo " Januari ";
    } else if ($bulan == "February") {
        echo " Februari ";
    } else if ($bulan == "March") {
        echo " Maret ";
    } else if ($bulan == "April") {
        echo " April ";
    } else if ($bulan == "May") {
        echo " Mei ";
    } else if ($bulan == "June") {
        echo " Juni ";
    } else if ($bulan == "July") {
        echo " Juli ";
    } else if ($bulan == "August") {
        echo " Agustus ";
    } else if ($bulan == "September") {
        echo " September ";
    } else if ($bulan == "October") {
        echo " Oktober ";
    } else if ($bulan == "November") {
        echo " November ";
    } else if ($bulan == "December") {
        echo " Desember ";
    }
    echo $tgl;
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
    <br /><br />
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Pelanggan</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                            </div>
                            <input type="submit" name="login" value="Login" class="btn btn-primary">
                        </form> <br>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="daftar.php">Daftar Akun untuk Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-11">
                    <center> &copy; 2019 <a target="_blank" href="#" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Sistem Informasi Pemasaran UKM Desa Tritiro</a>. All Rights Reserved.</center>
                </div>
            </div>
        </div>
    </footer>
    
</body>

</html

<?php
// jika ada tombol login (tombol login ditekan)
if (isset($_POST["login"])) 
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    // lakukan query ngecek akun ditabel pelanggan di DB
    $sql   = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
    $query = $koneksi->query($sql);
    // mengecek apakah data yang dimasukkan ada !
    $akunyangcocok = $query->num_rows;
    //jika 1 akun yang cocok, maka diloginkan
    if ($akunyangcocok > 0) {
        //and sukses login
        $akun = $query->fetch_assoc();
        //simpan di session pelanggan

        if ($akun['level'] == 'admin') {

            // apabila akun dengan level admin
            $_SESSION['username'] = $username;
            $_SESSION['level']    = 'admin';
            echo "<script>alert('anda sukses login');</script>";
            echo "<script>location='views/admin/index.php';</script>";
            
        } else if ($akun['level'] == 'pelanggan') {
            
            // apabila akun dengan level pelanggan
            $_SESSION['pelanggan'] = $akun;
            $_SESSION['level']     = 'pelanggan';
            echo "<script>alert('anda sukses login');</script>";
            echo "<script>location='views/user/index.php';</script>";

        }

        //jika sudah belanja
        if (isset($_SESSION["keranjang"]) OR !empty ($_SESSION["keranjang"])) {
            echo "<script>location='views/user/checkout.php';</script>";
        } else {
            echo "<script>location='views/user/riwayat.php';</script>";
        }

    } else {
        //anda gagal login
        echo "<script>alert('anda gagal login, periksa akun anda');</script>";
        echo "<script>location='login.php';</script>";
    }

}

?>