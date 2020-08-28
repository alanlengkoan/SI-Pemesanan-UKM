<h2>Ubah Produk</h2>
<br><br>

<?php
$ambil=$koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah=$ambil->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Produk</label>
        <input type="text" name="nama" class="form-control" value="<?= $pecah['nama_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Harga Rp</label>
        <input type="number" class="form-control" name="harga" value="<?= $pecah['harga_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Berat (Gr)</label>
        <input type="number" class="form-control" name="berat" value="<?= $pecah['berat_produk']; ?>">
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="number" class="form-control" name="stok_produk" value="<?= $pecah['stok_produk']; ?>">
    </div>
    <div class="form-group">
        <img src="../../pictures/foto_produk/<?= $pecah['foto_produk'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi"class="form-control" rows="10"><?= $pecah['deskripsi_produk'];?></textarea>
    </div>
    <button class="btn btn-primary" name="ubah" >
       <i class="fa fa-edit fa-lg"></i> Ubah</button>
</form>
<?php
if (isset($_POST['ubah']))
{
    $namafoto   = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    $ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
    $pecah = $ambil->fetch_assoc();
    $fotoproduk = $pecah['foto_produk'];
    // mengecek foto lalu dihapus dan diganti dengan yg baru
    if  (file_exists("../../pictures/foto_produk/$fotoproduk"))
    {
        unlink("../../pictures/foto_produk/$fotoproduk");
    }
    //Jika foto dirubah
    if (!empty ($lokasifoto))
    {
    move_uploaded_file($lokasifoto, "../../pictures/foto_produk/$namafoto");

    $sql = "UPDATE produk SET nama_produk = '$_POST[nama]', harga_produk = '$_POST[harga]', berat_produk = '$_POST[berat]', foto_produk = '$namafoto', deskripsi_produk = '$_POST[deskripsi]', stok_produk = '$_POST[stok_produk]' WHERE id_produk='$_GET[id]'";
    $koneksi->query($sql);
}
else {
    $koneksi->query("UPDATE produk SET nama_produk='$_POST[nama]', harga_produk='$_POST[harga]', berat_produk='$_POST[berat]', deskripsi_produk='$_POST[deskripsi]' WHERE id_produk='$_GET[id]'");
} 
echo "<script>alert('data produk telah diubah');</script>";
echo "<script>location='index.php?halaman=produk';</script>";
}
?>