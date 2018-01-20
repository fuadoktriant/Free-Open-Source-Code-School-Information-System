<?php
include "../include/config.php";

$nis =$_POST['nis'];
$nama = ucwords(strtolower($_POST['nama']));
$alamat = ucwords(strtolower($_POST['alamat']));
$kelas = $_POST['kelas'];
$password = $_POST['password'];

$hajar = mysql_query("INSERT INTO siswa VALUES('$nis','$nama','$alamat','$kelas',md5('$password'))");
if(!$hajar){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="input_siswa.php";
</script><?php
}else{
?>
<script>document.location.href="lihat_siswa.php"</script><?php
}
//Copyright © 2011 Andi Sholihin
?>