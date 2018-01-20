<?php
include "../../include/conf_user.php";

$kelas = $_GET['kelas'];
$idsiswa = $_GET['nis'];
$idmapel = $_GET['pelajaran'];
$semester = $_GET['semester'];
$tahun = $_GET['tahun'];

$query = mysql_query("DELETE FROM siswa_has_mata_pelajaran WHERE idSiswa = '$idsiswa' AND idmata_pelajaran = '$idmapel' AND semester = '$semester' AND thn_ajaran = '$tahun'");
?>
<script>document.location.href="rincian_nilai.php?nis=<?php echo $idsiswa;?>&kelas=<?php echo $kelas?>"</script>