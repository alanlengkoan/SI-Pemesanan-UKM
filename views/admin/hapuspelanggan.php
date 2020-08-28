<?php

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");

$koneksi->query("DELETE FROM tb_user WHERE id_user = '$_GET[id]'");
echo "<script>alert('pelanggan terhapus');</script>";
echo "<script>location='index.php?halaman=pelanggan';</script>";

?>
                    