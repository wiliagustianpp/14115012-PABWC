<HTML>
<HEAD>
<title>Tampil Buku Tamu</title>
</HEAD>
<BODY>
<h1>Tampil Buku Tamu MySQL</h1>
<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("minggu9",$conn);
$hasil = mysql_query("select * from bukutamu",$conn);
$jumlah = mysql_num_rows($hasil);
echo "<center>Daftar Pengunjung</center>";
echo "Jumlah pengunjung : $jumlah";
$a=1;
while($baris = mysql_fetch_array($hasil))
{
echo "<br>";
echo $a;
echo "<br>";
echo "Nama : ";
echo $baris[0];
echo "<br>";
echo "Email : ";
echo $baris[1];
echo "<br>";
echo "Komentar : ";
echo $baris[2];
$a++;
}
?>
</BODY>
</HTML>