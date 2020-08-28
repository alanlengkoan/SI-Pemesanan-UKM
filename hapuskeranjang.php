<?php
session_start();
// session_destroy(); untuk menghapus semua
$id_produk=$_GET["id"];
unset ($_SESSION["keranjang"][$id_produk]);

echo "<script>alert('produk dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>