<?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN tb_user ON pembelian.id_pelanggan = tb_user.id_user WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<h2>Detail Pembelian</h2>
<strong><?php echo $detail['nama']; ?></strong>
<br />
<div class="row">
    <div class="col-md-4">
        <h3>Pembelian</h3>
        <p>
            tanggal:<?php echo $detail['tanggal_pembelian']; ?> <br>
            total: Rp. <?php echo number_format($detail['total_pembelian']); ?> <br>
            Status: <?php echo $detail["status_pembelian"]; ?>
        </p>
    </div>
    <div class="col-md-4">
        <h3>Pelanggan</h3>
        <strong><?php echo  $detail['nama']; ?></strong> <br>
        <p> 
            <?php echo $detail['telepon']; ?> <br>
            <?php echo $detail['email']; ?>
        </p>
    </div>
    <div class="col-md-4">
        <h3>Pengiriman</h3>
        <strong><?php echo $detail ["nama_kota"]; ?></strong> <br>
        <p>
            Tarif: Rp. <?php echo number_format($detail["tarif"]); ?><br>
            Alamat: <?php echo $detail["alamat_pengiriman"]; ?>
        </p>
    </div>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor=1; ?>
        <?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
        <?php while ($pecah=$ambil->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $pecah['nama_produk'];?></td>
            <td>Rp. <?php echo number_format($pecah['harga_produk']);?></td>
            <td><?php echo $pecah['jumlah'];?></td>
            <td>
                <?php echo number_format($pecah['harga_produk']*$pecah['jumlah']); ?>
            </td>
        </tr>
        <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>

