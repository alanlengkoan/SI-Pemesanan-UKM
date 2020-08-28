<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<!-- untuk konten -->
<section class="konten">
    <div class="container">
        <h1>Keranjang Belanja</h1>
        <hr>
        <table class="table table=bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subharga</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                $totalbelanja = 0;
                foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
                    // menampilkan produk yang sedang diperulangkan berdasarkan id produk
                    $sql   = "SELECT * FROM produk WHERE id_produk='$id_produk'";
                    $ambil = $koneksi->query($sql);
                    $pecah = $ambil->fetch_assoc();
                    $subharga = $pecah["harga_produk"] * $jumlah;
                ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $pecah["nama_produk"]; ?></td>
                    <td>Rp. <?= number_format($pecah["harga_produk"]); ?></td>
                    <td><?= $jumlah; ?></td>
                    <td>Rp. <?= number_format($subharga); ?></td>
                </tr>
                <?php $totalbelanja += $subharga; ?>
                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4">Total Belanja</td>
                    <td> Rp. <?php echo isset($totalbelanja) ? number_format($totalbelanja) : "0" ?></td>
                </tr>
            </tfoot>
        </table>

        <form method="post">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" value="<?php echo $_SESSION["pelanggan"]['nama'] ?>" class="form-control" readonly="readonly" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" value="<?php echo $_SESSION["pelanggan"]['telepon'] ?>" class="form-control" readonly="readonly" />
                    </div>
                </div>
                <div class="col-md-4">
                    <select class="form-control" name="id_ongkir">
                        <option value="Pilih Ongkos Kirim"></option>
                        <?php
                        $ambil = $koneksi->query("SELECT * FROM ongkir");
                        while ($perongkir = $ambil->fetch_assoc()) { ?>
                        <option value="<?php echo $perongkir["id_ongkir"] ?>">
                        <?php echo $perongkir['nama_kota'] ?>
                        Rp. <?php echo number_format($perongkir['tarif']) ?>
                        </option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat Lengkap Pengiriman</label>
                <textarea class="form-control" name="alamat_pengiriman" placeholder="masukkan alamat lengkap pengiriman (termasuk kode pos)"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="checkout">Checkout</button>
        </form>
    </div>
</section>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>

<?php 
if (isset($_POST["checkout"])) 
{
    $id_pelanggan      = $_SESSION["pelanggan"]["id_user"];
    $id_ongkir         = $_POST["id_ongkir"];
    $tanggal_pembelian = date("Y-m-d");
    $alamat_pengiriman = $_POST["alamat_pengiriman"];

    $ambil       = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir = '$id_ongkir'");
    $arrayongkir = $ambil->fetch_assoc();

    $nama_kota   = $arrayongkir['nama_kota'];
    $tarif       = $arrayongkir['tarif'];

    $total_pembelian = $totalbelanja + $tarif;  

    // menyimpan data ke tabel pembelian
    $sql = "INSERT INTO pembelian (id_pelanggan, id_ongkir, tanggal_pembelian, total_pembelian, nama_kota, tarif, alamat_pengiriman) VALUES ('$id_pelanggan', '$id_ongkir', '$tanggal_pembelian', '$total_pembelian', '$nama_kota', '$tarif', '$alamat_pengiriman') ";
    $koneksi->query($sql);

    // mendapatkan id _pembelian barusan terjadi
    $id_pembelian_barusan = $koneksi->insert_id;
    
    foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) 
    {
    //mendapatkan data produk berdasarkan id produk
    $ambil     = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
    $perproduk = $ambil->fetch_assoc();

    $nama  = $perproduk['nama_produk'];
    $harga = $perproduk['harga_produk'];
    $berat = $perproduk['berat_produk'];

    $subberat = $perproduk['berat_produk'] * $jumlah;
    $subharga = $perproduk['harga_produk'] * $jumlah;
    
    $sql2 = "INSERT INTO pembelian_produk(id_pembelian, id_produk, nama, harga, berat, subberat, subharga, jumlah) VALUES ('$id_pembelian_barusan','$id_produk', '$nama','$harga','$berat','$subberat','$subharga','$jumlah') ";
    $koneksi->query($sql2);

    //skrip update stok
    $sql3 = "UPDATE produk SET stok_produk = stok_produk - $jumlah WHERE id_produk='$id_produk'";
    $koneksi->query($sql3);
    }

    // mengkosongkan keranjang belanja
    unset($_SESSION["keranjang"]);

    // tampilan dialihkan ke halaman nota, nota dari pembelian yang barusan
    echo "<script>alert('pembelian sukses');</script>";
    echo "<script>location='nota.php?id=$id_pembelian_barusan';</script>";

}
?> 