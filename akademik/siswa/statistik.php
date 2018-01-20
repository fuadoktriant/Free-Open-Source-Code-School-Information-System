<?php
include "../../include/conf_user.php";
// membaca nim dari parameter
if($_SESSION['hak']=="siswa"){
$nis = $_SESSION['user'];
}else{
$id = mysql_fetch_array(mysql_query("SELECT idSiswa FROM wali_murid_has_siswa WHERE idwali_murid = '$_SESSION[user]'"));
$nis = $id['idSiswa'];
}
//query untuk menampilkan NIM dan Nama Mahasiswa berdasarkan NIM
$query = "SELECT * FROM siswa WHERE idSiswa = '$nis'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<?php
echo "<div align=center><h1>Statistik Nilai Siswa</h1>";
echo "<table>";
echo "<tr><td>No. Induk</td><td>:</td><td>".$data['idSiswa']."</td></tr>";
echo "<tr><td>Nama Siswa</td><td>:</td><td>".$data['nama']."</td></tr>";
echo "</table><hr /><br />";

// menampilkan image grafik IP dari mahasiswa berdasarkan NIS
echo "<img src='stat.php?nis=$nis'></div><br /><br />";
?>
