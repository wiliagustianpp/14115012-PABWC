<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$cari=$_POST['cari'];
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn, "pabw");
$hasil=mysqli_query($conn,"select * from mahasiswa where
nama like '%$cari%'");
$jumlah=mysqli_num_rows($hasil);
echo "<br>";
echo "Ditemukan: $jumlah";
echo "<br><br>";
while($baris=mysqli_fetch_array($hasil))
{
echo "NRP : ";
echo $baris[0];
echo "<br>";
echo "Nama : ";
echo $baris[1];
echo "<br>";
echo "Jurusan :";
echo $baris[2];
echo "<br><br>";
}
?>
<br>
<a href="tampilan.html">Kembali</a>
</body>
</html>

