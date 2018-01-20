<?php
include "../include/config.php";

$id =$_POST['id'];
$nama = ucwords(strtolower($_POST['nama']));
$alamat = ucwords(strtolower($_POST['alamat']));
$nis = $_POST['nis'];
$password = $_POST['password'];

$hajar = mysql_query("INSERT INTO wali_murid VALUES('$id','$nama','$alamat',md5('$password'))");
$query = mysql_query("INSERT INTO wali_murid_has_siswa VALUES('$id','$nis')");
if(!$hajar){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="input_wali.php";
</script><?php
}else{
?>
<script>document.location.href="lihat_wali.php"</script><?php
}
//Copyright © 2011 Andi Sholihin
?>