<?php
// untuk session
session_start();
// untuk koneksi database
include_once '../../configs/koneksi.php';
// untuk mengecek status login
if (!isset($_SESSION['pelanggan']) || $_SESSION['level'] != 'pelanggan') {
     echo "<script>alert('Anda harus login');
            location='../../login.php';
          </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-12">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | UKM Desa Tritiro</title>

    <link rel="shortcut icon" href="../../assets/images/ico/bulkum.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <!-- core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/css/animate.min.css" rel="stylesheet">
    <link href="../../assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="../../assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../../assets/css/icomoon.css" rel="stylesheet">
    <link href="../../assets/css/main.css" rel="stylesheet">
    <link href="../../assets/css/responsive.css" rel="stylesheet">
</head>
<!--/head-->
<label>Realtime</label>
<script type="text/javascript">
    function tampilkanwaktu() { //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
        var waktu = new Date(); //membuat object date berdasarkan waktu saat 
        var sh = waktu.getHours() + ""; //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
        var sm = waktu.getMinutes() + ""; //memunculkan nilai detik    
        var ss = waktu.getSeconds() + ""; //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length == 1 ? "0" + sh : sh) + ":" + (sm.length == 1 ? "0" + sm : sm) + ":" + (ss.length == 1 ? "0" + ss : ss);
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
        
        $tgl = date('d');
        echo $tgl;
        $bulan = date('F');
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
        $tahun = date('Y');
        echo $tahun;
    ?>