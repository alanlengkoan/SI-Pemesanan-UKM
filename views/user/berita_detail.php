<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<section class="konten">
    <div class="container">
        <h1>Berita UKM Desa Tritiro</h1>
        <?php 
        $id_berita = $_GET['id'];
        $sql       = "SELECT * FROM berita WHERE id_berita = '$id_berita' ";
        $query     = $koneksi->query($sql);
        $result    = $query->fetch_assoc();
        ?>
        <div class="row" width="1000" height="1500">
            <div class="col-md-40">
                <div class="thumbnail">
                    <div class="caption">
                        <h2><?php echo $result['judul']; ?></h2><br>
                        <h3><?php echo $result['isi']; ?></h3><br>
                        <h4><?php echo $result['tanggal']; ?></h4><br>
                        <img src="../../pictures/foto_berita/<?php echo $result['foto']; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>