<h2>Data Pembelian</h2>
<br><br>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Status Pembelian</th>
            <th>Total</th>
            <th>Bukti Pembayaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php
        $sql = "SELECT pembelian.*, pembayaran.*, tb_user.* FROM pembelian 
        INNER JOIN tb_user ON pembelian.id_pelanggan = tb_user.id_user
        INNER JOIN pembayaran ON pembelian.id_pembelian = pembayaran.id_pembelian";
        $ambil = $koneksi->query($sql);
        ?>
        <?php while ($pecah = $ambil->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $pecah['nama']; ?></td>
                <td><?php echo $pecah['tanggal_pembelian']; ?></td>
                <td><?php echo $pecah['status_pembelian']; ?></td>
                <td><?php echo $pecah['total_pembelian']; ?></td>
                <td><img src="../../pictures/bukti_pembayaran/<?php echo $pecah['bukti']; ?>" width="400" height="400"></td>
                <td>
                    <a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info">detail</a>
                    <?php if ($pecah['status_pembelian']=="sudah kirim pembayaran"): ?>
                        <a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_pembelian'] ?>" class="btn btn-success">Pembayaran</a>
                    <?php endif ?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>