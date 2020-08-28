<?php
$ambil = $koneksi->query("SELECT * FROM profilukm WHERE id_ukm='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoprofilukm = $pecah['fotostruktural'];
// mengecek foto lalu dihapus dan diganti dengan yg baru
if  (file_exists("../../pictures/foto_profil_ukm/$fotoprofilukm"))
{
    unlink("../../pictures/foto_profil_ukm/$fotoprofilukm");
}
echo "<script>alert('Profil UKM Desa terhapus');</script>";
echo "<script>location='index.php?halaman=profilukm';</script>";
?>
