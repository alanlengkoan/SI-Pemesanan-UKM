<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<?php
// JIKA TIDAK ADA SESSION PELANGGAN (BELUM LOGIN)
if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
    echo "<script> alert ('silahkan login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}
?>

<!-- untuk riwayat -->
<section class="riwayat">
    <div class="container">
        
        <h3>Riwayat Belanja <?php echo $_SESSION["pelanggan"]["nama"] ?></h3>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $nomor=1;
                //mendapatkan id pelanggan yang login dari session
                $id_pelanggan = $_SESSION["pelanggan"]['id_user'];
                $sql          = "SELECT * FROM pembelian WHERE id_pelanggan = '$id_pelanggan'";
                $ambil        = $koneksi->query($sql);
                while ($pecah = $ambil->fetch_assoc()) { 
                ?>
                <tr>
                    <td><?php echo $nomor++; ?></td>
                    <td><?php echo $pecah["tanggal_pembelian"] ?></td>
                    <td>
                        <?php echo $pecah["status_pembelian"] ?>
                        <br>
                        <?php if (!empty($pecah['resi_pengiriman'])) : ?>
                        Resi: <?php echo $pecah['resi_pengiriman']; ?>
                        <?php endif ?>
                    </td>
                    <td>Rp. <?php echo number_format($pecah["total_pembelian"]) ?></td>
                    <td>
                        <a href="nota.php?id=<?php echo $pecah["id_pembelian"] ?>" class="btn btn-info">Nota</a>
                        <?php if ($pecah['status_pembelian'] == "pending") { ?>
                            <a href="pembayaran.php?id=<?php echo $pecah["id_pembelian"]; ?>" class="btn btn-success"> input Pembayaran</a>
                        <?php } else { ?>
                            <a href="pembayaran_detail.php?id=<?php echo $pecah["id_pembelian"]; ?> " class="btn btn-warning">Lihat Pembayaran</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>