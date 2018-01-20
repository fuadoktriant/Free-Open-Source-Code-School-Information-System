<?php
include "../include/config.php";
$idmapel = $_POST['idmapel'];
$idkelas = $_POST['idkelas'];

$kelas =$_POST['kelas'];
$pelajaran = $_POST['pelajaran'];
$hari = $_POST['hari'];
$jam = "$_POST[jammulai]:$_POST[menitmulai] - $_POST[jamakhir]:$_POST[menitakhir]";
$guru = $_POST['guru'];

//mengambil id kelas
$kls = mysql_fetch_array(mysql_query("SELECT idRuang_Kelas FROM ruang_kelas WHERE nama = '$kelas'"));

//mengambil id mata pelajaran
$plj = mysql_fetch_array(mysql_query("SELECT idmata_pelajaran FROM mata_pelajaran WHERE nama = '$pelajaran'"));

$gr = mysql_fetch_array(mysql_query("SELECT idGuru FROM guru WHERE nama = '$guru'"));

$hajar = mysql_query("UPDATE mata_pelajaran_has_ruang_kelas SET idmata_pelajaran = '$plj[idmata_pelajaran]', idRuang_Kelas = '$kls[idRuang_Kelas]', hari = '$hari', jampelajaran = '$jam' WHERE idmata_pelajaran = '$idmapel' AND idRuang_Kelas = '$idkelas' ");

$bos = mysql_query("UPDATE guru_has_mata_pelajaran SET idGuru = '$gr[idGuru]', idmata_pelajaran = '$plj[idmata_pelajaran]', idRuang_Kelas = '$kls[idRuang_Kelas]' WHERE idmata_pelajaran = '$idmapel' AND idRuang_Kelas = '$idkelas' ");
if(!$hajar || !$bos){
?>
<script>
alert('Terjadi kesalahan sistem saat input data! <?php mysql_error() ?>');
document.location.href="edit_jadwal.php?mapel=<?php echo $idmapel."&kelas=".$idkelas ?>";
</script><?php
}else{
?>
<script>document.location.href="lihat_jadwal.php?kelas=<?php echo $kelas ?>"</script><?php
}
//Copyright © 2011 Andi Sholihin
?>