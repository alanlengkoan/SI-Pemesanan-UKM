<!-- untuk head -->
<?php include_once 'atribut/head.php' ?>

<!-- untuk menu -->
<?php include_once 'atribut/menu.php' ?>

<?php
//JIKA TIDAK ADA SESSION PELANGGAN (BELUM LOGIN)
if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
    echo "<script> alert ('silahkan login');</script>";
    echo "<script>location='login.php';</script>";
    exit();
}

//mendapatkan id_pembelian dari URL
$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem = $ambil->fetch_assoc();

// mendapatkan id_pelanggan yang beli
$id_pelanggan_beli = $detpem["id_pelanggan"];
// mendapatkan id_pelanggan yang login
$id_pelanggan_login = $_SESSION["pelanggan"]["id_user"];

if ($id_pelanggan_login !== $id_pelanggan_beli)
{
    echo "<script> alert ('Jangan nakal');</script>";
    echo "<script>location='riwayat.php';</script>";
    exit();
}
?>
<div class="container">
    <h2>Konfirmasi Pembayaran</h2>
    <p>Kirim bukti pembayaran Anda disini</p>
    <div class="alert alert-info">Total pembelian Anda<strong>Rp. <?php echo number_format($detpem["total_pembelian"]) ?></strong></div>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Penyetor</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label>Bank</label>
            <input type="text" class="form-control" name="bank">
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="jumlah" min="1">
        </div>
        <div class="form-group">
            <label>Foto Bukti</label>
            <input type="file" class="form-control" name="bukti">
            <p class="text-danger">foto bukti harus JPG maksimal 2MB</p>
        </div>
        <button class="btn btn-primary" name="kirim">Kirim</button>
    </form>
</div>

<!-- untuk foot -->
<?php include_once 'atribut/foot.php' ?>

<?php
//jika ada tombol kirim
if(isset($_POST["kirim"]))
{
    //upload dulu foto bukti
    $namabukti   = $_FILES["bukti"]["name"];
    $lokasibukti = $_FILES["bukti"]["tmp_name"];
    move_uploaded_file($lokasibukti, "../../pictures/bukti_pembayaran/$namabukti");

    $nama    = $_POST["nama"];
    $bank    = $_POST["bank"];
    $jumlah  = $_POST["jumlah"];
    $tanggal = date ("Y-m-d");

    //simpan pembayaran
    $sql = "INSERT INTO pembayaran(id_pembelian, nama, bank, jumlah, tanggal, bukti) VALUES ('$idpem','$nama','$bank','$jumlah','$tanggal','$namabukti')";
    $koneksi->query($sql);

    //update data pembelian dari pending menjadi sudah mengirim pembayaran
    $koneksi->query("UPDATE pembelian SET status_pembelian = 'sudah kirim pembayaran' WHERE id_pembelian = '$idpem'");

    echo "<script> alert ('Terima Kasih sudah mengirimkan bukti pembayaran');</script>";
    echo "<script>location='riwayat.php';</script>";

}
?>