<?php
include "../include/config.php";

$kelas =$_POST['kelas'];
$pelajaran = $_POST['pelajaran'];
$hari = $_POST['hari'];
$jam = "$_POST[jammulai]:$_POST[menitmulai] - $_POST[jamakhir]:$_POST[menitakhir] ";
$guru = $_POST['guru'];

//mengambil id kelas
$kls = mysql_fetch_array(mysql_query("SELECT idRuang_Kelas FROM ruang_kelas WHERE nama = '$kelas'"));

//mengambil id mata pelajaran
$plj = mysql_fetch_array(mysql_query("SELECT idmata_pelajaran FROM mata_pelajaran WHERE nama = '$pelajaran'"));

$gr = mysql_fetch_array(mysql_query("SELECT idGuru FROM guru WHERE nama = '$guru'"));

$hajar = mysql_query("INSERT INTO mata_pelajaran_has_ruang_kelas VALUES('$plj[idmata_pelajaran]','$kls[idRuang_Kelas]','$hari','$jam')");

$bos = mysql_query("INSERT INTO guru_has_mata_pelajaran VALUES ('$gr[idGuru]','$plj[idmata_pelajaran]','$kls[idRuang_Kelas]')");
if(!$hajar || !$bos){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="input_jadwal.php";
</script><?php
}else{
?>
<script>document.location.href="lihat_jadwal.php"</script><?php
}
?>