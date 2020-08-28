<h2>Data Pelanggan </h2>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM tb_user"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama']; ?></td>
                <td><?php echo $pecah['email']; ?></td>
                <td><?php echo $pecah['telepon']; ?></td>
                <td>
                    <a href="index.php?halaman=hapuspelanggan&id=<?php echo $pecah['id_user'] ?>" class="btn btn-danger">hapus</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>