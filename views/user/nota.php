<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<section class="konten">
    <div class="container">

        <?php
            $sql   = "SELECT * FROM pembelian INNER JOIN tb_user ON pembelian.id_pelanggan = tb_user.id_user WHERE pembelian.id_pembelian = '$_GET[id]' ";
            $ambil = $koneksi->query($sql);
            $detail = $ambil->fetch_assoc();

            //mendapatkan id_pelanggan yang beli
            $idpelangganyangbeli = $detail["id_pelanggan"];

            //mendapatkan id_pelanggan yang login
            $idpelangganyanglogin = $_SESSION["pelanggan"]["id_user"];
            
            if ($idpelangganyangbeli !== $idpelangganyanglogin)
            {
                echo "<script>alert('jangan nakal');</script>";
                echo "<script>location='riwayat.php';</script>";
                exit;
            }
        ?>

        <!-- nota disini dicopas saja dari nota yang ada di Admin -->
        <div class="row" id="cetak-kesimpulan">
            <h2>Detail Pembelian</h2>

            <div class="col-md-4">
                <h3>Pembelian</h3>
                <strong>No. Pembelian: <?php echo $detail['id_pembelian'] ?></strong><br>
                Tanggal: <?php echo $detail['tanggal_pembelian']; ?><br>
                Total: Rp. <?php echo number_format($detail['total_pembelian']) ?>
            </div>
            <div class="col-md-4">
                <h3>Pelanggan</h3>
                <strong><?php echo $detail['nama']; ?></strong><br>
                <p>
                    <?php echo $detail['telepon']; ?> <br>
                    <?php echo $detail['email']; ?>
                </p>
            </div>
            <div class="col-md-4">
                <h3>Pengiriman</h3>
                <strong><?php echo $detail['nama_kota']; ?></strong><br>
                Ongkos Kirim Rp. <?php echo number_format($detail['tarif']); ?><br>
                Alamat: <?php echo $detail['alamat_pengiriman'] ?>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Berat</th>
                        <th>Jumlah</th>
                        <th>Subberat</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1; ?>
                    <?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
                    <?php while ($pecah=$ambil->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah['nama'];?></td>
                        <td>Rp. <?php echo number_format ($pecah['harga']);?></td>
                        <td><?php echo $pecah['berat']; ?>Gr.</td>
                        <td><?php echo $pecah['jumlah'];?></td>
                        <td><?php echo $pecah['subberat'];?>Gr.</td>
                        <td>Rp. <?php echo number_format ($pecah['subharga']) ;?></td>

                        </td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info">
                        <p>
                            Silahkan melakukan pembayaran Rp. <?= number_format ($detail["total_pembelian"]); ?> ke <br>
                            <strong>BANK MANDIRI 455-6779-85756 AN. Suriani</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" onclick="cetakContent('cetak-kesimpulan');" class="btn btn-default"> <i class="fa fa-print"></i> Cetak</button>
</section>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>

<!-- untuk cetak kesimpulan -->
  <script>
  function cetakContent(bagian) {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(bagian).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
  }
  </script>