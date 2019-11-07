<HTML>
<HEAD>
<title>Simpan Buku Tamu</title>
</HEAD>
<BODY>
<h1>Data Mahasiswa</h1>

<?php
$conn=mysqli_connect ("localhost","root","")
or die ("koneksi gagal");
mysqli_select_db($conn, "pabw");

$nrp = $_POST["nrp"];
$nama = $_POST["nama"];
$jurusan = $_POST["jurusan"];

$sqlstr="insert into mahasiswa (nrp,nama,jurusan)
values ('$nrp','$nama','$jurusan')";
$hasil = mysqli_query($conn,$sqlstr);

echo "Nama : $nama <br>";
echo "NRP  : $nrp <br>";
echo "Jurusan : $jurusan <br>";
echo "<b>Data berhasil disimpan!<b>";
?>
 <br><br>
<a href="tampilan.html">
<input type="button" name="kembali" value="kembali"></a>
</BODY>
</HTML>