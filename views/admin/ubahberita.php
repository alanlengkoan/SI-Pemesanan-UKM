<h2>Ubah Berita</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" value="<?php echo $pecah['judul']; ?>">
    </div>
    <div class="form-group">
        <label>Isi</label>
        <input type="text" class="form-control" name="isi" value="<?php echo $pecah['isi']; ?>">
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input type="date" class="form-control" name="tanggal" value="<?php echo $pecah['tanggal']; ?>">
    </div>
    <div class="form-group">
        <img src="../../pictures/foto_berita/<?php echo $pecah['foto'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi"class="form-control" rows="10"><?php echo $pecah['deskripsi'];?></textarea>
    </div>
    <button class="btn btn-primary fa fa-edit fa-lg" name="ubah"> Ubah</button>
</form>
<?php
if (isset($_POST['ubah']))
{
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto =$_FILES['foto']['tmp_name'];

    $ambil = $koneksi->query("SELECT * FROM berita WHERE id_berita='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();
    $fotoberita = $pecah['foto'];
    // mengecek foto lalu dihapus dan diganti dengan yg baru
    if  (file_exists("../../pictures/foto_berita/$fotoberita"))
    {
        unlink("../../pictures/foto_berita/$fotoberita");
    }
    //Jika foto dirubah
    if (!empty ($lokasifoto))
    {
        move_uploaded_file($lokasifoto, "../../pictures/foto_berita/$namafoto");
        $koneksi->query("UPDATE berita SET judul='$_POST[judul]', isi='$_POST[isi]', tanggal='$_POST[tanggal]', foto='$namafoto', deskripsi='$_POST[deskripsi]' WHERE id_berita='$_GET[id]'");
    }
    else {
        $koneksi->query("UPDATE berita SET judul='$_POST[judul]', isi='$_POST[isi]', tanggal='$_POST[tanggal]', deskripsi='$_POST[deskripsi]' WHERE id_berita='$_GET[id]'");
    } 
    echo "<script>alert('Data berita telah diubah');</script>";
    echo "<script>location='index.php?halaman=berita';</script>";
}
?>