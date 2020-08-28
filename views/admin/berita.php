<h2>Berita UKM Desa Tritiro</h2><br><br>
<a href="index.php?halaman=tambahberita" class="btn btn-primary fa fa-plus fa-lg"> Tambah Data</a>
<br> <br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Tanggal</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil  = $koneksi->query("SELECT * FROM berita"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['judul']; ?></td>
                <td><?php echo $pecah['isi']; ?></td>
                <td><?php echo $pecah['tanggal']; ?></td>
                <td>
                    <img src="../../pictures/foto_berita/<?php echo $pecah['foto']; ?>" width="100">
                </td>
                <td>
                    <a href="index.php?halaman=hapusberita&id=<?php echo $pecah['id_berita']; ?>" class="btn-danger btn fa fa-remove fa-lg"> Hapus</a>
                    <a href="index.php?halaman=ubahberita&id=<?php echo $pecah['id_berita']; ?>" class="btn btn-warning fa fa-edit fa-lg"> Ubah</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>

    </tbody>
</table>