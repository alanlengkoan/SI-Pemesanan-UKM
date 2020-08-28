<?php

// untuk koneksi ke database
$host   = "localhost";
$dbuser = "my_root";
$dbpass = "my_pass";
$dbname = "si_pemesananukm";

$koneksi = new mysqli ($host, $dbuser, $dbpass, $dbname);

if ($koneksi->connect_errno) {
    echo "Gagal Koneksi " . $koneksi->connect_error;
} else {
    // echo "Koneksi Berhasil";
}