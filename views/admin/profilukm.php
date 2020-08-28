<h2> Profil UKM Desa Tritiro</h2>

<br>
<br>
<a href="index.php?halaman=tambahprofilukm" class="btn btn-primary fa fa-plus fa-lg"> Tambah Data</a>
<br><br>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama UKM</th>
        <th>Foto Struktural</th>
        <th>Nomor Hp</th>
        <th>Alamat Lengkap</th>
        <th>Aksi</th>
    </tr>
    <!-- </thead> -->
    <tbody>
        <?php
        $nomor = 1;
        $ambil  = $koneksi->query("SELECT * FROM profilukm ORDER BY nama_ukm");
        while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $pecah['nama_ukm']; ?></td>
                <td><img src="../../pictures/foto_profil_ukm/<?= $pecah['fotostruktural']; ?>" alt="" width="400" height="400"></td>
                <td><?= $pecah['nomorhp']; ?></td>
                <td><?= $pecah['alamat_lengkap']; ?></td>
                <td>
                    <a href="index.php?halaman=hapusprofilukm&id=<?= $pecah['id_ukm']; ?>" class="btn-danger btn fa fa-remove fa-lg"> Hapus</a>
                    <a href="index.php?halaman=ubahprofilukm&id=<?= $pecah['id_ukm']; ?>" class="btn btn-warning fa fa-edit fa-lg"> Ubah</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>