<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<!-- untuk konten -->
<section class="konten">
    <div class="container">
        <h1>Profil UKM Desa Tritiro</h1>
        <div class="row" width="1000" height="1500">

            <?php $ambil = $koneksi->query("SELECT * FROM profilukm"); ?>
            <?php while ($perprofil = $ambil->fetch_assoc()) { ?>
            <div class="col-md-50">
                <div class="thumbnail">
                    <div class="caption">
                        <h3><?php echo $perprofil['nama_ukm']; ?></h3>
                        <img src="../../pictures/foto_profil_ukm/<?php echo $perprofil['fotostruktural']; ?>" alt="">
                        <h3><?php echo $perprofil['nomorhp']; ?></h3>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>