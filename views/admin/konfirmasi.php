<?
mysql_connect("localhost", "root", "komentar");
$result = mysql_query("select * from komentar order by id DESC");
while ($komentar = mysql_fetch_row($result)) {
    echo "<hr/>";
    echo "<b>$komentar[1]</b><br>";
    echo "email : <i>$komentar[2]</i><br>";
    echo "$komentar[3]<br>";
}
?>
<?
$nama = $_POST['nama'];
$email = $_POST['email'];
$komentar = $_POST['komentar'];
$result = mysql_query("insert into konfirmasi values('null','$nama','$email','$komentar')");
if ($result) {
    echo "Data Berhasil Dikirim..<br>";
}
echo "<br><a href='tampil.php'>Lihat Komentar</a>";
?>