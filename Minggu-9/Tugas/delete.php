<?php
$conn = mysqli_connect("localhost","root","")
or die ("Koneksi gagal");
mysqli_select_db($conn, "pabw");
$delete=$_POST['delete'];
$sql = "DELETE FROM mahasiswa ".
       "WHERE nrp = $delete" ;
$hapusdata = mysqli_query( $conn, $sql);

echo "<script type='text/javascript'>
alert('Data berhasil dihapus.');
history.back(self);
</script>";

?>