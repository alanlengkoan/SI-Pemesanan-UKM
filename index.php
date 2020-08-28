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
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/ico/bulkum.ico" width="90" height="85" alt="logo"
                                class="img-responsive">
                        </a>
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
                <marquee> Selamat Datang di Sistem Informasi Pemasaran Usaha Kecil dan Menengah (UKM) Desa
                    TritiroKabupaten Bulukumba </marquee>
                <strong>
    </header>

    <div id="tes-carousel" class="carousel slide" data-ride="carousel">
        <!-- indikator -->
        <ol class="carousel-indicators">
            <li data-target="#tes-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#tes-carousel" data-slide-to="1"></li>
            <li data-target="#tes-carousel" data-slide-to="2"></li>
            <li data-target="#tes-carousel" data-slide-to="3"></li>
            <li data-target="#tes-carousel" data-slide-to="4"></li>
            <li data-target="#tes-carousel" data-slide-to="5"></li>
            <li data-target="#tes-carousel" data-slide-to="6"></li>
        </ol>

        <div class="carousel-inner">

            <!-- slide 1 -->
            <div class="item active">
                <img src="assets/images/slider/1.png" alt="Demo 1" class="img-responsive" style="width: 100%" />
                <!-- caption -->
                <div class="carousel-caption">
                    <h3>Judul Caption 1</h3>
                    <p>Keterangan selanjutnya Caption 1</p>
                </div>
            </div>

            <!-- slide 2 -->
            <div class="item">
                <img src="assets/images/slider/2.png" alt="Demo 2" class="img-responsive" style="width: 100%" />
                <!-- caption -->
                <div class="carousel-caption">
                    <h3>Judul Caption 2</h3>
                    <p>Keterangan selanjutnya Caption 2</p>
                </div>
            </div>

            <!-- slide 3 -->
            <div class="item">
                <img src="assets/images/slider/3.png" alt="Demo 3" class="img-responsive" style="width: 100%" />
                <!-- caption -->
                <div class="carousel-caption">
                    <h3>Judul Caption 3</h3>
                    <p>Keterangan selanjutnya Caption 3</p>
                </div>
            </div>

            <!-- slide 4-->
            <div class="item">
                <img src="assets/images/slider/3.png" alt="Demo 3" class="img-responsive" style="width: 100%" />
                <!-- caption -->
                <div class="carousel-caption">
                    <h3>Judul Caption 3</h3>
                    <p>Keterangan selanjutnya Caption 3</p>
                </div>
            </div>

            <!-- slide 5 -->
            <div class="item">
                <img src="assets/images/slider/1.png" alt="Demo 3" class="img-responsive" style="width: 100%" />
                <!-- caption -->
                <div class="carousel-caption">
                    <h3>Judul Caption 3</h3>
                    <p>Keterangan selanjutnya Caption 3</p>
                </div>
            </div>

            <!-- slide 6 -->
            <div class="item">
                <img src="assets/images/slider/1.png" alt="Demo 3" class="img-responsive" style="width: 100%" />
                <!-- caption -->
                <div class="carousel-caption">
                    <h3>Judul Caption 3</h3>
                    <p>Keterangan selanjutnya Caption 3</p>
                </div>
            </div>

        </div>

        <!-- kontrol-->
        <a class="carousel-control left" href="#tes-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control right" href="#tes-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section id="testimonial">
        <div class="container">
            <div class="center fadeInDown">
                <h2>Penggagas UKM Desa Tritiro</h2>
                <p class="lead">Berikut ada beberapa penggagas UKM Desa Tritiro yang berjasa dalam pengembangan produk
                    UKM Desa <br>
                    Terima kasih atas Support membangunnya dan Semoga berkah untuk Kita Semua<br>
                    Mari Majukan Produk Lokal Peninggalan Para Leluhur Kita !
                </p>
            </div>
            <div class="testimonial-slider owl-carousel">
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="assets/images/iby.jpg" width=145 height=100 alt="">
                    </div>
                    <div class="content">
                        <img src="assets/images/review.png" alt="">
                        <p>Realisasi takkan tercapai apabila hanya berpangku Kaki dengan penuh Khayalan, Tetaplah brdoa
                            dan berusaha berguna bagi sesama.</p>
                        <h4>- Yuyun Wahyuni</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="assets/images/iy.jpg" width=145 height=100 alt="">
                    </div>
                    <div class="content">
                        <img src="assets/images/review.png" alt="">
                        <p>Majukan Desa makmurkan ekonomi Masyarakat, If you are looking at blank cassettes on the web,
                            you may be very confused at the difference in price.</p>
                        <h4>- Saiful Amar SE</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="assets/images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="assets/images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="assets/images/client2.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="assets/images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="assets/images/client1.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="assets/images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="slide-img">
                        <img src="assets/images/client3.jpg" alt="">
                    </div>
                    <div class="content">
                        <img src="assets/images/review.png" alt="">
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference
                            in price.</p>
                        <h4>- Charlotte Daniels</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bottom">
        <div class="container fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" class="footer-logo">
                        <img src="assets/images/ico/bulkum.ico" alt="logo">
                    </a>
                </div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <center>
                                    <h3>Tentang Kami</h3>
                                </center>
                                <ul>
                                    <div class="content">
                                        <p>If you are looking at blank cassettes on the web, you may be very confused at
                                            the difference in price.</p>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <center>
                                    <h3>Informasi</h3>
                                </center>
                                <ul>
                                    <div class="content">
                                    </div>
                                    Jln. Kaliurang Km 6,5 Gg. Timor-Timur No. D-09, Yogyakarta
                                    (0274) 880066
                                    Hari dan Jam Layanan Pelanggan:
                                    Senin - Jumat 08.00 - 17.00 WIB
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <center>
                                    <h3>Kontak UKM</h3>
                                </center>
                                <ul>
                                    <div class="content">
                                    </div>
                                    Jln. Kaliurang Km 6,5 Gg. Timor-Timur No. D-09, Yogyakarta
                                    (0274) 880066
                                    Hari dan Jam Layanan Pelanggan:
                                    Senin - Jumat 08.00 - 17.00 WIB
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <center>
                                    <h3>Rekening BANK UKM</h3>
                                </center>
                                <ul>
                                    <div class="content">
                                        <p>If you are looking at blank cassettes on the web, you may be very confused at
                                            the difference in price.</p>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <!--/.col-md-3-->

                    </div>
                </div>


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

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.prettyPhoto.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>