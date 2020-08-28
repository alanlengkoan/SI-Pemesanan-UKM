<?php
// mengambil session
session_start();
// untuk koneksi kedatabase
include 'configs/koneksi.php';
//jika tidak ada session pelanggan(belum login maka dilarikan ke login.php)
if (!isset($_SESSION['username']) || $_SESSION['level'] != 'pelanggan') {
    echo "<script>alert('silahkan login');</script>";
    echo "<script>location='login.php';</script>";
}
?>