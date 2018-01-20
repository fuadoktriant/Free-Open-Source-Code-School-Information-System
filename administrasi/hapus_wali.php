<?php
include "../include/config.php";

$id = $_GET['id'];

$query = mysql_query("DELETE FROM wali_murid WHERE idwali_murid = '$id'");
$sql = mysql_query("DELETE FROM wali_murid_has_siswa WHERE idwali_murid='$id'");
?>
<script>document.location.href="lihat_wali.php"</script>