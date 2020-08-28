<?php
session_start();
//mendapatkan iD produk dari URL
$id_produk = $_GET['id'];

//Jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya di +1
if(isset ($_SESSION['keranjang'][$id_produk]))
{
    $_SESSION['keranjang'][$id_produk]+=1;
}
//selain itu belum ada di keranjang, maka dianggap beli 1
else {
    $_SESSION['keranjang'][$id_produk] = 1;
}

//larikan ke halaman keranjang
echo "<script>alert('produk telah masuk dikeranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>