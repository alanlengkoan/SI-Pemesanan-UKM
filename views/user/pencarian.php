<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<?php 
$semuadata = array();
$keyword   = $_GET["keyword"];
$ambil     = $koneksi->query("SELECT * FROM produk WHERE nama_produk LIKE '%$keyword%' OR deskripsi_produk LIKE '%$keyword'");
while ($pecah = $ambil->fetch_assoc())
{
    $semuadata[]=$pecah;
}
?>

<div class="container">
    <h3>Hasil pencarian : <?php echo $keyword ?></h3>

    <?php if (empty($semuadata)): ?>
    <div class="alert alert-danger">Pencarian <strong><?php echo $keyword ?></strong> tidak ditemukan </div>
    <?php endif ?>
    <div class="row">
        <?php foreach ($semuadata as $key => $value): ?>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="../../foto_produk/<?php echo $value["foto_produk"] ?>" alt="" class="img-responsive">
                <div class="caption">
                    <h3><?php echo $value["nama_produk"] ?></h3>
                    <h5>Rp. <?php echo number_format($value['harga_produk']) ?></h5>
                    <a href="beli.php?id=<?php echo $value["id_produk"]; ?>" class="btn btn-primary">Beli</a>
                    <a href="detail.php?id=<?php echo $value["id_produk"]; ?>" class="btn btn-default">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>