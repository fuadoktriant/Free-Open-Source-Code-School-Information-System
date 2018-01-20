<?php
include "../include/config.php";

$idlama = $_POST['idlama'];
$id =$_POST['id'];
$nama = ucwords(strtolower($_POST['nama']));
$alamat = ucwords(strtolower($_POST['alamat']));
$nis = $_POST['nis'];
$password = $_POST['password'];

if($password == "*****"){
$pass = "";
}else{
$pass = ", password = md5($password)";
}


$hajar = mysql_query("UPDATE wali_murid SET idwali_murid = '$id', nama = '$nama' $pass , alamat = '$alamat' WHERE idwali_murid = '$idlama'");
$query = mysql_query("UPDATE wali_murid_has_siswa set idSiswa = '$nis', idwali_murid = '$id' WHERE idwali_murid = '$idlama'");
?>
<script>document.location.href="lihat_wali.php"</script>