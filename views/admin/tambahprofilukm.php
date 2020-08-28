<h2>Tambah Profil UKM Desa Tritiro</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama UKM</label>
        <input type="text" class="form-control" name="nama_ukm">
    </div>
    <div class="form-group">
        <label>Foto Struktural</label>
        <input type="file" class="form-control" name="fotostruktural">
    </div>
    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="number" class="form-control" name="nomorhp">
    </div>
    <div class="form-group">
        <label>Alamat Lengkap</label>
        <textarea class="form-control" name="alamat_lengkap" rows="10"></textarea>
    </div>
   
    <button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
        $nama   = $_FILES['fotostruktural']['name'];
        $lokasi = $_FILES['fotostruktural']['tmp_name'];
        move_uploaded_file($lokasi, "../../pictures/foto_profil_ukm/".$nama);
        $sql = "INSERT INTO profilukm (nama_ukm,fotostruktural,nomorhp,alamat_lengkap) VALUES('$_POST[nama_ukm]','$nama','$_POST[nomorhp]','$_POST[alamat_lengkap]')";
        $insert = $koneksi->query($sql);
        if ($insert == true) {
            echo "<script>alert('Data profil UKM telah ditambah');</script>";
            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=profilukm'>";   
        } else {
            echo "<script>alert('Data profil UKM gagal ditambahkan');</script>";
            echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=profilukm'>";   
        }
}
?>