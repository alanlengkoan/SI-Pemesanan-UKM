<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<?php
$id_pembelian = $_GET["id"];
$sql    = "SELECT * FROM pembayaran LEFT JOIN pembelian ON pembayaran.id_pembelian=pembelian.id_pembelian WHERE pembelian.id_pembelian='$id_pembelian'";
$ambil  = $koneksi->query($sql);
$detbay = $ambil->fetch_assoc();

//jika belum ada data pembayaran
if (empty($detbay))
{
    echo "<script>alert('Belum ada data pembayaran')</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}

//jika data pelanggan yangh bayar tidak sesuai dengan yang login
if ($_SESSION["pelanggan"]['id_user'] !== $detbay["id_pelanggan"])
{
    echo "<script>alert('Anda tidak berhak melihat pembayaran orang lain')</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}
?>

<div class="container">
    <h2>Lihat Pembayaran</h2>
    <div class="row">
        <div class="col-md-6">
            <table class="table">
                <tr>
                    <th>Nama</th>
                    <td><?php echo $detbay["nama"] ?></td>
                </tr>
                <tr>
                    <th>Bank</th>
                    <td><?php echo $detbay["bank"] ?></td>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <td><?php echo $detbay["tanggal"] ?></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>Rp. <?php echo number_format ($detbay["jumlah"]) ?></td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <img src="bukti_pembayaran/<?php echo $detbay["bukti"] ?>" alt="" class="img-responsive">
        </div>
    </div>
</div>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>