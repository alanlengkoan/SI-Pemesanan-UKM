<h2>Tambah Berita UKM</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
        <label>Isi</label>
        <input type="text" class="form-control" name="isi">
    </div>
    <div class="form-group">
        <label>Tanggal</label>
        <input type="date" class="form-control" name="tanggal">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea class="form-control" name="deskripsi" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary fa fa-save" name="save"> Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
    $nama = $_FILES['foto']['name'];
    $lokasi =$_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasi, "../../pictures/foto_berita/".$nama);
    $koneksi->query ("INSERT INTO berita
    (judul,isi,tanggal,foto,deskripsi)
    VALUES('$_POST[judul]','$_POST[isi]','$_POST[tanggal]','$nama','$_POST[deskripsi]')");
    echo "<div class='alert alert-info'>Data Tersimpan</div>";
    echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=berita'>";
}
?>