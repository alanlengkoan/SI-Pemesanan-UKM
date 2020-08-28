<?php include_once '../../configs/koneksi.php'; ?>
<html>
<head>
	<title>CETAK PRINT DATA DARI LAPORAN PEMBELIAN</title>
</head>
<body>
 
	<center>
		<h2>DATA LAPORAN BARANG</h2>
		<h4>DATA PEMBELIAN</h4>
	</center>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal</th>
			<th>Nama Produk</th>
			<th width="5%">Jumlah</th>
			<th>Status Pembelian</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"SELECT pembelian.*, tb_user.*, tb_user.nama as nama_pelanggan, produk.*, pembelian_produk.* FROM pembelian_produk LEFT JOIN pembelian ON pembelian_produk.id_pembelian = pembelian.id_pembelian LEFT JOIN tb_user ON pembelian.id_pelanggan = tb_user.id_user LEFT JOIN produk ON pembelian_produk.id_produk = produk.id_produk");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['nama_pelanggan']; ?></td>
			<td><?= $data['tanggal_pembelian']; ?></td>
			<td><?= $data['nama_produk']; ?></td>
			<td><?= $data['jumlah']; ?></td>
			<td><?= $data['status_pembelian']; ?></td>
		</tr>
		<?php } ?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>