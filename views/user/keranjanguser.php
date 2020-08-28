<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<!-- untuk konten -->
<section class="konten">
    <div class="container">
        <h1>Keranjang Belanja Pelanggan</h1>
        <div class="row" width="40" height="35">

            <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
            <?php while ($perproduk = $ambil->fetch_assoc()) { ?>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="../../pictures/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
                    <div class="caption">
                        <h3><?php echo $perproduk['nama_produk']; ?></h3>
                        <h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
                        <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
                        <a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>