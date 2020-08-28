<h2>Ubah Profil</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM profilukm WHERE id_ukm='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama UKM</label>
        <input type="text" name="naukm" class="form-control" value="<?php echo $pecah['nama_ukm']; ?>">
    </div>
    <div class="form-group">
        <img src="../../pictures/foto_profil_ukm/<?php echo $pecah['fotostruktural'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="fotostruktural" class="form-control">
    </div>
    <div class="form-group">
        <label>No HP</label>
        <input type="text" class="form-control" name="nope" value="<?php echo $pecah['nomorhp']; ?>">
    </div>
    <div class="form-group">
        <label>Alamat Lengkap</label>
        <textarea name="alkap"class="form-control" rows="10"><?php echo $pecah['alamat_lengkap'];?></textarea>
    </div>
    <button class="btn btn-primary fa fa-edit fa-lg" name="ubah"> Ubah</button>
</form>
<?php
if (isset($_POST['ubah']))
{
    $namafoto   = $_FILES['fotostruktural']['name'];
    $lokasifoto = $_FILES['fotostruktural']['tmp_name'];
    
    $ambil = $koneksi->query("SELECT * FROM profilukm WHERE id_ukm='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();
    $fotoprofilukm = $pecah['fotostruktural'];
    // mengecek foto lalu dihapus dan diganti dengan yg baru
    if  (file_exists("../../pictures/foto_profil_ukm/$fotoprofilukm"))
    {
        unlink("../../pictures/foto_profil_ukm/$fotoprofilukm");
    }
    // Jika foto dirubah
    if (!empty ($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../../pictures/foto_profil_ukm/$namafoto");
        $koneksi->query("UPDATE profilukm SET nama_ukm='$_POST[naukm]', fotostruktural='$namafoto', nomorhp='$_POST[nope]', alamat_lengkap='$_POST[alkap]' WHERE id_ukm='$_GET[id]'");
    }
    else {
        $koneksi->query("UPDATE profilukm SET nama_ukm='$_POST[naukm]', nomorhp='$_POST[nope]', alamat_lengkap='$_POST[alkap]', WHERE id_ukm='$_GET[id]'");
    } 
    echo "<script>alert('Data profil UKM telah diubah');</script>";
    echo "<script>location='index.php?halaman=profilukm';</script>";
}
?>