<?php

// untuk koneksi ke database
$host   = "127.0.0.1";
$dbuser = "my_root";
$dbpass = "my_pass";
$dbname = "si_pemesananukm";
$port   = "3307";

$koneksi = new mysqli($host, $dbuser, $dbpass, $dbname, $port);

if ($koneksi->connect_errno) {
    echo "Gagal Koneksi " . $koneksi->connect_error;
} else {
    // echo "Koneksi Berhasil";
}
