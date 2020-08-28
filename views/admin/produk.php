<h2> Data Produk </h2>
<br><br>

<a href="index.php?halaman=tambahproduk" class="btn btn-primary fa fa-plus fa-lg"> Tambah Data</a>
<br><br>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Berat</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    <tbody>
        <?php
        $nomor = 1;
        $ambil  = $koneksi->query("SELECT * FROM produk ORDER BY nama_produk");
        while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $pecah['nama_produk']; ?></td>
                <td><?= $pecah['harga_produk']; ?></td>
                <td><?= $pecah['berat_produk']; ?></td>
                <td>
                    <img src="../../pictures/foto_produk/<?= $pecah['foto_produk']; ?>" width="100">
                </td>
                <td>
                    <a href="index.php?halaman=hapusproduk&id=<?= $pecah['id_produk']; ?>" class="btn-danger btn fa fa-remove fa-lg "> Hapus</a>
                    <a href="index.php?halaman=ubahproduk&id=<?= $pecah['id_produk']; ?>" class="btn btn-warning fa fa-edit fa-lg"> Ubah</a>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>