<?php
include "../include/config.php";
$idmapel = $_GET['mapel'];
$idkelas = $_GET['kelas'];
$nama = $_GET['nama'];

$hajar = mysql_query("DELETE FROM mata_pelajaran_has_ruang_kelas WHERE idmata_pelajaran ='$idmapel' AND idRuang_Kelas = '$idkelas'");
$bos = mysql_query("DELETE FROM guru_has_mata_pelajaran WHERE idmata_pelajaran ='$idmapel' AND idRuang_Kelas = '$idkelas'");
?>
<script>document.location.href="lihat_jadwal.php"</script>