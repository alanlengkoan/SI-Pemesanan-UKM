<?php
$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoberita = $pecah['foto'];
if  (file_exists("../../pictures/foto_berita/$fotoberita"))
{
    unlink("../../pictures/foto_berita/$fotoberita");
}

$koneksi->query("DELETE FROM berita WHERE id_berita='$_GET[id]'");

echo "<script>alert('produk terhapus');</script>";
echo "<script>location='index.php?halaman=berita';</script>";
?>
